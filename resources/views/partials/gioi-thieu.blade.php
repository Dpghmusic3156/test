<section class="relative hero-section bg-gradient-to-br from-primary-600 via-cyan-600 to-primary-700 relative py-24 overflow-hidden">

    {{-- Decorative Background Elements --}}
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-accent-400/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-primary-400/20 rounded-full blur-3xl"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center max-w-7xl mx-auto">

            {{-- Left Column - Text Content --}}
            <div class="text-white space-y-8">

                {{-- Badge 
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 animate-fade-in-down">
                    <span class="w-2 h-2 bg-accent-400 rounded-full animate-pulse"></span>
                    <span class="text-sm font-medium text-white/90">Giải pháp quản trị chuyên biệt</span>
                </div>--}}

                {{-- Main Heading --}}
                <div class="space-y-4 animate-fade-in-up">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-light tracking-wide text-white/90">
                        Phần mềm Quản lý<br class="md:hidden"> Labo Nha khoa
                    </h2>
                    <h1 class="text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-extrabold leading-tight">
                        <span class="text-6xl block mb-2 text-transparent bg-clip-text bg-gradient-to-r from-accent-400 to-orange-300">vDentalLab</span>
                    </h1>
                </div>

                {{-- Description --}}
                <p class="text-lg md:text-xl text-white/80 leading-relaxed max-w-xl animate-fade-in">
                    Giải pháp quản trị doanh nghiệp được xây dựng chuyên biệt cho ngành Labo Nha Khoa.
                </p>

                {{-- CTA Button Group --}}
                <div class="flex flex-col sm:flex-row gap-4 pt-4 animate-fade-in-up">
                    <a href="/lien-he" class="group relative inline-flex items-center justify-center gap-2 bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-bold px-8 py-4 rounded-xl transition-all duration-300 shadow-lg shadow-accent-500/30 hover:shadow-2xl hover:shadow-accent-500/50 transform hover:-translate-y-1">
                        <span>Liên hệ tư vấn</span>
                        <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>

                </div>

            </div>

            {{-- Right Column - Video Modal Trigger --}}
            <div class="relative animate-fade-in-right" x-data="{ showStats: true }" x-init="window.videoModalOpen = false">

                {{-- Decorative Accent --}}
                <div class="absolute -inset-4 bg-gradient-to-r from-accent-400/20 to-accent-400/20 rounded-3xl blur-xl"></div>

                {{-- Video Thumbnail with Play Button --}}
                <div
                    @click="$dispatch('open-video-modal'); showStats = false"
                    class="relative bg-white/10 backdrop-blur-md p-3 rounded-2xl border border-white/20 shadow-2xl hover:scale-105 transition-transform duration-500 cursor-pointer group">
                    <div class="aspect-video rounded-xl overflow-hidden bg-gray-900 relative">
                        {{-- YouTube Thumbnail --}}
                        <img
                            src="https://img.youtube.com/vi/ytoFOidMrhE/maxresdefault.jpg"
                            alt="Video Preview"
                            class="w-full h-full object-cover">

                        {{-- Play Button Overlay --}}
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/40 transition-all">
                            <div class="w-20 h-20 bg-white/90 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform shadow-2xl">
                                <svg class="w-8 h-8 text-primary-600 ml-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>

                        {{-- Duration Badge --}}
                        <div class="absolute bottom-4 right-4 bg-black/80 px-3 py-1 rounded-lg">
                            <span class="text-white text-sm font-medium">2:45</span>
                        </div>
                    </div>
                </div>

                {{-- Floating Stats Card 
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
                </div>--}}



            </div>

        </div>
    </div>
</section>

{{-- Video Modal (Outside Container for Proper Centering) --}}
<div x-data="{ showModal: false }"
    @open-video-modal.window="showModal = true"
    @keydown.escape.window="showModal = false">
    <div
        x-show="showModal"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click.self="showModal = false"
        class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/95 backdrop-blur-md px-4 py-6"
        style="display: none; margin: 0 auto !important; left: 0 !important; right: 0 !important;">

        <div
            x-show="showModal"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90"
            class="relative bg-white rounded-3xl shadow-2xl w-full max-w-5xl mx-auto overflow-hidden flex flex-col max-h-[90vh]">

            {{-- Close Button --}}
            <button
                @click="showModal = false"
                class="absolute top-4 right-4 z-10 w-10 h-10 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-all shadow-md hover:shadow-lg">
                <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            {{-- Modal Header 
            <div class="p-6 border-b border-gray-200 flex-shrink-0">
                <div class="text-xs text-primary-600 font-bold mb-1">Phần mềm vDentalLab</div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Giới thiệu phần mềm quản lý Labo Nha Khoa</h3>
                <p class="text-gray-600 text-sm">Tìm hiểu về các tính năng và lợi ích khi sử dụng vDentalLab trong quản lý Labo</p>
            </div>--}}

            {{-- Video Container --}}
            <div class="aspect-video bg-black flex-shrink-0">
                <iframe
                    :src="showModal ? 'https://www.youtube.com/embed/ytoFOidMrhE?autoplay=1&enablejsapi=1' : ''"
                    class="w-full h-full"
                    title="vDentalLab Video"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>


        </div>
    </div>
</div>

{{-- What is vDentalLab Section with Circle Diagram --}}
{{-- What is vDentalLab Section with Circle Diagram --}}
<section class="py-20 bg-white relative overflow-hidden" data-aos="fade-up">

    <div class="container mx-auto px-4 relative z-10">
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
                    <div class="group bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="mb-6 text-gray-900 group-hover:scale-110 transition-transform duration-300 origin-left">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors">Quản lý Khách hàng</h3>
                    </div>

                    {{-- Giao nhận --}}
                    <div class="group bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="mb-6 text-gray-900 group-hover:scale-110 transition-transform duration-300 origin-left">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors">Giao nhận</h3>
                    </div>

                    {{-- Điều phối --}}
                    <div class="group bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="mb-6 text-gray-900 group-hover:scale-110 transition-transform duration-300 origin-left">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors">Điều phối</h3>
                    </div>

                    {{-- KCS --}}
                    <div class="group bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="mb-6 text-gray-900 group-hover:scale-110 transition-transform duration-300 origin-left">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors">KCS (Kiểm soát chất lượng)</h3>
                    </div>

                    {{-- Các công đoạn sản xuất --}}
                    <div class="group bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="mb-6 text-gray-900 group-hover:scale-110 transition-transform duration-300 origin-left">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors">Các công đoạn sản xuất</h3>
                    </div>

                    {{-- Tài chính --}}
                    <div class="group bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="mb-6 text-gray-900 group-hover:scale-110 transition-transform duration-300 origin-left">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <rect x="2" y="5" width="20" height="14" rx="2" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></rect>
                                <line x1="2" y1="10" x2="22" y2="10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></line>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-primary-600 transition-colors">Tài chính</h3>
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
                        <div class="flex items-center gap-4 mb-6">
                            <div class="flex-shrink-0 text-gray-900">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-3xl font-bold text-gray-900 m-0">Quản lý sản xuất chặt chẽ</h3>
                        </div>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start gap-2">
                                <span class="text-accent-600 mt-1">✓</span>
                                <span>Tạo ra môi trường làm việc công bằng hơn khi năng suất được tính toán tự động</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-accent-600 mt-1">✓</span>
                                <span>Theo dõi tiến độ sản xuất từng đơn hàng. Kiểm soát chất lượng sản phẩm đầu ra tại từng công đoạn</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <img src="{{ home_url() }}/img/circle.png"
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
                        <img src="{{ home_url() }}/wp-content/uploads/2019/07/iMac_left-min-6.png"
                            alt="Nâng cao hiệu quả hoạt động"
                            class="zoom-image w-full drop-shadow-2xl">
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="flex-shrink-0 text-gray-900">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-3xl font-bold text-gray-900 m-0">Nâng cao hiệu quả hoạt động</h3>
                        </div>
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
                        <div class="flex items-center gap-4 mb-6">
                            <div class="flex-shrink-0 text-gray-900">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-3xl font-bold text-gray-900 m-0">Chăm sóc khách hàng tốt hơn</h3>
                        </div>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start gap-2">
                                <span class="text-accent-600 mt-1">✓</span>
                                <span>Kho dữ liệu tập trung từ tất cả các bộ phận: sản xuất, tài chính, bảo hành... Giúp dễ dàng tra cứu và giải đáp ngay các thắc mắc của khách hàng</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-accent-600 mt-1">✓</span>
                                <span>Phần mềm giúp giảm thiểu tối đa các đơn hàng trễ, thất lạc; Tránh các sai sót trong khâu tài chính, công nợ</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <img src="{{ home_url() }}/wp-content/uploads/2019/07/bannerpic1-min.png"
                            alt="Chăm sóc khách hàng"
                            class="zoom-image w-full drop-shadow-xl rounded-xl">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- Customers Section --}}
@php
// Query customers from WordPress 'khach-hang' category
$customer_query = new WP_Query([
'post_type' => 'post',
'category_name' => 'khach-hang',
'posts_per_page' => -1
]);

// Organize customers by region based on location in content
$regions_data = [
'north' => [
'name' => 'Miền Bắc',
'color' => 'from-red-500 to-pink-500',
'customers' => []
],
'central' => [
'name' => 'Miền Trung',
'color' => 'from-yellow-500 to-green-500',
'customers' => []
],
'south' => [
'name' => 'Miền Nam',
'color' => 'from-blue-500 to-cyan-500',
'customers' => []
]
];

if ($customer_query->have_posts()) {
while ($customer_query->have_posts()) {
$customer_query->the_post();
$customer = [
'name' => get_the_title(),
'logo' => get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: 'https://via.placeholder.com/150',
'location' => strip_tags(get_the_content()),
'url' => get_permalink()
];

// Determine region based on location
$content_lower = strtolower($customer['location']);
if (strpos($content_lower, 'hà nội') !== false || strpos($content_lower, 'ha noi') !== false || strpos($content_lower, 'hanoi') !== false) {
$regions_data['north']['customers'][] = $customer;
} elseif (strpos($content_lower, 'tp. hcm') !== false || strpos($content_lower, 'hồ chí minh') !== false || strpos($content_lower, 'sài gòn') !== false || strpos($content_lower, 'saigon') !== false || strpos($content_lower, 'cần thơ') !== false || strpos($content_lower, 'can tho') !== false) {
$regions_data['south']['customers'][] = $customer;
} else {
$regions_data['central']['customers'][] = $customer;
}
}
wp_reset_postdata();
}
@endphp


<script>
    window.vietnamMapData = @json($regions_data);
</script>


<section class="py-20 bg-white" data-aos="fade-up"
    x-data="{
        selectedRegion: null,
        showModal: false,
        regions: window.vietnamMapData || {},
openRegion(region) {
this.selectedRegion = region;
this.showModal = true;
}
}"
    x-init="console.log('Vietnam Map Loaded:', regions)">
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

        {{-- Interactive Vietnam Map --}}
        <div class="max-w-2xl mx-auto mb-8">
            <div class="relative group">
                {{-- Inline SVG Map with Clickable Regions --}}
                <svg width="100%" height="auto" viewBox="0 0 800 800" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto drop-shadow-lg">
                    {{-- North Region (Red) --}}
                    <path
                        @click="openRegion('north')"
                        class="cursor-pointer transition-all duration-300 hover:opacity-70"
                        d="M200.7 3.7002L202.9 5.5L203.5 4.5L206.5 7.90039L206.9 9.5L209.4 10.2002L210.3 11.5996L209.9 13.5996L210.6 16.0996L213.4 15.5L217.5 16.2998L217.9 17.5L220.3 18.5L221.3 19.7998L223.6 20.2998L224.2 22.5L226.8 21.7998L230.8 22.5L230.9 19.9004L240.1 20L242.5 22.5L243.3 25.0996L247.2 26.5996L248.6 25.2998L251.4 25.4004L252.2 24.2998L254.5 24.2002L255.2 22.2002L257.8 23.5L259 22.9004L262 26.0996L262.7 24.9004L264.8 25.2002L264.9 26.7002L267.4 28.0996L269.8 28.5L270 30.5996L267.3 32.2998L267.9 34.2002L266.7 34.5996L264.5 40.5996L261.7 40.5L259.8 39.2998L258.4 44.2002L257.8 48.0996L258.8 50.2002L257.5 51.9004L262.2 52.5996L264.2 58L262.8 60L264.4 61.4004L263.7 62.2998L264.6 64.0996L263.5 68.7998L264.2 71.0996L265.9 68.7998L268.1 68.9004L269.2 70.4004L271.8 69.9004L274.7 70.5L275.1 72.5L277.4 72.7998L278 71.5996L281.4 72.5996L281.6 74.4004L279.3 75.9004L278.7 77.5L282.6 78.5996L285.1 80.9004L290.3 83.7002L292.9 81.9004L295.7 85.7998L295.8 89L296.8 89.0996L298.4 87L300.7 85.7998L302.2 87.2002L301.5 89L304.3 89.5L305.2 88.2998L310.8 88.5L317.1 86.0996L319.3 86.2002L321.5 89.5996L322.6 89.5L323.9 91.9004H326.3L327.2 94.7998L324.9 97.0996L325.7 94.7002L319.2 92.7002L318.8 93.7002L315.6 92.7002L314.1 93.7998L316.5 94.0996L314.2 98.7998L310.7 98.0996L310.4 99.7002H309L307.3 104L303.6 101.8L302.8 103.8L299.9 102.6V104.7L296.4 102.9L295.7 104.6L296.1 107.4L295.5 111L297.1 112L296 115.4L296.2 117.4L294.4 118.9L292.5 118.6L288.8 119.3L287.4 121.1L284.2 121.7L281.5 120.6L280.1 121.2L274.9 120.6L275 122.9L270.9 123.4L272.1 126.9L273.7 128.5L271.2 128.8L271 127.5L270.4 126L267.7 126.8L269 128L267.1 127.9L266.9 129.9L269 132.5L268.7 134L267.4 132.8L264.9 134L262.6 136.6L260.6 137L260.3 138.6L258.2 140.4L259.3 146.2L258.4 149.6L258.9 153.1L257.7 154.2L258.3 154.9L253.7 157.2L250 157.9L247.8 159.3L241.9 165.9L238.4 170.2L237.3 169.5L235.5 170.6L233.9 172L231.9 169.4L228.8 171.5L229.1 173.4L227.5 176.3V178.8L225.8 181.5L224.9 181.2L222.9 184.5L221.5 192.7L221.8 195.8L220.4 197.2L222 201.4L221.4 202.7L219.7 205.5L218.1 206.8L218.2 211.9L216 212.9L215 212.3L212.8 215.4L212.5 218L213.3 222L217.2 224.4V225.8L219.2 228.8L218.5 229.8L219.6 232.3L217.6 233.1L215.9 235.5V237.1L213.4 238.3L212.4 237.7L208.9 238.9L207.1 236.1L203.8 237.2L200.4 237.6L196.4 235.4L194 237.2L192 236.5L192.5 234.6L189.4 232.3V231L185.4 231.3L183.9 229.4L180.2 229.8L180 228.1L178.7 227.5L173.3 227.6L169.7 226L169.3 224.8L167.6 225L165.3 222.5L162.9 221.8L161.2 218.2L159 216.9L156.7 217.7L154.3 214.2L149.9 212.4L148.7 211.1L146.4 211.5L146.1 209.7L143.9 207.3L140.3 206.6L138.7 204.9L135.8 205.5L133.5 204.7L131.3 202.2L129.4 201.4L133 199.4L134.1 197.4L138.6 196.6L140.2 191.3L140.5 189.1L138.2 186.7L138.7 183.5L141.8 184.5L143.6 183.2L146.5 182.3L149.8 182.8L150.7 183.5L155.5 182.7L155.7 184L158.9 185.1L159.5 186.5L162.5 186.9L164.5 185.9L166.2 186.3L167 182.7L169.8 180L175.3 177.6L175.9 174.2L175.6 171.6L178 170L179 168.1L180.1 165.9L182.6 163.2L179.3 160.9L179.6 160.1L176.7 160.9L172.1 158.1L169.7 158L166.8 156.4L164.6 155.9L165 149.9L167.9 148L169.3 148.2L166.7 144.5L165.2 145.1L163.8 147.4L160.5 147.6L160.3 148.5L157.5 149.8L154.7 148.5L155.1 146.9L153.5 145.8L154 143.9L157.7 142.5L160.2 140.8L161.1 138.4L164 138L165.7 135.7L162.3 132.6L160.1 133.4L159 132.7L158.399 130.1L156.6 128.5L155.3 128.7L150.899 125.5L151.3 124.9L148.6 122.2L147.6 123.6L146.8 122L144.3 120.7L141.5 121.1L140.3 119.7L137.7 121.1L136.7 123.4L133.899 122.9L132.6 123.8L130.399 123.2L128.2 125.4L126.2 125.2L124.6 128.2L125.4 131L122.6 131.7L122.7 135L120.2 135.3L119.4 133.4L116.1 131.2L111.8 130.7L109.7 127.1L108.6 128.5L105.8 129.2L98.4004 126.3L97.9004 123.8L95.5996 122.8L93.0996 123.7L89.2002 115.9L86.2998 115.3L84.5996 110.9L83 110.2L83.2998 107.3L81.0996 106L79 106.4L78.5 105.4L80.5996 103.8L82.5996 103.6V99.7002L84.2002 96.7002L81.5 97.5996L83.5 93.7002L87.2002 89.7002L86.5996 86.2998L87 82.9004L85.2998 82.5996L81.7002 83.7998L80.7002 82.9004L80.5 77.2002H79L79.2002 82.2998L75.5 85.9004L72.0996 86.2002L70.7998 82.2998L71.4004 79.2998L70.5996 76.2002L69.2002 75.5L68.7998 73L64.2998 70.7002L63.2002 69.5L64.7002 68L60.7002 64.5996L60.5 63.4004L58.2002 62.7998L54.5996 58.7998L53.0996 59L52.9004 57.5L51.4004 57.4004L51 55.2002L48.2998 54.0996L49.0996 52.5L47.7002 51.5L46.7002 49.2998L47.4004 47.7998L51.2002 47.9004L52.4004 48.5996L51.7002 46.5L55.2002 42L56.7998 41.0996L59.0996 37.7998L58.0996 35.4004L60.5996 34.2998L61.4004 31.7002L64.0996 30.5996L66.9004 34.2002L68.7998 32.7998L71.0996 34.9004L72.5996 34.2002L77.4004 38L79.2002 38.0996L81.5996 39.7998L81.7002 41.5L84.2002 45.2002L86.9004 45.2998L89 47.2002L91.4004 46.7998V44L93.4004 43.2998L96.2998 41.4004L95.0996 39.7002L96.4004 37.2002L98.4004 37.0996L101.1 35.2002L101.2 32.5996L103.1 28.7002L107.4 30.5L108.6 31.7998L108.2 34.4004L110.9 38.4004L112.7 39.5996L114.9 37.2998L114.4 34.2998L118.1 29.5996L119 30L124.3 35L129.3 41.0996L130.2 41L133.6 44L135.9 43.2002L135.6 40.5996L136.5 38.5L137.5 32.9004L140.2 29.5996L145.5 27.7002L148.3 27.7998L147.6 31.0996L148.6 32.4004L151.6 33.9004L152.2 34.7998L154.4 34.2998L155.5 32.5996L157.601 31.7002L160 29.5996L161.4 27.5L163.5 26.7998L164.601 28.5996L165.101 27.0996L167.4 28.5996L170.4 27.9004L172.2 24.4004L176.5 22.2998L175.4 20.4004L173.601 13.4004L177.101 13.0996L177.4 11.2998L179 10.5996L180.601 12.0996L181 9.59961L182.9 9.40039L187.2 6.2002L188.3 7.2998L191.2 5.2002L193.9 6.5L195.3 2.5H196.5L198.4 0L200.7 3.7002ZM199.6 148.7L202.3 149.5L199.601 148.7L195.4 146.5L199.6 148.7ZM191.1 142.5L193.9 143L191.101 142.5L190.3 141.2L191.1 142.5ZM181.1 137L181.2 137.9L184.1 140.399L181.2 137.9L181.101 137L178.101 134.9H178.1L181.1 137ZM175.6 130.7L175.7 135.8L173.899 136.5H173.9L175.7 135.8L175.601 130.7L177.399 130.1L175.6 130.7ZM277.5 126.2L280.2 125.4L280.8 127.6L282.1 127.3L283.3 129.6L280.7 129.7L281.2 132.5L278.4 132L275.3 127.7L276.3 125.1L277.5 126.2ZM182.6 130.8L182.898 132.299L182.9 132.3L182.601 130.8L184.2 128.5L182.6 130.8ZM296.6 128.7L295.2 127.4L296.6 127V128.7ZM181.899 123.2L183.3 126.3L181.9 123.2L180.2 122L181.899 123.2ZM297.3 124.7L295.2 125.4L294.9 124.1L297.3 124.7ZM304.9 121.5L302.1 125.3L301.9 124.8L305.2 120.3L304.9 121.5ZM304.5 118.2L304.7 118.9L302.8 122.6L297.7 123.4L301.2 121.1L301.7 119.3L304.1 116.6L304.5 118.2ZM315.7 120L313.4 118.4L314.4 117.9L315.7 120ZM307.1 116.3L306 119.6L305.5 118.6L306.4 115.3L308.6 112.4L307.1 116.3ZM319.6 116.6L317.7 119.4L316.9 119L318.5 116.4L319.6 116.6ZM303.8 107.9L304 109.2L307.6 107.8L304.4 111.5L303 111.3L302.5 112.7L296.7 116.5L297.6 112.9L299.7 111.2L298.6 110.7L300.4 108.6L300.7 105.2L303.8 107.9ZM178.899 113.1L176 114.8L178.9 113.1L176 111.2L178.899 113.1ZM306.2 113L305.6 114.5L303.6 114.8L304.8 112.8L306.2 113ZM175.399 105.6L176.5 108.3L175.4 105.6L175.5 103.3L175.399 105.6ZM297 107.8L297.4 106.3H299.2L297 107.8ZM317.2 101.5L314.1 103.7L312.1 103.6L317.4 100.9L317.2 101.5ZM155.399 100.8L158 101.2L155.4 100.8L155.3 100L155.399 100.8ZM323.9 100.8L320.3 100.9L319.6 99.9004L326.4 99L323.9 100.8ZM178.1 90.7002L176.8 91.9004L178.101 90.7002L177.7 88.4004L178.1 90.7002ZM155.6 40.7002L155.1 43L157.9 45.2002L155.101 43L155.601 40.7002H155.6Z"
                        fill="#ED1C24"
                        fill-opacity="0.7">
                        <title>Miền Bắc - Click để xem khách hàng</title>
                    </path>

                    {{-- Central Region (Yellow/Green) --}}
                    <path
                        @click="openRegion('central')"
                        class="cursor-pointer transition-all duration-300 hover:opacity-70"
                        d="M220.1 229L221.6 234.7L223 237.8L227.3 244L227.9 243.6L230.3 247.2L235.1 252.3L238.3 252.9L242.6 255.5L247.7 260.4L250.9 261.6L252.1 264.4L254.4 267.8L255.1 268L252.2 268.5L255.101 268L252.3 272.3L251.9 274.4L252.9 277.9L254.601 281.5L259 288.6L262.3 293.2L266.7 298L269.601 300.4L278.101 306.9L283.7 310.5L283.9 314.4L286.5 318.2L290.2 321.9L297 327.4L302.7 332L307.8 335.6L310.3 336.7L315 340.2L320.8 345.3L325 348.1L326.9 348.2L327.3 346.9L330.4 352.4L327.9 350.9L328.9 353.1L330.8 352.7L335.5 353.4L333.6 354.4L332.1 357.6L334.9 359.9L336.9 359.6L336.6 358L338.1 356L342.4 357.9L338.3 358.9L338 360.7L340 365.2L341.9 367.4L345.5 369.9L346.8 374.4L350.5 380.4L355.3 386.8L357 388L355.9 390.1L358.1 389.8L359.2 388.7L359.5 390.7L361.4 392.8L363.3 393.5L365.7 392V393.6L368.4 396.4L367.7 397.7L369.7 400.2L370.8 400.3L370.5 402L368.9 403.4L369.3 408.5L370.2 411.9L372.9 418.9L375.6 423.7L377.6 426.5L377 427.3L377.8 432.7L377.5 434.9L379.8 439.2L379.7 442.7L382.5 446.9L383.4 449.5L382.6 450.4L384.4 454L383.6 454.3L382.3 452.3V454.7L383.9 454.6L384.2 456.9L385.7 459.5L386.3 462.5L385.5 462.9L386.8 465.8L388 466.3L388.2 469.1L387.6 472.6L385.9 472.2L386.4 470.8L385.6 465.9L384.8 464.6L384.5 471.1L385.9 471.9L384.2 472.8L385 476.6L384.7 478.1L386.5 480.9L385.8 481.4L383.9 477.7L384.1 479.3L386.1 482.5L385.7 483.7L389.1 486.6L388.8 489.1L386.3 488.5L387.9 487L385.4 485.3L384.4 487.5L385.3 488.4L384.5 490.3L386.5 491.8L388 491.6L386.3 496.1L387.5 497.9L387.2 495.5L388 495L389 496.8L387.9 498.6V501.9L391.4 508.1L395.7 513.3L394.8 514.9L392.5 516.7L391 517.8L391.4 520L394.3 525.1H395.6L393.7 529.2L392.5 527.1L393.3 525L390.8 523.9L392 523.3L390.9 518.8L389.5 519L386.1 523.3L384.8 523.8L382.7 527.5L383.8 530.4L385 528.7L385.4 532.9L387.9 534.4V536.9L390.2 538L388.4 539L388.2 540.3L386.5 540L385.2 537.5L382.4 535.4L380.7 537.6L383.5 538.6L383.6 541.2L385.5 542.6L383.7 543.4L383.3 546L384.2 547.2L383.4 549.5L384.5 550L383.3 551.8L383.6 554.5L385.7 558.3L387.5 559.6L386.2 561.3L387.3 563.3L385.9 564.4L383.6 563.1L384.2 558.6L383.5 555.3L382.3 553.2L382.2 555.3L383.8 558.1L381.7 561.9L380.6 561.7L379.2 564.6L380.8 566.2L382.8 563.4L383.2 566.5L382.8 567.3L384.9 569.6L382.4 573L380 578.4L378.2 577.3L376.7 577.5L375.7 574.9L374.4 575.2L375.7 576.6L375.5 579.1L374.601 580.3L374.9 588.2L370.7 590.8L367.5 589.6L366.5 587.4L362.3 585.8L362.5 582.9L359.601 583.2L358.5 582.6L356.9 579.1L354.101 578.8L352.6 576.6L353.101 574.7L358.5 573.4L359.7 571.8L358.2 569.6V567.7L355.8 566.6L357.3 564.9L357.9 559L360.101 554.9L358.3 551.5L361 549.6L359.6 545.8L359.8 542.7L358.7 542.1L357.7 543.1L354.7 544L352.2 543.1L350.5 544L349.7 542.7L348.101 544.1L344.601 545.7L343.3 545.1L340.601 547.3L338.601 547.7L337.601 549.5L337 548.6L335 549L334.101 547.9L331.601 548.5L330.2 545.7L326.9 542.7L325.2 543.1L322.9 540.6L322 538.2L322.5 536.8L325.3 535.8L326.2 534.3L323.4 531.9L320.8 531.3L322.9 529.3L321.2 523.1L321.7 521.5L319.5 520.9L319 518.2L316.5 519.8H314.9L308.4 518.7L305.2 518.9L302.4 515.2L301.6 511.2L302.601 510.3L301.6 508.1L307.4 494.4L308.6 491.7L307.9 483.6L305.8 479L305.6 476.9L303.9 473.2L300 470.7L301 467.9L300.1 467L300.4 464.4L299.8 460.9L296.9 461.2L295.5 459.6L296.7 456.9L294.5 455.1L297.8 449.4V446.6L297.2 444.9L298.6 442.7L298.7 440.5L301.8 441L302.8 436L303.8 433.8L303.2 432.3L305.2 427.3L305.1 425.8L302.7 422.4L306.6 418.7L306.3 417.4L301.4 414.4L301.1 411.2L304.5 409.8L306.1 410.8L308.1 409.6L307.1 407.9L308.3 405L306.3 402.6L308.1 401.8L307.8 398.2L308.7 396.7L307.6 395.9L307.1 393.5L308.2 392.1L305.2 393L303.2 392L303 389.3L300.2 387.8L296.7 388.2L295.9 384.5L294.1 381.9H292.3L291.1 380.3L291.7 378.4L290.1 376L288.7 376.3L289.4 374.1L288.5 372.1L293.5 369.2L297.6 368.7L298.8 367L300.8 362.4L299.5 359.6L294.6 360.9L292 357.8L290.1 356.4L287.7 356.5L286.1 355.4L285.4 353.1L285.7 350.6L282.4 348.3L279.4 348.9H277L276.9 346.7L273.7 344.6L272.3 342.4L273.2 338.5L270.4 336.9L269 341L267.6 340.7V342.4L266 343.6L263 341.5L261.6 337.3L262.6 335.2L258.8 334.3L257.1 329.8L257 321.3L255.5 320.3L255.6 318.6L256.9 318.5L257 315L255.4 316.3L251.8 315.1L249.9 312.3L250.601 311.1L248.7 309.6L245.2 304.7L246.7 303.5L245.5 303.1L245.4 300.7L244 300.4L243.9 302.1L242 302.7L235 297.2L224.101 284.7L220.8 282.2H218.8L218.5 279.7L215.3 275.8L215.601 274.2L213.601 273L212.1 271.1L213.7 266.5L216.601 266.4L218 264.3L216.6 266.4L213.7 266.5L210.8 265.5L210.1 261.8L208.8 261.9L207.4 260.1L206.5 256.1L203.1 257.1L202.6 258.5L198.3 256.2L198.8 253.6L195.3 253.3L194.7 251.6L192.1 250.4L191.6 246.9L190.3 247L188 244.2L188.6 239.6L189.4 237.1L190.7 236L192 236.5L194 237.2L196.4 235.4L200.4 237.6L203.8 237.2L207.1 236.1L208.9 238.9L212.4 237.7L213.4 238.3L215.9 237.1V235.5L217.6 233.1L219.6 232.3L218.5 229.8L219.2 228.8L220.1 229ZM389.9 548L387.5 548.7L385.5 547.2L387.3 546.4H389.1L389.9 548ZM392.3 527.3L393.6 530.5L392.9 530.8L388.7 527.9L390.5 527.1L392.3 527.3ZM351.3 365.5L352 367.3L349.3 365.2L351.3 365.5ZM222.1 263.1L222.6 264.4L220.2 265.2L222.601 264.4L222.101 263.1L224.5 262.8L222.1 263.1Z"
                        fill="#AACC00"
                        fill-opacity="0.7">
                        <title>Miền Trung - Click để xem khách hàng</title>
                    </path>

                    {{-- South Region (Blue) --}}
                    <path
                        @click="openRegion('south')"
                        class="cursor-pointer transition-all duration-300 hover:opacity-70"
                        d="M319.5 520.9L321.7 521.5L321.2 523.1L322.9 529.3L320.8 531.3L323.4 531.9L326.2 534.3L325.3 535.8L322.5 536.8L322 538.2L322.9 540.6L325.2 543.1L326.9 542.7L330.2 545.7L331.6 548.5L334.1 547.9L335 549L337 548.6L337.6 549.5L338.6 547.7L340.6 547.3L343.3 545.1L344.6 545.7L348.1 544.1L349.7 542.7L350.5 544L352.2 543.1L354.7 544L357.7 543.1L358.7 542.1L359.8 542.7L359.6 545.8L361 549.6L358.3 551.5L360.1 554.9L357.9 559L357.3 564.9L355.8 566.6L358.2 567.7V569.6L359.7 571.8L358.5 573.4L353.1 574.7L352.6 576.6L354.1 578.8L356.9 579.1L358.5 582.6L359.6 583.2L362.5 582.9L362.3 585.8L366.5 587.4L367.5 589.6L363.8 590.5L362.1 592.4L361 596.7L358.1 596.4L354.6 596.7L351.1 598.3L349.8 600.1L348.9 603.3L346 604.3L344.3 603.9L343.1 604.9L342.4 607.8L341.1 607.6L340.3 609.7L339.6 608.6L336.9 607.8L333.7 609L330.6 609.5L328 613.7L326.9 618.2L325.8 620.1L321.3 619L317.3 620.3L315.3 622.4L311.9 623.3L305.8 626.3L303.1 629.4L300.7 629.9L299.6 631.2L294.7 631.5L290.7 635.4L288.9 634.3L287.1 634.5L283.6 636.6L282.5 638.2L281.4 636.7L283.6 634.2L285.2 633.8L285.616 631.994L284.1 633.7L284.3 631.9H285.639L285.8 631.2L283.5 630.8L284.1 632.4L282.4 633L280.5 630.9L278.2 631L277.2 630.7L276 633.1L277.1 634.2L272.7 635.6L272.1 637.3L270.2 637.9L268.1 639L267.5 640.4L267.7 644.6L268.4 648.6L266.6 651L263.7 652.9L261.7 654.9L263.6 659.8L261.7 662.3L259.3 663.4L257.6 666L258.3 669.8L257.5 671.9L254.6 675.1L250.4 676.5L247.1 674L245.2 673.8L242.9 677.3L240.6 678L238.5 681.9L239.7 683.6L237 685.6L235.9 685.4L225.6 688.8L222.5 690L218.3 692.2L208.9 696.1L205.9 697.9L202.9 700.7L198.8 709.8L195.9 712.9L191.6 714.4L188.2 719.3L183.1 721.1L175.7 722.7L169.7 720.9L169.3 719.4L174 718.4L172.7 716.3L173.3 715.2L176.9 713.8L178.3 711.1L174.7 712.6L172.6 710.9L173.5 705.4L173.9 693L174.5 689.2L175.1 676.3L176.2 667.2L178.2 661L180.9 660.8L183.8 657.7L186.4 656.1L187.9 657.1L186.5 653.1L183.5 649.9L181.5 649L178.5 649.6L177.1 649.1L174.6 645.3L171.7 643.1L169.7 643L167.6 644.7L165.8 647.2L164.4 645.9L163.3 641.9L161.3 639.7L158.1 635.3L156.6 636.2L156.2 633.4L158.9 634L161.5 631.7L161.8 630L164.2 627.8H168.4L172.4 628.8L176.7 628.7L178.1 627.4L181.2 622.7L187.5 618.9L186 616.3L185.9 614.5L184.5 611.7L185.4 609L186.8 607.6L188.5 607.5L187.8 609.4L192 609.8L195.6 610.5L199.1 612.5L203.3 606.9L206.8 607.9H208.7L214.9 606.2L217.2 604.6L220.5 604.2L222.1 607.6L224.3 610.4L223.7 612.3L227.5 613.3L228 609.6L233.7 614.3L238.5 614.5L239.8 615.7L239.7 613.3L237.2 609.7L237.6 606.7L238.4 606.5L240.4 606.8L239.8 603.3L238.2 600.8L235.8 602.3L234.9 600.8L231.7 598.7L231.4 596.6L228.6 596L226.5 594L226.4 592.2L224.4 592.1L225.1 588.5L224.5 587.3L226.1 584.2L224.8 583.4L225.3 580L224.2 578.4L222 578.2L221.8 575.7L225.2 573L228.6 574.8L231.3 570.4L231.4 568.6L234.2 568.2L236.1 569.7L238.2 570.1L239.8 569.3L242.9 570.6L245.1 573L248.9 571.8L252.3 573.2L250.5 568.7L253 563.8L250.3 558.6L252.5 557.9L253.4 558.7L260.7 558.6L262.1 558L264.7 559L266.3 557.3L268.6 553.5L274.6 554.4L278.2 552.8L280.7 551L285.1 545.9L285.7 544.3L288.2 543L291.3 541.7L294.9 541.5L298.4 545.5L299.6 543.5L304.4 540.5L304.6 537.3L306.1 533.6L305.5 532L306.6 530.5L305.6 526.2L306 524.5L305.2 518.9L308.4 518.7L314.9 519.8H316.5L319 518.2L319.5 520.9ZM197.1 681L195.5 682.6L197.101 681L197.3 677.6L197.1 681ZM220.6 650.7L223.3 654.6L220.601 650.7L215.6 647.3L220.6 650.7ZM227.1 640.1L225.7 640.5L227.101 640.1L229.8 637.9L227.1 640.1Z"
                        fill="#0D72FF"
                        fill-opacity="0.7">
                        <title>Miền Nam - Click để xem khách hàng</title>
                    </path>
                </svg>

                {{-- Region Labels with Icons --}}
                <div class="absolute top-[15%] left-1/2 -translate-x-1/2 text-center pointer-events-none">
                    <div class="bg-red-500/80 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                        <span class="inline-block mr-1">🏢</span> Miền Bắc (<span x-text="regions.north.customers.length">0</span>)
                    </div>
                </div>

                <div class="absolute top-[52%] left-1/2 -translate-x-1/2 text-center pointer-events-none">
                    <div class="bg-yellow-500/80 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                        <span class="inline-block mr-1">🏢</span> Miền Trung (<span x-text="regions.central.customers.length">0</span>)
                    </div>
                </div>

                <div class="absolute bottom-[15%] left-1/2 -translate-x-1/2 text-center pointer-events-none">
                    <div class="bg-blue-500/80 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                        <span class="inline-block mr-1">🏢</span> Miền Nam (<span x-text="regions.south.customers.length">0</span>)
                    </div>
                </div>
            </div>

            <p class="text-center text-sm text-gray-500 mt-4 italic">
                💡 Click vào từng miền để xem danh sách khách hàng
            </p>
        </div>

        {{-- Customer Modal --}}
        <div x-show="showModal"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click.self="showModal = false"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm px-4"
            style="display: none;">

            <div x-show="showModal"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90"
                class="relative bg-white rounded-3xl shadow-2xl w-full max-w-4xl max-h-[80vh] overflow-hidden">

                {{-- Close Button --}}
                <button @click="showModal = false"
                    class="absolute top-4 right-4 z-10 w-10 h-10 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-all shadow-md hover:shadow-lg">
                    <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                {{-- Modal Header --}}
                <div class="p-8 border-b border-gray-200" x-show="selectedRegion">
                    <div :class="'inline-block px-4 py-2 bg-gradient-to-r ' + regions[selectedRegion]?.color + ' text-white rounded-full text-sm font-bold mb-4'">
                        <span x-text="regions[selectedRegion]?.name"></span>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900">Khách hàng tại <span x-text="regions[selectedRegion]?.name"></span></h3>
                </div>

                {{-- Customer Grid --}}
                <div class="p-8 overflow-y-auto max-h-[calc(80vh-180px)]">
                    <template x-if="selectedRegion && regions[selectedRegion]?.customers.length > 0">
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <template x-for="customer in regions[selectedRegion]?.customers" :key="customer.name">
                                <a :href="customer.url"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="bg-white rounded-xl p-6 flex flex-col items-center justify-center hover:shadow-xl transition-all duration-300 border-2 border-gray-200 hover:border-primary-500 hover:-translate-y-1 group">
                                    <img :src="customer.logo"
                                        :alt="customer.name"
                                        class="w-full h-20 object-contain mb-4 group-hover:scale-110 transition-transform duration-300">
                                    <h4 class="font-bold text-gray-900 text-center mb-1" x-text="customer.name"></h4>
                                    <div class="text-xs text-gray-500 line-clamp-2 text-center" x-text="customer.location"></div>
                                </a>
                            </template>
                        </div>
                    </template>

                    <template x-if="selectedRegion && (!regions[selectedRegion]?.customers || regions[selectedRegion]?.customers.length === 0)">
                        <div class="text-center py-12">
                            <div class="text-6xl mb-4">🏢</div>
                            <p class="text-gray-500 text-lg">Chưa có khách hàng tại khu vực này</p>
                        </div>
                    </template>
                </div>
            </div>
        </div>

        <div class="text-center mt-8">
            <a href="{{ home_url('/khach-hang') }}" class="text-md text-accent-400 italic hover:underline transition-all duration-300">Cùng nhiều khách hàng khác > </a>
        </div>
    </div>
</section>

{{-- Solutions Section with Illustrations --}}
<section class="py-20 bg-gradient-to-br from-primary-600 via-cyan-600 to-primary-700 relative overflow-hidden" data-aos="fade-up">
    {{-- Background Decoration --}}
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-accent-400/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-primary-400/20 rounded-full blur-3xl"></div>
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
                        <img src="{{ home_url() }}/img/survey.jpg"
                            alt="Khảo sát tư vấn"
                            class="w-20 h-20 rounded-full mx-auto object-cover">
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 text-center">Khảo sát & Tư vấn</h3>
                    <p class="text-white/80 text-center">Xây dựng giải pháp phù hợp với nhu cầu của Labo</p>
                </div>

                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="mb-4">
                        <img src="{{ home_url() }}/img/customize.png"
                            alt="Tuỳ biến phần mềm"
                            class="w-20 h-20 rounded-full mx-auto object-cover bg-white p-2">
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 text-center">Tuỳ biến phần mềm</h3>
                    <p class="text-white/80 text-center">Đáp ứng quy trình quản lý riêng của Labo bạn</p>
                </div>

                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300">
                    <div class="mb-4">
                        <img src="{{ home_url() }}/img/support247.jpg"
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