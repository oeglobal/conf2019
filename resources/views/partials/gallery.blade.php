<div id="lightgallery" class="block mb-32 md:flex md:flex-wrap">
  @foreach ($get_gallery as $image)
    <a
      href="{!! $image['image']['url'] !!}"
      class="w-2/3 md:w-1/3 inline-block gallery-item"
      data-sub-html="{!! $image['caption'] !!} (<a href='{!! $image['attribution_link'] !!}'>{!! $image['attribution_name'] !!}</a>)"
    >
      <img
        class="block"
        src="{!! $image['image']['sizes']['thumbnail'] !!}"
        alt="{!! $image['caption'] !!}"
      />
    </a>
  @endforeach
</div>
