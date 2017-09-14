<section class="slideshow">
    @if($slideshow->have_posts())
        @while($slideshow->have_posts()) @php($slideshow->the_post())

            <img src="<?= get_field('home-slideshow-image-mobile')['sizes']['home-slideshow-image-mobile'];  /*wp_get_attachment_image_src(get_post_thumbnail_id(), 'card-horizontal')[0];*/?>" class="img-mobile img-fluid" alt="">
            <img src="<?= get_field('home-slideshow-image-dektop')['sizes']['home-slideshow-image-desktop'];  /*wp_get_attachment_image_src(get_post_thumbnail_id(), 'card-horizontal')[0];*/?>" class="img-desktop img-fluid" alt="">
            <span class="title">{{ get_the_title() }}</span>
            <span class="desc">{{ get_the_content() }}</span>
            <a href="{{ get_field('home-slideshow-button-link') }}" class="btn btn-primary">{{ get_field('home-slideshow-button-text') }}</a>
        @endwhile
    @endif
    @php(wp_reset_query())
</section>
