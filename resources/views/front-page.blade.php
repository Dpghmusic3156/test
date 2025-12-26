@extends('layouts.app')

@section('content')

<div class="bg-gradient-to-b from-gray-50 to-white text-gray-800 overflow-x-hidden relative">
    {{-- Animated Background Elements --}}
    <div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
        <div class="absolute w-[400px] h-[400px] rounded-full bg-gradient-to-br from-primary-400/20 to-secondary-400/20 blur-3xl top-[10%] left-[5%] animate-float"></div>
        <div class="absolute w-[500px] h-[500px] rounded-full bg-gradient-to-br from-accent-300/15 to-accent-400/15 blur-3xl bottom-[15%] right-[10%] animate-float delay-200"></div>
        <div class="absolute w-[350px] h-[350px] rounded-full bg-gradient-to-br from-primary-300/20 to-primary-500/20 blur-3xl top-1/2 left-[30%] animate-float delay-400"></div>
    </div>

    {{-- Hero Section --}}
    <section class="min-h-screen pt-28 pb-20 px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between max-w-7xl mx-auto" data-aos="fade-up">
        <div class="lg:w-1/2 mb-16 lg:mb-0">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-primary-100 text-primary-700 rounded-full font-semibold text-sm mb-6" data-aos="fade-right" data-aos-delay="100">
                <span class="w-2 h-2 bg-primary-500 rounded-full animate-pulse"></span>
                Giải pháp #1 tại Việt Nam
            </div>

            <div class="md:text-6xl lg:text-7xl font-extrabold leading-tight mb-6" data-aos="fade-right" data-aos-delay="200">
                <span class="text-5xl block text-transparent bg-clip-text bg-gradient-to-r from-primary-600 via-secondary-600 to-primary-700">vDentalLab</span>
                <span class="text-4xl block text-gray-900">Phần mềm Quản lý</span>
                <span class="text-4xl block text-transparent bg-clip-text bg-gradient-to-r from-accent-500 to-accent-600">Labo Dental</span>
            </div>

            <p class="text-lg md:text-xl text-gray-600 mb-10 max-w-lg leading-relaxed" data-aos="fade-right" data-aos-delay="300">
                Hơn <span class="font-bold text-primary-600">200+ Lab</span> đã cài đặt & sử dụng hàng ngày cho hoạt động sản xuất kinh doanh.
            </p>

            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4" data-aos="fade-right" data-aos-delay="400">
                <a href="https://www.phanmemlabo.com/phan-mem-dental-lab-mien-phi/"
                    class="group relative inline-flex items-center justify-center gap-2 bg-gradient-to-r from-primary-500 to-secondary-600 hover:from-primary-600 hover:to-secondary-700 text-white font-bold px-10 py-5 rounded-xl transition-all duration-300 shadow-lg shadow-primary-500/30 hover:shadow-2xl hover:shadow-primary-500/50 transform hover:-translate-y-1">
                    <span>Dùng thử miễn phí</span>
                    <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>

                <button @click="$dispatch('open-features-modal')"
                    class="inline-flex items-center justify-center gap-2 px-8 py-5 border-2 border-primary-200 text-primary-700 rounded-xl hover:bg-primary-50 hover:border-primary-300 transition-all duration-300 font-semibold">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                    </svg>
                    Chức năng nổi bật
                </button>
            </div>

            {{-- Social Proof --}}
            <div class="mt-12 flex items-center gap-6" data-aos="fade-right" data-aos-delay="500">
                <div class="flex -space-x-4">
                    <img class="w-12 h-12 rounded-full border-3 border-white shadow-lg" src="https://phanmemlabo.com/wp-content/uploads/2024/05/logo_new_smile_lab-removebg-XdclsaZoxPJDTfvxl2Ub.png" alt="Customer">
                    <img class="w-12 h-12 rounded-full border-3 border-white shadow-lg" src="https://phanmemlabo.com/wp-content/uploads/2024/05/z5276532952194_2d396fbde325544879a50e96744952bd.jpg" alt="Customer">
                    <img class="w-12 h-12 rounded-full border-3 border-white shadow-lg" src="https://phanmemlabo.com/wp-content/uploads/2024/05/logo-medical-lab-SgYwbApXgrbxnByVNadu.jpg" alt="Customer">
                </div>
                <div>
                    <div class="flex items-center gap-1 mb-1">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            @endfor
                            <span class="ml-2 font-bold text-gray-900">5.0</span>
                    </div>
                    <p class="text-sm text-gray-600 font-medium">Được <span class="text-primary-600 font-bold">200+ labs</span> tin dùng</p>
                </div>
            </div>
        </div>

        {{-- Hero Image --}}
        <div class="lg:w-1/2 relative" data-aos="fade-left" data-aos-delay="300">
            <div class="relative rounded-2xl overflow-hidden transform hover:scale-105 transition-transform duration-500 shadow-2xl">
                <img class="w-full h-auto object-cover" src="http://localhost:10005/wp-content/uploads/2025/12/iMac_left-min-6.png" alt="vDentalLab Interface">

            </div>

            {{-- Floating Stats Card --}}
            <div class="absolute -bottom-8 -left-8 bg-white rounded-2xl shadow-2xl p-6 border border-primary-100" data-aos="fade-up" data-aos-delay="600">
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-secondary-600 rounded-xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-gray-900">200+</p>
                        <p class="text-sm text-gray-600">Labs đang sử dụng</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials Section --}}
    <section class="py-20 bg-white relative overflow-hidden">
        {{-- Background decoration --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-primary-100 to-secondary-100 rounded-full blur-3xl opacity-30 -z-10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <div class="inline-block px-4 py-2 bg-primary-100 text-primary-700 rounded-full font-semibold text-sm mb-4">
                    Phản hồi từ khách hàng
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Được <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-secondary-600">200+ Labs</span> tin cậy
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Chúng tôi muốn đóng góp vào sự phát triển của ngành Labo Nha khoa Việt Nam
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                {{-- Testimonial 1 --}}
                <div class="bg-gradient-to-br from-white to-primary-50/50 rounded-2xl p-8 border border-primary-100 hover:shadow-2xl hover:border-primary-200 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex gap-1 mb-6">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-accent-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            @endfor
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "Phần mềm giúp tôi quản lý chặt chẽ quy trình sản xuất và các kỹ thuật viên. Tôi đã cải thiện hoàn toàn việc quản lý Labo của mình và tiết kiệm thời gian, công sức."
                    </p>
                    <div class="flex items-center gap-4 pt-6 border-t border-teal-100">
                        <img class="w-14 h-14 rounded-full object-cover ring-4 ring-teal-100" src="https://www.phanmemlabo.com/wp-content/uploads/2021/03/ceo-huu-nguyen.png" alt="Ms. Linh">
                        <div>
                            <p class="font-bold text-gray-900">Ms. Linh</p>
                            <p class="text-sm text-gray-600">CEO, Labo Hữu Nguyên</p>
                        </div>
                    </div>
                </div>

                {{-- Testimonial 2 --}}
                <div class="bg-gradient-to-br from-white to-amber-50/50 rounded-2xl p-8 border border-amber-100 hover:shadow-2xl hover:border-amber-200 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex gap-1 mb-6">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            @endfor
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "Tôi sử dụng phần mềm này ngay từ ngày đầu thành lập Labo. Nó giúp tôi quản lý đơn hàng sản xuất rất dễ dàng. Đặc biệt là khả năng tra cứu lịch sử hàng bảo hành và kiểm soát tốt vấn đề trễ hàng."
                    </p>
                    <div class="flex items-center gap-4 pt-6 border-t border-amber-100">
                        <img class="w-14 h-14 rounded-full object-cover ring-4 ring-amber-100" src="https://www.phanmemlabo.com/wp-content/uploads/2021/03/ceo-thanh-tuan.png" alt="Alan Nguyễn">
                        <div>
                            <p class="font-bold text-gray-900">Alan Nguyễn</p>
                            <p class="text-sm text-gray-600">CEO, Labo Thành Tuấn</p>
                        </div>
                    </div>
                </div>

                {{-- Testimonial 3 --}}
                <div class="bg-gradient-to-br from-white to-cyan-50/50 rounded-2xl p-8 border border-cyan-100 hover:shadow-2xl hover:border-cyan-200 transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex gap-1 mb-6">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            @endfor
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "Tôi đã mua nhiều phần mềm của nước ngoài nhưng không phù hợp với đặc thù ngành Lab tại Việt Nam. Sau khi được nhân viên giới thiệu, tôi đã quyết định chuyển qua dùng vDentalLab. Phần mềm hỗ trợ tôi rất tốt trong việc tính lương cho kỹ thuật viên và quản lý vật liệu."
                    </p>
                    <div class="flex items-center gap-4 pt-6 border-t border-cyan-100">
                        <img class="w-14 h-14 rounded-full object-cover ring-4 ring-cyan-100" src="https://www.phanmemlabo.com/wp-content/uploads/2021/03/ceo-westcost.png" alt="Dr. Andrew Tsang">
                        <div>
                            <p class="font-bold text-gray-900">Dr. Andrew Tsang</p>
                            <p class="text-sm text-gray-600">CEO, Labo Westcoast</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-20 bg-gradient-to-br from-teal-500 via-teal-600 to-cyan-700 relative overflow-hidden">
        {{-- Background decoration --}}
        <div class="absolute top-20 right-20 w-64 h-64 bg-amber-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-80 h-80 bg-cyan-400/10 rounded-full blur-3xl"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Sẵn sàng để bắt đầu?
            </h2>
            <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto">
                Tham gia cùng 200+ Lab hàng đầu đang sử dụng vDentalLab mỗi ngày
            </p>
            <a href="https://www.phanmemlabo.com/phan-mem-dental-lab-mien-phi/"
                class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-bold px-10 py-5 rounded-xl transition-all duration-300 shadow-lg shadow-amber-500/30 hover:shadow-2xl hover:shadow-amber-500/50 transform hover:-translate-y-1 text-lg">
                <span>Dùng thử miễn phí</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </section>
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
</script>

@endsection