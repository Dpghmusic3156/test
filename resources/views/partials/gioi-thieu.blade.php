{{-- Hero Section - Modern UX/UI Design --}}
<section class="relative hero-section bg-gradient-to-br from-primary-500 via-primary-600 to-secondary-700 py-24 overflow-hidden">

    {{-- Decorative Background Elements --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-accent-400/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-primary-300/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/4 w-64 h-64 bg-secondary-400/5 rounded-full blur-2xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center max-w-7xl mx-auto">

            {{-- Left Column - Text Content --}}
            <div class="text-white space-y-8">

                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 animate-fade-in-down">
                    <span class="w-2 h-2 bg-accent-400 rounded-full animate-pulse"></span>
                    <span class="text-sm font-medium text-white/90">Giải pháp quản trị chuyên biệt</span>
                </div>

                {{-- Main Heading --}}
                <div class="space-y-4 animate-fade-in-up">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-light tracking-wide text-white/90">
                        Phần mềm Quản lý Labo Nha khoa
                    </h2>
                    <h1 class="text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-extrabold leading-tight">
                        <span class="bg-gradient-to-r from-accent-300 via-accent-400 to-accent-400 bg-clip-text text-transparent">
                            vDentalLab
                        </span>
                    </h1>
                </div>

                {{-- Description --}}
                <p class="text-lg md:text-xl text-white/80 leading-relaxed max-w-xl animate-fade-in">
                    Giải pháp quản trị doanh nghiệp được xây dựng chuyên biệt cho ngành Labo Nha Khoa.
                </p>

                {{-- CTA Button Group --}}
                <div class="flex flex-col sm:flex-row gap-4 pt-4 animate-fade-in-up">
                    <a href="/lien-he" class="group relative inline-flex items-center justify-center gap-2 bg-gradient-to-r from-accent-500 to-accent-500 hover:from-accent-600 hover:to-accent-600 text-white font-bold px-8 py-4 rounded-xl transition-all duration-300 shadow-lg shadow-accent-500/30 hover:shadow-2xl hover:shadow-accent-500/50 transform hover:-translate-y-1">
                        <span>Liên hệ tư vấn</span>
                        <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>

                    <a href="#demo" class="inline-flex items-center justify-center gap-2 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white font-semibold px-8 py-4 rounded-xl border border-white/20 hover:border-white/40 transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"></path>
                        </svg>
                        <span>Dùng thử miễn phí</span>
                    </a>
                </div>

            </div>

            {{-- Right Column - Video with Glassmorphism Frame --}}
            <div class="relative animate-fade-in-right"
                x-data="{ 
                     showStats: true,
                     player: null,
                     initPlayer() {
                         if (typeof YT !== 'undefined' && YT.Player) {
                             this.createPlayer();
                         } else {
                             window.onYouTubeIframeAPIReady = () => this.createPlayer();
                         }
                     },
                     createPlayer() {
                         this.player = new YT.Player('youtube-player', {
                             events: {
                                 'onStateChange': (event) => {
                                     if (event.data === YT.PlayerState.PLAYING) {
                                         this.showStats = false;
                                     }
                                     else if (event.data === YT.PlayerState.PAUSED || event.data === YT.PlayerState.ENDED) {
                                         this.showStats = true;
                                     }
                                 }
                             }
                         });
                     }
                 }"
                x-init="initPlayer()">

                {{-- Decorative Accent --}}
                <div class="absolute -inset-4 bg-gradient-to-r from-accent-400/20 to-accent-400/20 rounded-3xl blur-xl"></div>

                {{-- Video Container --}}
                <div class="relative bg-white/10 backdrop-blur-md p-3 rounded-2xl border border-white/20 shadow-2xl hover:scale-105 transition-transform duration-500">
                    <div class="aspect-video rounded-xl overflow-hidden bg-gray-900">
                        <iframe
                            id="youtube-player"
                            class="w-full h-full"
                            src="https://www.youtube.com/embed/ytoFOidMrhE?enablejsapi=1"
                            title="Phần mềm Quản lý Labo vDentalLab"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>

                {{-- Floating Stats Card --}}
                <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-2xl p-6 max-w-xs hidden lg:block animate-float transition-all duration-500"
                    x-show="showStats"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-secondary-600 rounded-xl flex items-center justify-center">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-gray-800">99.9%</div>
                            <div class="text-sm text-gray-600">Uptime đảm bảo</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

{{-- What is vDentalLab Section with Circle Diagram --}}
<section class="py-20 bg-white relative overflow-hidden" data-aos="fade-up">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <div class="inline-block px-4 py-2 bg-primary-100 text-primary-700 rounded-full font-semibold text-sm mb-6">
                    Về chúng tôi
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                    vDental Lab là gì?
                </h2>
            </div>

            {{-- Modern Feature Cards --}}
            <div class="max-w-6xl mx-auto">
                <p class="text-lg md:text-xl text-gray-600 leading-relaxed mb-12 text-center max-w-3xl mx-auto">
                    Giải pháp quản trị doanh nghiệp được xây dựng chuyên biệt cho ngành Labo Nha Khoa. Đầy đủ các phân hệ đáp ứng nhu cầu quản lý hoạt động sản xuất, kinh doanh của Labo.
                </p>

                {{-- Feature Cards Grid --}}
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- Quản lý Khách hàng --}}
                    <div class="group relative bg-gradient-to-br from-white to-gray-50 rounded-2xl p-6 border border-gray-200 hover:border-primary-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-primary-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-primary-600 transition-colors">Quản lý Khách hàng</h3>
                        </div>
                    </div>

                    {{-- Giao nhận --}}
                    <div class="group relative bg-gradient-to-br from-white to-gray-50 rounded-2xl p-6 border border-gray-200 hover:border-primary-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-secondary-500 to-secondary-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-secondary-600 transition-colors">Giao nhận</h3>
                        </div>
                    </div>

                    {{-- Điều phối --}}
                    <div class="group relative bg-gradient-to-br from-white to-gray-50 rounded-2xl p-6 border border-gray-200 hover:border-primary-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600 transition-colors">Điều phối</h3>
                        </div>
                    </div>

                    {{-- KCS --}}
                    <div class="group relative bg-gradient-to-br from-white to-gray-50 rounded-2xl p-6 border border-gray-200 hover:border-primary-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">KCS (Kiểm soát chất lượng)</h3>
                        </div>
                    </div>

                    {{-- Các công đoạn sản xuất --}}
                    <div class="group relative bg-gradient-to-br from-white to-gray-50 rounded-2xl p-6 border border-gray-200 hover:border-primary-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-accent-500 to-accent-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-accent-600 transition-colors">Các công đoạn sản xuất</h3>
                        </div>
                    </div>

                    {{-- Tài chính --}}
                    <div class="group relative bg-gradient-to-br from-white to-gray-50 rounded-2xl p-6 border border-gray-200 hover:border-primary-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-green-600 transition-colors">Tài chính</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Benefits Section with Images --}}
<section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100" data-aos="fade-up">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <div class="inline-block px-4 py-2 bg-accent-100 text-accent-700 rounded-full font-semibold text-sm mb-6">
                Lợi ích
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                vDentalLab giúp gì cho <span class="text-primary-600">Labo của bạn?</span>
            </h2>
        </div>

        {{-- Benefit 1: Quản lý sản xuất - With Circle Image --}}
        <div class="mb-20 max-w-6xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-secondary-600 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-800 mb-4">Quản lý sản xuất chặt chẽ</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start gap-2">
                                <span class="text-primary-600 mt-1">✓</span>
                                <span>Tạo ra môi trường làm việc công bằng hơn khi năng suất được tính toán tự động</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-primary-600 mt-1">✓</span>
                                <span>Theo dõi tiến độ sản xuất từng đơn hàng. Kiểm soát chất lượng sản phẩm đầu ra tại từng công đoạn</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <img src="https://www.phanmemlabo.com/img/circle.png"
                            alt="Quản lý sản xuất"
                            class="w-full max-w-sm mx-auto drop-shadow-xl">
                    </div>
                </div>
            </div>
        </div>

        {{-- Benefit 2: Nâng cao hiệu quả - With iMac Image --}}
        <div class="mb-20 max-w-6xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <div class="order-2 lg:order-1">
                        <img src="https://www.phanmemlabo.com/wp-content/uploads/2019/07/iMac_left-min-6.png"
                            alt="Nâng cao hiệu quả hoạt động"
                            class="zoom-image w-full drop-shadow-2xl">
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-accent-500 to-accent-600 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-800 mb-4">Nâng cao hiệu quả hoạt động</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start gap-2">
                                <span class="text-accent-600 mt-1">✓</span>
                                <span>Thông tin kết nối giữa các bộ phận trong quy trình hoàn chỉnh từ nhận mẫu đến giao hàng</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-accent-600 mt-1">✓</span>
                                <span>Kiểm soát hàng lỗi; Xác định nguyên nhân lỗi do công đoạn nào, kỹ thuật viên nào gây ra</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Benefit 3: Chăm sóc khách hàng - With Banner Image --}}
        <div class="max-w-6xl mx-auto" data-aos="fade-up" data-aos-delay="300">
            <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <div>
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-800 mb-4">Chăm sóc khách hàng tốt hơn</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start gap-2">
                                <span class="text-purple-600 mt-1">✓</span>
                                <span>Kho dữ liệu tập trung từ tất cả các bộ phận: sản xuất, tài chính, bảo hành... Giúp dễ dàng tra cứu và giải đáp ngay các thắc mắc của khách hàng</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-purple-600 mt-1">✓</span>
                                <span>Phần mềm giúp giảm thiểu tối đa các đơn hàng trễ, thất lạc; Tránh các sai sót trong khâu tài chính, công nợ</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <img src="https://www.phanmemlabo.com/wp-content/uploads/2019/07/bannerpic1-min.png"
                            alt="Chăm sóc khách hàng"
                            class="zoom-image w-full drop-shadow-xl rounded-xl">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- Customers Section --}}
<section class="py-20 bg-white" data-aos="fade-up">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-block px-4 py-2 bg-primary-100 text-primary-700 rounded-full font-semibold text-sm mb-6">
                Khách hàng
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                Khách hàng của chúng tôi
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Nhiệm vụ của chúng tôi là mang đến công cụ quản lý hiệu quả cho tất cả Labo. Xin cảm ơn những khách hàng đã sử dụng phần mềm của chúng tôi!
            </p>
        </div>

        {{-- Customer Logos --}}
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 max-w-6xl mx-auto">
            {{-- Skion Lab --}}
            <a href="https://skionlab.com" target="_blank" rel="noopener noreferrer" class="bg-white rounded-xl p-6 flex flex-col items-center justify-center hover:shadow-xl transition-all duration-300 border border-gray-200 hover:-translate-y-1">
                <img src="https://skionlab.com/wp-content/uploads/2024/09/300767424_476487554484766_3134076792255235907_n.png"
                    alt="Skion Lab"
                    class="w-full h-20 object-contain mb-3">
                <div class="mt-2 text-xs text-gray-500 text-center">TP. HCM</div>
            </a>

            {{-- Detec Dental Lab --}}
            <a href="https://www.detec.vn" target="_blank" rel="noopener noreferrer" class="bg-white rounded-xl p-6 flex flex-col items-center justify-center hover:shadow-xl transition-all duration-300 border border-gray-200 hover:-translate-y-1">
                <img src="https://detec.vn/wp-content/uploads/2020/12/Logo-detect.png"
                    alt="Detec Dental Lab"
                    class="w-full h-20 object-contain mb-3">
                <div class="mt-2 text-xs text-gray-500 text-center">Hà Nội</div>
            </a>

            {{-- HT Dental Art Lab --}}
            <a href="https://htdentalart.vn" target="_blank" rel="noopener noreferrer" class="bg-white rounded-xl p-6 flex flex-col items-center justify-center hover:shadow-xl transition-all duration-300 border border-gray-200 hover:-translate-y-1">
                <img src="https://htdentalart.vn/wp-content/uploads/2023/07/LOGO-2-e1689394383599.png"
                    alt="HT Dental Art Lab"
                    class="w-full h-20 object-contain mb-3">
                <div class="mt-2 text-xs text-gray-500 text-center">TP. HCM</div>
            </a>

            {{-- Katri Lab --}}
            <a href="http://katri.com.vn" target="_blank" rel="noopener noreferrer" class="bg-white rounded-xl p-6 flex flex-col items-center justify-center hover:shadow-xl transition-all duration-300 border border-gray-200 hover:-translate-y-1">
                <img src="http://katri.com.vn/Themes/css/screen/images/logo-katri.png"
                    alt="Katri Lab"
                    class="w-full h-20 object-contain mb-3">
                <div class="mt-2 text-xs text-gray-500 text-center">Hà Nội</div>
            </a>

            {{-- Việt Vương Lab --}}
            <a href="https://vietvuongdent.com" target="_blank" rel="noopener noreferrer" class="bg-white rounded-xl p-6 flex flex-col items-center justify-center hover:shadow-xl transition-all duration-300 border border-gray-200 hover:-translate-y-1">
                <img src="https://vietvuongdent.com/public/frontend/images/logo.png"
                    alt="Việt Vương Lab"
                    class="w-full h-20 object-contain mb-3">
                <div class="mt-2 text-xs text-gray-500 text-center">Hà Nội</div>
            </a>
        </div>

        <div class="text-center mt-8">
            <p class="text-gray-500 italic">và nhiều khách hàng khác...</p>
        </div>
    </div>
</section>

{{-- Solutions Section with Illustrations --}}
<section class="py-20 bg-gradient-to-br from-primary-500 via-primary-600 to-secondary-700 relative overflow-hidden" data-aos="fade-up">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 right-20 w-64 h-64 bg-accent-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-80 h-80 bg-secondary-400/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Chúng tôi cung cấp giải pháp <br />phù hợp cho Labo
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-6 mb-12">
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="mb-4">
                        <img src="https://www.phanmemlabo.com/img/survey.jpg"
                            alt="Khảo sát tư vấn"
                            class="w-20 h-20 rounded-full mx-auto object-cover">
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 text-center">Khảo sát & Tư vấn</h3>
                    <p class="text-white/80 text-center">Xây dựng giải pháp phù hợp với nhu cầu của Labo</p>
                </div>

                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="mb-4">
                        <img src="https://www.phanmemlabo.com/img/customize.png"
                            alt="Tuỳ biến phần mềm"
                            class="w-20 h-20 rounded-full mx-auto object-cover bg-white p-2">
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 text-center">Tuỳ biến phần mềm</h3>
                    <p class="text-white/80 text-center">Đáp ứng quy trình quản lý riêng của Labo bạn</p>
                </div>

                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="mb-4">
                        <img src="https://www.phanmemlabo.com/img/support247.jpg"
                            alt="Hỗ trợ 24/7"
                            class="w-20 h-20 rounded-full mx-auto object-cover">
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 text-center">Hỗ trợ 24/7</h3>
                    <p class="text-white/80 text-center">Giải đáp trong suốt thời gian sử dụng</p>
                </div>
            </div>

            <div class="text-center">
                <a href="/lien-he" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-accent-500 to-accent-500 hover:from-accent-600 hover:to-accent-600 text-white font-bold px-10 py-5 rounded-xl transition-all duration-300 shadow-lg shadow-accent-500/30 hover:shadow-2xl hover:shadow-accent-500/50 transform hover:-translate-y-1 text-lg">
                    <span>Liên hệ ngay</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- CSS Animations --}}
<style>
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.8s ease-out;
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out 0.2s both;
    }

    .animate-fade-in {
        animation: fadeIn 0.8s ease-out 0.4s both;
    }

    .animate-fade-in-right {
        animation: fadeInRight 1s ease-out 0.3s both;
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }

    /* Smooth Scroll */
    html {
        scroll-behavior: smooth;
    }
</style>

{{-- AOS (Animate On Scroll) Library --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

{{-- Lenis Smooth Scroll Library --}}
<script src="https://unpkg.com/@studio-freight/lenis@1.0.29/dist/lenis.min.js"></script>

{{-- YouTube IFrame API --}}
<script>
    // Load YouTube IFrame API
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
</script>
