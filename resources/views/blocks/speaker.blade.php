{{--
  Title: Speaker
  Description: Speaker card
  Category: common
  Icon: admin-users
  Keywords: speaker profile
--}}

<div data-{{$block['id']}}
     class="{{$block['classes']}} flex mb-16"
>
  <div class="w-full md:w-1/3 md:pr-4">
    <img class="w-full h-full" src="@field('image')" alt="@field('name')" />
  </div>
  <div class="w-full md:w-2/3 py-6 px-4 card">
    <p class="name">@field('name')</p>
    <p class="block uppercase font-brand font-semibold leading-tight mb-0-important">@field('title')</p>
    <p class="block text-sm mb-0-important">@field('institution')</p>
  </div>
</div>
