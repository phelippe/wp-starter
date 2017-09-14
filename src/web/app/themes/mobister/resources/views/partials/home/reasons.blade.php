<section class="reasons">
    <div class="container">
        <div class="sect-header">
            <h2 class="sect-title">Motivos para escolher a UniSociesc</h2>
        </div>
        <div class="sect-body">
            @if( have_rows('reasons') )
                @while ( have_rows('reasons') )
                    @php(the_row())
                    <div class="col reason">
                        <figure class="container-icon">
                            <img src="{{ get_sub_field('reason-image')['url'] }}" alt="" class="img-fluid">
                        </figure>
                        <span class="reason-title">{{ get_sub_field('reason-title') }}</span>
                    </div>
                @endwhile
            @endif
        </div>

        <div class="sect-footer col-12 text-center">
            <a href="#" class="btn btn-lg btn-primary">Inscreva-se agora!</a>
        </div>
    </div>
</section>