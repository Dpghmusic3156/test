@extends('layouts.app')

@section('content')
@php the_post(); @endphp

<section class="banner-section relative bg-cover"
    style="background-image: url('https://dentalso.com/vi/wp-content/uploads/2025/07/page-banner2.png');">
    <div class="container">
        <div class="banner-content h-96 flex flex-col items-center justify-center text-center mx-auto relative">
            <p class="page-title z-10 mb-6 text-white text-5xl">
                {{ get_the_title() }}
            </p>
            <div class="justify-center w-3/4">
                {{-- Tìm kiếm tài liệu --}}
                @include('partials.search-docs')
            </div>
        </div>
    </div>
    <div class="absolute top-0 left-0 right-0 bottom-0 opacity-50 z-0"></div>
</section>
<div class="mx-auto max-w-screen-xl px-4 py-10">
    <div class="flex flex-col md:flex-row gap-8">
        {{-- Modern Sidebar bên trái --}}
        <aside class="w-full order-1 md:order-1 md:w-1/4 mb-8 md:mb-0">
            @php
            $categories = get_terms([
            'taxonomy' => 'doc_category',
            'hide_empty' => false,
            ]);
            @endphp

            {{-- Sticky Sidebar Container --}}
            <div class="md:sticky md:top-8">
                <div class="bg-white border border-gray-200 rounded-2xl shadow-lg overflow-hidden">
                    {{-- Sidebar Header with Gradient --}}
                    <div class="bg-gradient-to-r from-primary-600 to-cyan-600 px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center backdrop-blur-sm">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-lg font-bold text-white">Chuyên mục</h2>
                                <p class="text-xs text-white/80">{{ count($categories) }} danh mục</p>
                            </div>
                        </div>
                    </div>

                    {{-- Categories List --}}
                    <div class="p-4 max-h-[calc(100vh-200px)] overflow-y-auto">
                        @php
                        $current_post_id = get_the_ID();
                        $current_terms = wp_get_post_terms($current_post_id, 'doc_category', ['fields' => 'ids']);
                        @endphp

                        @if(!empty($categories) && !is_wp_error($categories))
                        <ul class="space-y-2">
                            @foreach($categories as $i => $category)
                            @php
                            $posts = get_posts([
                            'post_type' => 'docs',
                            'posts_per_page' => 100,
                            'post_parent' => 0, // Only parent posts
                            'tax_query' => [
                            [
                            'taxonomy' => 'doc_category',
                            'field' => 'term_id',
                            'terms' => $category->term_id,
                            ],
                            ],
                            ]);
                            $is_current_cat = in_array($category->term_id, $current_terms);
                            @endphp

                            <li class="group" x-data="{ open: {{ $is_current_cat ? 'true' : 'false' }} }">
                                {{-- Category Header --}}
                                <div class="flex items-center justify-between p-2 rounded-lg transition-all duration-200 {{ $is_current_cat ? 'bg-primary-50' : 'hover:bg-gray-50' }}">
                                    <button
                                        @click="open = !open"
                                        class="flex items-center gap-3 flex-1 text-left focus:outline-none group">
                                        {{-- Toggle Icon --}}
                                        <div class="w-6 h-6 flex items-center justify-center rounded transition-all duration-200 {{ $is_current_cat ? 'bg-primary-100' : 'bg-gray-100 group-hover:bg-primary-100' }}">
                                            <svg
                                                :class="{'rotate-90': open}"
                                                class="w-4 h-4 transition-transform duration-200 {{ $is_current_cat ? 'text-primary-600' : 'text-gray-500' }}"
                                                fill="none"
                                                stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                            </svg>
                                        </div>

                                        {{-- Category Name --}}
                                        <div class="flex-1">
                                            <span class="font-semibold text-sm {{ $is_current_cat ? 'text-primary-600' : 'text-gray-700' }}">
                                                {{ $category->name }}
                                            </span>
                                        </div>

                                        {{-- Post Count Badge --}}
                                        <span class="px-2 py-0.5 text-xs font-medium rounded-full {{ $is_current_cat ? 'bg-primary-200 text-primary-700' : 'bg-gray-200 text-gray-600' }}">
                                            {{ count($posts) }}
                                        </span>
                                    </button>
                                </div>

                                {{-- Documents List --}}
                                @if($posts)
                                <ul
                                    x-show="open"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 -translate-y-2"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    class="ml-9 mt-1 space-y-0.5 border-l-2 border-gray-100 pl-3">
                                    @foreach($posts as $post)
                                    @php
                                    $is_current = (get_the_ID() == $post->ID);
                                    // Get child posts
                                    $child_posts = get_posts([
                                    'post_type' => 'docs',
                                    'post_parent' => $post->ID,
                                    'posts_per_page' => -1,
                                    'orderby' => 'title',
                                    'order' => 'ASC',
                                    ]);
                                    $has_children = count($child_posts) > 0;
                                    @endphp
                                    <li x-data="{ childOpen: {{ $is_current ? 'true' : 'false' }} }">
                                        <a
                                            href="{{ get_permalink($post) }}"
                                            class="group/item flex items-start gap-2 px-3 py-2 rounded-lg text-sm transition-all duration-200
                                            {{ $is_current 
                                                ? 'bg-primary-100 text-primary-700 font-semibold shadow-sm' 
                                                : 'text-gray-600 hover:bg-gray-50 hover:text-primary-600' }}">

                                            {{-- Document Icon --}}
                                            <svg class="w-4 h-4 mt-0.5 flex-shrink-0 {{ $is_current ? 'text-primary-500' : 'text-gray-400 group-hover/item:text-primary-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>

                                            {{-- Document Title --}}
                                            <span class="flex-1 line-clamp-2">{{ get_the_title($post) }}</span>

                                            {{-- Child indicator or Active Indicator --}}
                                            @if($has_children)
                                            <button @click.prevent="childOpen = !childOpen" class="flex-shrink-0">
                                                <svg :class="{'rotate-90': childOpen}" class="w-3 h-3 text-gray-400 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                </svg>
                                            </button>
                                            @elseif($is_current)
                                            <div class="w-1.5 h-1.5 bg-primary-600 rounded-full flex-shrink-0 mt-2"></div>
                                            @endif
                                        </a>

                                        {{-- Child Posts --}}
                                        @if($has_children)
                                        <ul x-show="childOpen" x-transition class="ml-6 mt-1 space-y-0.5 border-l-2 border-gray-100 pl-3">
                                            @foreach($child_posts as $child_post)
                                            @php
                                            $is_current_child = (get_the_ID() == $child_post->ID);
                                            @endphp
                                            <li>
                                                <a href="{{ get_permalink($child_post) }}" class="group/child flex items-start gap-2 px-2 py-1.5 rounded text-xs transition-all {{ $is_current_child ? 'bg-primary-50 text-primary-600 font-semibold' : 'text-gray-500 hover:text-primary-600 hover:bg-gray-50' }}">
                                                    <svg class="w-3 h-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                    </svg>
                                                    <span class="flex-1 line-clamp-2">{{ get_the_title($child_post) }}</span>
                                                    @if($is_current_child)
                                                    <div class="w-1 h-1 bg-primary-600 rounded-full flex-shrink-0 mt-1"></div>
                                                    @endif
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                        @else
                        <div class="text-center py-8">
                            <svg class="w-12 h-12 mx-auto mb-2 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <p class="text-sm text-gray-500">Không có chuyên mục</p>
                        </div>
                        @endif
                    </div>
                </div>

                {{-- Quick Help Card (Optional) --}}
                <div class="mt-4 bg-gradient-to-br from-cyan-50 to-primary-50 border border-primary-200 rounded-2xl p-5">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-sm text-gray-800 mb-1">Cần hỗ trợ?</h3>
                            <p class="text-xs text-gray-600 mb-3">Liên hệ với chúng tôi nếu bạn cần trợ giúp</p>
                            <a href="/lien-he" class="inline-flex items-center gap-1 text-xs font-semibold text-primary-600 hover:text-primary-700 transition-colors">
                                <span>Liên hệ ngay</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        {{-- Nội dung chính --}}
        <div class="w-full order-3 md:order-2 md:w-1/2">
            {{-- TOC --}}

            {{-- Nội dung --}}
            <div class="prose max-w-none">
                {!! apply_filters('the_content', get_the_content()) !!}
            </div>

            @php
            // Get child posts if this is a parent post
            $child_posts = get_posts([
            'post_type' => 'docs',
            'post_parent' => get_the_ID(),
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
            ]);
            @endphp

            {{-- Child Posts Section --}}
            @if($child_posts && count($child_posts) > 0)
            <div class="mt-12 pt-8 border-t border-gray-200">
                <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Tài liệu liên quan
                </h3>
                <div class="grid gap-4">
                    @foreach($child_posts as $child_post)
                    <a href="{{ get_permalink($child_post) }}" class="group bg-white border border-gray-200 rounded-xl p-5 hover:border-primary-300 hover:shadow-lg transition-all duration-300">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-primary-200 transition-colors">
                                <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-800 group-hover:text-primary-600 transition-colors mb-1">
                                    {{ get_the_title($child_post) }}
                                </h4>
                                @if(get_the_excerpt($child_post))
                                <p class="text-sm text-gray-600 line-clamp-2">
                                    {{ wp_strip_all_tags(get_the_excerpt($child_post)) }}
                                </p>
                                @endif
                            </div>
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-primary-600 group-hover:translate-x-1 transition-all flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif
        </div>

    </div>
</div>
@endsection