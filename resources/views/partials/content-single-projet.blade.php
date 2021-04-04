<main>
    <h1>{{the_field('project_title')}}</h1>
    <div class="context">
        <div>
            <h2>Qui ?</h2>
            <p>{{the_field('who_content')}}</p>
        </div>
        <div>
            <h2>Quoi ?</h2>
            <p>{{the_field('what_content')}}</p>
        </div>
        <div>
            <h2>Quand ?</h2>
            <p>{{the_field('when_content')}}</p>
        </div>
        <div>
            <h2>Comment ?</h2>
            <p>{{the_field('how_content')}}</p>
        </div>
        <h3>Catégories :
            @foreach (get_the_terms($post->id,"categorie") as $term)
                {{$term->name}}
                @if(!$loop->last)
                ,
                @endif
            @endforeach
        </h3>
    </div>
    <div class="image-text">
        <div class="image">
            {!! wp_get_attachment_image( get_field("first_image")["id"]) !!}
        </div>
        <div class="text">
            <p>{{the_field('first_description')}}</p>
        </div>
    </div><div class="image-text">
        <div class="text">
            <p>{{the_field('second_description')}}</p>
        </div>
        <div class="image">
            {!! wp_get_attachment_image( get_field("second_image")["id"]) !!}
        </div>
    </div>
    @php $link_media = get_field('external_link') @endphp
    @if ($link_media != null)
        <a href="{{ $link_media['url'] }}" target="{{ $link_media['target'] }}">{{ $link_media['title'] }}</a>
    @endif
</main>