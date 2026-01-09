@extends('layouts.app')

@section('content')
{{-- <div class="bg-primary-100 py-20 text-center text-2xl lg:text-4xl mb-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-2 text-primary-700"></h1>
        @if(term_description())
        <div class="text-gray-500 text-lg">{!! term_description() !!}</div>
        @endif
    </div> --}}
<section class="banner-section relative bg-cover"
  style="background-image: url('https://dentalso.com/vi/wp-content/uploads/2025/07/page-banner2.png');">
  <div class="container">
    <div class="banner-content h-96 flex flex-col items-center justify-center text-center mx-auto relative">
      <p class="page-title z-10 mb-6 text-white text-5xl">
        {{ single_term_title('', false) }}
      </p>
      <div class="justify-center w-3/4">
        @include('partials.search-docs')
      </div>
    </div>
  </div>
  <div class="absolute top-0 left-0 right-0 bottom-0 opacity-50 z-0"></div>
</section>
<div class="container mx-auto py-10">
  @php
  // Get all posts in this category (both parent and child posts will be displayed)
  $posts = get_posts([
  'post_type' => 'docs',
  'posts_per_page' => -1,
  'post_parent' => 0, // Only get parent posts (posts without a parent)
  'tax_query' => [
  [
  'taxonomy' => 'doc_category',
  'field' => 'term_id',
  'terms' => get_queried_object_id(),
  ],
  ],
  ]);
  @endphp

  @if($posts)
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach($posts as $post)
    @php
    setup_postdata($post);
    // Count child posts
    $children = get_posts([
    'post_type' => 'docs',
    'post_parent' => $post->ID,
    'posts_per_page' => -1,
    ]);
    $child_count = count($children);
    @endphp
    <div class="bg-white border border-gray-100 rounded-2xl shadow hover:shadow-lg transition p-6 flex flex-col group">
      <div class="flex items-center mb-4">
        <div class="bg-primary-100 text-primary-500 rounded-full p-2 mr-3 flex-shrink-0">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor">
            <path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z" />
          </svg>
        </div>
        <h3 class="text-lg font-semibold text-gray-800 group-hover:text-primary-600 transition">
          {{ get_the_title($post) }}
        </h3>
      </div>

      @if(get_the_excerpt($post))
      <p class="text-gray-600 text-sm mb-4 line-clamp-3">
        {{ wp_strip_all_tags(get_the_excerpt($post)) }}
      </p>
      @endif

      <div class="mt-auto pt-4 border-t border-gray-100">
        <div class="flex items-center justify-between text-xs text-gray-500 mb-3">
          <div class="flex items-center gap-3">
            <span class="flex items-center gap-1">
              <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
              {{ get_the_date('d/m/Y', $post) }}
            </span>
            @if($child_count > 0)
            <span class="flex items-center gap-1 text-primary-600">
              <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
              </svg>
              {{ $child_count }} tài liệu con
            </span>
            @endif
          </div>
        </div>
        <a href="{{ get_permalink($post) }}" class="inline-flex items-center gap-1 text-primary-600 hover:text-primary-700 font-semibold text-sm">
          Xem chi tiết
          <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
    @endforeach
    @php wp_reset_postdata(); @endphp
  </div>
  @else
  <div class="text-center text-gray-400">Không có bài viết nào trong chuyên mục này.</div>
  @endif
</div>
@endsection