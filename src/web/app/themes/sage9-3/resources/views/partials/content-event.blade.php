<article @php(post_class('post d-flex no-gutters'))>
    @if(get_the_post_thumbnail())
        <figure class="post-thumbnail hidden-md-down col-3">
            {{ the_post_thumbnail('news-events-thumbnail', ['class'=>'img-fluid']) }}
        </figure>
    @endif
    <header class="right col d-flex flex-row">
        <time class="event-date text-uppercase" >
            @php( $ev_date = explode('/', get_field('event-date')) )
            <span class="day">{{ $ev_date[0] }}</span>
            <span class="month">{{ $ev_date[1] }}</span>
            <span class="year">{{ $ev_date[2] }}</span>
        </time>
        <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    </header>
</article>
