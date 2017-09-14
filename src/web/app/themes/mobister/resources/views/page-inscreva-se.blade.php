@extends('layouts.inscreva-se')

@section('content')
    <div class="col-xl-10 offset-xl-1">
        <h2 class="page-title">Faça sua inscrição na São Judas</h2>
        @if($inscricoes->have_posts())
            <div class="row no-gutters">
                @while ($inscricoes->have_posts())
                    @php($inscricoes->the_post())
                        <div class="inscricao col-12 col-sm-6 col-md-3 col-lg">
                            <a href="{{ get_field('inscricao-url') }}" target="_blank" title="{{ get_the_title() }}">
                                <figure>
                                    <img src="{{ get_field('inscricao-img-mobile')['sizes']['large'] }}"
                                         alt="{{ get_the_title() }}" class="inscricao-image img-mobile hidden-lg-up" />
                                    <img src="{{ get_field('inscricao-img-desktop')['sizes']['large'] }}"
                                         alt="{{ get_the_title() }}" class="inscricao-image img-desktop hidden-md-down" />
                                </figure>
                                <div class="name"><span>{{ get_the_title() }}</span></div>
                            </a>
                        </div>
                @endwhile
            </div>
        @endif
        @php(wp_reset_query())

            <div class="text-center container-link-go-site">
                <a href="/" class="link-go-site">{{ get_field('inscricao-url-text') }}</a>
            </div>
    </div>
@endsection
