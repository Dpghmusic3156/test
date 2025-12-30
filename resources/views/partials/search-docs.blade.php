@php
$terms = get_terms(['taxonomy' => 'doc_category', 'hide_empty' => false]);
@endphp

<div x-data="commandPalette()" x-init="init()" x-cloak class="relative z-10 w-full max-w-3xl mx-auto">
    <!-- Modern Search Bar - Responsive -->
    <div class="bg-white/95 backdrop-blur-sm border-2 border-white/50 rounded-2xl shadow-xl overflow-hidden">
        <!-- Mobile: Stacked Layout -->
        <div class="flex flex-col md:hidden">
            <!-- Category Dropdown -->
            <div class="relative border-b border-gray-200">
                <select x-model="selected" @change="resetAndFetch"
                    class="w-full appearance-none bg-transparent px-4 py-3 pr-10 focus:outline-none text-gray-700 text-sm font-medium">
                    <option value="all">📚 Tất cả chuyên mục</option>
                    @foreach ($terms as $term)
                    <option value="{{ $term->slug }}">{{ $term->name }}</option>
                    @endforeach
                </select>
                <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>

            <!-- Search Input -->
            <div class="relative">
                <input type="text"
                    id="searchInputMobile"
                    x-model="query"
                    @focus="focused = true"
                    @click.stop
                    placeholder="Tìm kiếm tài liệu..."
                    class="w-full bg-transparent py-3 pl-12 pr-4 focus:outline-none text-base">
                <div class="absolute left-4 top-1/2 -translate-y-1/2 text-primary-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8" />
                        <path d="M21 21l-4.35-4.35" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Desktop: Horizontal Layout -->
        <div class="hidden md:flex items-center gap-2 p-2">
            <!-- Category Dropdown -->
            <div class="relative">
                <select x-model="selected" @change="resetAndFetch"
                    class="appearance-none bg-gray-50 hover:bg-gray-100 transition-colors px-4 py-2.5 pr-10 rounded-xl focus:outline-none text-gray-700 text-sm font-medium border border-gray-200">
                    <option value="all">📚 Tất cả chuyên mục</option>
                    @foreach ($terms as $term)
                    <option value="{{ $term->slug }}">{{ $term->name }}</option>
                    @endforeach
                </select>
                <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>

            <!-- Divider -->
            <div class="w-px h-8 bg-gray-200"></div>

            <!-- Search Input -->
            <div class="relative flex-1">
                <input type="text"
                    id="searchInput"
                    x-model="query"
                    @focus="focused = true"
                    @click.stop
                    placeholder="Tìm kiếm tài liệu..."
                    class="w-full bg-transparent py-2.5 pl-10 pr-4 focus:outline-none text-base">
                <div class="absolute left-3 top-1/2 -translate-y-1/2 text-primary-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8" />
                        <path d="M21 21l-4.35-4.35" />
                    </svg>
                </div>
            </div>

            <!-- Search Button (Desktop) -->
            <button @click="fetchDocs"
                class="bg-primary-600 hover:bg-primary-700 text-white px-6 py-2.5 rounded-xl font-medium transition-colors flex items-center gap-2 whitespace-nowrap">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="8" stroke-width="2" />
                    <path d="M21 21l-4.35-4.35" stroke-width="2" />
                </svg>
                <span>Tìm kiếm</span>
            </button>
        </div>
    </div>

    <!-- Popup kết quả (nằm dưới input) -->
    <div x-show="focused && query.length"
        x-transition.opacity.scale
        @click.away="focused = false"
        class="absolute left-0 right-0 mt-3 bg-white border-2 border-gray-200 rounded-2xl shadow-2xl z-10 overflow-hidden">

        <!-- Danh sách kết quả -->
        <div class="max-h-[400px] overflow-auto p-4">
            <template x-if="results.length === 0 && !loading">
                <div class="text-center py-8 text-gray-400">
                    <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-sm">Không tìm thấy kết quả</p>
                </div>
            </template>

            <ul class="space-y-3">
                <template x-for="item in results" :key="item.link">
                    <li class="group hover:bg-gray-50 rounded-lg p-3 transition-colors">
                        <a :href="item.link" class="block">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="text-base font-semibold text-gray-800 group-hover:text-primary-600 transition-colors" x-text="item.title"></h4>
                                    <p class="text-sm text-gray-600 line-clamp-2 mt-1" x-text="item.excerpt"></p>
                                </div>
                            </div>
                        </a>
                    </li>
                </template>
            </ul>

            <template x-if="loading">
                <div class="text-center py-4">
                    <div class="inline-block w-8 h-8 border-4 border-primary-200 border-t-primary-600 rounded-full animate-spin"></div>
                    <p class="text-sm text-gray-500 mt-2">Đang tìm kiếm...</p>
                </div>
            </template>
        </div>
    </div>
</div>

<script>
    function commandPalette() {
        return {
            open: false,
            selected: 'all',
            query: '',
            results: [],
            page: 1,
            loading: false,
            hasMore: true,
            focused: false,
            init() {
                this.resetAndFetch();

                window.addEventListener('keydown', (e) => {
                    if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
                        e.preventDefault();
                        this.open = true;
                        this.resetAndFetch();
                        this.$nextTick(() => document.getElementById('searchInput')?.focus());
                    }
                });

                this.$watch('query', () => {
                    this.page = 1;
                    this.hasMore = true;
                    this.fetchDocs();
                });
            },

            fetchDocs() {
                if (this.loading || !this.hasMore) return;
                this.loading = true;

                const params = new URLSearchParams({
                    category: this.selected,
                    query: this.query,
                    paged: this.page,
                });

                fetch(`/wp-json/custom/v1/filter-docs?${params.toString()}`)
                    .then(res => res.json())
                    .then(data => {
                        if (this.page === 1) this.results = [];
                        this.results.push(...data.items);
                        this.hasMore = data.has_more;
                        this.loading = false;
                        this.page++;
                    });
            },

            resetAndFetch() {
                this.page = 1;
                this.hasMore = true;
                this.fetchDocs();
            }
        }
    }
</script>