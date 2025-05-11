<div class="bg-white dark:bg-gray-800 shadow rounded-lg">
    <!-- Dashboard Header -->
    <div class="px-6 py-5 border-b border-gray-200 dark:border-gray-700">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Dashboard</h1>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Monitor your writing activity and engagement</p>
    </div>

    <!-- Stats Overview -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-6">
        <!-- Total Posts -->
        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4 flex flex-col">
            <span class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide">Total Posts</span>
            <div class="mt-2 flex items-center">
                <span class="text-3xl font-bold text-gray-900 dark:text-white">24</span>
                <span class="ml-2 px-2 py-0.5 text-xs rounded-full bg-green-100 text-green-800 dark:bg-green-800 dark:text-green-100">
                    +3 this week
                </span>
            </div>
        </div>

        <!-- Total Views -->
        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4 flex flex-col">
            <span class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide">Total Views</span>
            <div class="mt-2 flex items-center">
                <span class="text-3xl font-bold text-gray-900 dark:text-white">1,842</span>
                <span class="ml-2 px-2 py-0.5 text-xs rounded-full bg-green-100 text-green-800 dark:bg-green-800 dark:text-green-100">
                    +28% this month
                </span>
            </div>
        </div>

        <!-- Comments -->
        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4 flex flex-col">
            <span class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide">Comments</span>
            <div class="mt-2 flex items-center">
                <span class="text-3xl font-bold text-gray-900 dark:text-white">97</span>
                <span class="ml-2 px-2 py-0.5 text-xs rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-800 dark:text-yellow-100">
                    +5 new
                </span>
            </div>
        </div>

        <!-- Subscribers -->
        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4 flex flex-col">
            <span class="text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wide">Subscribers</span>
            <div class="mt-2 flex items-center">
                <span class="text-3xl font-bold text-gray-900 dark:text-white">156</span>
                <span class="ml-2 px-2 py-0.5 text-xs rounded-full bg-green-100 text-green-800 dark:bg-green-800 dark:text-green-100">
                    +12 this week
                </span>
            </div>
        </div>
    </div>

    <!-- Posts & Visitors Charts -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-6 border-t border-gray-200 dark:border-gray-700">
        <!-- Posts Chart -->
        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
            <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Post Activity</h2>
            <div class="h-64 bg-white dark:bg-gray-800 rounded-lg p-2">
                <!-- Placeholder for chart - would be rendered with JS in production -->
                <div class="w-full h-full flex items-center justify-center">
                    <div class="text-center">
                        <div class="h-48 flex items-end justify-around px-2 space-x-1">
                            <div class="w-6 bg-blue-500 rounded-t" style="height: 25%"></div>
                            <div class="w-6 bg-blue-500 rounded-t" style="height: 40%"></div>
                            <div class="w-6 bg-blue-500 rounded-t" style="height: 35%"></div>
                            <div class="w-6 bg-blue-500 rounded-t" style="height: 60%"></div>
                            <div class="w-6 bg-blue-500 rounded-t" style="height: 45%"></div>
                            <div class="w-6 bg-blue-500 rounded-t" style="height: 75%"></div>
                            <div class="w-6 bg-blue-500 rounded-t" style="height: 65%"></div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 mt-2">Last 7 days</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Visitors Chart -->
        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
            <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Visitors Overview</h2>
            <div class="h-64 bg-white dark:bg-gray-800 rounded-lg p-2">
                <!-- Placeholder for chart - would be rendered with JS in production -->
                <div class="w-full h-full flex items-center justify-center">
                    <div class="text-center w-full">
                        <div class="relative h-48">
                            <div class="absolute bottom-0 left-0 right-0">
                                <svg class="w-full" height="180" viewBox="0 0 400 180" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0,150 C50,120 100,180 150,100 C200,20 250,80 300,60 C350,40 400,90 400,90 L400,180 L0,180 Z" fill="rgba(59, 130, 246, 0.2)" />
                                    <path d="M0,150 C50,120 100,180 150,100 C200,20 250,80 300,60 C350,40 400,90 400,90" fill="none" stroke="#3b82f6" stroke-width="2" />
                                </svg>
                            </div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 mt-2">Last 30 days</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Posts & Post Status -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-6 border-t border-gray-200 dark:border-gray-700">
        <!-- Recent Posts -->
        <div>
            <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Recent Posts</h2>
            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg divide-y divide-gray-200 dark:divide-gray-600">
                <div class="p-4 flex justify-between items-center">
                    <div>
                        <h3 class="font-medium text-gray-900 dark:text-white">The Art of Creative Writing</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Published 2 days ago • 125 views</p>
                    </div>
                    <div class="flex space-x-2">
                        <button class="p-1 rounded-full text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </button>
                        <button class="p-1 rounded-full text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="p-4 flex justify-between items-center">
                    <div>
                        <h3 class="font-medium text-gray-900 dark:text-white">Finding Your Voice as a Writer</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Published 5 days ago • 237 views</p>
                    </div>
                    <div class="flex space-x-2">
                        <button class="p-1 rounded-full text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </button>
                        <button class="p-1 rounded-full text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="p-4 flex justify-between items-center">
                    <div>
                        <h3 class="font-medium text-gray-900 dark:text-white">10 Writing Prompts for Fiction</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Published 1 week ago • 342 views</p>
                    </div>
                    <div class="flex space-x-2">
                        <button class="p-1 rounded-full text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </button>
                        <button class="p-1 rounded-full text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-4 text-right">
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">
                    View all posts →
                </a>
            </div>
        </div>

        <!-- Post Status -->
        <div>
            <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Post Status</h2>
            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                <div class="mb-6">
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Published</span>
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">18</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2 dark:bg-gray-600">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 75%"></div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Drafts</span>
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">4</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2 dark:bg-gray-600">
                        <div class="bg-yellow-500 h-2 rounded-full" style="width: 17%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Scheduled</span>
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-300">2</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2 dark:bg-gray-600">
                        <div class="bg-blue-500 h-2 rounded-full" style="width: 8%"></div>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <button class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:bg-blue-500 dark:hover:bg-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Create New Post
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Engagement Metrics & Recent Comments -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-6 border-t border-gray-200 dark:border-gray-700">
        <!-- Engagement Metrics -->
        <div>
            <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Engagement Metrics</h2>
            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white dark:bg-gray-800 p-3 rounded-lg text-center">
                        <div class="text-xl font-bold text-gray-900 dark:text-white">4.7</div>
                        <div class="text-xs text-gray-500 dark:text-gray-400">Average rating</div>
                        <div class="mt-1 flex justify-center">
                            <div class="flex text-yellow-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-3 rounded-lg text-center">
                        <div class="text-xl font-bold text-gray-900 dark:text-white">3.2</div>
                        <div class="text-xs text-gray-500 dark:text-gray-400">Average comments per post</div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-3 rounded-lg text-center">
                        <div class="text-xl font-bold text-gray-900 dark:text-white">2:15</div>
                        <div class="text-xs text-gray-500 dark:text-gray-400">Average time on page</div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-3 rounded-lg text-center">
                        <div class="text-xl font-bold text-gray-900 dark:text-white">18%</div>
                        <div class="text-xs text-gray-500 dark:text-gray-400">Sharing rate</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Comments -->
        <div>
            <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Recent Comments</h2>
            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg divide-y divide-gray-200 dark:divide-gray-600">
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-semibold">
                                JS
                            </div>
                        </div>
                        <div class="ml-3 flex-1">
                            <div class="text-sm font-medium text-gray-900 dark:text-white">John Smith</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">
                                This article changed my perspective on creative writing. Thank you!
                            </div>
                            <div class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                                On "The Art of Creative Writing" • 1 day ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white font-semibold">
                                AT
                            </div>
                        </div>
                        <div class="ml-3 flex-1">
                            <div class="text-sm font-medium text-gray-900 dark:text-white">Amy Thompson</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">
                                I'm going to try prompt #7 tonight. Can't wait to see where it takes me!
                            </div>
                            <div class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                                On "10 Writing Prompts for Fiction" • 3 days ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 rounded-full bg-purple-500 flex items-center justify-center text-white font-semibold">
                                RK
                            </div>
                        </div>
                        <div class="ml-3 flex-1">
                            <div class="text-sm font-medium text-gray-900 dark:text-white">Ray Kendall</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">
                                Could you write more about finding time to write while working full-time?
                            </div>
                            <div class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                                On "Finding Your Voice as a Writer" • 4 days ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 text-right">
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">
                    View all comments →
                </a>
            </div>
        </div>
    </div>
</div>