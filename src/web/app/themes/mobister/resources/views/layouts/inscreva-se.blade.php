<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    <header class="banner">
      <div class="container">
        <nav class="navbar navbar-toggleable-md no-gutters">
          <a class="brand col-12 text-center" href="{{ home_url('/') }}" title="{{ get_bloginfo('name', 'display') }}">
            <img src="{{ \App\asset_path('images/sao-judas-universidade.png') }}" alt="{{ get_bloginfo('name', 'display') }}"
                 class="img-fluid hidden-xs-down">
            <img src="{{ \App\asset_path('images/logo-small.png') }}" alt="{{ get_bloginfo('name', 'display') }}"
                 class="img-fluid hidden-sm-up">
          </a>
        </nav>
      </div>
    </header>

    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
          <div class="container">
            @yield('content')
          </div>
        </main>
      </div>
    </div>

    @php(do_action('get_footer'))
    <footer class="content-info">
      <section class="footer-copyrights">
        <div class="container">
          <div class="row">
            <div class="col-6 col-md">Copyright © 2017 - Ânima Educação. Todos os direitos reservados.</div>
            <div class="col-6 col-md d-flex flex-column flex-md-row text-right text-md-left justify-content-md-end">
              <a href="/politica-de-privacidade" class="">Política de Privacidade</a>
              <a href="http://mobister.com.br" target="_blank" class="">Produzido pela Mobister</a>
            </div>
          </div>
        </div>
      </section>
    </footer>
    @php(wp_footer())
  </body>
</html>
