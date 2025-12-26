<div class="container mw-auto">
    <header class="banner">
        <div class="container">
            <div class="brand-wrapper">
                @if (get_theme_mod('logo'))
                <a class="custom-logo-link" href="{{ home_url('/') }}">
                    <img src="{{ get_theme_mod('logo') }}" alt="{{ $siteName }}" class="custom-logo my-2">
                </a>
                @endif
                
                <a class="brand" href="{{ home_url('/') }}">
                    {!! $siteName !!}
                </a>
            </div>

            <button class="menu-toggle" aria-label="Toggle Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="sidebar-content">
                @if (has_nav_menu('primary_navigation'))
                <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false])
                    !!}
                </nav>
                @endif

                <div class="header-actions">
                    <a href="{{ home_url('/phan-mem-dental-lab-mien-phi') }}"
                        class="group relative inline-flex items-center gap-2 bg-gradient-to-r from-accent-500 to-accent-600 hover:from-accent-600 hover:to-accent-700 text-white font-bold px-4 py-2 rounded-lg transition-all duration-300 shadow-lg shadow-accent-500/30 hover:shadow-xl hover:shadow-accent-500/50 transform hover:-translate-y-0.5 text-sm">
                        <span>DÙNG THỬ MIỄN PHÍ</span>
                        <svg class="w-3 h-3 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="sidebar-overlay"></div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.querySelector('.menu-toggle');
            const sidebar = document.querySelector('.sidebar-content');
            const overlay = document.querySelector('.sidebar-overlay');
            const body = document.body;

            function toggleMenu() {
                toggle.classList.toggle('active');
                sidebar.classList.toggle('active');
                overlay.classList.toggle('active');
                body.style.overflow = body.style.overflow === 'hidden' ? '' : 'hidden';
            }

            if (toggle) toggle.addEventListener('click', toggleMenu);
            if (overlay) overlay.addEventListener('click', toggleMenu);
            if (window.innerWidth <= 991) {
                const menuItemsWithSubmenu = document.querySelectorAll('nav ul li.menu-item-has-children > a');
                menuItemsWithSubmenu.forEach(item => {
                    item.addEventListener('click', function(e) {
                        e.preventDefault();
                        const parent = this.parentElement;
                        const isOpen = parent.classList.contains('submenu-open');

                        // Close all other submenus
                        document.querySelectorAll('nav ul li.menu-item-has-children').forEach(li => {
                            li.classList.remove('submenu-open');
                        });

                        // Toggle current submenu
                        if (!isOpen) {
                            parent.classList.add('submenu-open');
                        }
                    });
                });
            }
        });

    </script>

    <!--    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="flex items-center text-2xl font-bold text-gray-800">
            <span>Nexus</span>
            <span class="text-blue-400 animate-pulse">.</span>
        </div>

        <div class="hidden md:flex space-x-8">
            <a href="#" class="nav-link relative group text-gray-600 hover:text-gray-900 transition-colors">
                <span class="relative">
                    Home
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-400 group-hover:w-full transition-all duration-300"></span>
                </span>
            </a>
            <a href="#" class="nav-link relative group text-gray-600 hover:text-gray-900 transition-colors">
                <span class="relative">
                    Features
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-400 group-hover:w-full transition-all duration-300"></span>
                </span>
            </a>
            <a href="#" class="nav-link relative group text-gray-600 hover:text-gray-900 transition-colors">
                <span class="relative">
                    Products
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-400 group-hover:w-full transition-all duration-300"></span>
                </span>
            </a>
            <a href="#" class="nav-link relative group text-gray-600 hover:text-gray-900 transition-colors">
                <span class="relative">
                    Pricing
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-400 group-hover:w-full transition-all duration-300"></span>
                </span>
            </a>
            <a href="#" class="nav-link relative group text-gray-600 hover:text-gray-900 transition-colors">
                <span class="relative">
                    Contact
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-400 group-hover:w-full transition-all duration-300"></span>
                </span>
            </a>
        </div>

        <div class="flex items-center space-x-4">
            <button class="hidden md:block px-4 py-2 text-gray-600 hover:text-gray-900 transition-colors">Login</button>
            <button
                class="px-4 py-2 bg-gradient-to-r from-blue-400 to-purple-500 text-white rounded-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
                Sign Up
            </button>
            <button class="md:hidden flex flex-col space-y-1.5">
                <span class="w-6 h-0.5 bg-gray-800"></span>
                <span class="w-6 h-0.5 bg-gray-800"></span>
                <span class="w-6 h-0.5 bg-gray-800"></span>
            </button>
        </div>
    </div>
</nav>
-->
</div>