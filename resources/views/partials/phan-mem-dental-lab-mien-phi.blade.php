{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-teal-500 via-teal-600 to-cyan-700 py-20">
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
                <span class="text-sm font-medium">Dùng thử miễn phí</span>
            </div>

            {{-- Heading --}}
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight">
                Dùng thử <span class="bg-gradient-to-r from-amber-300 via-amber-400 to-orange-400 bg-clip-text text-transparent">14 ngày miễn phí</span>
            </h1>

            <div class="space-y-3 text-lg md:text-xl text-white/90 leading-relaxed max-w-3xl mx-auto">
                <p>✓ Hỗ trợ miễn phí ngay cả khi dùng thử</p>
                <p>✓ Đơn giản và hiệu quả ngay từ ngày đầu tiên</p>
                <p>✓ Hỗ trợ copy dữ liệu ban đầu từ file Excel</p>
            </div>
        </div>
    </div>
</section>

{{-- Registration Form Section --}}
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">

                {{-- Registration Form --}}
                <div>
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h2 class="text-3xl font-bold text-gray-800 mb-6">Đăng ký dùng thử miễn phí</h2>

                        {{-- Message display area --}}
                        <div id="form-message" class="mb-6 hidden"></div>

                        <form id="trial-form" action="#" method="POST" class="space-y-6">

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
                                    <label for="company_name" class="block text-sm font-semibold text-gray-700 mb-2">Tên công ty <span class="text-red-500">*</span></label>
                                    <input type="text" id="company_name" name="company_name" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition"
                                        placeholder="Dental Lab ABC">
                                </div>
                            </div>

                            {{-- Message --}}
                            <div>
                                <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Ghi chú</label>
                                <textarea id="message" name="message" rows="4"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition resize-none"
                                    placeholder="Yêu cầu hoặc ghi chú thêm..."></textarea>
                            </div>

                            {{-- Submit Button --}}
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-bold py-4 px-8 rounded-lg transition-all duration-300 shadow-lg shadow-amber-500/30 hover:shadow-xl hover:shadow-amber-500/50 transform hover:-translate-y-1">
                                <div class="flex items-center justify-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    <span>Đăng ký dùng thử ngay</span>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>

                {{-- Image on the right --}}
                <div class="hidden lg:block">
                    <div class="relative rounded-2xl overflow-hidden transform rotate-1 hover:rotate-0 transition-transform duration-500">
                        <img class="ml-25 w-4/5 h-auto object-cover" src="{{ home_url('/') }}/wp-content/uploads/2021/03/iMac_dung-thu-mien-phi.png" alt="vDentalLab">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('trial-form');
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

            const pageUrl = '{{ home_url() }}/phan-mem-dental-lab-mien-phi/';
            const apiData = {
                name: data.name,
                url: pageUrl,
                phone: data.phone,
                company: data.company_name || '',
                email: data.email,
                note: data.message || '',
                el: 15,
                reason: 'Đăng ký dùng thử miễn phí tại: ' + pageUrl
            };

            // Send request (fire and forget)
            fetch('https://lapi.dentalso.com/api/v1/public/callme', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(apiData)
            });

            // Show success message immediately
            messageDiv.className = 'mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg';
            messageDiv.textContent = 'Đăng ký thành công! Chúng tôi sẽ liên hệ với bạn sớm.';
            messageDiv.classList.remove('hidden');
            form.reset();

            // Restore button
            submitBtn.disabled = false;
            submitBtn.innerHTML = submitBtnOriginal;

            // Hide message after 5 seconds
            setTimeout(() => {
                messageDiv.classList.add('hidden');
            }, 5000);
        });
    });
</script>