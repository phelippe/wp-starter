<section class="places">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 news">
                <h2 class="sect-title">Tem uma UniSociesc perto de você</h2>
                <span class="sect-subtitle">Infraestrutura, qualidade de ensino e tudo o que você precisa. Escolha seu curso e inscreva-se na UniSociesc!</span>

                @if($places->have_posts())
                    @while ($places->have_posts())
                        @php($places->the_post())
                        <a href="#">{{ get_the_title() }}</a>
                    @endwhile
                @endif
                @php(wp_reset_query())
                <a href="/noticias" class="btn btn-primary col-12">Ver mais</a>
            </div>

            <div class="col-12 col-md-6 events d-flex flex-column align-items-start">
                <h3 class="place-title">Unidade Balneário Camboriú</h3>
                <div class="divider">linha</div>
                <address class="place-address"><i class="ion-ios-location"></i><span>Av. x</span></address>
                <a href="#"><i class="ion-ios-telephone"></i><span>(99)99999-9999</span></a>
                <a href="#" class="btn btn-primary">Ver mapa</a>
            </div>
        </div>
    </div>
</section>