{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-primary-500 via-primary-600 to-secondary-700 py-20 overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-primary-300/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-5xl mx-auto text-center text-white">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 mb-6">
                <span class="w-2 h-2 bg-amber-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium">Đối tác tin cậy</span>
            </div>

            {{-- Main Counter --}}
            <div class="mb-6">
                <span class="text-8xl md:text-9xl font-extrabold bg-gradient-to-r from-amber-300 via-amber-400 to-orange-400 bg-clip-text text-transparent">
                    200+
                </span>
            </div>

            {{-- Heading --}}
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight">
                Lab đã sử dụng <span class="bg-gradient-to-r from-amber-300 to-amber-400  bg-clip-text text-transparent">vDentalLab</span>
            </h1>

            <p class="text-lg md:text-xl text-white/90 leading-relaxed max-w-3xl mx-auto">
                Hơn 200 phòng Lab tại Việt Nam đã tin tưởng và sử dụng vDentalLab để quản lý hoạt động sản xuất kinh doanh của mình
            </p>
        </div>
    </div>
</section>

{{-- Customers Grid Section --}}
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <div class="inline-block px-4 py-2 bg-primary-100 text-primary-700 rounded-full font-semibold text-sm mb-6">
                Khách hàng
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Khách hàng tiêu biểu
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Các Lab hàng đầu tại Việt Nam đang sử dụng vDentalLab mỗi ngày
            </p>
        </div>

        @php
        // Query customers from WordPress posts in 'khach-hang' category
        $the_query = new WP_Query([
            'post_type' => 'post',
            'category_name' => 'khach-hang',
            'posts_per_page' => -1
        ]);
        @endphp

        @if ($the_query->have_posts())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 max-w-7xl mx-auto">

            @while ($the_query->have_posts())
            @php
            $the_query->the_post();
            $customer_logo = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            $customer_name = get_the_title();
            $customer_content = get_the_content();
            @endphp

            {{-- Customer Card --}}
            <div class="group bg-white rounded-2xl p-6 border border-gray-200 hover:border-primary-300 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                <div class="flex flex-col items-center text-center h-full">
                    @if($customer_logo)
                    <div class="w-32 h-32 rounded-full overflow-hidden mb-4 flex items-center justify-center bg-white border border-gray-100">
                        <img src="{{ $customer_logo }}" alt="{{ $customer_name }}" class="w-full h-full object-contain p-2">
                    </div>
                    @else
                    <div class="w-32 h-32 rounded-full mb-4 flex items-center justify-center bg-gray-100">
                        <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    @endif
                    
                    <h3 class="text-lg font-bold text-gray-800 mb-3 group-hover:text-primary-600 transition-colors">{{ $customer_name }}</h3>
                    
                    <div class="flex flex-col justify-center items-center text-sm text-gray-600 leading-relaxed line-clamp-4">
                        {!! $customer_content !!}
                    </div>
                </div>
            </div>
            @endwhile

            {{-- More customers card --}}
            <div class="group bg-gradient-to-br from-primary-50 to-cyan-50 rounded-2xl p-6 border-2 border-primary-200 hover:border-primary-300 hover:shadow-xl transition-all duration-300 flex items-center justify-center text-center">
                <div>
                    <div class="text-5xl font-extrabold bg-gradient-to-r from-primary-600 to-cyan-600 bg-clip-text text-transparent mb-2">200+</div>
                    <p class="text-gray-700 font-semibold text-sm">Khách hàng tin tưởng</p>
                </div>
            </div>

        </div>

        @php wp_reset_postdata(); @endphp
        
        @else
        <div class="text-center py-16">
            <svg class="w-24 h-24 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
            <p class="text-gray-500 text-lg">Chưa có thông tin khách hàng</p>
        </div>
        @endif
    </div>
</section>

{{-- CTA Section --}}
<section class="py-20 bg-gradient-to-br from-primary-500 via-primary-600 to-secondary-700 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 right-20 w-64 h-64 bg-amber-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-80 h-80 bg-cyan-400/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                Trở thành khách hàng tiếp theo của chúng tôi
            </h2>
            <p class="text-lg md:text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Tham gia cùng hơn 200 Lab hàng đầu đang sử dụng vDentalLab mỗi ngày
            </p>
            <a href="{{ home_url('/') }}/phan-mem-dental-lab-mien-phi/" class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-bold px-10 py-5 rounded-xl transition-all duration-300 shadow-lg shadow-amber-500/30 hover:shadow-2xl hover:shadow-amber-500/50 transform hover:-translate-y-1 text-lg">
                <span>Dùng thử miễn phí</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>