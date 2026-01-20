@include('sections.header')

<main id="main" class="main">
  @yield('content')
</main>

@hasSection('sidebar')
<aside class="sidebar">
  @yield('sidebar')
</aside>
@endif

@unless(is_front_page() || is_page('gioi-thieu'))
@include('sections.footer')
@endunless