{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-teal-500 via-teal-600 to-cyan-700 py-20 overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-teal-300/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 mb-6">
                <span class="w-2 h-2 bg-amber-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium">Chức năng toàn diện</span>
            </div>

            {{-- Heading --}}
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight">
                Chức năng của <span class="bg-gradient-to-r from-amber-300 via-amber-400 to-orange-400 bg-clip-text text-transparent">vDentalLab</span>
            </h1>

            <p class="text-lg md:text-xl text-white/90 leading-relaxed mb-8 max-w-3xl mx-auto">
                Giải pháp toàn diện với đầy đủ các phân hệ quản lý, từ điều phối sản xuất, tài chính đến chăm sóc khách hàng
            </p>

            {{-- CTA --}}
            <a href="/phan-mem-dental-lab-mien-phi" class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-bold px-8 py-4 rounded-xl transition-all duration-300 shadow-lg shadow-amber-500/30 hover:shadow-2xl hover:shadow-amber-500/50 transform hover:-translate-y-1">
                <span>Dùng thử miễn phí</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- Advantages Section --}}
<section class="py-20 bg-white" data-aos="fade-up">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <div class="inline-block px-4 py-2 bg-teal-100 text-teal-700 rounded-full font-semibold text-sm mb-6">
                Ưu điểm
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Ưu điểm của phần mềm
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            {{-- Advantage 1 --}}
            <div class="group bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 border border-gray-200 hover:border-teal-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-teal-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Số hoá toàn bộ dữ liệu</h3>
                <p class="text-gray-600 leading-relaxed">Số hoá toàn bộ dữ liệu của Labo; Giải quyết những khó khăn khi sử dụng file Excel hoặc sổ sách</p>
            </div>

            {{-- Advantage 2 --}}
            <div class="group bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 border border-gray-200 hover:border-teal-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Tăng hiệu quả làm việc</h3>
                <p class="text-gray-600 leading-relaxed">Thông tin chặt chẽ giữa các bộ phận; Tăng hiệu quả làm việc của điều phối, quản lý tài chính, công nợ chặt chẽ; nâng cao dịch vụ chăm sóc khách hàng</p>
            </div>

            {{-- Advantage 3 --}}
            <div class="group bg-gradient-to-br from-white to-gray-50 rounded-2xl p-8 border border-gray-200 hover:border-teal-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-amber-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Tiết kiệm thời gian</h3>
                <p class="text-gray-600 leading-relaxed">Tiết kiệm hơn 40% khối lượng công việc của các bộ phận</p>
            </div>
        </div>
    </div>
</section>

{{-- Main Modules Section --}}
<section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100" data-aos="fade-up">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <div class="inline-block px-4 py-2 bg-amber-100 text-amber-700 rounded-full font-semibold text-sm mb-6">
                Phân hệ chính
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Các phân hệ chính của phần mềm
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                9 phân hệ toàn diện đáp ứng mọi nhu cầu quản lý của Labo
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            {{-- Module 1: Quản lý điều phối --}}
            <div class="group bg-white rounded-2xl p-8 border border-gray-200 hover:border-blue-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors">Quản lý điều phối</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Dễ dàng điều tiết hàng hoá vào - ra hợp lý. Theo dõi diện trạng sản xuất của các đơn hàng để có kế hoạch hạn chế vấn đề trễ hàng.</p>
                <a href="https://www.phanmemlabo.com/help/huong-dan-su-dung/quan-ly-dieu-phoi/" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-semibold">
                    Tìm hiểu thêm
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            {{-- Module 2: Quy trình sản xuất --}}
            <div class="group bg-white rounded-2xl p-8 border border-gray-200 hover:border-amber-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-amber-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-amber-600 transition-colors">Quy trình sản xuất</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Quy trình sản xuất chặt chẽ và thống nhất thông qua mã vạch. Hỗ trợ kiểm soát chất lượng sản phẩm và đánh giá năng lực kỹ thuật viên.</p>
                <a href="https://www.phanmemlabo.com/help/huong-dan-su-dung/quy-trinh-san-xuat/" class="inline-flex items-center gap-2 text-amber-600 hover:text-amber-700 font-semibold">
                    Tìm hiểu thêm
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            {{-- Module 3: Tài chính - Công nợ --}}
            <div class="group bg-white rounded-2xl p-8 border border-gray-200 hover:border-green-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-green-600 transition-colors">Tài chính - Công nợ</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Chính xác, tự động và hoàn toàn phù hợp với nghiệp vụ kế toán của Labo. Giảm tối đa khối lượng công việc của kế toán khi xuất hoá đơn cuối tháng.</p>
                <a href="https://www.phanmemlabo.com/help/huong-dan-su-dung/doanh-so-cong-no/" class="inline-flex items-center gap-2 text-green-600 hover:text-green-700 font-semibold">
                    Tìm hiểu thêm
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            {{-- Module 4: Quản lý giao nhận --}}
            <div class="group bg-white rounded-2xl p-8 border border-gray-200 hover:border-cyan-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-cyan-600 transition-colors">Quản lý giao nhận</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Hàng đợi các yêu cầu giao / nhận hàng được cập nhật liên tục trên màn hình theo dõi của quản lý giao nhận. Giúp việc quản lý nhân viên giao nhận khoa học hơn.</p>
                <a href="https://www.phanmemlabo.com/help/huong-dan-su-dung/quan-ly-giao-nhan/" class="inline-flex items-center gap-2 text-cyan-600 hover:text-cyan-700 font-semibold">
                    Tìm hiểu thêm
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            {{-- Module 5: Chăm sóc khách hàng --}}
            <div class="group bg-white rounded-2xl p-8 border border-gray-200 hover:border-purple-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-purple-600 transition-colors">Chăm sóc khách hàng</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Toàn bộ dữ liệu và giao dịch liên quan đến khách hàng đều được lưu trữ tập trung. Nhân viên dễ dàng tra cứu toàn bộ các thông tin liên quan đến khách hàng.</p>
                <a href="https://www.phanmemlabo.com/cham-soc-khach-hang" class="inline-flex items-center gap-2 text-purple-600 hover:text-purple-700 font-semibold">
                    Tìm hiểu thêm
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            {{-- Module 6: Báo cáo tổng hợp --}}
            <div class="group bg-white rounded-2xl p-8 border border-gray-200 hover:border-indigo-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-indigo-600 transition-colors">Báo cáo tổng hợp</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Phần mềm có đầy đủ các báo cáo cần thiết để phục vụ nhu cầu theo dõi và quản lý hoạt động của Labo. Đánh giá được năng xuất làm việc của nhân viên.</p>
                <a href="https://www.phanmemlabo.com/bao-cao-tong-hop" class="inline-flex items-center gap-2 text-indigo-600 hover:text-indigo-700 font-semibold">
                    Tìm hiểu thêm
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            {{-- Module 7: Dịch vụ SMS --}}
            <div class="group bg-white rounded-2xl p-8 border border-gray-200 hover:border-pink-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-pink-600 transition-colors">Dịch vụ nhắn tin SMS tự động</h3>
                <p class="text-gray-600 leading-relaxed mb-4">SMS là công cụ chăm sóc khách hàng hiện đại và hiệu quả. Giúp nâng cao uy tín, mức độ chuyên nghiệp trong dịch vụ khách hàng và tạo ưu thế cạnh tranh.</p>
            </div>

            {{-- Module 8: Website tra cứu --}}
            <div class="group bg-white rounded-2xl p-8 border border-gray-200 hover:border-orange-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-orange-600 transition-colors">Website tra cứu dành cho lãnh đạo</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Quản lý hoạt động của Labo mọi lúc, mọi nơi. Nền tảng Web, tương thích với các thiết bị di động; dữ liệu được thống kê theo thời gian thực.</p>
            </div>

            {{-- Module 9: Quản lý hàng nước ngoài --}}
            <div class="group bg-white rounded-2xl p-8 border border-gray-200 hover:border-red-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-red-600 transition-colors">Quản lý gia công hàng nước ngoài</h3>
                <p class="text-gray-600 leading-relaxed mb-4">Đáp ứng quy trình quản lý hàng nước ngoài với các quy định riêng; đáp ứng các nghiệp vụ về giao nhận hàng hoá qua UPS, tiền tệ, biểu mẫu báo cáo.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-20 bg-gradient-to-br from-teal-500 via-teal-600 to-cyan-700 relative overflow-hidden" data-aos="fade-up">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 right-20 w-64 h-64 bg-amber-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-80 h-80 bg-cyan-400/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                Sẵn sàng trải nghiệm vDentalLab?
            </h2>
            <p class="text-lg md:text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Dùng thử miễn phí ngay hôm nay và khám phá cách vDentalLab giúp tối ưu hoá quản lý Labo của bạn
            </p>
            <a href="https://www.phanmemlabo.com/phan-mem-dental-lab-mien-phi/" class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-bold px-10 py-5 rounded-xl transition-all duration-300 shadow-lg shadow-amber-500/30 hover:shadow-2xl hover:shadow-amber-500/50 transform hover:-translate-y-1 text-lg">
                <span>Dùng thử miễn phí</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- AOS Initialization --}}
<script>
    // AOS will be initialized from app.js bundle
</script>