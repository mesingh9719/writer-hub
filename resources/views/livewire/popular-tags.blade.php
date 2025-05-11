<section class="py-16 bg-gray-50 dark:bg-gray-800 rounded-2xl shadow-sm mb-8">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-10">Popular Tags</h2>

        <div class="flex flex-wrap gap-3">
            @foreach($popularTags as $tag)
                <a href="{{ route('tags.show', $tag) }}" 
                  class="px-4 py-2 bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-full text-sm hover:bg-indigo-50 dark:hover:bg-indigo-900 hover:border-indigo-300 dark:hover:border-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400 transition">
                    #{{ $tag->name }}
                    <span class="text-xs text-gray-500 dark:text-gray-400 ml-1">({{ $tag->posts_count }})</span>
                </a>
            @endforeach
        </div>
    </div>
</section>