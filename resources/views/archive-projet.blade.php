@extends('layouts.app')

@section('content')
  Hello world

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile
  
@endsection
