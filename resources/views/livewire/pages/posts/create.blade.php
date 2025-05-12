<!-- resources/views/livewire/pages/posts/create.blade.php -->
<div>
    <div class="mb-6">
        <h1 class="text-2xl font-bold">Create New Post</h1>
        <p class="text-sm text-gray-600 dark:text-gray-400">Share your story with the world</p>
    </div>

    <form wire:submit="savePost" class="space-y-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Content Area -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium mb-1">Title</label>
                    <input 
                        type="text" 
                        id="title" 
                        wire:model="title" 
                        wire:change="generateSlug"
                        class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all"
                        placeholder="Enter your post title"
                        required
                    >
                    @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Slug -->
                <div>
                    <label for="slug" class="block text-sm font-medium mb-1">Slug</label>
                    <div class="flex items-center">
                        <input 
                            type="text" 
                            id="slug" 
                            wire:model="slug" 
                            class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all"
                            placeholder="your-post-slug"
                        >
                        <button 
                            type="button"
                            wire:click="regenerateSlug"
                            class="ml-2 px-3 py-2 bg-gray-200 dark:bg-gray-700 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors"
                            title="Regenerate slug from title"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </button>
                    </div>
                    @error('slug') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Featured Image -->
                <div>
                    <label class="block text-sm font-medium mb-1">Featured Image</label>
                    <div 
                        x-data="{ uploading: false, progress: 0 }" 
                        x-on:livewire-upload-start="uploading = true"
                        x-on:livewire-upload-finish="uploading = false"
                        x-on:livewire-upload-error="uploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                        class="border-2 border-dashed border-gray-300 dark:border-gray-700 rounded-lg p-6 text-center"
                    >
                        @if($featuredImage)
                            @if(is_string($featuredImage))
                                <div class="relative mb-4">
                                    <img src="{{ asset('storage/' . $featuredImage) }}" alt="Featured Image" class="mx-auto max-h-60 rounded-lg">
                                    <button 
                                        type="button" 
                                        wire:click="removeFeaturedImage" 
                                        class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-1 hover:bg-red-600"
                                        title="Remove image"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            @else
                                <div class="relative mb-4">
                                    <img src="{{ $featuredImage->temporaryUrl() }}" alt="Featured Image Preview" class="mx-auto max-h-60 rounded-lg">
                                    <button 
                                        type="button" 
                                        wire:click="removeFeaturedImage" 
                                        class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-1 hover:bg-red-600"
                                        title="Remove image"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            @endif
                        @endif

                        <label for="featured-image" class="cursor-pointer block">
                            <div class="flex flex-col items-center justify-center py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <p class="mt-2 text-sm font-medium">
                                    {{ $featuredImage ? 'Replace image' : 'Upload featured image' }}
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">
                                    JPG, PNG, GIF up to 2MB
                                </p>
                            </div>
                        </label>

                        <input 
                            type="file" 
                            id="featured-image" 
                            wire:model="featuredImage" 
                            class="hidden" 
                            accept="image/*"
                        >

                        <!-- Progress bar for upload -->
                        <div x-show="uploading" class="mt-3">
                            <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div 
                                    class="h-full bg-blue-500 rounded-full" 
                                    x-bind:style="`width: ${progress}%`"
                                ></div>
                            </div>
                        </div>
                    </div>
                    @error('featuredImage') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <!-- Content Editor -->
                <div>
                    <label for="content" class="block text-sm font-medium mb-1">Content</label>
                    <div wire:ignore>
                        <textarea 
                            id="content" 
                            wire:model="content" 
                            x-data="{ 
                                editor: null,
                                init() {
                                    // Replace with your preferred editor initialization
                                    // This is a simple example using a basic textarea
                                    const el = document.getElementById('content');
                                    el.addEventListener('input', function() {
                                        @this.set('content', el.value);
                                    });
                                }
                            }"
                            x-init="init()"
                            class="w-full rounded-lg border border-gray-300 dark:border-gray-700 dark:placeholder-gray-300 bg-white dark:bg-gray-800 px-3 py-2 min-h-72 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all"
                            placeholder="Write your story here..."
                        ></textarea>
                    </div>
                    @error('content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Publishing Options -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4">
                    <h3 class="font-medium text-lg mb-3">Publishing</h3>
                    
                    <div class="space-y-4">
                        <!-- Status -->
                        <div>
                            <label class="text-sm font-medium">Status</label>
                            <div class="mt-2 space-y-2">
                                <label class="inline-flex items-center">
                                    <input type="radio" wire:model="status" value="draft" class="form-radio h-4 w-4 text-blue-600">
                                    <span class="ml-2 text-sm">Draft</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" wire:model="status" value="published" class="form-radio h-4 w-4 text-blue-600">
                                    <span class="ml-2 text-sm">Published</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" wire:model="status" value="scheduled" class="form-radio h-4 w-4 text-blue-600">
                                    <span class="ml-2 text-sm">Scheduled</span>
                                </label>
                            </div>
                        </div>

                        <!-- Schedule Date (shown only when scheduled is selected) -->
                        <div x-data="{}" x-show="$wire.status === 'scheduled'" x-transition>
                            <label for="schedule_date" class="block text-sm font-medium mb-1">Publish on</label>
                            <input 
                                type="datetime-local" 
                                id="schedule_date" 
                                wire:model="scheduleDate"
                                class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all"
                            >
                            @error('scheduleDate') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        
                        <!-- Visibility -->
                        <div>
                            <label for="visibility" class="block text-sm font-medium mb-1">Visibility</label>
                            <select 
                                id="visibility" 
                                wire:model="visibility"
                                class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all"
                            >
                                <option value="public">Public</option>
                                <option value="private">Private</option>
                                <option value="password_protected">Password Protected</option>
                            </select>
                        </div>
                        
                        <!-- Password field (shown only when password_protected is selected) -->
                        <div x-data="{}" x-show="$wire.visibility === 'password_protected'" x-transition>
                            <label for="post_password" class="block text-sm font-medium mb-1">Password</label>
                            <input 
                                type="password" 
                                id="post_password" 
                                wire:model="postPassword"
                                class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all"
                                placeholder="Enter password"
                            >
                            @error('postPassword') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        
                        <!-- Allow Comments -->
                        <div class="flex items-center">
                            <input 
                                type="checkbox" 
                                id="allow_comments" 
                                wire:model="allowComments"
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                            >
                            <label for="allow_comments" class="ml-2 block text-sm">
                                Allow comments
                            </label>
                        </div>
                    </div>
                </div>
                
                <!-- Categories -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4">
                    <h3 class="font-medium text-lg mb-3">Categories</h3>
                    <div class="space-y-2 max-h-60 overflow-y-auto">
                        @foreach($categories as $category)
                            <label class="inline-flex items-center block">
                                <input 
                                    type="checkbox" 
                                    wire:model="selectedCategories" 
                                    value="{{ $category->id }}"
                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                                >
                                <span class="ml-2 text-sm">{{ $category->name }}</span>
                            </label>
                        @endforeach
                    </div>
                    @error('selectedCategories') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                
                <!-- Tags -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4">
                    <h3 class="font-medium text-lg mb-3">Tags</h3>
                    <div
                        x-data="{
                            tagInput: '',
                            tags: @entangle('tags'),
                            addTag() {
                                if (this.tagInput.trim() !== '' && !this.tags.includes(this.tagInput.trim())) {
                                    this.tags.push(this.tagInput.trim());
                                    this.tagInput = '';
                                }
                            },
                            removeTag(index) {
                                this.tags.splice(index, 1);
                            }
                        }"
                    >
                        <div class="flex items-center mb-2">
                            <input 
                                type="text" 
                                x-model="tagInput" 
                                @keydown.enter.prevent="addTag"
                                placeholder="Add tag and press Enter"
                                class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all"
                            >
                            <button 
                                type="button" 
                                @click="addTag"
                                class="ml-2 p-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                            </button>
                        </div>
                        
                        <div class="flex flex-wrap gap-2">
                            <template x-for="(tag, index) in tags" :key="index">
                                <div class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-100 px-3 py-1 rounded-full text-sm flex items-center">
                                    <span x-text="tag"></span>
                                    <button 
                                        type="button" 
                                        @click="removeTag(index)" 
                                        class="ml-1 text-blue-500 dark:text-blue-300 hover:text-blue-800 dark:hover:text-blue-100"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </template>
                        </div>
                    </div>
                    @error('tags') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                
                <!-- Action Buttons -->
                <div class="flex items-center justify-end space-x-3">
                    <button 
                        type="button"
                        wire:click="cancel" 
                        class="px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors"
                    >
                        Cancel
                    </button>
                    <button 
                        type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors"
                    >
                        Save Post
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>