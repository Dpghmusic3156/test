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
                <span class="text-sm font-medium">Liên hệ với chúng tôi</span>
            </div>

            {{-- Heading --}}
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight">
                Hãy để chúng tôi <span class="bg-gradient-to-r from-amber-300 via-amber-400 to-orange-400 bg-clip-text text-transparent">hỗ trợ bạn</span>
            </h1>

            <p class="text-lg md:text-xl text-white/90 leading-relaxed mb-8 max-w-3xl mx-auto">
                Đội ngũ hỗ trợ của vDentalLab luôn sẵn sàng giải đáp mọi thắc mắc và tư vấn giải pháp phù hợp nhất cho bạn
            </p>
        </div>
    </div>
</section>

{{-- Contact Content Section --}}
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-5 gap-12">

                {{-- Contact Form --}}
                <div class="lg:col-span-3">
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h2 class="text-3xl font-bold text-gray-800 mb-6">Gửi tin nhắn cho chúng tôi</h2>

                        {{-- Message display area --}}
                        <div id="form-message" class="mb-6 hidden"></div>

                        <form id="contact-form" action="#" method="POST" class="space-y-6">

                            {{-- Name --}}
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Họ và tên <span class="text-red-500">*</span></label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition"
                                    placeholder="Nhập họ và tên của bạn">
                            </div>

                            {{-- Email & Phone --}}
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email <span class="text-red-500">*</span></label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition"
                                        placeholder="email@example.com">
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Số điện thoại <span class="text-red-500">*</span></label>
                                    <input type="tel" id="phone" name="phone" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition"
                                        placeholder="0912 345 678">
                                </div>
                            </div>

                            {{-- Tên Labo & Quy mô --}}
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="lab_name" class="block text-sm font-semibold text-gray-700 mb-2">Tên Labo</label>
                                    <input type="text" id="lab_name" name="lab_name"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition"
                                        placeholder="Dental Lab ABC">
                                </div>
                                <div>
                                    <label for="lab_size" class="block text-sm font-semibold text-gray-700 mb-2">Quy mô Labo</label>
                                    <select id="lab_size" name="lab_size"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition">
                                        <option value="">-- Chọn quy mô --</option>
                                        <option value="1-5">1-5 nhân viên</option>
                                        <option value="6-10">6-10 nhân viên</option>
                                        <option value="11-20">11-20 nhân viên</option>
                                        <option value="21-50">21-50 nhân viên</option>
                                        <option value="50+">Trên 50 nhân viên</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Message --}}
                            <div>
                                <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Nội dung <span class="text-red-500">*</span></label>
                                <textarea id="message" name="message" rows="6" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition resize-none"
                                    placeholder="Vui lòng cho chúng tôi biết bạn cần hỗ trợ gì..."></textarea>
                            </div>

                            {{-- Submit Button --}}
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-teal-500 to-cyan-600 hover:from-teal-600 hover:to-cyan-700 text-white font-bold py-4 px-8 rounded-lg transition-all duration-300 shadow-lg shadow-teal-500/30 hover:shadow-xl hover:shadow-teal-500/50 transform hover:-translate-y-1">
                                <div class="flex items-center justify-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>Gửi tin nhắn</span>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>

                {{-- Contact Information --}}
                <div class="lg:col-span-2 space-y-6">

                    {{-- Address --}}
                    @if(get_theme_mod('address'))
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Địa chỉ</h3>
                                <a href="{{ get_theme_mod('address_link') }}" class="text-gray-600">{{ get_theme_mod('address') }}</a>
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- Phone --}}
                    @if(get_theme_mod('phone'))
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-500 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Hotline</h3>
                                <a href="tel:{{ get_theme_mod('phone') }}" class="text-teal-600 hover:text-teal-700 font-semibold text-lg">
                                    {{ get_theme_mod('phone') }}
                                </a>
                                @if(get_theme_mod('phoneus'))
                                <a href="tel:{{ get_theme_mod('phoneus') }}" class="text-gray-600 mt-1">US: {{ get_theme_mod('phoneus') }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- Email --}}
                    @if(get_theme_mod('email1'))
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Email</h3>
                                <a href="mailto:{{ get_theme_mod('email1') }}" class="text-teal-600 hover:text-teal-700 block">
                                    {{ get_theme_mod('email1') }}
                                </a>
                                @if(get_theme_mod('email2'))
                                <a href="mailto:{{ get_theme_mod('email2') }}" class="text-teal-600 hover:text-teal-700 block mt-1">
                                    {{ get_theme_mod('email2') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endif

                    {{-- Social Media --}}
                    @if(get_theme_mod('facebook'))
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Facebook</h3>
                                <a href="{{ get_theme_mod('facebook') }}" target="_blank" rel="noopener noreferrer" class="text-teal-600 hover:text-teal-700">
                                    Theo dõi chúng tôi trên Facebook
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(false)
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-skype-bg rounded-lg flex items-center justify-center">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-100.26 -100.26 656.25 656.25" xml:space="preserve" fill="#000000" stroke="#000000" stroke-width="0.00455731">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)">
                                        <rect x="-100.26" y="-100.26" width="656.25" height="656.25" rx="328.125" fill="#15ace5" strokewidth="0"></rect>
                                    </g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.911462"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <rect x="0" y="0" style="fill:#15ACE5;" width="455.731" height="455.731"></rect>
                                            <path style="fill:#FFFFFF;" d="M379.742,257.242c1.77-9.097,2.708-18.492,2.708-28.107c0-80.82-65.518-146.338-146.338-146.338 c-9.615,0-19.01,0.938-28.107,2.708c-12.507-7.319-27.052-11.532-42.589-11.532c-46.65,0-84.467,37.817-84.467,84.467 c0,15.537,4.214,30.082,11.532,42.588c-1.77,9.097-2.708,18.492-2.708,28.107c0,80.82,65.518,146.338,146.338,146.338 c9.615,0,19.01-0.938,28.107-2.708c12.507,7.319,27.052,11.532,42.588,11.532c46.65,0,84.467-37.817,84.467-84.467 C391.275,284.293,387.061,269.749,379.742,257.242z M238.892,329.634c-52,0-78-19.5-86-44s9.5-31.5,15-32s17.167,0.833,20.5,11 c3.465,10.567,15,31.5,40,34s41.5-9,46.5-21s-4-28.5-42.5-34s-78.5-22.5-78.5-61s44-54,86-54s63.293,23.721,68,33 c5.833,11.5,3.833,30.661-10,34c-14.5,3.5-22-4.5-32.5-24c-10.858-20.165-49.5-15-62.5-3.5s-9.5,28,44.5,38.5s74,30,74,60.5 S290.892,329.634,238.892,329.634z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Skype</h3>
                                <a href="{{ get_theme_mod('skype') }}" target="_blank" rel="noopener noreferrer" class="text-teal-600 hover:text-teal-700">
                                    Theo dõi chúng tôi trên Skype
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(get_theme_mod('zalo'))
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">
                        <div class="flex items-start gap-4">
                            <div href="{{ get_theme_mod('zalo') }}" class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center">
                                <svg id="svg_zalo_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 614.501 613.667" xml:space="preserve">
                                    <path fill="#FFFFFF" d="M464.721,301.399c-13.984-0.014-23.707,11.478-23.944,28.312c-0.251,17.771,9.168,29.208,24.037,29.202   c14.287-0.007,23.799-11.095,24.01-27.995C489.028,313.536,479.127,301.399,464.721,301.399z" />
                                    <path fill="#FFFFFF" d="M291.83,301.392c-14.473-0.316-24.578,11.603-24.604,29.024c-0.02,16.959,9.294,28.259,23.496,28.502   c15.072,0.251,24.592-10.87,24.539-28.707C315.214,313.318,305.769,301.696,291.83,301.392z" />
                                    <path fill="#FFFFFF" d="M310.518,3.158C143.102,3.158,7.375,138.884,7.375,306.3s135.727,303.142,303.143,303.142   c167.415,0,303.143-135.727,303.143-303.142S477.933,3.158,310.518,3.158z M217.858,391.083   c-33.364,0.818-66.828,1.353-100.133-0.343c-21.326-1.095-27.652-18.647-14.248-36.583c21.55-28.826,43.886-57.065,65.792-85.621   c2.546-3.305,6.214-5.996,7.15-12.705c-16.609,0-32.784,0.04-48.958-0.013c-19.195-0.066-28.278-5.805-28.14-17.652   c0.132-11.768,9.175-17.329,28.397-17.348c25.159-0.026,50.324-0.06,75.476,0.026c9.637,0.033,19.604,0.105,25.304,9.789   c6.22,10.561,0.284,19.512-5.646,27.454c-21.26,28.497-43.015,56.624-64.559,84.902c-2.599,3.41-5.119,6.88-9.453,12.725   c23.424,0,44.123-0.053,64.816,0.026c8.674,0.026,16.662,1.873,19.941,11.267C237.892,379.329,231.368,390.752,217.858,391.083z    M350.854,330.211c0,13.417-0.093,26.841,0.039,40.265c0.073,7.599-2.599,13.647-9.512,17.084   c-7.296,3.642-14.71,3.028-20.304-2.968c-3.997-4.281-6.214-3.213-10.488-0.422c-17.955,11.728-39.908,9.96-56.597-3.866   c-29.928-24.789-30.026-74.803-0.211-99.776c16.194-13.562,39.592-15.462,56.709-4.143c3.951,2.619,6.201,4.815,10.396-0.053   c5.39-6.267,13.055-6.761,20.271-3.357c7.454,3.509,9.935,10.165,9.776,18.265C350.67,304.222,350.86,317.217,350.854,330.211z    M395.617,369.579c-0.118,12.837-6.398,19.783-17.196,19.908c-10.779,0.132-17.593-6.966-17.646-19.512   c-0.179-43.352-0.185-86.696,0.007-130.041c0.059-12.256,7.302-19.921,17.896-19.222c11.425,0.752,16.992,7.448,16.992,18.833   c0,22.104,0,44.216,0,66.327C395.677,327.105,395.828,348.345,395.617,369.579z M463.981,391.868   c-34.399-0.336-59.037-26.444-58.786-62.289c0.251-35.66,25.304-60.713,60.383-60.396c34.631,0.304,59.374,26.306,58.998,61.986   C524.207,366.492,498.534,392.205,463.981,391.868z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 href="{{ get_theme_mod('zalo') }}" class="text-lg font-bold text-gray-800 mb-2">Zalo</h3>
                                <a href="{{ get_theme_mod('zalo') }}" target="_blank" rel="noopener noreferrer" class="text-teal-600 hover:text-teal-700">
                                    Liên hệ với chúng tôi qua Zalo
                                </a>
                            </div>
                        </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
</section>

{{-- CTA Section --}}
<section class="py-20 bg-gradient-to-br from-teal-500 via-teal-600 to-cyan-700 relative overflow-hidden">
    {{-- Background Decoration --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 right-20 w-64 h-64 bg-amber-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-80 h-80 bg-cyan-400/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                Bạn đã sẵn sàng?
            </h2>
            <p class="text-lg md:text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                Dùng thử miễn phí ngay. Hỗ trợ đầy đủ ngay từ khi bắt đầu.
            </p>
            <a href="{{ home_url() }}/phan-mem-dental-lab-mien-phi/" class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-bold px-10 py-5 rounded-xl transition-all duration-300 shadow-lg shadow-amber-500/30 hover:shadow-2xl hover:shadow-amber-500/50 transform hover:-translate-y-1 text-lg">
                <span>Dùng thử miễn phí</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contact-form');
        const messageDiv = document.getElementById('form-message');
        const submitBtn = form.querySelector('button[type="submit"]');
        const submitBtnOriginal = submitBtn.innerHTML;

        form.addEventListener('submit', async function(e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(form);
            const data = {};
            formData.forEach((value, key) => data[key] = value);

            // Show loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<div class="flex items-center justify-center gap-2"><svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg><span>Đang gửi...</span></div>';

            try {
                // Format data according to API specification
                const apiData = new URLSearchParams({
                    name: `${data.name}, ${data.email}, ${data.lab_name || ''}, ${data.lab_size || ''}`.replace(/, ,/g, ',').replace(/,\s*$/, ''),
                    url: 'https://phanmemlabo.com/lien-he/',
                    email: data.email,
                    phone: data.phone,
                    company: data.lab_name || '',
                    'company-size': data.lab_size || '',
                    note: data.message
                });

                const response = await fetch('https://api.voffice.online/api/v1/public/callme', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                    },
                    body: apiData.toString()
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    // Success
                    messageDiv.className = 'mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg';
                    messageDiv.textContent = result.message;
                    messageDiv.classList.remove('hidden');
                    form.reset();

                    // Hide message after 5 seconds
                    setTimeout(() => {
                        messageDiv.classList.add('hidden');
                    }, 5000);
                } else {
                    // Error
                    messageDiv.className = 'mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg';
                    messageDiv.textContent = result.message || 'Có lỗi xảy ra. Vui lòng thử lại.';
                    messageDiv.classList.remove('hidden');
                }
            } catch (error) {
                messageDiv.className = 'mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg';
                messageDiv.textContent = 'Lỗi kết nối. Vui lòng kiểm tra internet và thử lại.';
                messageDiv.classList.remove('hidden');
            } finally {
                // Restore button
                submitBtn.disabled = false;
                submitBtn.innerHTML = submitBtnOriginal;
            }
        });
    });
</script>