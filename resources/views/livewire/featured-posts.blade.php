<section class="py-16 bg-white dark:bg-gray-800 rounded-2xl shadow-sm mb-8">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white">Featured Stories</h2>
            <a href="{{ route('posts.featured') }}" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 font-medium flex items-center">
                View all
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredPosts as $post)
                <div class="bg-gray-50 dark:bg-gray-700 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                    <div class="h-48 bg-gray-200 dark:bg-gray-600 relative">
                        @if($post->cover_image)
                            <img src="{{ $post->cover_image }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white opacity-75" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        @endif
                        <div class="absolute top-4 left-4">
                           @foreach ($post->categories as $category)
                           <span class="px-3 py-1 bg-indigo-600 text-white text-xs font-medium rounded-full">{{ $category->name }}</span>
                           @endforeach
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">
                            <a href="{{ route('posts.show', 1) }}" class="hover:text-indigo-600 dark:hover:text-indigo-400">
                                {{ $post->title }}
                            </a>
                        </h3>
                        <p class="text-gray-700 dark:text-gray-300 text-sm mb-4 line-clamp-3">{{ $post->excerpt }}</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                {{-- <img src="{{ $post->author->profile_photo_url }}" alt="{{ $post->author->name }}" class="h-8 w-8 rounded-full mr-2"> --}}
                                <span class="text-sm text-gray-600 dark:text-gray-400">{{ $post->user->name }}</span>
                            </div>
                            <span class="text-xs text-gray-500 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                        <div class="flex items-center mt-4 text-sm text-gray-500 dark:text-gray-400">
                            <div class="flex items-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                </svg>
                                {{ $post->views_count }} views
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                </svg>
                                {{ $post->comments_count }} comments
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>