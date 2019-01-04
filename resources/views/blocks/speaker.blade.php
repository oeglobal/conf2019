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
    <span class="name">@field('name')</span>
    <span class="block uppercase font-brand font-semibold leading-loose">@field('title')</span>
    <span class="block text-sm">@field('institution')</span>
  </div>
</div>
