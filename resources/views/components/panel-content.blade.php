<div class="flex flex-wrap -mx-4 overflow-hidden mb-20 md:mb-26">
  @if ($svg)
  <div class="my-2 px-4 w-1/3 overflow-hidden hidden md:block {{ $image_classes }}">
    @svg($svg, $svg_classes)
  </div>
  @endif

  <div class="my-2 px-4 md:w-7/12 overflow-hidden panel">
    {{ $slot }}
  </div>
</div>
