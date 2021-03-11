@extends('layouts.app')

@section('hero')
  @include('partials.hero')
  <div class="block"></div>
@endsection

@section('content')

  <div class="justify-around mb-10 hidden md:flex">
    {{--
    @component('components.symbol', [
      'svg' => 'cfp',
      'text' => 'Keynotes',
      'size' => 'sm',
      'class' => 'w-32 active',
      'link' => 'https://connect.oeglobal.org/c/oeg-2020/keynotes/16',
    ])
    @endcomponent

    @component('components.symbol', [
    'svg' => 'program',
    'text' => 'Program',
    'size' => 'sm',
    'class' => 'w-32 active',
    'link' => 'https://connect.oeglobal.org/conference/schedule',
    ])@endcomponent

    @component('components.symbol', [
      'svg' => 'sponsor',
      'text' => 'Sponsors',
      'size' => 'sm',
      'class' => 'w-32 active',
      'link' => 'https://connect.oeglobal.org/c/oeg-2020/sponsors/19'
    ])
    @endcomponent

    @component('components.symbol', [
      'svg' => 'updates',
      'text' => 'Announcements',
      'size' => 'sm',
      'class' => 'w-32 active',
      'link' => 'https://connect.oeglobal.org/c/oeg-2020/announcements/22'
    ])
    @endcomponent

    @component('components.symbol', [
    'svg' => 'committee',
    'text' => 'Lobby',
    'size' => 'sm',
    'class' => 'w-32 active',
    'link' => 'https://connect.oeglobal.org/c/oeg-2020/15'
    ])
    @endcomponent
    --}}

    {{--
    @component('components.symbol', [
    'svg' => 'travel',
    'text' => 'Plan your Travel',
    'size' => 'sm',
    'class' => 'w-32 active',
    'link' => home_url('/plan-your-travel/')
    ])
    @endcomponent
    --}}

  </div>

  <div class="flex flex-wrap -mx-4 overflow-hidden mb-20 md:mb-26">
    <div class="my-2 p-10 w-full md:w-1/3 overflow-hidden md:block text-center bg-blue-100 rounded text-center">
      <img src="@asset('images/badge-online.svg')" alt="Online Conference Badge" class="w-5/6 inline-block"/>

      <div class="font-bold text-2xl mt-4">September 27 - October 1</div>
    </div>

    <div class="my-2 px-4 md:w-7/12 overflow-hidden panel flex flex-col justify-center">
      <p>The 2021 Open Education Global Conference will kick off on September 27, 2021 and will be focused on the
        following action areas of the UNESCO OER Recommendation: Capacity, Policy, Access, and Sustainability.</p>

      <a href="{!! home_url('/online-conference/') !!}" class="btn-inverse">Learn more @svg('icon-chevron')</a>
    </div>
  </div>

  <div class="flex flex-wrap -mx-4 overflow-hidden mb-20 md:mb-26">
    <div class="my-2 p-10 w-full md:w-1/3 overflow-hidden md:block text-center bg-blue-100 rounded text-center">
      <img src="@asset('images/badge-inperson.svg')" alt="In-person Conference Badge" class="w-5/6 inline-block"/>

      <div class="font-bold text-2xl mt-4">October 5 - 7</div>
    </div>

    <div class="my-2 px-4 md:w-7/12 overflow-hidden panel flex flex-col justify-center">
      <p>The 2021 Open Education Global Conference will wrap up at the University of Nantes in France for an In-person
        Congress. The focus will be on engaging the global open education community in international cooperation to
        advance the UNESCO OER Recommendation.</p>

      <a href="{!! home_url('/in-person-congress/') !!}" class="btn-inverse">Learn more @svg('icon-chevron')</a>
    </div>
  </div>



  {{--
  @component('components.panel', [
    'title' => 'The Venue',
    'svg' => 'symbols/venue',
    'image_classes' => 'text-right',
    'svg_classes' => 'max-w-full w-32 inline-block',
    'link' => home_url('/venue/')
  ])
    <p>Taipei Medical University is located in Xinyi District of Taipei, Taiwan. The famous Taipei 101 building, Taipei
      World Trade Center, and fashion shopping area are within walking distance. TMU campus is compact. The conference
      venue, the Xing-Chun Building, is located in the center of the campus.</p>
  @endcomponent
  --}}

  @include('partials.gallery')


  @include('components.panel-heading', ['title' => 'Patronage'])
  <div class="grid grid-cols-1 md:grid-cols-3 gap-y-12 items-end justify-around pt-8 mb-32 home-sponsors">
    @php($img_class='block h-48 flex justify-center items-center max-w-70% max-h-36')
    <div class=""></div>
    <a href="https://www.unesco.org/" class="{!! $img_class !!}"><img
        src="@asset('images/logo-unesco.png')" alt="UNESCO" class="h-auto max-h-full"/></a>
  </div>

  @include('components.panel-heading', ['title' => 'Organized by'])
  <div class="flex flex-wrap items-center justify-around pt-8 mb-32 md:w/1-2 home-sponsors">

    <a href="https://www.univ-nantes.fr/"><img src="@asset('images/logo-unantes.svg')" alt="Université de Nantes"
                                               class="max-w-full h-16 mb-10 md:mb-0 md:mr-10 md:h-22"/></a>

    <a href="https://www.oeglobal.org/"><img src="@asset('images/logo-oeglobal.svg')" alt="Open Education Consortium"
                                             class="max-w-full h-36 mb-10 md:mb-0 md:mr-10"/></a>
  </div>

  {{--
  @include('components.panel-heading', ['title' => 'Supporters'])
  <div class="flex flex-wrap items-center justify-around pt-8 mb-32 home-sponsors">
    <a href="https://www.tocec.org.tw/"><img src="@asset('images/logo-toec.svg')"
                                             alt="Taiwan Open Course and Education Consortium"
                                             class="h-16 md:h-24"/></a>
    <a href="https://copeneduc.org/"><img src="@asset('images/logo-coec.svg')" alt="Chinese Open Education Consortium"
                                          class="h-16 md:h-24"/></a>
  </div>
  --}}

  {{--
  @include('components.panel-heading', ['title' => 'Sponsors'])
  <div class="grid grid-cols-3 gap-y-12 items-end justify-around pt-8 mb-32 home-sponsors">
    @php($img_class='block h-48 flex justify-center items-center max-w-70% max-h-36')
    <a href="https://feedbackfruits.com/" class="{!! $img_class !!}"><img
        src="@asset('images/logo-feedbackfruits.png')" alt="Feedback Fruits" class="h-auto max-h-full"/></a>
    <a href="https://www.grasple.com/" class="{!! $img_class !!}"><img
        src="@asset('images/logo-grasple.svg')" alt="Grasple" class="h-auto max-h-full"/></a>
    <a href="https://www.moodle.com/" class="{!! $img_class !!}"><img
        src="@asset('images/logo-moodle.svg')" alt="Moodle" class="h-auto max-h-full"/></a>
    <a href="https://libretexts.org/" class="{!! $img_class !!}"><img
        src="@asset('images/logo-libretexts.png')" alt="LibreTexts" class="h-auto max-h-full"/></a>
    <a href="https://www.achievingthedream.org/" class="{!! $img_class !!}"><img
        src="@asset('images/logo-atd.png')" alt="Achieving the Dream" class="h-auto max-h-full"/></a>
    <a href="https://pressbooks.com/" class="{!! $img_class !!}"><img
        src="@asset('images/logo-pressbooks.png')" alt="Pressbooks" class="h-auto max-h-full"/></a>
    <a href="http://www.formosasoft.com/" class="{!! $img_class !!}"><img
        src="@asset('images/logo-formosasoft.png')" alt="FormosaSoft Corporation" class="h-auto max-h-full"/></a>
    <a href="https://campus.edx.org" class="{!! $img_class !!}"><img
        src="@asset('images/logo-edx.svg')" alt="edX" class="h-auto max-h-full"/></a>
    <a href="https://www.oitc.com.tw/" class="{!! $img_class !!}"><img
        src="@asset('images/logo-otsuka.jpg')" alt="Otsuka Information Technology Corp." class="h-auto max-h-full"/></a>
    <a href="https://20mm.org/" class="{!! $img_class !!}"><img
        src="@asset('images/logo-20mm.png')" alt="The Michelson 20MM Foundation" class="h-auto max-h-full"/></a>
    <a href="https://learnful.ca/" class="{!! $img_class !!}"><img
        src="@asset('images/logo-learnful.jpg')" alt="Learnful" class="h-auto max-h-full"/></a>
    <a href="http://univ-numerique.fr/" class="{!! $img_class !!}"><img
        src="@asset('images/logo-numerique.png')" alt="L'Université Numérique" class="h-auto max-h-full"/></a>
    <a href="http://www.aunege.org/" class="{!! $img_class !!}"><img
        src="@asset('images/logo-aunege.png')" alt="AUNEGe" class="h-auto max-h-full"/></a>
    <a href="https://openstax.org/" class="{!! $img_class !!}"><img
        src="@asset('images/logo-openstax.png')" alt="OpenStax" class="h-auto max-h-full"/></a>

  </div>
  --}}

  {{--
    @include('components.panel-heading', ['title' => 'Collaborators'])
    <div class="flex flex-wrap items-center justify-center pt-8 mb-32">
      <a href="https://openpraxis.org"><img src="@asset('images/logo-open-praxis.svg')" alt="Open Praxis"
                                            class="max-w-full h-16 md:h-22"/></a>
    </div>
  --}}

@endsection
