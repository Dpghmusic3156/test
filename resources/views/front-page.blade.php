@include('sections.header')
<style>
    html {
        scroll-behavior: auto;
    }
</style>
<div x-data="{ showFeaturesModal: false }" class="bg-gradient-to-b from-gray-50 to-white text-gray-800 relative w-full">
    {{-- Hero Section --}}
    <section class="container-block lg:min-h-screen pt-20 pb-10 px-4 md:px-8 mx-auto md:pt-28 md:pb-20 flex flex-col lg:flex-row items-center justify-between max-w-7xl" data-aos="fade-up">
        <div class="lg:w-1/2 mb-8 lg:mb-0 order-1 lg:order-1 flex flex-col justify-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-primary-100 text-primary-700 rounded-full font-semibold text-sm mb-6 w-fit" data-aos="fade-right" data-aos-delay="100">
                <span class="w-2 h-2 bg-primary-500 rounded-full animate-pulse"></span>
                Giải pháp #1 tại Việt Nam
            </div>

            <div class="font-extrabold leading-tight mb-6" data-aos="fade-right" data-aos-delay="200">
                <span class="h1 text-4xl md:text-6xl block mb-2 text-transparent bg-clip-text bg-gradient-to-r from-accent-500 to-orange-500">vDentalLab</span>
                <span class="h2 text-2xl md:text-4xl block mb-2 text-gray-900">Phần mềm Quản lý</span>
                <span class="h2 text-2xl md:text-4xl block text-transparent bg-clip-text bg-gradient-to-r from-primary-500 to-primary-600">Labo Dental</span>
            </div>

            <p class="text-lg md:text-xl text-gray-600 mb-10 max-w-lg leading-relaxed" data-aos="fade-right" data-aos-delay="300">
                Hơn <a href="{{ home_url('/khach-hang') }}" class="font-bold text-accent-500">200+ Lab</a> đã cài đặt & sử dụng hàng ngày cho hoạt động sản xuất kinh doanh.
            </p>

            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 mb-8 lg:mb-12" data-aos="fade-right" data-aos-delay="400">
                <a href="{{ home_url('/phan-mem-dental-lab-mien-phi/') }}"
                    class="group relative inline-flex items-center justify-center gap-2 bg-gradient-to-r from-accent-500 to-orange-500 hover:from-accent-600 hover:to-orange-600 text-white font-bold px-10 py-5 rounded-xl transition-all duration-300 shadow-lg shadow-accent-500/30 hover:shadow-2xl hover:shadow-accent-500/50 transform hover:-translate-y-1">
                    <span>Dùng thử miễn phí</span>
                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>

                <button @click="showFeaturesModal = true"
                    class="inline-flex items-center justify-center gap-2 px-8 py-5 border-2 border-accent-300 text-accent-600 rounded-xl hover:bg-accent-100 hover:border-accent-400 transition-all duration-300 font-semibold">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                    </svg>
                    Chức năng nổi bật
                </button>
            </div>


        </div>

        {{-- Hero Image --}}
        <div class="lg:w-1/2 relative order-2 lg:order-2 mb-8 lg:mb-0 flex justify-center items-center">
            <div class="relative rounded-2xl overflow-hidden transform hover:scale-105 transition-transform duration-500">
                <img class="w-full h-auto max-h-[30vh] lg:max-h-none object-cover" src="{{ home_url('/wp-content/uploads/2019/07/iMac_left-min-6.png') }}" alt="vDentalLab Interface">

            </div>

            {{-- Floating Social Proof Card --}}
            <div class="absolute -bottom-20 right-2 lg:-bottom-8 lg:-left-8 lg:right-auto bg-white rounded-2xl shadow-2xl p-4 lg:p-6 border border-primary-100 scale-85 lg:scale-100 animate-floating" data-aos="fade-up">
                {{-- Customer Avatars --}}
                <div class="flex -space-x-3 mb-3">
                    <a href="/khach-hang" class="block transition-transform hover:scale-110 hover:z-10">
                        <img class="w-12 h-12 rounded-full border-4 border-white shadow-md hover:brightness-110" src="https://phanmemlabo.com/wp-content/uploads/2024/05/logo_new_smile_lab-removebg-XdclsaZoxPJDTfvxl2Ub.png" alt="Customer">
                    </a>
                    <a href="/khach-hang" class="block transition-transform hover:scale-110 hover:z-10">
                        <img class="w-12 h-12 rounded-full border-4 border-white shadow-md hover:brightness-110" src="https://phanmemlabo.com/wp-content/uploads/2024/05/z5276532952194_2d396fbde325544879a50e96744952bd.jpg" alt="Customer">
                    </a>
                    <a href="/khach-hang" class="block transition-transform hover:scale-110 hover:z-10">
                        <img class="w-12 h-12 rounded-full border-4 border-white shadow-md hover:brightness-110" src="https://phanmemlabo.com/wp-content/uploads/2024/05/logo-medical-lab-SgYwbApXgrbxnByVNadu.jpg" alt="Customer">
                    </a>
                    <a href="/khach-hang" class="block transition-transform hover:scale-110 hover:z-10">
                        <img class="w-12 h-12 rounded-full border-4 border-white shadow-md hover:brightness-110" src="https://www.phanmemlabo.com/wp-content/uploads/2021/03/ceo-huu-nguyen.png" alt="Customer">
                    </a>
                    <a href="/khach-hang" class="block transition-transform hover:scale-110 hover:z-10">
                        <img class="w-12 h-12 rounded-full border-4 border-white shadow-md hover:brightness-110" src="https://www.phanmemlabo.com/wp-content/uploads/2021/03/ceo-thanh-tuan.png" alt="Customer">
                    </a>
                </div>

                {{-- Text --}}
                <p class="text-sm lg:text-base text-gray-700 font-semibold">Được <span class="text-accent-500 font-bold">200+ labs</span> tin dùng</p>
            </div>
        </div>


    </section>

    {{-- Testimonials Section - Teal/Cyan Theme --}}
    <section class="container-block py-8 md:py-24 relative overflow-hidden lg:min-h-screen flex flex-col justify-center pt-20">
        {{-- Background decorative elements --}}


        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            {{-- Header --}}
            <div class="text-center mb-8 md:mb-16">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                    Phản hồi từ khách hàng
                </h2>
                <p class="text-lg md:text-xl text-gray-900/80 max-w-3xl mx-auto">
                    <span class="text-accent-500 font-bold">Chúng tôi</span> muốn đóng góp vào sự phát triển của <span class="text-accent-500 font-bold">ngành Labo Nha khoa Việt Nam</span>
                </p>
            </div>

            {{-- Testimonials Grid --}}
            <div x-data="{ 
                activeSlide: 0, 
                scroll() { 
                    const scrollLeft = this.$refs.slider.scrollLeft;
                    const width = this.$refs.slider.offsetWidth;
                    // Calculate active slide based on scroll position (approximate for 85vw items)
                    this.activeSlide = Math.round(scrollLeft / (width * 0.8));
                },
                scrollTo(index) {
                    const width = this.$refs.slider.offsetWidth;
                    // Scroll to approx position (index * 85% of width + gap adjustment)
                    // Or let snap-center handle the precision
                    // Finding the child element would be better, but this is a quick valid approximation with snap
                    // Better: standard scroll assuming uniform items
                    // Let's use simpler logic: 
                    // Item width is roughly 85vw = width * 0.85 (since container is 100vw effectively with negative margins)
                    // Actually container allows overflow.
                    // Let's rely on scrollWidth / 3.
                    const itemWidth = this.$refs.slider.scrollWidth / 3;
                    this.$refs.slider.scrollTo({ left: index * itemWidth, behavior: 'smooth' });
                }
            }" class="relative">
                <style>
                    /* Hide scrollbar for Chrome, Safari and Opera */
                    .no-scrollbar::-webkit-scrollbar {
                        display: none;
                    }

                    /* Hide scrollbar for IE, Edge and Firefox */
                    .no-scrollbar {
                        -ms-overflow-style: none;
                        /* IE and Edge */
                        scrollbar-width: none;
                        /* Firefox */
                    }
                </style>
                <div x-ref="slider" @scroll.debounce.10ms="scroll()" class="flex md:grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 lg:gap-8 overflow-x-auto md:overflow-visible pb-4 md:pb-0 -mx-4 px-4 md:mx-0 md:px-0 no-scrollbar">
                    {{-- Testimonial 1 --}}
                    <div class="min-w-[85vw] md:min-w-0 bg-white/95 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/20 hover:border-accent-300 transition-all duration-300 hover:shadow-2xl hover:shadow-accent-500/20 shadow-lg">
                        {{-- Avatar --}}
                        <div class="mb-6">
                            <img class="w-20 h-20 rounded-full object-cover ring-4 ring-primary-200" src="https://www.phanmemlabo.com/wp-content/uploads/2021/03/ceo-huu-nguyen.png" alt="Ms. Linh">
                        </div>

                        {{-- Name & Title --}}
                        <div class="mb-4">
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Ms. Linh</h3>
                            <p class="text-sm text-primary-600">CEO, Labo Hữu Nguyên</p>
                        </div>

                        {{-- Testimonial text --}}
                        <p class="text-gray-700 leading-relaxed">
                            Phần mềm giúp tôi quản lý chặt chẽ quy trình sản xuất và các kỹ thuật viên. Tôi đã cải thiện hoàn toàn việc quản lý và tiết kiệm thời gian đáng kể.
                        </p>
                    </div>

                    {{-- Testimonial 2 --}}
                    <div class="min-w-[85vw] md:min-w-0 bg-white/95 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/20 hover:border-accent-300 transition-all duration-300 hover:shadow-2xl hover:shadow-accent-500/20 shadow-lg">
                        <div class="mb-6">
                            <img class="w-20 h-20 rounded-full object-cover ring-4 ring-accent-200" src="https://www.phanmemlabo.com/wp-content/uploads/2021/03/ceo-thanh-tuan.png" alt="Alan Nguyễn">
                        </div>

                        <div class="mb-4">
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Alan Nguyễn</h3>
                            <p class="text-sm text-primary-600">CEO, Labo Thành Tuấn</p>
                        </div>

                        <p class="text-gray-700 leading-relaxed">
                            Tôi sử dụng phần mềm ngay từ ngày đầu thành lập Labo. Quản lý đơn hàng rất dễ dàng, đặc biệt là khả năng tra cứu lịch sử và kiểm soát hàng trễ hiệu quả.
                        </p>
                    </div>

                    {{-- Testimonial 3 --}}
                    <div class="min-w-[85vw] md:min-w-0 bg-white/95 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/20 hover:border-accent-300 transition-all duration-300 hover:shadow-2xl hover:shadow-accent-500/20 shadow-lg">
                        <div class="mb-6">
                            <img class="w-20 h-20 rounded-full object-cover ring-4 ring-cyan-200" src="https://www.phanmemlabo.com/wp-content/uploads/2021/03/ceo-westcost.png" alt="Dr. Andrew Tsang">
                        </div>

                        <div class="mb-4">
                            <h3 class="text-xl font-bold text-gray-900 mb-1">Dr. Andrew Tsang</h3>
                            <p class="text-sm text-primary-600">CEO, Labo Westcoast</p>
                        </div>

                        <p class="text-gray-700 leading-relaxed">
                            Sau khi thử nhiều phần mềm nước ngoài, tôi chuyển qua vDentalLab vì phù hợp với đặc thù Việt Nam. Hỗ trợ tốt việc tính lương và quản lý vật liệu.
                        </p>
                    </div>
                </div>

                {{-- Slider Dots (Mobile Only) --}}
                <div class="flex md:hidden justify-center items-center gap-2 mt-4">
                    <template x-for="i in 3">
                        <button class="h-2 rounded-full transition-all duration-300"
                            :class="activeSlide === i-1 ? 'w-8 bg-accent-500' : 'w-2 bg-gray-300 hover:bg-gray-400'"
                            @click="scrollTo(i-1)">
                        </button>
                    </template>
                </div>
            </div>
        </div>
    </section>

    {{-- Version 2 Introduction Section --}}
    <section class="container-block py-2 md:py-6 lg:pt-20 lg:pb-4 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden lg:min-h-screen flex flex-col justify-center scroll-mt-24 pb-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid lg:grid-cols-2 gap-4 lg:gap-x-12 lg:gap-y-2 items-center">
                {{-- 1. Header Info: Desktop Col 1, Row 1 --}}
                <div class="lg:col-start-1 lg:row-start-1" data-aos="fade-right">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-accent-100 text-accent-700 rounded-full font-semibold text-xs mb-2 md:mb-4 w-fit">
                        <span class="w-2 h-2 bg-accent-500 rounded-full animate-pulse"></span>
                        Phiên bản mới
                    </div>

                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-gray-900 mb-2 leading-tight">
                        Trải nghiệm phiên bản mới của chúng tôi <br>
                        <img src="{{ home_url('/wp-content/uploads/2026/01/logo.png') }}" alt="DentalSO Logo" class="h-12 w-auto my-5 block">
                    </h2>

                    <p class="text-xs md:text-base text-gray-600 mb-4 leading-relaxed">
                        Phiên bản nâng cấp toàn diện mang đến sức mạnh quản lý vượt trội. Tối ưu hóa quy trình, nâng cao trải nghiệm người dùng.
                    </p>
                </div>

                {{-- 2. Image: Desktop Col 2, Row 1-2 (Spans height) --}}
                <div class="lg:col-start-2 lg:row-start-1 lg:row-span-2 relative" data-aos="fade-left">
                    <div class="m-6 relative">
                        <div class="absolute -inset-4 bg-gradient-to-r from-primary-600 to-cyan-500 rounded-2xl blur-lg opacity-30 animate-pulse"></div>
                        <img src="{{ home_url('/wp-content/uploads/2026/01/lab.png') }}"
                            alt="vDentalLab V2 Interface"
                            class="p-2 md:p-4 relative rounded-2xl shadow-2xl object-cover border border-gray-200 max-h-[35vh] lg:max-h-[45vh] w-auto mx-auto">

                        {{-- Floating Badge --}}
                        <div class="absolute -bottom-6 -right-6 bg-white p-3 rounded-xl shadow-xl border border-gray-100 animate-bounce hidden md:block">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500">Trạng thái</p>
                                    <p class="font-bold text-gray-900 text-sm">Sẵn sàng dùng</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Button to V2 Site (Desktop Only) --}}
                    {{-- Button removed --}}
                </div>

                {{-- 3. Features List: Desktop Col 1, Row 2 --}}
                <div class="lg:col-start-1 lg:row-start-2 space-y-2 md:space-y-3" data-aos="fade-right" data-aos-delay="100">
                    {{-- Feature 1 --}}
                    <div class="flex items-start gap-3 p-2 md:p-3 rounded-xl hover:bg-white hover:shadow-lg transition-all duration-300 border border-transparent hover:border-gray-100">
                        <div class="flex-shrink-0 w-8 h-8 md:w-10 md:h-10 rounded-lg bg-primary-100 flex items-center justify-center text-primary-600">
                            <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm md:text-lg font-bold text-gray-900 mb-0.5 md:mb-1">Quản lý trên Mobile</h3>
                            <p class="text-xs md:text-sm text-gray-600">Theo dõi tiến độ, duyệt đơn hàng và xem báo cáo mọi lúc mọi nơi.</p>
                        </div>
                    </div>

                    {{-- Feature 2 --}}
                    <div class="flex items-start gap-3 p-2 md:p-3 rounded-xl hover:bg-white hover:shadow-lg transition-all duration-300 border border-transparent hover:border-gray-100">
                        <div class="flex-shrink-0 w-8 h-8 md:w-10 md:h-10 rounded-lg bg-cyan-100 flex items-center justify-center text-cyan-600">
                            <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm md:text-lg font-bold text-gray-900 mb-0.5 md:mb-1">Giao diện Thân thiện</h3>
                            <p class="text-xs md:text-sm text-gray-600">Thiết kế UI/UX hiện đại, trực quan giúp thao tác nhanh chóng.</p>
                        </div>
                    </div>

                    {{-- Feature 3 --}}
                    <div class="flex items-start gap-3 p-2 md:p-3 rounded-xl hover:bg-white hover:shadow-lg transition-all duration-300 border border-transparent hover:border-gray-100">
                        <div class="flex-shrink-0 w-8 h-8 md:w-10 md:h-10 rounded-lg bg-accent-100 flex items-center justify-center text-accent-600">
                            <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm md:text-lg font-bold text-gray-900 mb-0.5 md:mb-1">Truy cập mọi lúc, mọi nơi</h3>
                            <p class="text-xs md:text-sm text-gray-600">Tốc độ xử lý nhanh gấp 2 lần, ổn định hơn trên mọi nền tảng.</p>
                        </div>
                    </div>

                    {{-- Button to V2 Site--}}
                    <div class="pt-4 pl-4 flex justify-center lg:justify-start">
                        <a href="https://dentalso.com/" target="_blank" class="inline-flex items-center gap-2 bg-gradient-to-r from-accent-500 to-orange-500 hover:from-accent-600 hover:to-orange-600 text-white font-bold px-6 py-2.5 rounded-xl transition-all duration-300 shadow-lg shadow-accent-500/30 hover:shadow-xl hover:-translate-y-1 text-sm md:text-base">
                            <span>Truy cập DentalSO</span>

                        </a>
                    </div>


                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="container-block py-12 md:py-20 bg-gradient-to-br from-primary-600 via-cyan-600 to-primary-700 relative overflow-hidden lg:min-h-screen flex flex-col justify-center">
        {{-- Background decoration --}}
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-accent-400/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-primary-400/20 rounded-full blur-3xl"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 w-full">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6" data-aos="fade-up">
                Sẵn sàng để bắt đầu?
            </h2>
            <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Tham gia cùng 200+ Lab hàng đầu đang sử dụng vDentalLab mỗi ngày
            </p>
            <a href="{{ home_url('/phan-mem-dental-lab-mien-phi/') }}"
                class="inline-flex items-center gap-2 bg-gradient-to-r from-accent-500 to-orange-500 hover:from-accent-600 hover:to-orange-600 text-white font-bold px-6 py-4 rounded-xl transition-all duration-300 shadow-lg shadow-accent-500/30 hover:shadow-2xl hover:shadow-accent-500/50 transform hover:-translate-y-1 text-md"
                data-aos="fade-up" data-aos-delay="200">
                <span>Dùng thử miễn phí</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </section>
    {{-- Footer manually included inside snap container --}}
    <div class="container-block">
        @include('sections.footer')
    </div>

    {{-- Features Modal with x-teleport --}}
    <template x-teleport="body">
        <div x-show="showFeaturesModal"
            style="display: none;"
            class="fixed inset-0 z-[9999] overflow-y-auto"
            aria-labelledby="modal-title
            role=" dialog"
            aria-modal="true"
            x-init="$watch('showFeaturesModal', value => document.body.classList.toggle('overflow-hidden', value))">

            {{-- Backdrop --}}
            <div x-show="showFeaturesModal"
                x-transition:enter="transition-opacity ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity"
                @click="showFeaturesModal = false"></div>

            {{-- Modal Content --}}
            <div class="flex min-h-full items-center justify-center p-4">
                <div x-show="showFeaturesModal"
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="relative bg-white rounded-2xl shadow-2xl max-w-2xl w-full p-8 transform transition-all">

                    {{-- Close Button --}}
                    <button @click="showFeaturesModal = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                    {{-- Header --}}
                    <div class="text-center mb-8">
                        <h3 class="text-3xl font-bold text-gray-900 mb-2">Chức năng nổi bật</h3>
                        <p class="text-gray-600">Giải pháp toàn diện cho Labo Nha khoa</p>
                    </div>

                    {{-- Features Grid --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-h-[60vh] overflow-y-auto pr-2 custom-scrollbar">
                        {{-- Row 1 --}}
                        <div class="flex items-center gap-3 p-4 bg-primary-50 rounded-xl hover:bg-primary-100 transition-all duration-200 group cursor-default">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-primary-500 text-white group-hover:scale-110 transition-transform">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Quản lý đơn hàng Labo</span>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-secondary-50 rounded-xl hover:bg-secondary-100 transition-all duration-200 group cursor-default">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-secondary-500 text-white group-hover:scale-110 transition-transform">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Theo dõi lịch giao hàng</span>
                        </div>

                        {{-- Row 2 --}}
                        <div class="flex items-center gap-3 p-4 bg-accent-50 rounded-xl hover:bg-accent-100 transition-all duration-200 group cursor-default">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-accent-500 text-white group-hover:scale-110 transition-transform">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Theo dõi sản lượng</span>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-primary-50 rounded-xl hover:bg-primary-100 transition-all duration-200 group cursor-default">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-primary-500 text-white group-hover:scale-110 transition-transform">
                                <i class="fas fa-file-medical"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Phiếu chỉ định</span>
                        </div>

                        {{-- Row 3 --}}
                        <div class="flex items-center gap-3 p-4 bg-secondary-50 rounded-xl hover:bg-secondary-100 transition-all duration-200 group cursor-default">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-secondary-500 text-white group-hover:scale-110 transition-transform">
                                <i class="fas fa-images"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Hình ảnh đính kèm</span>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-accent-50 rounded-xl hover:bg-accent-100 transition-all duration-200 group cursor-default">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-accent-500 text-white group-hover:scale-110 transition-transform">
                                <i class="fas fa-file-invoice-dollar"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Công nợ</span>
                        </div>

                        {{-- Row 4 --}}
                        <div class="flex items-center gap-3 p-4 bg-primary-50 rounded-xl hover:bg-primary-100 transition-all duration-200 group cursor-default">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-primary-500 text-white group-hover:scale-110 transition-transform">
                                <i class="fas fa-receipt"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Hoá đơn cuối tháng</span>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-secondary-50 rounded-xl hover:bg-secondary-100 transition-all duration-200 group cursor-default">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-secondary-500 text-white group-hover:scale-110 transition-transform">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Thu - Chi</span>
                        </div>

                        {{-- Row 5 --}}
                        <div class="flex items-center gap-3 p-4 bg-accent-50 rounded-xl hover:bg-accent-100 transition-all duration-200 group cursor-default">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-accent-500 text-white group-hover:scale-110 transition-transform">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Doanh số</span>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-primary-50 rounded-xl hover:bg-primary-100 transition-all duration-200 group cursor-default">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-primary-500 text-white group-hover:scale-110 transition-transform">
                                <i class="fas fa-tags"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Bảng giá</span>
                        </div>

                        {{-- Row 6 --}}
                        <div class="flex items-center gap-3 p-4 bg-secondary-50 rounded-xl hover:bg-secondary-100 transition-all duration-200 group cursor-default">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-secondary-500 text-white group-hover:scale-110 transition-transform">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Năng suất</span>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-accent-50 rounded-xl hover:bg-accent-100 transition-all duration-200 group cursor-default">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-accent-500 text-white group-hover:scale-110 transition-transform">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Hàng lỗi</span>
                        </div>

                        {{-- Row 7 --}}
                        <div class="flex items-center gap-3 p-4 bg-primary-50 rounded-xl hover:bg-primary-100 transition-all duration-200 group cursor-default">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-primary-500 text-white group-hover:scale-110 transition-transform">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Tiến độ sản xuất</span>
                        </div>

                        <div class="flex items-center gap-3 p-4 bg-secondary-50 rounded-xl hover:bg-secondary-100 transition-all duration-200 group cursor-default">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-secondary-500 text-white group-hover:scale-110 transition-transform">
                                <i class="fas fa-clock"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Hàng trễ</span>
                        </div>

                        {{-- Row 8 --}}
                        <div class="flex items-center gap-3 p-4 bg-accent-50 rounded-xl hover:bg-accent-100 transition-all duration-200 group cursor-default">
                            <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-accent-500 text-white group-hover:scale-110 transition-transform">
                                <i class="fas fa-barcode"></i>
                            </div>
                            <span class="text-gray-800 font-semibold">Quản lý bằng mã vạch</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
</div>

<!-- Alpine.js -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

{{-- AOS Animation Init --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/gsap@3.12.2/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/gsap@3.12.2/dist/ScrollToPlugin.min.js"></script>

<script>
    gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

    document.addEventListener('DOMContentLoaded', () => {
        const blocks = document.querySelectorAll('.container-block');
        if (blocks.length === 0) return;

        let isScrolling = false;
        let currentIndex = 0;

        // Track accumulated delta to require "intent"
        let accumulatedDelta = 0;
        const scrollThreshold = 150; // Threshold to trigger scroll (higher = harder to trigger)
        let resetDeltaTimeout;

        function scrollToBlock(index) {
            if (index < 0 || index >= blocks.length) return;
            isScrolling = true;

            // Reset accumulated delta when starting a scroll
            accumulatedDelta = 0;

            gsap.to(window, {
                scrollTo: {
                    y: blocks[index],
                    autoKill: false
                },
                duration: 1,
                ease: "power2.inOut",
                onComplete: () => {
                    isScrolling = false;
                }
            });
        }

        function handleScroll(event) {
            // Disable custom scroll snapping on smaller screens
            if (window.innerWidth < 1024) return;

            // Check if modal is open (body has overflow-hidden class)
            if (document.body.classList.contains('overflow-hidden')) {
                return;
            }

            // Prevent default to control scroll
            event.preventDefault();

            if (isScrolling) return;

            // Reset accumulator if paused
            clearTimeout(resetDeltaTimeout);
            resetDeltaTimeout = setTimeout(() => {
                accumulatedDelta = 0;
            }, 100);

            // Accumulate
            accumulatedDelta += event.deltaY;

            // Check threshold
            if (Math.abs(accumulatedDelta) < scrollThreshold) return;

            if (accumulatedDelta > 0) {
                // Scrolling down
                if (currentIndex < blocks.length - 1) {
                    currentIndex++;
                    scrollToBlock(currentIndex);
                }
            } else if (accumulatedDelta < 0) {
                // Scrolling up
                if (currentIndex > 0) {
                    currentIndex--;
                    scrollToBlock(currentIndex);
                }
            }

            // Reset after trigger
            accumulatedDelta = 0;
        }

        // Use passive: false to allow preventDefault
        window.addEventListener('wheel', handleScroll, {
            passive: false
        });

        // Optional: Update currentIndex based on manual scroll/resize
        // Using ScrollTrigger to track which block is in view
        blocks.forEach((block, i) => {
            ScrollTrigger.create({
                trigger: block,
                start: "top center",
                end: "bottom center",
                onEnter: () => currentIndex = i,
                onEnterBack: () => currentIndex = i
            });
        });
    });
</script>
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });
</script>