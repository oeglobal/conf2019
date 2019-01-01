<h2 class="heading w-2/3 md:w-1/3">{{ $title }}</h2>
<div class="flex flex-wrap -mx-4 overflow-hidden mb-20 md:mb-26">
  <div class="my-2 px-4 w-1/3 overflow-hidden hidden md:block {{ $image_classes }}">
    @svg($svg, 'max-w-full')
  </div>

  <div class="my-2 px-4 md:w-7/12 overflow-hidden panel">
    {{ $slot }}

    <a href="{!! $link !!}" class="btn-inverse">Learn more @svg('icon-chevron')</a>
  </div>
</div>
