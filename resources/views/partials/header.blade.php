<header class="banner">
  <div class="container flex items-center justify-between
              sm-only:pr-0
              h-16 md:h-24">
    <a class="brand flex" href="{{ home_url('/') }}" alt="Home">
      @svg('logo', 'h-16 w-auto pl-2')
    </a>
    <nav role="navigation"
         class="nav-primary
                hidden md:block">
      {{-- menu-item menu-item-type-post_type
           menu-item-object-page menu-item-has-children
           sub-menu menu-open menu---material --}}
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation',
                         'menu_class' => 'nav nav-dropdown list-reset']) !!}
      @endif
    </nav>
    <button class="js-toggle-menu toggle-menu flex md:hidden self-start">@svg('menu', 'menu')</button>
  </div>
</header>
