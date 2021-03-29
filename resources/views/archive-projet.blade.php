@extends('layouts.app')

@section('content')
  <h1>Projets</h1>

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile
  
@endsection
