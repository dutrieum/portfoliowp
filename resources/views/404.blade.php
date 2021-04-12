@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <!-- @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif -->

  <div class="error_page">
    <p>La page que vous cherchez n'existe pas !</p>
    <a href="{{ home_url('/') }}">Cliquez ici pour revenir à l'accueil.</a>
  </div>

@endsection
