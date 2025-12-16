<header class="banner">
  <div class="container">
    @if (has_custom_logo())
    {!! get_custom_logo() !!}
    @else
    <a class="brand" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>
    @endif



    @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
    @endif

    <div class="header-actions">
      <a href="{{ wp_login_url() }}" class="btn-login">Đăng nhập</a>
    </div>
  </div>
</header>