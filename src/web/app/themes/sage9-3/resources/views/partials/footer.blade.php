<footer class="content-info col-12">
    <section class="social align-items-start justify-content-center">
        <div class="container">
            <div class="sect-header">
                <h2 class="sect-title text-uppercase">Confira o dia-a-dia da universidade:</h2>
            </div>
            <div class="sect-body">
                @if (has_nav_menu('social_navigation'))
                    {!! wp_nav_menu(['theme_location' => 'social_navigation', 'menu_class' => 'nav']) !!}
                @endif
            </div>
        </div>
    </section>
    <section class="footer-menu align-items-start justify-content-center">
        <div class="container">
            @if (has_nav_menu('footer_navigation'))
                {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
            @endif
        </div>
    </section>
    <section class="footer-copyrights">
        <div class="container">
            <div class="col">Copyright © 2017 - Ânima Educação. Todos os direitos reservados.</div>
            <a href="/politica-de-privacidade" class="col">Política de Privacidade</a>
            <a href="http://rits.com.br" target="_blank" class="col">Produzido pela Rits</a>
        </div>
    </section>
</footer>
