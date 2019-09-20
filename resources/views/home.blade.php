@extends('layouts.app')

@section('hero')
  @include('partials.hero')
@endsection

@section('content')
  <div class="justify-around mb-10 hidden md:flex">
    @component('components.symbol', [
      'svg' => 'venue-active',
      'text' => 'The Venue',
      'size' => 'sm',
      'class' => 'w-32',
      'link' => home_url('/venue/'),
    ])
    @endcomponent

    @component('components.symbol', [
      'svg' => 'program-active',
      'text' => 'Schedule',
      'size' => 'sm',
      'class' => 'w-32',
      'link' => home_url('/schedule/')
    ])
    @endcomponent

    @component('components.symbol', [
      'svg' => 'sched-active',
      'text' => 'Mobile Schedule',
      'size' => 'sm',
      'class' => 'w-32',
      'link' => home_url('/sched-app/')
    ])
    @endcomponent

    @component('components.symbol', [
    'svg' => 'milan-active',
    'text' => 'About Milan',
    'size' => 'sm',
    'class' => 'w-32',
    'link' => home_url('/about-milan/')
    ])
    @endcomponent

    @component('components.symbol', [
    'svg' => 'travel-active',
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
    <a href="https://www.polimi.it/"><img src="@asset('images/logo-politecnico.svg')" alt="Politecnico di Milano"
                                          class="max-w-full h-16 mb-10 md:mb-0 md:mr-10 md:h-22"/></a>
    <a href="https://www.oeconsortium.org/"><img src="@asset('images/logo-oec.svg')" alt="Open Education Consortium"
                                                 class="max-w-full h-16 mb-10 md:mb-0 md:mr-10 md:h-22"/></a>
  </div>

  @include('components.panel-heading', ['title' => 'Collaborators'])
  <div class="flex flex-wrap items-center justify-center pt-8 mb-32">
    <a href="https://openpraxis.org"><img src="@asset('images/logo-open-praxis.svg')" alt="Open Praxis"
                                          class="max-w-full h-16 md:h-22"/></a>
  </div>

  {{--
  @include('components.panel-heading', ['title' => 'Sponsors'])
  <div class="flex flex-wrap items-center justify-center pt-8 mb-32">
    @svg('logo-politecnico', 'max-w-full h-16 mb-10 md:mb-0 md:mr-10 md:h-auto')
    @svg('logo-oec', 'max-w-full h-16 md:h-auto')
  </div>
  --}}

@endsection
