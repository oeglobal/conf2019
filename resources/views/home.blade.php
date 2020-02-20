@extends('layouts.app')

@section('hero')
  @include('partials.hero')
  <div class="block"></div>
@endsection

@section('content')
  <div class="justify-around mb-10 hidden md:flex">
    @component('components.symbol', [
      'svg' => 'welcome',
      'text' => 'Welcome',
      'size' => 'sm',
      'class' => 'w-32',
      'link' => home_url('/welcome/'),
    ])
    @endcomponent

    @component('components.symbol', [
      'svg' => 'venue',
      'text' => 'Schedule',
      'size' => 'sm',
      'class' => 'w-32',
      'link' => home_url('/venue/')
    ])
    @endcomponent

    @component('components.symbol', [
      'svg' => 'cfp',
      'text' => 'Call for proposals',
      'size' => 'sm',
      'class' => 'w-32',
      'link' => home_url('/cfp/')
    ])
    @endcomponent

    @component('components.symbol', [
    'svg' => 'taiwan',
    'text' => 'About Taipei',
    'size' => 'sm',
    'class' => 'w-32',
    'link' => home_url('/about-taipei/')
    ])
    @endcomponent

    @component('components.symbol', [
    'svg' => 'travel',
    'text' => 'Plan your Travel',
    'size' => 'sm',
    'class' => 'w-32',
    'link' => home_url('/plan-your-travel/')
    ])
    @endcomponent
  </div>

  @component('components.panel', [
    'title' => 'About',
    'svg' => 'logo',
    'image_classes' => 'text-center',
    'svg_classes' => 'max-w-full',
    'link' => home_url('/welcome/')
  ])
    <p>The Open Education Global Conference is where the world meets to discuss how opening education helps us achieve
      universal access, equity, innovation and opportunity in education. The OE Global conference is the most
      internationally diverse conference devoted exclusively to open education, attracting researchers, practitioners,
      policy makers, educators and students from more than 35 countries to discuss and explore how Open Education
      advances educational practices around the world.</p>
  @endcomponent

  @component('components.panel', [
    'title' => 'The Venue',
    'svg' => 'symbols/venue',
    'image_classes' => 'text-right',
    'svg_classes' => 'max-w-full w-32',
    'link' => home_url('/venue/')
  ])
    <p>The OE Global 2019 will be hosted at the Milano Bovisa Campus, north of Milan. The campus has been substantially
      expanded as the result of an international competition, which was announced in 1998 by Politecnico di Milano in
      collaboration with other local entities (Municipality and Region) and which has brought about a general renewal of
      the zone.</p>
  @endcomponent

  @include('partials.gallery')

  @include('components.panel-heading', ['title' => 'Organized by'])
  <div class="flex flex-wrap items-center justify-center pt-8 mb-32">
    {{--
    <a href="https://www.polimi.it/"><img src="@asset('images/logo-politecnico.svg')" alt="Politecnico di Milano"
                                          class="max-w-full h-16 mb-10 md:mb-0 md:mr-10 md:h-22"/></a>
    --}}
    <a href="https://www.oeglobal.org/"><img src="@asset('images/logo-oeglobal.svg')" alt="Open Education Consortium"
                                                 class="max-w-full h-36 mb-10 md:mb-0 md:mr-10"/></a>
  </div>

  {{--
  @include('components.panel-heading', ['title' => 'Sponsors'])
  <div class="flex flex-wrap items-center justify-around pt-8 mb-32 home-sponsors">
    <a href="https://www.moodle.com"><img src="@asset('images/logo-moodle.svg')" alt="Moodle" class="h-16 md:h-24"/></a>
    <a href="https://www.smarthink.eu/edulai"><img src="@asset('images/logo-edulai.svg')" alt="Edulai" class="h-16 md:h-24"/></a>
    <a href="https://www.grasple.com/open"><img src="@asset('images/logo-grasple.svg')" alt="Grasple" class="h-16 md:h-24"/></a>
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
