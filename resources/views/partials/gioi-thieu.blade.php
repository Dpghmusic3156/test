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
    window.vietnamMapData = {
        !!json_encode($regions_data) !!
    };
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
                {{-- Map Image --}}
                <img src="{{ home_url() }}/wp-content/themes/test/resources/images/vietnam-map.png"
                    alt="Bản đồ Việt Nam"
                    class="w-full h-auto drop-shadow-lg">

                {{-- SVG Clickable Regions --}}
                <svg viewBox="0 0 400 1080" class="absolute inset-0 w-full h-full">
                    {{-- North Region (Red/Pink) - Upper portion --}}
                    <path
                        @click="openRegion('north')"
                        class="cursor-pointer hover:opacity-50 transition-opacity duration-200"
                        fill="transparent"
                        d="M 0,0 L 400,0 L 400,360 L 220,360 Q 200,370 180,360 L 0,360 Z"
                        stroke="rgba(239, 68, 68, 0.3)"
                        stroke-width="2">
                        <title>Miền Bắc - Click để xem khách hàng</title>
                    </path>

                    {{-- Central Region (Yellow/Green) - Middle portion --}}
                    <path
                        @click="openRegion('central')"
                        class="cursor-pointer hover:opacity-50 transition-opacity duration-200"
                        fill="transparent"
                        d="M 0,360 L 220,360 Q 240,390 260,420 L 400,740 L 400,760 L 360,760 L 0,760 Z"
                        stroke="rgba(234, 179, 8, 0.3)"
                        stroke-width="2">
                        <title>Miền Trung - Click để xem khách hàng</title>
                    </path>

                    {{-- South Region (Blue) - Lower portion --}}
                    <path
                        @click="openRegion('south')"
                        class="cursor-pointer hover:opacity-50 transition-opacity duration-200"
                        fill="transparent"
                        d="M 0,760 L 360,760 L 400,760 L 400,1080 L 0,1080 Z"
                        stroke="rgba(59, 130, 246, 0.3)"
                        stroke-width="2">
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