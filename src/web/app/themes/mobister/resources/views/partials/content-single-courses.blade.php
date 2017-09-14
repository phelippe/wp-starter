<article @php(post_class('post col-12 col-md-8'))>
    <header class="fast-infos d-flex flex-wrap no-gutters flex-column flex-md-row">
        <div class="info"><i class="ion-clock"></i> <span class="f-w-b">Duração: </span> {{ get_field('course-duration') }}</div>
        <div class="info"><i class="ion-university"></i> <span class="f-w-b">Titulação: </span> {{ get_field('course-degree') }}</div>
        {{--<div class="info"><i class="ion-ios-location"></i> <span class="f-w-b">Modalidade: </span> {{ get_the_terms('', 'course-modality')[0]->name }}</div>--}}
        @if(get_field('course-shift'))
            <div class="info"><span class="f-w-b">Turno(s): </span>

                @for( $i=0 ; $i < sizeof(get_field('course-shift')) ; $i++)
                    {{ get_field('course-shift')[$i] }}
                    @if (sizeof(get_field('course-shift')) > $i+1)
                        ,
                    @endif
                @endfor
            </div>
        @endif
        @if(get_field('course-places'))
            <div class="info col-12"><span class="f-w-b">Unidade(s): </span>
                @for( $i=0 ; $i < sizeof(get_field('course-places')) ; $i++)
                    {{ get_field('course-places')[$i]->post_title }}
                    @if (sizeof(get_field('course-places')) > $i+1)
                        ,
                    @endif
                @endfor
            </div>
        @endif
    </header>

    <div class="entry-content">
        @if(get_field('shared-module') == true)
            @include('partials.shared-module')
        @endif
        @php(the_content())
    </div>

    <div class="course-data">
        {{--<div class="coord-name"><span class="f-w-b">Coordenador do curso: </span> @@@None coord@@@</div>--}}
        @if(get_field('coordenador-contato'))
            <div class="coord-email"><span class="f-w-b">Contato do coordenador: </span> {{ get_field('coordenador-contato') }}</div>
        @endif
        @if(get_field('mec-grade'))
            <div class="mec-grade"><span class="f-w-b">Nota do MEC: </span> {{ get_field('mec-grade') }}</div>
        @endif
        @if(get_field('mec-code'))
            <div class="mec-portaria"><span class="f-w-b">Portaria do MEC: </span> {{ get_field('mec-code') }}</div>
        @endif
        @if(get_field('enade-grade'))
            <div class="enade-grade"><span class="f-w-b">Enade: </span> {{ get_field('enade-grade') }}</div>
        @endif
    </div>

    <div id="acrd" class="cmp--accordion" role="tablist" aria-multiselectable="true">

        {{--<div class="acc-item">
            <div class="acrd-header" role="tab" id="heading-grade">
                <a data-toggle="collapse" data-parent="#acrd" class="title" href="#acrd-1" aria-expanded="true" aria-controls="acrd-1">
                    <span class="title">Grade curricular</span>
                    <span class="icon"><i class="ion-plus-circled"></i></span>
                </a>
            </div>

            <div id="acrd-1" class="acrd-body collapse" role="tabpanel" aria-labelledby="heading-grade">
                <div class="card-block">
                    @TODO: colocar conteudo da grade curricular
                </div>
            </div>
        </div>--}}

        @if(get_field('course-market'))
        <div class="acc-item">
            <div class="acrd-header" role="tab" id="heading-mercado">
                <a class="title" data-toggle="collapse" data-parent="#acrd" href="#acrd-2" aria-expanded="true" aria-controls="acrd-2">
                    <span class="title">Mercado de trabalho</span>
                    <span class="icon"><i class="ion-plus-circled"></i></span>
                </a>
            </div>

            <div id="acrd-2" class="acrd-body collapse" role="tabpanel" aria-labelledby="heading-mercado">
                <div class="card-block">
                    {!! wpautop(get_field('course-market')) !!}
                </div>
            </div>
        </div>
        @endif

        @if(get_field('course-professional-targets'))
        <div class="acc-item">
            <div class="acrd-header" role="tab" id="heading-atuacao">
                <a class="title"  data-toggle="collapse" data-parent="#acrd" href="#acrd-3" aria-expanded="true" aria-controls="acrd-3">
                    <span class="title">Atuação</span>
                    <span class="icon"><i class="ion-plus-circled"></i></span>
                </a>
            </div>

            <div id="acrd-3" class="acrd-body collapse" role="tabpanel" aria-labelledby="heading-atuacao">
                <div class="card-block">
                    {!! wpautop(get_field('course-professional-targets')) !!}
                </div>
            </div>
        </div>
        @endif

        @if(get_field('course-differential'))
        <div class="acc-item">
            <div class="acrd-header" role="tab" id="heading-diferencias">
                <a class="title"  data-toggle="collapse" data-parent="#acrd" href="#acrd-4" aria-expanded="true" aria-controls="acrd-4">
                    <span class="title">Diferencias</span>
                    <span class="icon"><i class="ion-plus-circled"></i></span>
                </a>
            </div>

            <div id="acrd-4" class="acrd-body collapse" role="tabpanel" aria-labelledby="heading-diferencias">
                <div class="card-block">
                    {!! wpautop(get_field('course-differential')) !!}
                </div>
            </div>
        </div>
        @endif

        {{--<div class="acc-item">
            <div class="acrd-header" role="tab" id="heading-investimento">
                <a class="title"  data-toggle="collapse" data-parent="#acrd" href="#acrd-5" aria-expanded="true" aria-controls="acrd-5">
                    <span class="title">Investimento</span>
                    <span class="icon"><i class="ion-plus-circled"></i></span>
                </a>
            </div>

            <div id="acrd-5" class="acrd-body collapse" role="tabpanel" aria-labelledby="heading-investimento">
                <div class="card-block">
                    @TODO: Colocar conteúdo de investimento
                </div>
            </div>
        </div>--}}

        @if(get_field('course-physical-structure'))
        <div class="acc-item">
            <div class="acrd-header" role="tab" id="heading-estrutura">
                <a class="title" data-toggle="collapse" data-parent="#acrd" href="#acrd-6" aria-expanded="true" aria-controls="acrd-6">
                    <span class="title">Estrutura Física</span>
                    <span class="icon"><i class="ion-plus-circled"></i></span>
                </a>
            </div>

            <div id="acrd-6" class="acrd-body collapse" role="tabpanel" aria-labelledby="heading-estrutura">
                <div class="card-block">
                    {!! wpautop(get_field('course-physical-structure')) !!}
                </div>
            </div>
        </div>
        @endif

        @if(get_field('course-general-obs'))
        <div class="acc-item">
            <div class="acrd-header" role="tab" id="heading-estrutura">
                <a class="title" data-toggle="collapse" data-parent="#acrd" href="#acrd-7" aria-expanded="true" aria-controls="acrd-7">
                    <span class="title">Observações Gerais</span>
                    <span class="icon"><i class="ion-plus-circled"></i></span>
                </a>
            </div>

            <div id="acrd-7" class="acrd-body collapse" role="tabpanel" aria-labelledby="heading-estrutura">
                <div class="card-block">
                    {!! wpautop(get_field('course-general-obs')) !!}
                </div>
            </div>
        </div>
        @endif
    </div>

    @if(get_field('course-pedagogical-project'))
        <a href="{{get_field('course-pedagogical-project')['url']}}" target="_blank" class="btn btn-primary col-12 btn-projeto f-w-b">Download do projeto pedagógico</a>
    @endif

    <footer>
    </footer>
</article>
