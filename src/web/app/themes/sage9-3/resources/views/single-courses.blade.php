@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @while(have_posts()) @php(the_post())
      <div class="page-content">
          <div class="container">
              <div class="row flex-column-reverse flex-md-row align-items-start">
                  @include('partials.content-single-'.get_post_type())
                  <aside class="sidebar sidebar-course col-12 col-md-3 offset-md-1 text-right d-flex flex-column">
                      <a href="/como-ingressar" class="hidden-sm-down">Como ingressar</a>
                      <a href="/a-universidade/bolsas-e-financiamentos/" class="hidden-sm-down">Bolsas e financiamentos</a>
                      <a href="{{ get_permalink(114) }}" class="hidden-sm-down">Use sua nota do ENEM</a>
                      <div class="infos text-left text-md-right">
                          <span class="lbl">Mensalidades a partir de:</span>
                          <span class="price">R$ 1.134,44*</span>
                          <span class="small">*Valores detalhados em investimento</span>

                          <div class="col-12 hidden-sm-down">
                            <a href="{{ get_field('btn-link') ? get_field('btn-link') : '/inscreva-se' }}" class="btn btn-secondary col-12">Inscreva-se</a>
                          </div>
                      </div>
                  </aside>
              </div>
              @if($related->have_posts())
                  <section class="related-posts">
                      <div class="sect-head">
                          <h3 class="sect-title f-f-b">Veja também: </h3>
                      </div>
                      <div class="sect-body">
                          <div class="row">
                            @include('partials.related-posts')
                          </div>
                      </div>
                  </section>
              @endif
          </div>
      </div>
  @endwhile
@endsection
