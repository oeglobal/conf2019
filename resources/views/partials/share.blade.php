<div class="hidden md:block sticky social h-none relative">
  <div class="absolute bg-white px-2 w-10 text-center
              @if (is_home()) right-0 @else right-1 @endif
             ">
    <a
      class="block mt-2 hover-red"
      href="https://www.facebook.com/sharer/sharer.php?u={{ $current_url }}"
      target="_blank"
    >@svg('icon-fb', 'h-6')</a>
    <a
      class="block my-2 hover-red"
      href="https://twitter.com/intent/tweet?text={{ $site_name }} - {{ $current_url }}"
      target="_blank"
    >@svg('icon-tw', 'h-6')</a>

    @svg('icon-share', 'h-18 mb-1')
  </div>
</div>
