@extends('layouts.app')

@section('hero')
  @include('partials.hero')
@endsection

@section('content')
  <div class="justify-around mb-10 hidden md:flex">
    @component('components.symbol', [
      'svg' => 'welcome-active',
      'text' => 'Welcome',
      'size' => 'sm',
      'class' => 'w-32',
    ])
    @endcomponent

    @component('components.symbol', [
      'svg' => 'venue-active',
      'text' => 'The Venue',
      'size' => 'sm',
      'class' => 'w-32',
    ])
    @endcomponent

    @component('components.symbol', [
      'svg' => 'cfp-active',
      'text' => 'Call for Proposals',
      'size' => 'sm',
      'class' => 'w-32',
    ])
    @endcomponent

    @component('components.symbol', [
    'svg' => 'milan-active',
    'text' => 'About Milan',
    'size' => 'sm',
    'class' => 'w-32',
    ])
    @endcomponent

    @component('components.symbol', [
    'svg' => 'travel-active',
    'text' => 'Plan your Travel',
    'size' => 'sm',
    'class' => 'w-32',
    ])
    @endcomponent
  </div>

  @component('components.panel', [
    'title' => 'About',
    'svg' => 'logo',
    'image_classes' => 'text-center',
    'link' => '#'
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
    'link' => '#'
  ])
    <p>The Open Education Global Conference is where the world meets to discuss how opening education helps us achieve
      universal access, equity, innovation and opportunity in education. The OE Global conference is the most
      internationally diverse conference devoted exclusively to open education, attracting researchers, practitioners,
      policy makers, educators and students from more than 35 countries to discuss and explore how Open Education
      advances educational practices around the world.</p>
  @endcomponent

  @include('partials.gallery')

  @include('components.panel-heading', ['title' => 'Organized by'])
  <div class="flex flex-wrap items-center justify-center pt-8 mb-32">
    @svg('logo-politecnico', 'max-w-full h-16 mb-10 md:mb-0 md:mr-10 md:h-auto')
    @svg('logo-oec', 'max-w-full h-16 md:h-auto')
  </div>

  {{--
  @include('components.panel-heading', ['title' => 'Sponsors'])
  <div class="flex flex-wrap items-center justify-center pt-8 mb-32">
    @svg('logo-politecnico', 'max-w-full h-16 mb-10 md:mb-0 md:mr-10 md:h-auto')
    @svg('logo-oec', 'max-w-full h-16 md:h-auto')
  </div>
  --}}

@endsection
