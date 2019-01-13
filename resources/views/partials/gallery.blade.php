<div id="lightgallery" class="block mb-32 md:flex md:flex-wrap">
  @foreach ($get_gallery as $image)
    <a
      href="{!! $image['image']['url'] !!}"
      class="w-2/3 md:w-1/3 inline-block gallery-item"
      data-sub-html="{!! $image['caption'] !!} (<a href='{!! $image['attribution_link'] !!}'>{!! $image['attribution_name'] !!}</a>)"
      data-exthumbimage="{!! $image['image']['sizes']['thumbnail'] !!}"
    >
      <span
        class="block w-full h-64 image"
        style="background-image: url('{!! $image['image']['sizes']['thumbnail'] !!}');"
        title="{!! $image['caption'] !!}"
      />
    </a>
  @endforeach
</div>
