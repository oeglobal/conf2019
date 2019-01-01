@extends('layouts.app')

@section('hero')
  @component('partials.hero')
  @endcomponent
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
    'title' => 'About',
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
@endsection
