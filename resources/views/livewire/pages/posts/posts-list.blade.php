<div>
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
        <div>
            <h1 class="text-2xl font-bold">Your Posts</h1>
            <p class="text-sm text-gray-600 dark:text-gray-400">Manage all your content in one place</p>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-3">
            <div class="relative">
                <input 
                    type="text" 
                    wire:model.live.debounce.300ms="search" 
                    placeholder="Search posts..." 
                    class="pl-10 pr-4 py-2 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all"
                >
                <div class="absolute left-3 top-2.5 text-gray-500 dark:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            
            <a 
                href="{{ route('posts.create') }}" 
                class="flex items-center justify-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                New Post
            </a>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow mb-6">
        <div class="p-4 md:p-5 flex flex-wrap gap-4">
            <!-- Status Filter -->
            <div class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                <button 
                    wire:click="$set('statusFilter', 'all')" 
                    class="inline-flex items-center px-4 py-2 rounded-lg {{ $statusFilter === 'all' ? 'bg-blue-500 text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }}"
                >
                    All ({{ $totalPosts }})
                </button>
                <button 
                    wire:click="$set('statusFilter', 'published')" 
                    class="inline-flex items-center px-4 py-2 rounded-lg {{ $statusFilter === 'published' ? 'bg-blue-500 text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }}"
                >
                    <span class="inline-block w-2 h-2 mr-2 bg-green-500 rounded-full"></span>
                    Published ({{ $publishedCount }})
                </button>
                <button 
                    wire:click="$set('statusFilter', 'draft')" 
                    class="inline-flex items-center px-4 py-2 rounded-lg {{ $statusFilter === 'draft' ? 'bg-blue-500 text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }}"
                >
                    <span class="inline-block w-2 h-2 mr-2 bg-gray-500 rounded-full"></span>
                    Drafts ({{ $draftsCount }})
                </button>
                <button 
                    wire:click="$set('statusFilter', 'scheduled')" 
                    class="inline-flex items-center px-4 py-2 rounded-lg {{ $statusFilter === 'scheduled' ? 'bg-blue-500 text-white' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }}"
                >
                    <span class="inline-block w-2 h-2 mr-2 bg-yellow-500 rounded-full"></span>
                    Scheduled ({{ $scheduledCount }})
                </button>
            </div>

            <!-- Category Filter -->
            <div class="ml-auto">
                <select 
                    wire:model.live="categoryFilter" 
                    class="rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all text-sm"
                >
                    <option value="">All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <!-- Loading Indicator -->
    <div wire:loading class="flex justify-center my-6">
        <div class="animate-spin rounded-full h-8 w-8 border-t-2 border-b-2 border-blue-500"></div>
    </div>

    <!-- Posts List -->
    <div wire:loading.remove>
        @if(count($posts) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $post)
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden hover:shadow-md transition-shadow">
                        <!-- Featured Image -->
                        <div class="relative h-48 bg-gray-200 dark:bg-gray-700">
                            @if($post->featured_image)
                                <img 
                                    src="{{ asset('storage/' . $post->featured_image) }}" 
                                    alt="{{ $post->title }}" 
                                    class="w-full h-full object-cover"
                                >
                            @else
                                <div class="flex items-center justify-center h-full text-gray-500 dark:text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            @endif
                            
                            <!-- Status Badge -->
                            <div class="absolute top-3 left-3">
                                @if($post->is_published)
                                    <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full">Published</span>
                                @elseif($post->is_draft)
                                    <span class="bg-gray-500 text-white text-xs px-2 py-1 rounded-full">Draft</span>
                                @elseif($post->scheduled_at)
                                    <span class="bg-yellow-500 text-white text-xs px-2 py-1 rounded-full">Scheduled</span>
                                @endif
                            </div>
                            
                            <!-- Visibility Badge -->
                            <div class="absolute top-3 right-3">
                                @if($post->visibility === 'private')
                                    <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">Private</span>
                                @elseif($post->visibility === 'password_protected')
                                    <span class="bg-purple-500 text-white text-xs px-2 py-1 rounded-full">Protected</span>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2 line-clamp-1">{{ $post->title }}</h3>
                            
                            <!-- Post Meta -->
                            <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 mb-3">
                                <span>
                                    {{ $post->created_at->format('M d, Y') }}
                                </span>
                                <span class="mx-2">•</span>
                                <span>
                                    {{ $post->scheduled_at ? 'Publishes: ' . $post->scheduled_at->format('M d, Y') : '' }}
                                </span>
                            </div>
                            
                            <!-- Categories -->
                            @if(count($post->categories) > 0)
                                <div class="flex flex-wrap gap-1 mb-3">
                                    @foreach($post->categories as $category)
                                        <span class="bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 text-xs px-2 py-1 rounded">
                                            {{ $category->name }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif
                            
                            <!-- Excerpt -->
                            <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-2 mb-4">
                                {{ Str::limit(strip_tags($post->body), 120) }}
                            </p>
                            
                            <!-- Action Buttons -->
                            <div class="flex items-center justify-between mt-4">
                                <div class="flex space-x-2">
                                    <a 
                                        href="{{ route('posts.edit', $post) }}" 
                                        class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300"
                                        title="Edit post"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                    <a 
                                        href="{{ url('/posts/' . $post->slug) }}" 
                                        target="_blank"
                                        class="text-green-600 hover:text-green-800 dark:text-green-400 dark:hover:text-green-300"
                                        title="View post"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                </div>
                                
                                <button 
                                    wire:click="confirmDelete({{ $post->id }})" 
                                    class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300"
                                    title="Delete post"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <!-- Pagination -->
            <div class="mt-6">
                {{ $posts->links() }}
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-16 bg-white dark:bg-gray-800 rounded-lg shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
                <h3 class="mt-4 text-lg font-medium">No posts found</h3>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                    @if($search)
                        We couldn't find any posts matching "{{ $search }}".
                    @elseif($categoryFilter)
                        No posts in this category yet.
                    @elseif($statusFilter !== 'all')
                        No {{ $statusFilter }} posts yet.
                    @else
                        Start creating your first post by clicking the "New Post" button.
                    @endif
                </p>
                <div class="mt-6">
                    <a 
                        href="{{ route('posts.create') }}" 
                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Create New Post
                    </a>
                </div>
            </div>
        @endif
    </div>

    <!-- Delete Confirmation Modal -->
    <div
        x-data="{ open: @entangle('showDeleteModal') }"
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 overflow-y-auto"
        x-cloak
    >
        <div class="flex items-center justify-center min-h-screen px-4">
            <!-- Overlay -->
            <div 
                x-show="open" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-75"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-75"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 bg-black opacity-75"
            ></div>

            <!-- Modal -->
            <div 
                x-show="open"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-4"
                class="relative bg-white dark:bg-gray-800 rounded-lg max-w-md w-full p-6 shadow-lg"
            >
                <div class="flex items-center justify-center mb-4 text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </div>
                
                <h3 class="text-xl font-bold mb-2 text-center">Delete Post</h3>
                
                <p class="text-center text-gray-600 dark:text-gray-400 mb-6">
                    Are you sure you want to delete this post? This action cannot be undone.
                </p>
                
                <div class="flex justify-center space-x-4">
                    <button
                        wire:click="$set('showDeleteModal', false)"
                        class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors"
                    >
                        Cancel
                    </button>
                    <button
                        wire:click="deletePost"
                        class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors"
                    >
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>