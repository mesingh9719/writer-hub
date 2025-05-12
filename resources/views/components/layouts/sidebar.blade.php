<div class="hidden md:flex md:w-64 md:flex-col">
    <div class="flex-1 flex flex-col min-h-0 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center flex-shrink-0 px-4">
                <span class="text-lg font-semibold text-gray-900 dark:text-white">Dashboard</span>
            </div>
            <nav class="mt-5 flex-1 px-2 space-y-4">
                <!-- Main section -->
                <div>
                    <p class="px-3 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Main
                    </p>
                    <div class="mt-1 space-y-1">
                        <a href="{{ route('dashboard') }}" wire:navigate
                            class="{{ request()->routeIs('dashboard') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('dashboard') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                            </svg>
                            Dashboard
                        </a>
                    </div>
                </div>

                <!-- Content section -->
                <div>
                    <p class="px-3 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Content
                    </p>
                    <div class="mt-1 space-y-1">
                        <a href="{{ route('posts.index') }}" wire:navigate
                            class="{{ request()->routeIs('posts.*') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('posts.*') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                    clip-rule="evenodd" />
                            </svg>
                            Posts
                        </a>

                        <a href="{{ route('categories.index') }}"
                            class="{{ request()->routeIs('categories.*') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('categories.*') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd" />
                            </svg>
                            Categories
                        </a>

                        <a href="{{ route('tags.index') }}"
                            class="{{ request()->routeIs('tags.*') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('tags.*') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd" />
                            </svg>
                            Tags
                        </a>

                        <a href="{{ url('comments.index') }}"
                            class="{{ request()->routeIs('comments.*') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('comments.*') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                    clip-rule="evenodd" />
                            </svg>
                            Comments
                        </a>
                    </div>
                </div>

                <!-- Analytics section -->
                <div>
                    <p class="px-3 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Analytics
                    </p>
                    <div class="mt-1 space-y-1">
                        <a href="{{ url('analytics.overview') }}"
                            class="{{ request()->routeIs('analytics.overview') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('analytics.overview') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                            </svg>
                            Overview
                        </a>

                        <a href="{{ url('analytics.audience') }}"
                            class="{{ request()->routeIs('analytics.audience') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('analytics.audience') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                            </svg>
                            Audience
                        </a>
                    </div>
                </div>

                <!-- Account section -->
                <div>
                    <p class="px-3 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Account
                    </p>
                    <div class="mt-1 space-y-1">
                        <a href="{{ route('profile') }}"
                            class="{{ request()->routeIs('profile') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('profile') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg>
                            Profile
                        </a>

                        <a href="{{ route('settings') }}"
                            class="{{ request()->routeIs('settings') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('settings') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                    clip-rule="evenodd" />
                            </svg>
                            Settings
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <!-- User Profile in Sidebar -->
        <div class="border-t border-gray-200 dark:border-gray-700 p-4">
            @auth
                <div class="flex items-center">
                    <img class="h-9 w-9 rounded-full object-cover border border-gray-200 dark:border-gray-700"
                        src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-700 dark:text-gray-200">
                            {{ auth()->user()->name }}</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400 truncate">
                            {{ auth()->user()->email }}</p>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</div>

<!-- Mobile sidebar -->
<div class="md:hidden" x-data="{ sidebarOpen: false }">
    
    <!-- Sidebar panel -->
    <div x-show="sidebarOpen" x-transition:enter="transition ease-in-out duration-300 transform"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        class="relative flex-1 flex flex-col max-w-xs w-full bg-white dark:bg-gray-800 fixed inset-y-0 left-0 z-30">
        <div class="absolute top-0 right-0 -mr-12 pt-2">
            <button @click="sidebarOpen = false"
                class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                <span class="sr-only">Close sidebar</span>
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
            <div class="flex-shrink-0 flex items-center px-4">
                <span class="text-lg font-semibold text-gray-900 dark:text-white">Dashboard</span>
            </div>
            <nav class="mt-5 px-2 space-y-4">
                <!-- Main section -->
                <div>
                    <p class="px-3 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Main
                    </p>
                    <div class="mt-1 space-y-1">
                        <a href="{{ route('dashboard') }}"
                            class="{{ request()->routeIs('dashboard') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('dashboard') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                            </svg>
                            Dashboard
                        </a>
                    </div>
                </div>

                <!-- Content section -->
                <div>
                    <p class="px-3 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Content
                    </p>
                    <div class="mt-1 space-y-1">
                        <a href="{{ route('posts.index') }}"
                            class="{{ request()->routeIs('posts.*') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('posts.*') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                    clip-rule="evenodd" />
                            </svg>
                            Posts
                        </a>

                        <a href="{{ route('categories.index') }}"
                            class="{{ request()->routeIs('categories.*') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('categories.*') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd" />
                            </svg>
                            Categories
                        </a>

                        <a href="{{ route('tags.index') }}"
                            class="{{ request()->routeIs('tags.*') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('tags.*') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd" />
                            </svg>
                            Tags
                        </a>

                        <a href="{{ url('comments.index') }}"
                            class="{{ request()->routeIs('comments.*') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('comments.*') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                    clip-rule="evenodd" />
                            </svg>
                            Comments
                        </a>
                    </div>
                </div>

                <!-- Analytics section -->
                <div>
                    <p class="px-3 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Analytics
                    </p>
                    <div class="mt-1 space-y-1">
                        <a href="{{ url('analytics.overview') }}"
                            class="{{ request()->routeIs('analytics.overview') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('analytics.overview') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                            </svg>
                            Overview
                        </a>

                        <a href="{{ url('analytics.audience') }}"
                            class="{{ request()->routeIs('analytics.audience') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('analytics.audience') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                            </svg>
                            Audience
                        </a>
                    </div>
                </div>

                <!-- Account section -->
                <div>
                    <p class="px-3 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        Account
                    </p>
                    <div class="mt-1 space-y-1">
                        <a href="{{ route('profile') }}"
                            class="{{ request()->routeIs('profile') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('profile') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg>
                            Profile
                        </a>

                        <a href="{{ route('settings') }}"
                            class="{{ request()->routeIs('settings') ? 'bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 dark:text-indigo-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }} group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="{{ request()->routeIs('settings') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-300' }} mr-3 h-5 w-5"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                    clip-rule="evenodd" />
                            </svg>
                            Settings
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Mobile user profile section -->
        <div class="flex-shrink-0 flex border-t border-gray-200 dark:border-gray-700 p-4">
            @auth
                <div class="flex items-center">
                    <img class="h-10 w-10 rounded-full object-cover border border-gray-200 dark:border-gray-700"
                        src="{{ auth()->user()->profile_photo_url }}" alt="{{ auth()->user()->name }}">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-700 dark:text-gray-200">
                            {{ auth()->user()->name }}</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400 truncate">
                            {{ auth()->user()->email }}</p>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</div>
