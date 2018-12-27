<header class="banner">
  <div class="container flex items-center justify-between h-24">
    <a class="brand font-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation',
                         'menu_class' => 'nav nav-dropdown list-reset']) !!}
      @endif
    </nav>
  </div>
</header>
