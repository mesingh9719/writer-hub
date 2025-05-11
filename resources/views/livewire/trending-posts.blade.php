<section class="py-16 bg-white dark:bg-gray-800 rounded-2xl shadow-sm mb-8">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white">Trending Now</h2>
            <a href="{{ route('posts.trending') }}" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 font-medium flex items-center">
                View all
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>

        <div class="overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($trendingPosts as $post)
                    <div class="bg-gray-50 dark:bg-gray-700 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                        <div class="p-6">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-pink-100 dark:bg-pink-900 text-pink-800 dark:text-pink-200">
                                    Trending
                                </span>
                                @foreach ($post->categories as $category)
                                <span class="text-xs text-gray-500 dark:text-gray-400">{{ $category->name }}</span>
                                @endforeach
                            </div>
                            <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">
                                <a href="{{ route('posts.show', $post) }}" class="hover:text-indigo-600 dark:hover:text-indigo-400">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <p class="text-gray-700 dark:text-gray-300 text-sm mb-4 line-clamp-2">{{ $post->excerpt }}</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    {{-- <img src="{{ $post->author->profile_photo_url }}" alt="{{ $post->author->name }}" class="h-8 w-8 rounded-full mr-2"> --}}
                                    <span class="text-sm text-gray-600 dark:text-gray-400">{{ $post->user->name }}</span>
                                </div>
                                <div class="flex items-center text-gray-500 dark:text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $post->likes_count }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>