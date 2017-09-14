@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
      <div class="page-content">
          <div class="container">
              <div class="row">
                  <div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-1 entry-content">
                      @include('partials.content-page')
                  </div>
                  <div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-1">
                      @if($formas_ingresso->have_posts())
                          <div id="acrd" class="cmp--accordion" role="tablist" aria-multiselectable="true">
                              @php($i = 0)
                              @while($formas_ingresso->have_posts()) @php($formas_ingresso->the_post())
                                  <div class="acc-item">
                                      <div class="acrd-header" role="tab" id="heading-{{$i}}">
                                          <a data-toggle="collapse" data-parent="#acrd" href="#acrd-{{$i}}"
                                             aria-expanded="true" aria-controls="acrd-{{$i}}"
                                             id="{{ get_post_field('post_name', get_post()) }}"
                                             class="title">
                                              <span class="title">{{ get_the_title() }}</span>
                                              <span class="icon"><i class="ion-plus-circled"></i></span>
                                          </a>
                                      </div>

                                      <div id="acrd-{{$i}}" class="acrd-body collapse" role="tabpanel" aria-labelledby="heading-{{$i}}">
                                          <div class="card-block">
                                              {{ the_content() }}
                                          </div>
                                      </div>
                                  </div>
                                  @php($i++)
                              @endwhile
                          </div>
                      @endif
                  </div>
              </div>
          </div>
      </div>
  @endwhile
@endsection
