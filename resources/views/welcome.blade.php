<x-layouts.app-layout>
    <!-- Hero Section -->
    <section class="py-20 sm:py-24 lg:py-28 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800 rounded-2xl mb-8">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                Share Your <span class="text-indigo-600 dark:text-indigo-400">Stories</span> and <span class="text-indigo-600 dark:text-indigo-400">Ideas</span> With The World
            </h1>
            <p class="text-lg md:text-xl text-gray-700 dark:text-gray-300 mb-8 max-w-3xl mx-auto">
                Writer's Hub is a platform for creative minds, bloggers, and thinkers to express themselves and connect with a global audience.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}" class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 text-white font-medium rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    Get Started — It's Free
                </a>
                <a href="{{ route('posts.trending') }}" class="px-6 py-3 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 rounded-xl text-gray-800 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-300 transform hover:-translate-y-1">
                    Explore Trending Stories
                </a>
            </div>
            
            <!-- Stats -->
            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="flex flex-col items-center">
                    <span class="text-3xl md:text-4xl font-bold text-indigo-600 dark:text-indigo-400">50K+</span>
                    <span class="text-gray-600 dark:text-gray-300 mt-2">Active Writers</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-3xl md:text-4xl font-bold text-indigo-600 dark:text-indigo-400">1.2M+</span>
                    <span class="text-gray-600 dark:text-gray-300 mt-2">Monthly Readers</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-3xl md:text-4xl font-bold text-indigo-600 dark:text-indigo-400">100K+</span>
                    <span class="text-gray-600 dark:text-gray-300 mt-2">Published Stories</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-3xl md:text-4xl font-bold text-indigo-600 dark:text-indigo-400">120+</span>
                    <span class="text-gray-600 dark:text-gray-300 mt-2">Countries</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Articles -->
    <livewire:featured-posts/>

    <!-- Categories -->
    <livewire:categories/>

    <!-- Trending Now Section -->
   <livewire:trending-posts/>

    <!-- Popular Tags -->
   <livewire:popular-tags/>

    <!-- Newsletter Section -->
    <section class="py-16 bg-indigo-600 dark:bg-indigo-800 rounded-2xl shadow-md mb-8">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Get the best stories delivered to you</h2>
            <p class="text-indigo-200 text-lg mb-8 max-w-3xl mx-auto">
                Join our newsletter and never miss out on new stories, features, and updates. Stay inspired and informed.
            </p>
            
            <form class="max-w-md mx-auto">
                <div class="flex flex-col sm:flex-row gap-2">
                    <div class="flex-1">
                        <label for="email" class="sr-only">Email address</label>
                        <input type="email" id="email" name="email" required 
                            class="block w-full px-4 py-3 text-gray-900 bg-white border-0 rounded-lg focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600" 
                            placeholder="Enter your email">
                    </div>
                    <button type="submit" 
                        class="px-6 py-3 bg-white text-indigo-600 font-medium rounded-lg hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600 shadow-md transition">
                        Subscribe
                    </button>
                </div>
                <p class="text-xs text-indigo-200 mt-3">We respect your privacy. Unsubscribe at any time.</p>
            </form>
        </div>
    </section>

    <!-- CTA for Writers -->
    <section class="py-20 bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-700 dark:to-purple-700 text-white text-center rounded-2xl shadow-lg">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Start writing your story today</h2>
            <p class="text-lg text-indigo-100 mb-8 max-w-2xl mx-auto">Join our growing community of authors and share your voice with the world. Get feedback, build an audience, and connect with like-minded writers.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}" class="bg-white text-indigo-600 font-semibold px-6 py-3 rounded-xl hover:bg-indigo-50 shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                    Become a Writer
                </a>
                <a href="{{ route('about') }}" class="border border-white text-white px-6 py-3 rounded-xl hover:bg-white/10 transition duration-300 transform hover:-translate-y-1">
                    Learn More
                </a>
            </div>
            
            <div class="mt-16 flex flex-wrap justify-center gap-8">
                <div class="max-w-xs">
                    <div class="mb-4 inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Grow Your Audience</h3>
                    <p class="text-indigo-100">Connect with readers who love your unique perspective and writing style.</p>
                </div>
                
                <div class="max-w-xs">
                    <div class="mb-4 inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Monetize Your Content</h3>
                    <p class="text-indigo-100">Turn your passion into income with our writer partnership program.</p>
                </div>
                
                <div class="max-w-xs">
                    <div class="mb-4 inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Powerful Tools</h3>
                    <p class="text-indigo-100">Access analytics, SEO tools, and formatting features to make your content shine.</p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app-layout>