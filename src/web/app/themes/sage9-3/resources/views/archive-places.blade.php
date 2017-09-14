@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    {{--@if (!have_posts())
        <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif--}}

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-1">
                    <section class="sect entry-content">
                        {{--<p>Infraestrutura, qualidade de ensino e tudo o que você precisa. Escolha seu curso e inscreva-se na {{env('UNIV_NAME')}}</p>--}}
                        @php(dynamic_sidebar('page-places'))
                    </section>

                    @if( have_posts() )
                        <section class="sect">
                            <div id="acrd" class="cmp--accordion" role="tablist" aria-multiselectable="true">
                                @php($i = 0)
                                @while( have_posts() ) @php(the_post())
                                    <div class="acc-item">
                                        <div class="acrd-header" role="tab" id="heading-{{$i}}">
                                            <a class="title" id="{{ get_post_field('post_name', get_post()) }}" data-toggle="collapse" data-parent="#acrd" href="#acrd-{{$i}}" aria-expanded="true" aria-controls="acrd-{{$i}}">
                                                <span class="title">{{ get_the_title() }}</span>
                                                <span class="icon"><i class="ion-plus-circled"></i></span>
                                            </a>
                                        </div>

                                        <div id="acrd-{{$i}}" class="acrd-body collapse show" role="tabpanel" aria-labelledby="heading-{{$i}}">
                                            <div class="card-block">
                                                {{ the_content() }}
                                                <hr>
                                                <div class="row no-gutters">
                                                    <div class="col-10 col-md-9">
                                                        <address class="place-address mb-0"><i class="ion-ios-location"></i><span>{{get_field('place-address')}}</span></address>
                                                        <a href="tel:{{ preg_replace( '/[^0-9]/', '', get_field('place-phone'))}}" class="place-tel"><i class="ion-ios-telephone"></i><span>{{get_field('place-phone')}}</span></a>
                                                    </div>
                                                    <div class="col-2 offset-md-1 text-right d-flex align-items-center justify-content-end">
                                                        <a href="{{get_field('place-maps')}}" class="place-tel" target="_blank"><i>Ver mapa</i></a>
                                                    </div>
                                                </div>
                                                <a href="/cursos/?unidade={{get_the_ID()}}" class="btn btn-primary col-12 col-md-6 offset-md-3">Ver cursos desta unidade</a>

                                            </div>
                                        </div>
                                    </div>
                                    @php($i++)
                                @endwhile
                            </div>
                        </section>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {!! get_the_posts_navigation() !!}
@endsection
