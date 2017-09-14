<div class="shared-module">
  <div id="shared-mod-acrd" class="accordions" role="tablist" aria-multiselectable="true">
    <div class="acc-item">
      <div class="acrd-header" role="tab" id="heading-shared-module">
        <div class="d-flex flex-row flex-wrap text-center text-md-left">
          <div class="icon-container col-md">
            <i class="ion-ribbon-b"></i>
          </div>
          <div class="container-text col-md">
            <h3>Módulo comum</h3>
            <div>{{ the_field('shared-module-desc-1', 'option') }}</div>
          </div>
          <div class="col-12 d-flex justify-content-center">
            <a data-toggle="collapse" data-parent="#shared-mod-acrd" href="#acrd-shared-module" aria-expanded="true" aria-controls="acrd-shared-module" class="btn btn-primary">Saiba mais</a>
          </div>
        </div>
      </div>

      <div id="acrd-shared-module" class="acrd-body collapse" role="tabpanel" aria-labelledby="heading-shared-module">
        <div class="card-block">
          <h3 class="mb-4">{{ the_field('shared-module-title-1', 'option') }}</h3>
          <h4>{{ the_field('shared-module-title-2', 'option') }}</h4>
          <p>{{ the_field('shared-module-description', 'option') }}</p>

          @if( have_rows('shared-module-items', 'option') )
            @while ( have_rows('shared-module-items', 'option') ) @php(the_row())
              <div class="item">
                <i class="ion-checkmark-round"></i>
                <span>{{ the_sub_field('item-text') }}</span>
              </div>
            @endwhile
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
