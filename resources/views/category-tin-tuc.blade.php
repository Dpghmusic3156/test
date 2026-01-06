@extends('layouts.app')

@section('content')
@php
$category = get_queried_object();
@endphp

{{-- Hero Section --}}
<section class="relative bg-gradient-to-br from-primary-500 via-primary-600 to-secondary-700 py-16 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-accent-400/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-primary-300/10 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 mb-6">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
                <span>Danh mục</span>
            </div>

            @if($category)
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-4 leading-tight">
                {{ $category->name }}
            </h1>

            @if($category->description)
            <p class="text-lg md:text-xl text-white/90 leading-relaxed max-w-3xl mx-auto">
                {{ $category->description }}
            </p>
            @endif
            @endif
        </div>
    </div>
</section>

{{-- Posts Grid Section --}}
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">

        @if (have_posts())
        <div class="max-w-6xl mx-auto mb-8">
            <p class="text-gray-600">
                Tìm thấy <span class="font-bold text-primary-600">{{ $GLOBALS['wp_query']->found_posts }}</span> bài viết
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            @while (have_posts())
            @php
            the_post();
            $post_content = get_the_content();
            $is_video = (strpos($post_content, 'youtube.com') !== false || strpos($post_content, 'youtu.be') !== false);
            $post_title = get_the_title();
            
            // Extract YouTube video ID
            $youtube_id = null;
            if ($is_video) {
                preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $post_content, $match);
                $youtube_id = isset($match[1]) ? $match[1] : null;
            }
            
            // Determine thumbnail URL - Priority: YouTube > Featured Image > null
            $thumbnail_url = null;
            if ($youtube_id) {
                $thumbnail_url = "https://img.youtube.com/vi/{$youtube_id}/maxresdefault.jpg";
            } elseif (has_post_thumbnail()) {
                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
            }
            @endphp

            <article class="group bg-white rounded-2xl overflow-hidden border border-gray-200 hover:border-primary-300 hover:shadow-xl transition-all duration-300">
                @if ($thumbnail_url)
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ $thumbnail_url }}"
                        alt="{{ $post_title }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">

                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm rounded-lg px-3 py-1 text-sm font-semibold text-gray-800">
                        {{ get_the_date('d/m/Y') }}
                    </div>
                </div>
                @else
                <div class="relative h-48 bg-gradient-to-br from-primary-100 to-secondary-100 flex items-center justify-center">
                    <svg width="64" height="64" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="text-primary-400">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                </div>
                @endif

                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-primary-600 transition-colors duration-300">
                        <a href="{{ get_permalink() }}">
                            @if($is_video)
                            <span class="inline-flex items-center gap-1">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" class="text-red-600 flex-shrink-0">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path>
                                </svg>
                                <span>Video: {{ $post_title }}</span>
                            </span>
                            @else
                            {{ $post_title }}
                            @endif
                        </a>
                    </h2>

                    @if (has_excerpt())
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        {{ wp_strip_all_tags(get_the_excerpt()) }}
                    </p>
                    @endif

                    <div class="flex items-center justify-between text-sm text-gray-500">
                        <div class="flex items-center gap-2">
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>{{ get_the_author() }}</span>
                        </div>

                        <a href="{{ get_permalink() }}" class="inline-flex items-center gap-1 text-primary-600 hover:text-primary-700 font-semibold">
                            Đọc thêm
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            @endwhile
        </div>

        @else
        <div class="max-w-2xl mx-auto text-center py-16">
            <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24" class="text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Chưa có bài viết</h2>
            <p class="text-gray-600 mb-8">Danh mục này chưa có bài viết nào.</p>
            <a href="{{ home_url('/') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-primary-500 to-secondary-600 hover:from-primary-600 hover:to-secondary-700 text-white font-bold px-8 py-4 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl">
                Về trang chủ
            </a>
        </div>
        @endif

    </div>
</section>

@endsection
