@if($related->have_posts())
    @while ($related->have_posts())
        @php($related->the_post())
            <?php $title = get_the_title(); ?>
            <article @php(post_class('news col-12 col-md-4')) >
                <a href="{{ get_permalink() }}">
                    <span class="post-meta">Publicado em {{ get_the_date() }}</span>
                    <h4 class="post-title">{{ get_the_title() }}</h4>
                </a>
            </article>
    @endwhile
@endif
@php(wp_reset_query())
