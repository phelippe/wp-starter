<section class="news-events">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 news">
                @if($news->have_posts())
                    @while ($news->have_posts())
                        @php($news->the_post())
						<? $title = get_the_title(); ?>
                        <article @php(post_class('news')) >
                            <a href="{{ get_permalink() }}">
                                <span class="post-meta">Publicado em {{ get_the_date() }}</span>
                                <h3 class="post-title">{{ get_the_title() }}</h3>
                            </a>
                        </article>
                    @endwhile
                @endif
                @php(wp_reset_query())
                <a href="/noticias" class="btn btn-primary col-12">Ver mais</a>
            </div>

            <div class="col-12 col-md-6 events">
                @if($events->have_posts())
                    @while ($events->have_posts())
                        @php($events->the_post())

                        <?php
                        $event_date = explode('/', get_field('event-date'));
                        $event_day = $event_date[0];
                        $event_month = $event_date[1];
                        $event_year = $event_date[2];
                        ?>
                        <article @php(post_class('news')) >
                            <a href="{{ get_permalink() }}">
                            <span class="post-meta">
                                <span class="evt-day">{{ $event_day }}</span>
                                <span class="evt-month">{{ $event_month }}</span>
                            </span>
                                <h3 class="post-title">{{ get_the_title() }}</h3>
                            </a>
                        </article>
                    @endwhile
                @endif
                @php(wp_reset_query())
                <a href="/eventos" class="btn btn-primary col-12">Ver mais</a>
            </div>
        </div>

    </div>
</section>