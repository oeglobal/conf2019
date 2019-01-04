{{--
  Title: Profiles
  Description: Basic profile
  Category: common
  Icon: groups
  Keywords: person image
--}}

<div data-{{$block['id']}}
     class="{{$block['classes']}} flex justify-around grid md:grid-columns-2 mt-20"
>
  @fields('profiles')
    <div class="inline-block flex flex-col items-center pb-8">
      <img class="rounded-full h-38 w-38 mb-2 border-4 border-red" src="@sub('image')" alt="@sub('name')" />
      <span class="block font-bold leading-loose">@sub('name')</span>
      <span class="block text-xs leading-loose">@sub('title')</span>
    </div>
  @endfields
</div>
