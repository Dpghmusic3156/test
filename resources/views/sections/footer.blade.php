<footer class="content-info w-full pt-14 bg-gray-50 border-t border-gray-200">
    @php(dynamic_sidebar('sidebar-footer'))
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!--Grid-->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 pt-10 pb-10">
            <div class="col-span-1 sm:col-span-2 lg:col-span-2 mb-10 lg:mb-0">
                <div class="flex justify-center lg:justify-start mb-1">
                    @if (get_theme_mod('logo'))
                    <a href="{{ home_url('/') }}" class="flex justify-center lg:justify-start">
                        <img src="{{ get_theme_mod('logo') }}" alt="{{ $siteName }}" class="h-10">
                    </a>
                    @endif
                    <a class="flex items-center @if(get_theme_mod('logo')) ml-2 @endif text-gray-800 font-bold text-2xl" href="{{ home_url('/') }}">
                        {!! $siteName !!}
                    </a>
                </div>
                <p class="py-8 text-gray-500 lg:max-w-xs text-center lg:text-left">Giải pháp quản trị doanh nghiệp được
                    xây dựng chuyên biệt cho ngành Labo Nha Khoa.</p>
                <div class="text-center lg:text-left">
                    <a href="/lien-he"
                        class="group relative inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white font-bold px-6 py-4 rounded-lg transition-all duration-300 shadow-lg shadow-amber-500/30 hover:shadow-xl hover:shadow-amber-500/50 transform hover:-translate-y-0.5 text-md">
                        Liên hệ tư vấn
                    </a>
                </div>
            </div>
            <!--End Col-->
            <div class="text-left">
                <h4 class="text-lg text-gray-900 font-bold mb-7">Thông tin liên hệ</h4>
                <ul class="text-sm  transition-all duration-500">
                    <li class="mb-6">
                        <a class="flex items-start gap-3 text-gray-600">
                            <i class="fas fa-building mt-1"></i>
                            <span>Công Ty TNHH Phần Mềm Tầm Nhìn</span>
                        </a>
                    </li>
                    @if(get_theme_mod('address'))
                    <li class="mb-6">
                        <a href="{{ get_theme_mod('address_link') }}" class="flex items-start gap-3 text-gray-600 hover:text-primary-600">
                            <i class="fas fa-map-marker-alt mt-1"></i>
                            <span>{{ get_theme_mod('address') }}</span>
                        </a>
                    </li>
                    @endif
                    @if(get_theme_mod('phone'))
                    <li class="mb-6"><a href="tel:{{ get_theme_mod('phone') }}"
                            class="flex items-center gap-3 text-gray-600 hover:text-primary-600">
                            <i class="fas fa-phone-alt"></i>
                            <span>{{ get_theme_mod('phone') }}</span>
                        </a></li>
                    @endif
                    @if(get_theme_mod('email1'))
                    <li class="mb-6"><a href="mailto:{{ get_theme_mod('email1') }}"
                            class="flex items-center gap-3 text-gray-600 hover:text-primary-600">
                            <i class="fas fa-envelope"></i>
                            <span>{{ get_theme_mod('email1') }}</span>
                        </a></li>
                    @endif

                </ul>
            </div>
            <!--End Col-->
            <div class="text-left">
                <h4 class="text-lg text-gray-900 font-bold mb-7">Chức năng
                </h4>
                <ul class="text-sm  transition-all duration-500">
                    <li class="mb-6"><a href="{{ home_url('/') }}/docs/quan-ly-dieu-phoi/" class="text-gray-600 hover:text-primary-600">Điều phối hoạt động</a></li>
                    <li class="mb-6"><a href="{{ home_url('/') }}/docs/quy-trinh-san-xuat/" class="text-gray-600 hover:text-primary-600">Quy trình sản xuất</a></li>
                    <li class="mb-6"><a href="{{ home_url('/') }}/docs/tai-chinh-cong-no/" class="text-gray-600 hover:text-primary-600">Tài chính – Công nợ</a></li>
                    <li class="mb-6"><a href="{{ home_url('/') }}/docs/quan-ly-giao-nhan/" class="text-gray-600 hover:text-primary-600">Quản lý giao nhận</a></li>
                    <li class="mb-6"><a href="{{ home_url('/') }}/docs/cham-soc-khach-hang/" class="text-gray-600 hover:text-primary-600">Chăm sóc khách hàng</a></li>
                    <li class="mb-6"><a href="{{ home_url('/') }}/docs/bao-cao-kinh-doanh/" class="text-gray-600 hover:text-primary-600">Báo cáo kinh doanh</a></li>
                </ul>
            </div>
            <!--End Col-->
            <div class="text-left">
                <h4 class="text-lg text-gray-900 font-bold mb-7">Video hướng dẫn</h4>
                <ul class="text-sm  transition-all duration-500">
                    <li class="mb-6"><a
                            href="{{ home_url('/') }}/docs/phan-mem-quan-ly-labo-vdentallab/"
                            class="block text-gray-600 hover:text-primary-600"
                            title="Phần mềm Quản lý Labo vDentalLab">Phần mềm Quản lý Labo vDentalLab</a></li>
                    <li class="mb-6"><a href="{{ home_url('/') }}/docs/huong-dan-tao-moi-nha-khoa/"
                            class="block text-gray-600 hover:text-primary-600"
                            title="Hướng dẫn tạo mới nha khoa">Hướng dẫn tạo mới nha khoa</a></li>
                    <li class="mb-6"><a
                            href="{{ home_url('/') }}/docs/huong-dan-quy-trinh-nhan-hang/"
                            class="block text-gray-600 hover:text-primary-600"
                            title="Hướng dẫn quy trình nhập hàng">Hướng dẫn quy trình nhập hàng</a></li>
                    <li class="mb-6"><a
                            href="{{ home_url('/') }}/docs/huong-dan-lap-don-hang-san-xuat/"
                            class="block text-gray-600 hover:text-primary-600"
                            title="Hướng dẫn lập đơn hàng sản xuất">Hướng dẫn lập đơn hàng sản xuất</a></li>
                    <li class="mb-6"><a
                            href="{{ home_url('/') }}/docs/huong-dan-quan-ly-san-xuat-phan-1/"
                            class="block text-gray-600 hover:text-primary-600"
                            title="Hướng dẫn quản lý sản xuất – Phần 1">Hướng dẫn quản lý sản xuất – Phần 1</a></li>
                    <li class="mb-6"><a
                            href="{{ home_url('/') }}/docs/huong-dan-quan-ly-san-xuat-phan-2/"
                            class="block text-gray-600 hover:text-primary-600"
                            title="Hướng dẫn quản lý sản xuất – Phần 2">Hướng dẫn quản lý sản xuất – Phần 2</a></li>
                    <li class="mb-6"><a
                            href="{{ home_url('/') }}/docs/huong-dan-quy-trinh-giao-hang/"
                            class="block text-gray-600 hover:text-primary-600"
                            title="Hướng dẫn quy trình giao hàng">Hướng dẫn quy trình giao hàng</a></li>
                    <li class="mb-6"><a href="{{ home_url('/') }}/docs/huong-dan-quan-ly-tai-chinh/"
                            class="block text-gray-600 hover:text-primary-600"
                            title="Hướng dẫn quản lý tài chính">Hướng dẫn quản lý tài chính</a></li>
                </ul>
            </div>
            <!--End Col-->
        </div>
        <!--Grid-->
        <div class="py-7 border-t border-gray-200">
            <div class="flex items-center justify-center flex-col lg:justify-between lg:flex-row">
                <span class="text-sm text-gray-500 ">©<a href="{{ home_url('/') }}">vDentalLab</a></span>
                <div class="flex mt-4 space-x-4 sm:justify-center lg:mt-0 ">
                    @if(get_theme_mod('facebook'))
                    <a href="{{ get_theme_mod('facebook') }}"
                        class="relative w-8 h-8 rounded-full transition-all duration-500 flex justify-center items-center bg-blue-600 hover:bg-blue-700">
                        <svg class="w-[1rem] h-[1rem] text-white" viewBox="0 0 8 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.04111 7.81204L7.41156 5.46043H5.1296V3.93188C5.1296 3.28886 5.44818 2.66054 6.46692 2.66054H7.51899V0.657999C6.90631 0.560385 6.28723 0.507577 5.66675 0.5C3.78857 0.5 2.56239 1.62804 2.56239 3.66733V5.46043H0.480469V7.81204H2.56239V13.5H5.1296V7.81204H7.04111Z"
                                fill="currentColor" />
                        </svg>
                    </a>
                    @endif
                    @if(get_theme_mod('youtube'))
                    <a href="{{ get_theme_mod('youtube') }}"
                        class="relative w-8 h-8 rounded-full transition-all duration-500 flex justify-center items-center bg-red-600 hover:bg-red-700">
                        <svg class="w-[1.25rem] h-[0.875rem] text-white" viewBox="0 0 16 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.9191 1.10651C14.558 1.27906 15.0602 1.78251 15.2299 2.42069C15.5388 3.57887 15.5388 5.99687 15.5388 5.99687C15.5388 5.99687 15.5388 8.41487 15.2299 9.57306C15.0578 10.2136 14.5556 10.7171 13.9191 10.8872C12.7638 11.1969 8.12875 11.1969 8.12875 11.1969C8.12875 11.1969 3.49603 11.1969 2.33844 10.8872C1.69952 10.7147 1.19735 10.2112 1.0276 9.57306C0.71875 8.41487 0.71875 5.99687 0.71875 5.99687C0.71875 5.99687 0.71875 3.57887 1.0276 2.42069C1.1997 1.78015 1.70188 1.27669 2.33844 1.10651C3.49603 0.796875 8.12875 0.796875 8.12875 0.796875C8.12875 0.796875 12.7638 0.796875 13.9191 1.10651ZM10.4981 5.99687L6.6481 8.22578V3.76796L10.4981 5.99687Z"
                                fill="white" />
                        </svg>
                    </a>
                    @endif
                    @if(get_theme_mod('skype'))
                    <a href="{{ get_theme_mod('skype') }}"
                        class="relative w-8 h-8 rounded-full transition-all duration-500 flex justify-center items-center bg-blue-600 hover:bg-blue-700">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-100.26 -100.26 656.25 656.25" xml:space="preserve" fill="#000000" stroke="#000000" stroke-width="0.00455731"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-100.26" y="-100.26" width="656.25" height="656.25" rx="328.125" fill="#15ace5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.911462"></g><g id="SVGRepo_iconCarrier"> <g> <rect x="0" y="0" style="fill:#15ACE5;" width="455.731" height="455.731"></rect> <path style="fill:#FFFFFF;" d="M379.742,257.242c1.77-9.097,2.708-18.492,2.708-28.107c0-80.82-65.518-146.338-146.338-146.338 c-9.615,0-19.01,0.938-28.107,2.708c-12.507-7.319-27.052-11.532-42.589-11.532c-46.65,0-84.467,37.817-84.467,84.467 c0,15.537,4.214,30.082,11.532,42.588c-1.77,9.097-2.708,18.492-2.708,28.107c0,80.82,65.518,146.338,146.338,146.338 c9.615,0,19.01-0.938,28.107-2.708c12.507,7.319,27.052,11.532,42.588,11.532c46.65,0,84.467-37.817,84.467-84.467 C391.275,284.293,387.061,269.749,379.742,257.242z M238.892,329.634c-52,0-78-19.5-86-44s9.5-31.5,15-32s17.167,0.833,20.5,11 c3.465,10.567,15,31.5,40,34s41.5-9,46.5-21s-4-28.5-42.5-34s-78.5-22.5-78.5-61s44-54,86-54s63.293,23.721,68,33 c5.833,11.5,3.833,30.661-10,34c-14.5,3.5-22-4.5-32.5-24c-10.858-20.165-49.5-15-62.5-3.5s-9.5,28,44.5,38.5s74,30,74,60.5 S290.892,329.634,238.892,329.634z"></path> </g> </g></svg>
                    </a>
                    @endif
                    @if(get_theme_mod('zalo'))
                    <a href="{{ get_theme_mod('zalo') }}"
                        class="relative w-8 h-8 rounded-full transition-all duration-500 flex justify-center items-center bg-blue-600 hover:bg-blue-700">
<svg id="svg_zalo_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 614.501 613.667" xml:space="preserve">
            <path fill="#FFFFFF" d="M464.721,301.399c-13.984-0.014-23.707,11.478-23.944,28.312c-0.251,17.771,9.168,29.208,24.037,29.202   c14.287-0.007,23.799-11.095,24.01-27.995C489.028,313.536,479.127,301.399,464.721,301.399z" />
            <path fill="#FFFFFF" d="M291.83,301.392c-14.473-0.316-24.578,11.603-24.604,29.024c-0.02,16.959,9.294,28.259,23.496,28.502   c15.072,0.251,24.592-10.87,24.539-28.707C315.214,313.318,305.769,301.696,291.83,301.392z" />
            <path fill="#FFFFFF" d="M310.518,3.158C143.102,3.158,7.375,138.884,7.375,306.3s135.727,303.142,303.143,303.142   c167.415,0,303.143-135.727,303.143-303.142S477.933,3.158,310.518,3.158z M217.858,391.083   c-33.364,0.818-66.828,1.353-100.133-0.343c-21.326-1.095-27.652-18.647-14.248-36.583c21.55-28.826,43.886-57.065,65.792-85.621   c2.546-3.305,6.214-5.996,7.15-12.705c-16.609,0-32.784,0.04-48.958-0.013c-19.195-0.066-28.278-5.805-28.14-17.652   c0.132-11.768,9.175-17.329,28.397-17.348c25.159-0.026,50.324-0.06,75.476,0.026c9.637,0.033,19.604,0.105,25.304,9.789   c6.22,10.561,0.284,19.512-5.646,27.454c-21.26,28.497-43.015,56.624-64.559,84.902c-2.599,3.41-5.119,6.88-9.453,12.725   c23.424,0,44.123-0.053,64.816,0.026c8.674,0.026,16.662,1.873,19.941,11.267C237.892,379.329,231.368,390.752,217.858,391.083z    M350.854,330.211c0,13.417-0.093,26.841,0.039,40.265c0.073,7.599-2.599,13.647-9.512,17.084   c-7.296,3.642-14.71,3.028-20.304-2.968c-3.997-4.281-6.214-3.213-10.488-0.422c-17.955,11.728-39.908,9.96-56.597-3.866   c-29.928-24.789-30.026-74.803-0.211-99.776c16.194-13.562,39.592-15.462,56.709-4.143c3.951,2.619,6.201,4.815,10.396-0.053   c5.39-6.267,13.055-6.761,20.271-3.357c7.454,3.509,9.935,10.165,9.776,18.265C350.67,304.222,350.86,317.217,350.854,330.211z    M395.617,369.579c-0.118,12.837-6.398,19.783-17.196,19.908c-10.779,0.132-17.593-6.966-17.646-19.512   c-0.179-43.352-0.185-86.696,0.007-130.041c0.059-12.256,7.302-19.921,17.896-19.222c11.425,0.752,16.992,7.448,16.992,18.833   c0,22.104,0,44.216,0,66.327C395.677,327.105,395.828,348.345,395.617,369.579z M463.981,391.868   c-34.399-0.336-59.037-26.444-58.786-62.289c0.251-35.66,25.304-60.713,60.383-60.396c34.631,0.304,59.374,26.306,58.998,61.986   C524.207,366.492,498.534,392.205,463.981,391.868z" />
          </svg>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>