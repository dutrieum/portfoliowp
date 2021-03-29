<article @php post_class() @endphp>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    <div>
        <h3>{{the_field('when_content')}}</h3>
        {!! wp_get_attachment_image( get_field("first_image")["id"], "thumbnail" ) !!}
        <p>{{the_field('first_description')}}</p>
        <a href="{{ get_permalink() }}">Découvrir</a>
    </div>
    <!-- @include('partials/entry-meta') -->
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
</article>
