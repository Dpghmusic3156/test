@extends('layouts.app')

@section('content')
{{-- Hero Section with Gradient --}}
<section class="relative bg-gradient-to-br from-primary-600 via-cyan-600 to-primary-700 py-24">
  {{-- Decorative Background Elements --}}
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-accent-400/10 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-cyan-300/10 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-white/5 rounded-full blur-3xl"></div>
  </div>

  <div class="container mx-auto px-4 relative z-10">
    <div class="max-w-4xl mx-auto text-center text-white">
      {{-- Badge --}}
      <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 mb-6">
        <svg class="w-5 h-5 text-accent-400" fill="currentColor" viewBox="0 0 20 20">
          <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
        </svg>
        <span class="text-sm font-medium">Trung tâm tài liệu</span>
      </div>

      {{-- Title --}}
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-4">
        Thư viện tài liệu
      </h1>
      <p class="text-lg md:text-xl text-white/90 mb-8 max-w-2xl mx-auto">
        Tra cứu hướng dẫn sử dụng, video tutorial và tài liệu hỗ trợ
      </p>

      {{-- Enhanced Search Bar --}}
      <div class="max-w-2xl mx-auto">
        @include('partials.search-docs')
      </div>
    </div>
  </div>
</section>

{{-- Main Content - Category Cards --}}
<section class="py-16 bg-gradient-to-b from-gray-50 to-white">
  <div class="container mx-auto px-4">
    {{-- Section Header --}}
    <div class="text-center mb-12" data-aos="fade-up">
      <div class="inline-block px-4 py-2 bg-primary-100 text-primary-700 rounded-full font-semibold text-sm mb-4">
        📚 Danh mục
      </div>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">
        Khám phá tài liệu
      </h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Tìm hiểu cách sử dụng vDentalLab qua các hướng dẫn chi tiết
      </p>
    </div>

    {{-- Category Cards Grid --}}
    @php
    $categories = get_terms([
    'taxonomy' => 'doc_category',
    'hide_empty' => false,
    ]);
    @endphp

    @if(!empty($categories) && !is_wp_error($categories))
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
      @foreach($categories as $index => $category)
      @php
      // Get parent posts in this category
      $posts = get_posts([
      'post_type' => 'docs',
      'posts_per_page' => 3,
      'post_parent' => 0, // Only parent posts
      'tax_query' => [
      [
      'taxonomy' => 'doc_category',
      'field' => 'term_id',
      'terms' => $category->term_id,
      ],
      ],
      ]);
      $total_posts = $category->count;
      @endphp

      {{-- Modern Category Card --}}
      <div class="group bg-white rounded-2xl p-8 border border-gray-200 hover:border-primary-300 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 relative overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
        {{-- Hover Gradient Overlay --}}
        <div class="absolute inset-0 bg-gradient-to-br from-primary-50/50 to-cyan-50/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

        <div class="relative z-10">
          {{-- Icon & Title --}}
          <div class="flex items-start justify-between mb-6">
            <div class="flex items-center gap-4">
              {{-- Minimalist Icon Container --}}
              <div class="w-16 h-16 bg-accent-50 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                <svg class="w-8 h-8 text-accent-500" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
                </svg>
              </div>

              {{-- Post Count Badge --}}
              <div class="flex flex-col">
                <a href="{{ get_term_link($category) }}" class="text-xl font-bold text-gray-800 group-hover:text-primary-600 transition-colors duration-300">
                  {{ $category->name }}
                </a>
                <span class="inline-flex items-center gap-1 text-sm text-gray-500 mt-1">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                  </svg>
                  {{ $total_posts }} tài liệu
                </span>
              </div>
            </div>
          </div>

          {{-- Document List --}}
          @if($posts)
          <ul class="space-y-3 mb-6">
            @foreach($posts as $post)
            <li class="flex items-start gap-2 group/item">
              <svg class="w-4 h-4 text-accent-500 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <a href="{{ get_permalink($post) }}" class="text-sm text-gray-600 hover:text-primary-600 transition-colors line-clamp-1 group-hover/item:underline">
                {{ get_the_title($post) }}
              </a>
            </li>
            @endforeach
          </ul>
          @else
          <div class="text-gray-400 text-sm mb-6 py-8 text-center">
            <svg class="w-12 h-12 mx-auto mb-2 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            Chưa có bài post nào
          </div>
          @endif

          {{-- View All Link --}}
          <a href="{{ get_term_link($category) }}" class="inline-flex items-center gap-2 text-primary-600 hover:text-primary-700 font-semibold text-sm group-hover:gap-3 transition-all">
            <span>Xem tất cả</span>
            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      @endforeach
    </div>
    @else
    <div class="text-center py-16">
      <svg class="w-24 h-24 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
      </svg>
      <p class="text-gray-500 text-lg">Chưa có chuyên mục nào.</p>
    </div>
    @endif
  </div>
</section>
@endsection