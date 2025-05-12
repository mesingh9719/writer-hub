<?php

namespace App\Livewire\Pages\Posts;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    use WithFileUploads;

    // Post details
    public $title = '';
    public $slug = '';
    public $content = '';
    public $featuredImage;
    public $status = 'draft'; // draft, published, scheduled
    public $scheduleDate;
    public $visibility = 'public'; // public, private, password_protected
    public $postPassword;
    public $allowComments = true;
    
    // Categories and tags
    public $categories = [];
    public $selectedCategories = [];
    public $tags = [];
    
    protected $rules = [
        'title' => 'required|min:3|max:255',
        'slug' => 'required|unique:posts,slug|max:255',
        'content' => 'required',
        'featuredImage' => 'nullable|image|max:2048', // Max 2MB
        'status' => 'required|in:draft,published,scheduled',
        'scheduleDate' => 'required_if:status,scheduled|nullable|date|after:now',
        'visibility' => 'required|in:public,private,password_protected',
        'postPassword' => 'required_if:visibility,password_protected',
        'selectedCategories' => 'array',
        'tags' => 'array',
    ];

    protected $messages = [
        'title.required' => 'Please enter a title for your post.',
        'slug.required' => 'The slug is required.',
        'slug.unique' => 'This slug is already in use. Please choose another one.',
        'content.required' => 'Please add some content to your post.',
        'featuredImage.image' => 'The file must be an image.',
        'featuredImage.max' => 'The image must not be larger than 2MB.',
        'scheduleDate.required_if' => 'Please set a date for when to publish this post.',
        'scheduleDate.after' => 'The scheduled date must be in the future.',
        'postPassword.required_if' => 'A password is required for password-protected posts.',
    ];

    public function mount()
    {
        $this->categories = Category::all();
        $this->scheduleDate = now()->addDay()->format('Y-m-d\TH:i');
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->title);
    }

    public function regenerateSlug()
    {
        $this->generateSlug();
    }

    public function removeFeaturedImage()
    {
        $this->featuredImage = null;
    }

    public function savePost()
    {
        $this->validate();

        // Create and save the post
        $post = new Post();
        $post->user_id = Auth::id();
        $post->title = $this->title;
        $post->slug = $this->slug;
        $post->body = $this->content;
        
        // Handle featured image
        if ($this->featuredImage) {
            $path = $this->featuredImage->store('featured-images', 'public');
            $post->featured_image = $path;
        }
        
        // Set status flags
        $post->is_published = $this->status === 'published' || ($this->status === 'scheduled' && now()->gte($this->scheduleDate));
        $post->is_draft = $this->status === 'draft';
        
        // Set additional data
        if ($this->status === 'scheduled' && !$post->is_published) {
            $post->scheduled_at = $this->scheduleDate;
        }
        
        // Store visibility and comment settings
        $post->visibility = $this->visibility;
        if ($this->visibility === 'password_protected') {
            $post->password = bcrypt($this->postPassword);
        }
        $post->allow_comments = $this->allowComments;
        
        // Save the post
        $post->save();
        
        // Attach categories
        if (!empty($this->selectedCategories)) {
            $post->categories()->attach($this->selectedCategories);
        }
        
        // Attach or create tags
        if (!empty($this->tags)) {
            $tagIds = [];
            foreach ($this->tags as $tagName) {
                $tag = Tag::firstOrCreate(['name' => $tagName]);
                $tagIds[] = $tag->id;
            }
            $post->tags()->attach($tagIds);
        }
        
        // Redirect to view the post or posts list
        session()->flash('message', 'Post created successfully!');
        return redirect()->route('posts.index');
    }

    public function cancel()
    {
        return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.pages.posts.create');
    }
}