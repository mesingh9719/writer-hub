<?php

namespace App\Livewire\Pages\Posts;

use App\Models\Post;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostsList extends Component
{
    use WithPagination;
    
    // Filters
    public $search = '';
    public $statusFilter = 'all';
    public $categoryFilter = '';
    
    // Counters
    public $totalPosts;
    public $publishedCount;
    public $draftsCount;
    public $scheduledCount;
    
    // Delete confirmation
    public $showDeleteModal = false;
    public $postToDelete = null;
    
    // Lifecycle hooks
    protected $queryString = [
        'search' => ['except' => ''],
        'statusFilter' => ['except' => 'all'],
        'categoryFilter' => ['except' => ''],
    ];
    
    public function updatedSearch()
    {
        $this->resetPage();
    }
    
    public function updatedStatusFilter()
    {
        $this->resetPage();
    }
    
    public function updatedCategoryFilter()
    {
        $this->resetPage();
    }
    
    public function mount()
    {
        $this->updatePostCounts();
    }
    
    // Delete post methods
    public function confirmDelete($postId)
    {
        $this->postToDelete = $postId;
        $this->showDeleteModal = true;
    }
    
    public function deletePost()
    {
        if ($this->postToDelete) {
            $post = Post::find($this->postToDelete);
            
            if ($post && $post->user_id === Auth::id()) {
                // Delete featured image if exists
                if ($post->featured_image) {
                    \Storage::disk('public')->delete($post->featured_image);
                }
                
                $post->delete();
                
                // Update counts after deletion
                $this->updatePostCounts();
                
                session()->flash('message', 'Post deleted successfully!');
            }
        }
        
        $this->showDeleteModal = false;
        $this->postToDelete = null;
    }
    
    // Helper methods
    protected function updatePostCounts()
    {
        $userId = Auth::id();
        
        $this->totalPosts = Post::where('user_id', $userId)->count();
        $this->publishedCount = Post::where('user_id', $userId)->where('is_published', true)->count();
        $this->draftsCount = Post::where('user_id', $userId)->where('is_draft', true)->count();
        $this->scheduledCount = Post::where('user_id', $userId)
            ->where('is_published', false)
            ->where('is_draft', false)
            ->whereNotNull('scheduled_at')
            ->where('scheduled_at', '>', now())
            ->count();
    }
    
    // Render
    public function render()
    {
        $userId = Auth::id();
        
        // Start with base query
        $query = Post::where('user_id', $userId);
        
        // Apply status filter
        if ($this->statusFilter === 'published') {
            $query->where('is_published', true);
        } elseif ($this->statusFilter === 'draft') {
            $query->where('is_draft', true);
        } elseif ($this->statusFilter === 'scheduled') {
            $query->where('is_published', false)
                ->where('is_draft', false)
                ->whereNotNull('scheduled_at')
                ->where('scheduled_at', '>', now());
        }
        
        // Apply search filter
        if (!empty($this->search)) {
            $query->where(function($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                  ->orWhere('body', 'like', '%' . $this->search . '%');
            });
        }
        
        // Apply category filter
        if (!empty($this->categoryFilter)) {
            $query->whereHas('categories', function ($q) {
                $q->where('categories.id', $this->categoryFilter);
            });
        }
        
        // Get posts with pagination and eager load relationships
        $posts = $query->with(['categories'])
            ->orderBy('created_at', 'desc')
            ->paginate(9);
        
        // Get all categories for filter dropdown
        $categories = Category::all();
        
        return view('livewire.pages.posts.posts-list', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
}