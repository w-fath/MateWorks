<nav class="bg-green-800">
    <div class="container flex items-center justify-between px-4 py-4 mx-auto">
        <div class="flex items-center space-x-4">
            <img src="https://placehold.co/50x50" alt="Shopee Logo" class="h-8">
        </div>
        <!-- Hamburger Menu for Mobile -->
        <div class="md:hidden">
            <button onclick="toggleMenu()" class="text-white focus:outline-none">
                <i class="text-2xl fas fa-bars"></i>
            </button>
        </div>
        <!-- Desktop Menu -->
        <div class="items-center hidden space-x-4 md:flex">
            <a href="index.html" class="text-white">Home</a>
            <div class="relative group">
                <a href="#" class="text-white">Project</a>
                <div class="absolute hidden mt-2 bg-green-700 rounded shadow-lg group-hover:block">
                    <a href="#" class="block px-4 py-2 text-white hover:bg-green-600">Project 1</a>
                    <a href="#" class="block px-4 py-2 text-white hover:bg-green-600">Project 2</a>
                    <a href="#" class="block px-4 py-2 text-white hover:bg-green-600">Project 3</a>
                </div>
            </div>
            <a href="#" class="text-white">Shop</a>
            <a href="#" class="text-white">Tutorial</a>
            <a href="help.html" class="text-white">Bantuan</a>
            <a href="#" class="text-white">Contact US</a>
            <div class="relative">
                <a href="">
                    <i class="text-2xl text-white fas fa-user"></i>
                    <span class="absolute top-0 right-0 px-1 text-xs text-white bg-red-500 rounded-full"></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden bg-green-800 md:hidden">
        <a href="#" class="block px-4 py-2 text-white">Home</a>
        <a href="#" class="block px-4 py-2 text-white">Project</a>
        <a href="#" class="block px-4 py-2 text-white">Shop</a>
        <a href="#" class="block px-4 py-2 text-white">Tutorial</a>
        <a href="#" class="block px-4 py-2 text-white">Contact US</a>
    </div>
</nav>

