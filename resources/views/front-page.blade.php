@extends('layouts.app')

@section('content')

<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <img src="https://dentalso.com/vi/wp-content/uploads/2024/08/dentallab-banner.jpg" alt="Slide 1"
                class="object-cover">
            <div class="slide-banner">
                <div class="banner-left">
                    <h2 class="text-[rgb(var(--primary-color-1))]" id="banner-title1"> Quản lý Dental lab</h2>
                    <p>Quản lý toàn diện - Tối ưu quy trình sản xuất</p>
                    <a href="#" class="banner-btn1">Đăng ký Demo</a>
                </div>
                <div class="banner-right">
                    <img src="https://dentalso.com/vi/wp-content/uploads/2024/08/lab.png" alt="Banner Image 1">
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="https://dentalso.com/vi/wp-content/uploads/2024/08/clinic-banner.jpg" alt="Slide 2"
                class="object-cover">
            <div class="slide-banner">
                <div class="banner-left">
                    <h2 class="text-[rgb(var(--primary-color-2))]" id="banner-title2">Quản lý nha khoa</h2>
                    <p>Chuyển đổi số đơn giản - Chăm sóc bênh nhân tự động</p>
                    <a href="#" class="banner-btn2">Tìm hiểu thêm</a>
                </div>
                <div class="banner-right">
                    <img src="https://dentalso.com/vi/wp-content/uploads/2024/08/clinic.png" alt="Banner Image 2">
                </div>
            </div>
        </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
    tffftftftfftftf
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
<section class="py-16">
    <div class="container text-center">
        <p class="mb-10 text-3xl lg:text-4xl leading-normal" data-aos="fade-up">Ứng dụng quản trị
            doanh nghiệp toàn diện cho ngành Nha</p>
        <div class="grid lg:grid-cols-3 gap-8 text-xl">
            <div data-aos="fade-up">
                <span class="material-symbols-outlined align-text-bottom text-primary-500 mr-2">
                    check_circle
                </span>
                Thiết kế chuyên cho ngành Nha
            </div>
            <div data-aos="fade-up" data-aos-delay="100">
                <span class="material-symbols-outlined align-text-bottom text-primary-500 mr-2">
                    check_circle
                </span> Đầy đủ chức năng - Dễ sử dụng
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <span class="material-symbols-outlined align-text-bottom text-primary-500 mr-2">
                    check_circle
                </span> Hơn 300 doanh nghiệp tin dùng
            </div>
        </div>
    </div>
</section>

<!-- 2 card -->
<section class="container grid lg:grid-cols-2 lg:gap-2 text-center">
    <div class="bg-[rgba(var(--primary-color-1-rgb),0.8)] py-16 px-2 lg:px-16 text-white rounded-2xl"
        style="background-color: rgba(var(--primary-color-1-rgb), 0.8);">
        <a class="text-3xl leading-snug text-white" data-aos="fade-up"
            href="https://dentalso.com/vi/quan-ly-dental-lab">
            Quản lý toàn diện Dental Lab
        </a>
        <ul class="list-type-none sub-text-2 pb-10 text-lg">
            <li class="inline-flex items-center" data-aos="fade-up" data-aos-delay="200">
                <a class="text-white" href="https://dentalso.com/vi/so-hoa-va-toi-uu-quy-trinh-san-xuat/">Số hoá và tối
                    ưu quy trình sản
                    xuất. Tạo môi trường làm việc công bằng</a>
            </li>
            <li class="inline-flex items-center" data-aos="fade-up" data-aos-delay="400">
                <a class="text-white" href="https://dentalso.com/vi/phoi-hop-lam-viec-va-ket-noi-giua-cac-bo-phan/">Phối
                    hợp làm việc và
                    kết nối giữa các bộ phận. Tăng hiệu quả chung cho Lab</a>
            </li>
            <li class="inline-flex items-center" data-aos="fade-up" data-aos-delay="400">
                Chăm sóc khách hàng và đáp ứng kỳ vọng của khách hàng tốt hơn
            </li>
        </ul>
        <img class="img-fluid mb-4" height="150px" src="https://dentalso.com/vi/wp-content/uploads/2024/07/dental.png"
            data-aos="fade-up">
    </div>
    <a class="bg-[rgba(var(--primary-color-2-rgb),0.2)] py-16 px-2 lg:px-16 rounded-2xl"
        style="background-color: rgba(var(--primary-color-2-rgb), 0.2);"
        href="https://dentalso.com/vi/ket-noi-voi-nha-khoa/">
        <p class="text-3xl leading-loose" data-aos="fade-up">
            Kết nối với nha khoa
        </p>
        <ul class="list-type-none sub-text-2 pb-10 text-lg">
            <li class="inline-flex items-center" data-aos="fade-up" data-aos-delay="200">
                Đặt hàng nhanh, Theo dõi đơn hàng theo thời gian thực
            </li>
            <li data-aos="fade-up" data-aos-delay="400" class="inline-flex items-center">
                Không còn chờ đợi, không còn sai sót, không còn khoảng cách giữa Labo với nha khoa
            </li>
        </ul>
        <img class="img-fluid mb-4" data-aos="fade-up" height="150px"
            src="https://dentalso.com/vi/wp-content/uploads/2022/07/clinic.png">
    </a>
</section>
<section class="relative py-20">
    <div class="container text-center ">
        <a class="container text-center text-2xl leading-normal aos-init aos-animate">
            <ul data-aos="fade-up">Cung cấp môi trường giao tiếp online giữa Nha khoa và Lab</ul>
            <ul data-aos="fade-up">Tiết kiệm thời gian, bảo mật thông tin bệnh nhân</ul>
            <ul data-aos="fade-up">Thông tin & hình ảnh được lưu trữ theo từng đơn hàng</ul>
        </a>
        <div> <img class="mx-auto mt-10 aos-init aos-animate "
                src="http://localhost:8080/test/wp-content/uploads/2025/17/bannerdentalso.png" data-aos="fade-up">
        </div>
    </div>
</section>



<!-- Dental Lab Features Section -->
<section class="py-16 lg:py-24 bg-gradient-to-br from-slate-50 via-white to-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12">

            <!-- Card 1: Dental Lab Management -->
            <div class="group relative rounded-[32px] p-8 lg:p-12 overflow-hidden transition-all duration-500 hover:shadow-2xl hover:scale-[1.02]"
                id='card1'>
                <!-- Decorative Elements -->
                <div
                    class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-64 h-64 bg-emerald-700/20 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2">
                </div>

                <!-- Content -->
                <div class="relative z-10">
                    <!-- Title -->
                    <h2 id='tittle1' class="text-3xl lg:text-4xl font-bold mb-6 leading-tight" data-aos="fade-up">
                        Quản lý toàn diện Dental Lab
                    </h2>

                    <!-- Features List -->
                    <div class="space-y-4 mb-10">
                        <div class="flex items-start gap-3">
                            <div class="mt-1 w-6 h-6 rounded-lg bg-white/20 backdrop-blur-sm flex items-center justify-center flex-shrink-0 transition-transform duration-300 group-hover:scale-110"
                                data-aos="fade-up">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <p class="text-base lg:text-lg font-medium leading-relaxed" data-aos="fade-up">
                                Số hoá và tối ưu quy trình sản xuất. Tạo môi trường làm việc công bằng
                            </p>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="mt-1 w-6 h-6 rounded-lg bg-white/20 backdrop-blur-sm flex items-center justify-center flex-shrink-0 transition-transform duration-300 group-hover:scale-110"
                                data-aos="fade-up">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <p class="text-base lg:text-lg font-medium leading-relaxed" data-aos="fade-up">
                                Phối hợp làm việc và kết nối giữa các bộ phận. Tăng hiệu quả chung cho Lab
                            </p>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="mt-1 w-6 h-6 rounded-lg bg-white/20 backdrop-blur-sm flex items-center justify-center flex-shrink-0 transition-transform duration-300 group-hover:scale-110"
                                data-aos="fade-up">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                            </div>
                            <p class="text-base lg:text-lg font-medium leading-relaxed" data-aos="fade-up">
                                Chăm sóc khách hàng và đáp ứng kỳ vọng của khách hàng tốt hơn
                            </p>
                        </div>
                    </div>

                    <!-- Laptop Mockup -->
                    <div class="relative transition-transform duration-700 hover:-translate-y-2">
                        <div class="relative aos-init aos-animate">
                            <!-- Screen -->


                            <!-- Replace this div with your actual screenshot -->
                            <img src="https://dentalso.com/vi/wp-content/uploads/2024/07/dental.png" data-aos="fade-up"
                                alt="Dental Lab Interface" class="w-full h-full object-cover" />


                            <!-- Base -->

                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2: Connection with Dental Clinics -->
            <div class="group relative rounded-[32px] p-8 lg:p-12 overflow-hidden transition-all duration-500 hover:shadow-2xl hover:scale-[1.02]"
                id='card2'>
                <!-- Decorative Elements -->
                <div
                    class="absolute top-0 right-0 w-96 h-96 bg-sky-200/30 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-80 h-80 bg-cyan-200/20 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2">
                </div>

                <!-- Content -->
                <div class="relative z-10">
                    <!-- Title -->
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-6 leading-tight" data-aos="fade-up">
                        Kết nối với <span
                            class="bg-gradient-to-r from-sky-500 to-cyan-500 bg-clip-text text-transparent">nha
                            khoa</span>
                    </h2>

                    <!-- Description -->
                    <div class="mb-10">
                        <p class="text-slate-700 text-base lg:text-lg font-medium leading-relaxed mb-6"
                            data-aos="fade-up">
                            Đặt hàng nhanh, Theo dõi đơn hàng theo thời gian thực
                        </p>

                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 rounded-full bg-sky-500" data-aos="fade-up"></div>
                                <p class="text-slate-600 text-base font-medium" data-aos="fade-up">
                                    Không còn chờ đợi, không còn sai sót
                                </p>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 rounded-full bg-sky-500" data-aos="fade-up"></div>
                                <p class="text-slate-600 text-base font-medium" data-aos="fade-up">
                                    Không còn khoảng cách giữa Labo với nha khoa
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Laptop Mockup -->
                    <div class="relative transition-transform duration-700 hover:-translate-y-2">
                        <div class="relative">
                            <!-- Screen with glow effect -->
                            <div>
                                <div
                                    class="absolute inset-0 rounded-t-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                </div>
                                <div class="rounded-lg aspect-video overflow-hidden relative z-10">
                                    <!-- Replace this div with your actual screenshot -->
                                    <img src="https://dentalso.com/vi/wp-content/uploads/2022/07/clinic.png"
                                        data-aos="fade-up" alt="Dental Clinic Connection"
                                        class="w-full h-full object-cover" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom CTA (Optional) -->
        <div class="mt-12 text-center">
            <button
                class="inline-flex items-center gap-2 bg-white rounded-full px-6 py-3 shadow-lg hover:shadow-xl transition-all duration-300 group">
                <span class="text-slate-700 font-semibold">Khám phá thêm tính năng</span>
                <svg class="w-5 h-5 text-emerald-500 group-hover:translate-x-1 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</section>

<style>
    /* Optional: Add these custom styles if you want the floating animation */
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .hover\:float:hover {
        animation: float 3s ease-in-out infinite;
    }
</style>
@endsection