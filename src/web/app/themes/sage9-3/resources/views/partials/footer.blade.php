<footer class="content-info col-12">
    <section class="sect sect-">
        <div class="container">
            @if (has_nav_menu('footer_navigation'))
                {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
            @endif
        </div>
    </section>
</footer>
