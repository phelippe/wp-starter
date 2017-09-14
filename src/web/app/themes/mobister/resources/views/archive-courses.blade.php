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
                <aside class="sidebar course-filter col-12 col-md-3">
                    @include('partials.sidebar-courses-filter')
                </aside>
                <div class="col-12 col-md-8 offset-md-1 section-results">
                    <h2>Resultados para sua busca</h2>
                    <div class="row">
                        @if(have_posts())
                            @while (have_posts()) @php(the_post())
                                @include('partials.content-'.get_post_type())
                            @endwhile
                        @else
                            <h3 class="col-12">Não foi encontrado nenhum resultado para sua busca</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! get_the_posts_navigation() !!}
@endsection
