<article @php(post_class('post'))>
  <header class="row no-gutters align-items-center">
    <div class="col d-flex flex-column evt-date">
        <?php
          $event_date = explode('/', get_field('event-date'));
          $event_day = $event_date[0];
          $event_month = $event_date[1];
          $event_year = $event_date[2];
        ?>
        <span class="evt-day">{{ $event_day }}</span>
        <span class="evt-month">{{ $event_month }}</span>
        <span class="evt-month">{{ $event_year }}</span>
    </div>
    <div class="col">
      <h1 class="entry-title">{{ get_the_title() }}</h1>
      @include('partials/entry-meta')
    </div>
  </header>
  <div class="entry-content">
    @php(the_content())
    @include('partials/share-bar')
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  {{--@php(comments_template('/partials/comments.blade.php'))--}}
</article>
