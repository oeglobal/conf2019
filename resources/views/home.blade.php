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
      'class' => 'w-32 active',
      'link' => home_url('/welcome/'),
    ])
    @endcomponent

    @component('components.symbol', [
      'svg' => 'venue',
      'text' => 'Venue',
      'size' => 'sm',
      'class' => 'w-32 active',
      'link' => home_url('/venue/')
    ])
    @endcomponent

    {{--
    @component('components.symbol', [
      'svg' => 'cfp',
      'text' => 'Call for proposals',
      'size' => 'sm',
      'class' => 'w-32 active',
      'link' => home_url('/cfp/')
    ])
    @endcomponent
    --}}

    @component('components.symbol', [
    'svg' => 'taiwan',
    'text' => 'About Taipei',
    'size' => 'sm',
    'class' => 'w-32 active',
    'link' => home_url('/about-taipei/')
    ])
    @endcomponent

    @component('components.symbol', [
    'svg' => 'travel',
    'text' => 'Plan your Travel',
    'size' => 'sm',
    'class' => 'w-32 active',
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
    'svg_classes' => 'max-w-full w-32 inline-block',
    'link' => home_url('/venue/')
  ])
    <p>Taipei Medical University is located in Xinyi District of Taipei, Taiwan. The famous Taipei 101 building, Taipei
      World Trade Center, and fashion shopping area are within walking distance. TMU campus is compact. The conference
      venue, the Xing-Chun Building, is located in the center of the campus.</p>
  @endcomponent

  @include('partials.gallery')

  @include('components.panel-heading', ['title' => 'Organized by'])
  <div class="flex flex-wrap items-center justify-around pt-8 mb-32 md:w/1-2">

    <a href="http://eng.tmu.edu.tw/"><img src="@asset('images/logo-tmu.svg')" alt="Taipei Medical University (TMU)"
                                          class="max-w-full h-16 mb-10 md:mb-0 md:mr-10 md:h-22"/></a>

    <a href="https://www.oeglobal.org/"><img src="@asset('images/logo-oeglobal.svg')" alt="Open Education Consortium"
                                             class="max-w-full h-36 mb-10 md:mb-0 md:mr-10"/></a>
  </div>

  @include('components.panel-heading', ['title' => 'Supporters'])
  <div class="flex flex-wrap items-center justify-around pt-8 mb-32 home-sponsors">
    <a href="https://www.tocec.org.tw/"><img src="@asset('images/logo-toec.svg')" alt="Taiwan Open Course and Education Consortium" class="h-16 md:h-24"/></a>
    <span><img src="@asset('images/logo-coec.svg')" alt="Chinese Open Education Consortium" class="h-16 md:h-24"/></span>
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
