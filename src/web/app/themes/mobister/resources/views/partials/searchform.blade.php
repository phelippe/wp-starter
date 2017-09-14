<form method="get" action="<?= esc_url( home_url( '/' ) ); ?>" class="search-form">
  <div class="form-group">
    <button class="btn-cancel" type="button" >{{--Cancelar--}} <i class="ion-android-close"></i> </button>
    <input type="text" autocomplete="false" class="form-control search-control plh-blue plh-it" name="s" id="s" placeholder="<?= __('O que você está procurando?', 'mobister'); ?>" value="<?= get_search_query() ?>">
    <button type="submit" class="btn-submit" ><i class="ion-android-search"></i> <span class="sr-only">Buscar</span></button>
  </div>
  <button class="btn-open"><i class="ion-android-search"></i></button>
</form>
