<div class="bg-white dark:bg-gray-800 shadow rounded-lg">
    <!-- Page Header -->
    <div class="px-6 py-5 border-b border-gray-200 dark:border-gray-700 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Create New Post</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Share your thoughts with the world</p>
        </div>
        <div>
            <a wire:navigate href="/dashboard" class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 dark:border-gray-600 dark:text-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5 text-gray-500 dark:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Dashboard
            </a>
        </div>
    </div>

    <!-- Post Form -->
    <div class="p-6">
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            
            <!-- Post Title -->
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
                <input type="text" name="title" id="title" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Enter post title" required>
            </div>
            
            <!-- Post Excerpt -->
            <div class="mb-6">
                <label for="excerpt" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Excerpt
                    <span class="text-xs text-gray-500 dark:text-gray-400 font-normal ml-1">(Brief summary that appears in previews)</span>
                </label>
                <textarea name="excerpt" id="excerpt" rows="2" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Enter a brief summary of your post"></textarea>
            </div>
            
            <!-- Cover Image -->
            <div class="mb-6">
                <label for="cover_image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Cover Image</label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md dark:border-gray-600">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600 dark:text-gray-400">
                            <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 dark:bg-gray-700 dark:text-blue-400 dark:hover:text-blue-300">
                                <span>Upload a file</span>
                                <input id="file-upload" name="cover_image" type="file" class="sr-only" accept="image/*">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500 dark:text-gray-400">
                            PNG, JPG, GIF up to 2MB
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Categories -->
            <div class="mb-6">
                <label for="category_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Category</label>
                <select id="category_id" name="category_id" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <option value="">Select a category</option>
                    <option value="1">Creative Writing</option>
                    <option value="2">Writing Tips</option>
                    <option value="3">Storytelling</option>
                    <option value="4">Poetry</option>
                    <option value="5">Publishing</option>
                    <option value="6">Book Reviews</option>
                </select>
            </div>
            
            <!-- Tags -->
            <div class="mb-6">
                <label for="tags" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tags</label>
                <div class="mt-1">
                    <input type="text" name="tags" id="tags" class="focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Enter tags separated by commas">
                </div>
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Separate tags with commas (e.g., fiction, writing tips, inspiration)</p>
            </div>
            
            <!-- Content Tools -->
            <div class="mb-2 border border-gray-300 rounded-t-md dark:border-gray-600">
                <div class="flex items-center border-b border-gray-300 dark:border-gray-600 p-2 bg-gray-50 dark:bg-gray-700 rounded-t-md">
                    <button type="button" class="inline-flex items-center p-1 border border-transparent rounded-sm text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                    <button type="button" class="ml-2 inline-flex items-center p-1 border border-transparent rounded-sm text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </button>
                    <span class="mx-2 text-gray-300 dark:text-gray-600">|</span>
                    <button type="button" class="inline-flex items-center p-1 border border-transparent rounded-sm text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <button type="button" class="ml-2 inline-flex items-center p-1 border border-transparent rounded-sm text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </button>
                    <span class="mx-2 text-gray-300 dark:text-gray-600">|</span>
                    <button type="button" class="inline-flex items-center p-1 border border-transparent rounded-sm text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                        </svg>
                    </button>
                    <button type="button" class="ml-2 inline-flex items-center p-1 border border-transparent rounded-sm text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Content Editor -->
            <div class="mb-6">
                <textarea name="content" id="content" rows="12" class="border-t-0 rounded-t-none focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Write your post content here..."></textarea>
                <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 mt-2">
                    <div>Supports Markdown formatting</div>
                    <div>Word count: <span id="word-count">0</span></div>
                </div>
            </div>
            
            <!-- Publish Options -->
            <div class="mb-6 bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Publishing Options</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Status -->
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Status</label>
                        <select id="status" name="status" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                            <option value="scheduled">Scheduled</option>
                        </select>
                    </div>
                    
                    <!-- Schedule Date -->
                    <div>
                        <label for="scheduled_at" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Publish Date</label>
                        <input type="datetime-local" name="scheduled_at" id="scheduled_at" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    </div>
                    
                    <!-- Visibility -->
                    <div>
                        <label for="visibility" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Visibility</label>
                        <select id="visibility" name="visibility" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option value="public">Public</option>
                            <option value="private">Private</option>
                            <option value="members">Members Only</option>
                        </select>
                    </div>
                    
                    <!-- Featured -->
                    <div class="flex items-center justify-between">
                        <div>
                            <label for="featured" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Featured Post</label>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Display this post prominently on the homepage</p>
                        </div>
                        <label class="flex items-center cursor-pointer">
                            <div class="relative">
                                <input type="checkbox" id="featured" name="featured" class="sr-only">
                                <div class="w-10 h-5 bg-gray-200 rounded-full shadow-inner dark:bg-gray-600"></div>
                                <div class="dot absolute w-5 h-5 bg-white rounded-full shadow left-0 -top-0 transition dark:bg-gray-400"></div>
                            </div>
                        </label>
                    </div>
                    
                    <!-- Allow Comments -->
                    <div class="flex items-center justify-between">
                        <div>
                            <label for="allow_comments" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Allow Comments</label>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Let readers comment on this post</p>
                        </div>
                        <label class="flex items-center cursor-pointer">
                            <div class="relative">
                                <input type="checkbox" id="allow_comments" name="allow_comments" class="sr-only" checked>
                                <div class="w-10 h-5 bg-gray-200 rounded-full shadow-inner dark:bg-gray-600"></div>
                                <div class="dot absolute w-5 h-5 bg-white rounded-full shadow left-0 -top-0 transition dark:bg-gray-400 transform translate-x-5"></div>
                            </div>
                        </label>
                    </div>
                    
                    <!-- Meta Description -->
                    <div class="md:col-span-2">
                        <label for="meta_description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Meta Description
                            <span class="text-xs text-gray-500 dark:text-gray-400 font-normal ml-1">(For SEO)</span>
                        </label>
                        <textarea name="meta_description" id="meta_description" rows="2" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white" placeholder="Brief description for search engines"></textarea>
                        <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Recommended: 150-160 characters for optimal SEO</p>
                    </div>
                </div>
            </div>
            
            <!-- Form Actions -->
            <div class="flex items-center justify-end space-x-3">
                <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 dark:border-gray-600 dark:text-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600">
                    Save as Draft
                </button>
                <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 dark:border-gray-600 dark:text-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600">
                    Preview
                </button>
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600">
                    Publish
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Simple word count functionality
    document.addEventListener('DOMContentLoaded', function() {
        const contentField = document.getElementById('content');
        const wordCountDisplay = document.getElementById('word-count');
        
        if (contentField && wordCountDisplay) {
            contentField.addEventListener('input', function() {
                const content = this.value.trim();
                const wordCount = content ? content.split(/\s+/).length : 0;
                wordCountDisplay.textContent = wordCount;
            });
        }
        
        // Toggle switch styling
        const toggles = document.querySelectorAll('input[type="checkbox"]');
        toggles.forEach(toggle => {
            toggle.addEventListener('change', function() {
                const dot = this.parentNode.querySelector('.dot');
                if (this.checked) {
                    dot.classList.add('transform', 'translate-x-5');
                } else {
                    dot.classList.remove('transform', 'translate-x-5');
                }
            });
        });
    });
</script>