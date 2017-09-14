@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
      <div class="page-content">
          <div class="container">
              <div class="row">
                  <div class="col-12 col-md-10 offset-md-1">
                      @include('partials.content-single-'.get_post_type())
                  </div>
              </div>
          </div>
      </div>
  @endwhile
@endsection
