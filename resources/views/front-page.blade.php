@extends('layouts.app')

@section('content')

<div class="bg-gradient-to-b from-gray-50 to-white text-gray-800 overflow-x-hidden relative">
    {{-- Hero Section --}}
    <section class="min-h-screen pt-28 pb-20 px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between max-w-7xl mx-auto" data-aos="fade-up">
        <div class="lg:w-1/2 mb-16 lg:mb-0 order-1 lg:order-1 flex flex-col">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-primary-100 text-primary-700 rounded-full font-semibold text-sm mb-6 w-fit" data-aos="fade-right" data-aos-delay="100">
                <span class="w-2 h-2 bg-primary-500 rounded-full animate-pulse"></span>
                Giải pháp #1 tại Việt Nam
            </div>

            <div class="font-extrabold leading-tight mb-6" data-aos="fade-right" data-aos-delay="200">
                <span class="text-6xl block mb-2 text-transparent bg-clip-text bg-gradient-to-r from-accent-500 to-orange-500">vDentalLab</span>
                <span class="text-4xl block mb-2 text-gray-900">Phần mềm Quản lý</span>
                <span class="text-4xl block text-transparent bg-clip-text bg-gradient-to-r from-primary-500 to-primary-600">Labo Dental</span>
            </div>

            <p class="text-lg md:text-xl text-gray-600 mb-10 max-w-lg leading-relaxed" data-aos="fade-right" data-aos-delay="300">
                Hơn <span class="font-bold text-accent-500">200+ Lab</span> đã cài đặt & sử dụng hàng ngày cho hoạt động sản xuất kinh doanh.
            </p>

            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 mb-12" data-aos="fade-right" data-aos-delay="400">
                <a href="{{ home_url('/') }}/phan-mem-dental-lab-mien-phi/"
                    class="group relative inline-flex items-center justify-center gap-2 bg-gradient-to-r from-accent-500 to-orange-500 hover:from-accent-600 hover:to-orange-600 text-white font-bold px-10 py-5 rounded-xl transition-all duration-300 shadow-lg shadow-accent-500/30 hover:shadow-2xl hover:shadow-accent-500/50 transform hover:-translate-y-1">
                    <span>Dùng thử miễn phí</span>
                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>

                <button id="openFeaturesBtn"
                    class="inline-flex items-center justify-center gap-2 px-8 py-5 border-2 border-accent-300 text-accent-600 rounded-xl hover:bg-accent-100 hover:border-accent-400 transition-all duration-300 font-semibold">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                    </svg>
                    Chức năng nổi bật
                </button>
            </div>


        </div>

        {{-- Hero Image --}}
        <div class="lg:w-1/2 relative order-2 lg:order-2 mb-12 lg:mb-0" data-aos="fade-left" data-aos-delay="300">
            <div class="relative rounded-2xl overflow-hidden transform hover:scale-105 transition-transform duration-500">
                <img class="w-full h-auto object-cover" src="{{ home_url('/') }}/wp-content/uploads/2019/07/iMac_left-min-6.png" alt="vDentalLab Interface">

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
    <section class="py-24  relative overflow-hidden">
        {{-- Background decorative elements --}}


        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            {{-- Header --}}
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                    Phản hồi từ khách hàng
                </h2>
                <p class="text-lg md:text-xl text-gray-900/80 max-w-3xl mx-auto">
                    <span class="text-accent-500 font-bold">Chúng tôi</span> muốn đóng góp vào sự phát triển của <span class="text-accent-500 font-bold">ngành Labo Nha khoa Việt Nam</span>
                </p>
            </div>

            {{-- Testimonials Grid --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                {{-- Testimonial 1 --}}
                <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:border-accent-300 transition-all duration-300 hover:shadow-2xl hover:shadow-accent-500/20 shadow-lg" data-aos="fade-up" data-aos-delay="100">
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
                <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:border-accent-300 transition-all duration-300 hover:shadow-2xl hover:shadow-accent-500/20 shadow-lg" data-aos="fade-up" data-aos-delay="200">
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
                <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:border-accent-300 transition-all duration-300 hover:shadow-2xl hover:shadow-accent-500/20 shadow-lg" data-aos="fade-up" data-aos-delay="300">
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
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-20 bg-gradient-to-br from-primary-600 via-cyan-600 to-primary-700 relative overflow-hidden">
        {{-- Background decoration --}}
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-accent-400/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-primary-400/20 rounded-full blur-3xl"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Sẵn sàng để bắt đầu?
            </h2>
            <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto">
                Tham gia cùng 200+ Lab hàng đầu đang sử dụng vDentalLab mỗi ngày
            </p>
            <a href="{{ home_url('/') }}/phan-mem-dental-lab-mien-phi/"
                class="inline-flex items-center gap-2 bg-gradient-to-r from-accent-500 to-orange-500 hover:from-accent-600 hover:to-orange-600 text-white font-bold px-6 py-4 rounded-xl transition-all duration-300 shadow-lg shadow-accent-500/30 hover:shadow-2xl hover:shadow-accent-500/50 transform hover:-translate-y-1 text-md">
                <span>Dùng thử miễn phí</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </section>
</div>

{{-- Features Modal --}}
<div id="featuresModal"
    style="display: none;"
    class="fixed inset-0 z-50 overflow-y-auto"
    aria-labelledby="modal-title"
    role="dialog"
    aria-modal="true">
    {{-- Backdrop --}}
    <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity" id="modalBackdrop"></div>

    {{-- Modal Content --}}
    <div class="flex min-h-full items-center justify-center p-4">
        <div class="relative bg-white rounded-2xl shadow-2xl max-w-2xl w-full p-8 transform transition-all">
            {{-- Close Button --}}
            <button id="closeModalBtn" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition">
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
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-h-96 overflow-y-auto pr-2">
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

{{-- AOS Animation Init --}}
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });

    // Script chuc nang noi bat
    document.addEventListener('DOMContentLoaded', function() {
        const openBtn = document.getElementById('openFeaturesBtn');
        const modal = document.getElementById('featuresModal');
        const closeBtn = document.getElementById('closeModalBtn');
        const backdrop = document.getElementById('modalBackdrop');

        // Open modal
        if (openBtn) {
            openBtn.addEventListener('click', function() {
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden'; // Prevent scrolling
            });
        }

        // Close modal
        function closeModal() {
            modal.style.display = 'none';
            document.body.style.overflow = ''; // Restore scrolling
        }

        if (closeBtn) {
            closeBtn.addEventListener('click', closeModal);
        }

        if (backdrop) {
            backdrop.addEventListener('click', closeModal);
        }

        // Close on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && modal.style.display === 'block') {
                closeModal();
            }
        });
    });
</script>

@endsection