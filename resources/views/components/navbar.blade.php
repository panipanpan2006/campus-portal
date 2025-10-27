<nav class="bg-undip-blue text-white p-4 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="font-bold text-xl">CampusPortal</h1>
        
        <ul class="flex gap-6 items-center">
            <li><a href="/" class="hover:underline hover:text-blue-200 transition">Home</a></li>
            <li><a href="/about" class="hover:underline hover:text-blue-200 transition">About</a></li>
            <li><a href="/dashboard" class="hover:underline hover:text-blue-200 transition">Dashboard</a></li>
            
            <!-- Dark Mode Toggle Button -->
            <li>
                <button id="darkModeToggle" class="bg-white text-undip-blue px-3 py-1 rounded-lg hover:bg-gray-100 transition flex items-center gap-2">
                    <svg id="sunIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <svg id="moonIcon" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>
            </li>
        </ul>
    </div>
</nav>