{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-primary-500 via-primary-600 to-secondary-700 py-20 overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-accent-400/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-primary-300/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 mb-6">
                <span class="w-2 h-2 bg-accent-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium">Chọn gói phù hợp</span>
            </div>

            {{-- Heading --}}
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight">
                Bảng giá <span class="bg-gradient-to-r from-accent-300 via-accent-400 to-accent-400 bg-clip-text text-transparent">vDentalLab</span>
            </h1>

            <p class="text-lg md:text-xl text-white/90 leading-relaxed mb-8 max-w-3xl mx-auto">
                Lựa chọn gói phù hợp với quy mô và nhu cầu quản lý của Labo bạn
            </p>
        </div>
    </div>
</section>

{{-- Pricing Cards Section --}}
<section class="py-20 bg-white" data-aos="fade-up">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto">

            {{-- Basic Plan --}}
            <div class="group bg-gradient-to-br from-white to-gray-50 rounded-3xl p-8 border-2 border-gray-200 hover:border-primary-300 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Basic</h3>
                    <div class="flex items-baseline gap-2">
                        <span class="text-4xl font-extrabold text-primary-600">11.000.000 đ</span>
                    </div>
                    <p class="text-sm text-gray-600 mt-1">/ máy đầu tiên</p>
                </div>

                <div class="mb-8">
                    <h4 class="font-bold text-gray-800 mb-3">Phù hợp với các Labo nhỏ</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Cách nhanh nhất để ứng dụng phần mềm vào quản lý Labo</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Tăng hiệu quả làm việc của điều phối, quản lý tài chính</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Giảm thiểu chi phí đầu tư ban đầu</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Dễ dàng áp dụng; tải về & cài đặt là sử dụng được ngay</span>
                        </li>
                    </ul>
                </div>

                <div class="space-y-3">
                    <a href="https://phanmemlabo.com/dang-ky/" class="block w-full text-center bg-gradient-to-r from-primary-500 to-primary-600 hover:from-primary-600 hover:to-primary-700 text-white font-bold py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl">
                        Đăng ký ngay
                    </a>
                </div>
            </div>

            {{-- Standard Plan (Featured) --}}
            <div class="group relative bg-gradient-to-br from-primary-500 to-secondary-600 rounded-3xl p-8 border-2 border-primary-400 shadow-2xl hover:shadow-3xl transition-all duration-300 hover:-translate-y-2 scale-105" data-aos="fade-up" data-aos-delay="200">
                {{-- Popular Badge --}}
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span class="bg-gradient-to-r from-accent-500 to-accent-500 text-white px-6 py-2 rounded-full text-sm font-bold shadow-lg">
                        PHỔ BIẾN NHẤT
                    </span>
                </div>

                <div class="mb-6 mt-4">
                    <h3 class="text-2xl font-bold text-white mb-2">Standard</h3>
                    <div class="flex items-baseline gap-2">
                        <span class="text-4xl font-extrabold text-white">48.000.000 đ</span>
                    </div>
                    <p class="text-sm text-white/90 mt-1">/ 8 máy</p>
                </div>

                <div class="mb-8">
                    <h4 class="font-bold text-white mb-3">Phù hợp với các Labo có quy mô lớn</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-accent-300 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-white/95">Số hoá toàn bộ dữ liệu của Labo</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-accent-300 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-white/95">Đầy đủ các module: giao nhận, điều phối, sản xuất, tài chính</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-accent-300 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-white/95">Triển khai nhanh – chỉ mất 2-3 ngày để làm quen</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-accent-300 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-white/95">Tiết kiệm hơn 40% khối lượng công việc văn phòng</span>
                        </li>
                    </ul>
                </div>

                <div class="space-y-3">
                    <a href="https://phanmemlabo.com/dang-ky/" class="block w-full text-center bg-gradient-to-r from-accent-500 to-accent-500 hover:from-accent-600 hover:to-accent-600 text-white font-bold py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl">
                        Đăng ký ngay
                    </a>
                </div>
            </div>

            {{-- Enterprise Plan --}}
            <div class="group bg-gradient-to-br from-white to-gray-50 rounded-3xl p-8 border-2 border-gray-200 hover:border-primary-300 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Enterprise</h3>
                    <div class="flex items-baseline gap-2">
                        <span class="text-4xl font-extrabold text-primary-600">LIÊN HỆ</span>
                    </div>
                    <p class="text-sm text-gray-600 mt-1">Giá tùy chỉnh</p>
                </div>

                <div class="mb-8">
                    <h4 class="font-bold text-gray-800 mb-3">Giải pháp hoàn chỉnh cho Labo lớn</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Quản lý kho, định mức nguyên vật liệu</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Quản lý sản xuất hàng nước ngoài</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Website báo cáo và tra cứu thông tin nha khoa</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Khảo sát tận nơi, tư vấn giải pháp riêng</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Điều chỉnh phần mềm theo nhu cầu riêng</span>
                        </li>
                    </ul>
                </div>

                <div class="space-y-3">
                    <a href="https://phanmemlabo.com/dang-ky/" class="block w-full text-center bg-gradient-to-r from-primary-500 to-primary-600 hover:from-primary-600 hover:to-primary-700 text-white font-bold py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl">
                        Liên hệ tư vấn
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Comparison Table Section --}}
<section class="py-20 bg-white" data-aos="fade-up">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <div class="inline-block px-4 py-2 bg-accent-100 text-accent-700 rounded-full font-semibold text-sm mb-6">
                So sánh
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                So sánh các phiên bản
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Xem chi tiết sự khác biệt giữa các phiên bản Basic và Standard
            </p>
        </div>

        <div class="max-w-6xl mx-auto overflow-x-auto">
            <table class="w-full border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gradient-to-r from-primary-500 to-secondary-600 text-white">
                        <th class="py-4 px-6 text-left font-bold">Chức năng</th>
                        <th class="py-4 px-6 text-center font-bold">Basic</th>
                        <th class="py-4 px-6 text-center font-bold">Standard</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Khách hàng - Giao nhận --}}
                    <tr class="bg-gray-100">
                        <td colspan="3" class="text-center py-3 px-6 font-bold text-gray-800">Khách hàng – Giao nhận</td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">1. Danh mục khách hàng</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">2. Danh mục bác sĩ</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">3. Lập yêu cầu tiếp nhận</td>
                        <td class="py-3 px-6 text-center">—</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">4. Phân công nhân viên nhận</td>
                        <td class="py-3 px-6 text-center">—</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">5. Theo dõi tiếp nhận</td>
                        <td class="py-3 px-6 text-center">—</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">6. Lệnh giao hàng</td>
                        <td class="py-3 px-6 text-center">—</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>

                    {{-- Điều phối --}}
                    <tr class="bg-gray-100">
                        <td colspan="3" class="text-center py-3 px-6 font-bold text-gray-800">Điều phối</td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">1. Đơn hàng sản xuất</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">2. Phân loại đơn hàng</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">3. In phiếu chỉ định</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">4. Thiết kế mẫu phiếu chỉ định</td>
                        <td class="py-3 px-6 text-center">—</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">5. Theo dõi hàng nhận</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">6. Cảnh báo hàng trễ</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">7. Xác nhận hoàn tất đơn hàng</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">8. In phiếu giao hàng</td>
                        <td class="py-3 px-6 text-center">—</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>

                    {{-- Sản xuất --}}
                    <tr class="bg-gray-100">
                        <td colspan="3" class="text-center py-3 px-6 font-bold text-gray-800">Sản xuất</td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">1. KCS kiểm tra thành phẩm</td>
                        <td class="py-3 px-6 text-center">—</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">2. Phân công sản xuất từng công đoạn</td>
                        <td class="py-3 px-6 text-center">—</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">3. Theo dõi sản xuất từng công đoạn</td>
                        <td class="py-3 px-6 text-center">—</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">4. Năng suất làm việc của kỹ thuật viên</td>
                        <td class="py-3 px-6 text-center">—</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>

                    {{-- Tài chính --}}
                    <tr class="bg-gray-100">
                        <td colspan="3" class="text-center py-3 px-6 font-bold text-gray-800">Tài chính</td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">1. Quản lý bảng giá từng khách hàng</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">2. Duyệt đơn hàng: sửa số lượng, giá, chiết khấu…</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">3. Quản lý doanh số</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">4. Xuất & in hoá đơn (giấy báo công nợ)</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">5. Quản lý công nợ</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-6 text-gray-700">6. Thu công nợ</td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <svg class="w-6 h-6 text-primary-600 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

{{-- Common Advantages Section --}}
<section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100" data-aos="fade-up">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <div class="inline-block px-4 py-2 bg-primary-100 text-primary-700 rounded-full font-semibold text-sm mb-6">
                Ưu điểm chung
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Ưu điểm chung của các phiên bản
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            {{-- Support --}}
            <div class="group bg-white rounded-2xl p-8 border border-gray-200 hover:border-primary-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-primary-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <img src="https://phanmemlabo.com/wp-content/uploads/2017/08/icon_chat_89_69.png" alt="Support" class="w-10 h-10">
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Hỗ trợ miễn phí 12 tháng</h3>
                <p class="text-gray-600 leading-relaxed">Tại labo hoặc qua điện thoại, chat, email. Hướng dẫn nhân viên mới sử dụng</p>
            </div>

            {{-- Security --}}
            <div class="group bg-white rounded-2xl p-8 border border-gray-200 hover:border-primary-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-br from-secondary-500 to-secondary-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <img src="https://phanmemlabo.com/wp-content/uploads/2017/08/icon_bao_mat_89_69.png" alt="Security" class="w-10 h-10">
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Phân quyền và bảo mật</h3>
                <p class="text-gray-600 leading-relaxed">Nhân viên có tài khoản đăng nhập, truy cập vào những chức năng được cấp quyền</p>
            </div>

            {{-- Backup --}}
            <div class="group bg-white rounded-2xl p-8 border border-gray-200 hover:border-primary-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-gradient-to-br from-accent-500 to-accent-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <img src="https://phanmemlabo.com/wp-content/uploads/2017/08/icon_row_chat_89_69.png" alt="Backup" class="w-10 h-10">
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Tự động sao lưu dữ liệu</h3>
                <p class="text-gray-600 leading-relaxed">Chức năng sao lưu tự động mỗi ngày. Dữ liệu sản xuất của Labo tuyệt đối an toàn</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-20 bg-gradient-to-br from-primary-500 via-primary-600 to-secondary-700 relative overflow-hidden" data-aos="fade-up">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 right-20 w-64 h-64 bg-accent-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-80 h-80 bg-secondary-400/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                Bắt đầu với bản dùng thử miễn phí
            </h2>
            <p class="text-lg md:text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Trải nghiệm đầy đủ tính năng của vDentalLab miễn phí. Hỗ trợ đầy đủ ngay cả khi dùng thử.
            </p>
            <a href="https://www.phanmemlabo.com/phan-mem-dental-lab-mien-phi/" class="inline-flex items-center gap-2 bg-gradient-to-r from-accent-500 to-accent-500 hover:from-accent-600 hover:to-accent-600 text-white font-bold px-10 py-5 rounded-xl transition-all duration-300 shadow-lg shadow-accent-500/30 hover:shadow-2xl hover:shadow-accent-500/50 transform hover:-translate-y-1 text-lg">
                <span>Dùng thử miễn phí</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
