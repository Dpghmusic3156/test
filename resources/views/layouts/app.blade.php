@include('sections.header')

<div id="smooth-wrapper">
  <div id="smooth-content">

    <main id="main" class="main">
      @yield('content')
    </main>

    @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
    @endif

    @unless(is_page('gioi-thieu') || is_page('lien-he'))
    @include('sections.footer')
    @endunless
  </div>
</div>