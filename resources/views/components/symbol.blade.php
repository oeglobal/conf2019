{{-- symbol-sm symbol.active active --}}
<a class="inline-block symbol text-center {!! $svg !!} {!! 'symbol-' . $size !!} {!! $class !!}"
   href="{!! $link !!}">
  @svg("symbols/$svg")

  <span class="symbol-label">
    {!! $text !!}
  </span>
</a>
