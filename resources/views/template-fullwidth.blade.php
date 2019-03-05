{{--
  Template Name: Full Width
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

    @component('components.panel-content-full', [])
    @php the_content() @endphp
    @endcomponent
  @endwhile
@endsection
