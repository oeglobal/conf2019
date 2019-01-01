@extends('layouts.app')

@section('hero')
  <div class="hero flex items-center justify-center">
    <div class="text-white hero-text text-center">
      <h1>Open Future <br/>for an Open Education</h1>
      <div class="tagline">Resources, Practices, Communities</div>

      <div class="name">Open Education Global Conference</div>
      <div class="location-date flex justify-between flex-col md:flex-row mb-4 md:mb-14">
        <span class="block md:inline mb-4 md:mb-0">
          <span class="block md:inline">@svg('icon-pin')</span>
          <span class="block md:inline">Politecnico di Milano</span>
        </span>
        <span class="block md:inline">
          <span class="block md:inline">@svg('icon-calendar')</span>
          <span class="block md:inline">26-28 November 2019</span>
        </span>
      </div>

      <div class="flex items-center justify-center">
        <a href="#" class="btn">Why attend OE Global?</a>
      </div>
    </div>
  </div>
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

  <h2 class="heading-lg w-2/3 md:w-1/3">About</h2>
  <div class="flex flex-wrap -mx-4 overflow-hidden mb-26">
    <div class="my-2 px-4 w-1/3 overflow-hidden text-center hidden md:block">
      @svg('logo', 'max-w-full')
    </div>

    <div class="my-2 px-4 md:w-7/12 overflow-hidden">
      <p class="mb-6">The Open Education Global Conference is where the world meets to discuss how opening education helps us achieve
        universal access, equity, innovation and opportunity in education. The OE Global conference is the most
        internationally diverse conference devoted exclusively to open education, attracting researchers, practitioners,
        policy makers, educators and students from more than 35 countries to discuss and explore how Open Education
        advances educational practices around the world.</p>
      <a href="#" class="btn-inverse">Learn more @svg('icon-chevron')</a>
    </div>
  </div>

  <h2 class="heading-lg w-2/3 md:w-1/3">The Venue</h2>
  <div class="flex flex-wrap -mx-4 overflow-hidden mb-26">
    <div class="my-2 px-4 w-1/3 overflow-hidden text-right hidden md:block">
      @svg('symbols/venue')
    </div>

    <div class="my-2 px-4 md:w-7/12 overflow-hidden">
      <p>The Open Education Global Conference is where the world meets to discuss how opening education helps us achieve
        universal access, equity, innovation and opportunity in education. The OE Global conference is the most
        internationally diverse conference devoted exclusively to open education, attracting researchers, practitioners,
        policy makers, educators and students from more than 35 countries to discuss and explore how Open Education
        advances educational practices around the world.</p>
      <a href="#" class="btn-inverse">Learn more @svg('icon-chevron')</a>
    </div>
  </div>
@endsection
