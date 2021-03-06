<article @php post_class() @endphp>
    <div class="single-article-title">
        <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
        <h3>{{the_field('when_content')}}</h3>
    </div>
    <div class="single-article-preview">
        {!! wp_get_attachment_image( get_field("first_image")["id"], "medium" ) !!}
        <div>
          @php $article_data = substr(get_field('first_description'), 0, 165); @endphp
          <p>{{ $article_data }}...</p>
          <a href="{{ get_permalink() }}">Découvrir</a>
        </div>
    </div>
</article>
