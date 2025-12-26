{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-primary-500 via-primary-600 to-secondary-700 py-20 overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-accent-400/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-primary-300/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-5xl mx-auto text-center text-white">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 mb-6">
                <span class="w-2 h-2 bg-accent-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium">Đối tác tin cậy</span>
            </div>

            {{-- Main Counter --}}
            <div class="mb-6">
                <span class="text-8xl md:text-9xl font-extrabold bg-gradient-to-r from-accent-300 via-accent-400 to-accent-400 bg-clip-text text-transparent">
                    200+
                </span>
            </div>

            {{-- Heading --}}
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight">
                Lab đã sử dụng <span class="bg-gradient-to-r from-accent-300 via-accent-400 to-accent-400 bg-clip-text text-transparent">vDentalLab</span>
            </h1>

            <p class="text-lg md:text-xl text-white/90 leading-relaxed mb-8 max-w-3xl mx-auto">
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

        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 max-w-7xl mx-auto">



            @foreach ($customers as $index => $customer)
            {{-- Customer Card --}}
            @if ($customer['link'])
            <a href="{{ $customer['link'] }}" target="_blank" rel="noopener noreferrer" class="group relative bg-white rounded-2xl p-5 border border-gray-200 hover:border-primary-400 hover:shadow-xl transition-all duration-300 block overflow-hidden">
                @else
                <div class="group relative bg-white rounded-2xl p-5 border border-gray-200 hover:border-primary-400 hover:shadow-xl transition-all duration-300 overflow-hidden">
                    @endif
                    {{-- Main Content --}}
                    <div class="flex flex-col items-center text-center relative z-10 opacity-100 group-hover:opacity-0 transition-opacity duration-300">
                        <div class="w-24 h-24 rounded-full overflow-hidden mb-4 flex items-center justify-center bg-white">
                            <img src="{{ $customer['logo'] }}" alt="{{ $customer['name'] }}" class="w-full h-full object-contain p-2">
                        </div>
                        <h3 class="text-base font-bold text-gray-800 mb-1">{{ $customer['name'] }}</h3>
                        <p class="text-sm text-gray-600">📍 {{ $customer['location'] }}</p>
                        <span class="inline-block px-3 py-1 bg-gray-100 text-gray-700 text-xs font-semibold rounded-full mt-2">
                            {{ $customer['tier'] }}
                        </span>
                    </div>

                    {{-- Hover Overlay with Contact Details --}}
                    @if ($customer['address'] || $customer['phone'] || $customer['email'])
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-500 to-secondary-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-4">
                        <div class="text-white text-center space-y-2">
                            <h4 class="font-bold text-base mb-3">{{ $customer['name'] }}</h4>
                            @if ($customer['address'])
                            <p class="text-sm">
                                <svg class="w-4 h-4 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                                {{ $customer['address'] }}
                            </p>
                            @endif
                            @if ($customer['phone'])
                            <p class="text-sm">
                                <svg class="w-4 h-4 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                                {{ $customer['phone'] }}
                            </p>
                            @endif
                            @if ($customer['email'])
                            <p class="text-sm">
                                <svg class="w-4 h-4 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                                {{ $customer['email'] }}
                            </p>
                            @endif
                        </div>
                    </div>
                    @endif
                    @if ($customer['link'])
            </a>
            @else
        </div>
        @endif
        @endforeach

        {{-- More customers card --}}
        <div class="group bg-gradient-to-br from-primary-50 to-secondary-50 rounded-2xl p-5 border-2 border-primary-200 hover:border-primary-300 hover:shadow-xl transition-all duration-300 flex items-center justify-center text-center">
            <div>
                <div class="text-5xl font-extrabold bg-gradient-to-r from-primary-600 to-secondary-600 bg-clip-text text-transparent mb-2">+150</div>
                <p class="text-gray-700 font-semibold text-sm">Khách hàng khác</p>
            </div>
        </div>

    </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="py-20 bg-gradient-to-br from-primary-500 via-primary-600 to-secondary-700 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 right-20 w-64 h-64 bg-accent-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-80 h-80 bg-secondary-400/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                Trở thành khách hàng tiếp theo của chúng tôi
            </h2>
            <p class="text-lg md:text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Tham gia cùng hơn 200 Lab hàng đầu đang sử dụng vDentalLab mỗi ngày
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
