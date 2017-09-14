<section class="scholarships">
    <div class="container">
        <div class="sect-header">
            <h2 class="sect-title">Bolsas e financiamentos</h2>
            <span class="sect-subtitle">A UniSociesc oferece diversas possibilidades para você financiar o seu sucesso!</span>
        </div>
        <div class="sect-body">

			@if($scholarships->have_posts())
				@while ($scholarships->have_posts())
                    @php($scholarships->the_post())
			        <? $title = get_the_title(); ?>

                    <div class="bolsa col-12 col-sm-6 col-lg-4">
                        <a href="<?= get_permalink(); ?>">
                            <figure class="container-img">
                                <img src="<?= get_field('scholarships-funding-imagem-home-mobile')['url']; ?>" alt="{{ $title }}" class="img-mobile">
                                <img src="<?= get_field('scholarships-funding-imagem-home-desktop')['url']; ?>" alt="{{ $title }}" class="img-desktop">
                            </figure>
                            <span>{{ $title }}</span>
                        </a>
                    </div>
                @endwhile
            @endif
			@php(wp_reset_query())
        </div>
    </div>
</section>