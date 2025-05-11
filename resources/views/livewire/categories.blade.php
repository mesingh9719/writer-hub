<section class="py-16 bg-gray-50 dark:bg-gray-800 rounded-2xl shadow-sm mb-8">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-10">Explore Topics</h2>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
            @foreach($categories as $category)
                <a href="{{ route('categories.show', 1) }}"
                   class="group flex flex-col items-center p-4 bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600 rounded-xl hover:border-indigo-300 dark:hover:border-indigo-500 hover:shadow-md transition duration-300">
                    <div class="w-12 h-12 flex items-center justify-center bg-indigo-100 dark:bg-indigo-900 rounded-full mb-3">
                        <i class="text-indigo-600 dark:text-indigo-400"></i>
                    </div>
                    <span class="text-gray-800 dark:text-gray-200 font-medium group-hover:text-indigo-600 dark:group-hover:text-indigo-400">
                        {{ $category->name }}
                    </span>
                    <span class="text-xs text-gray-500 dark:text-gray-400 mt-1">
                        100 articles
                    </span>
                </a>
            @endforeach
        </div>
    </div>
</section>