<article @php(post_class('col-12 col-md-6'))>
    <a href="{{ get_permalink() }}">
        <h3 class="entry-title course-name">{{ get_the_title() }}</h3>
        <span class="course-body">
            <div class="info"><i class="ion-clock"></i> <span class="lbl">Duração: </span> {{ get_field('course-duration') }}</div>
            <div class="info"><i class="ion-university"></i> <span class="lbl">Nível: </span> {{ get_the_terms('', 'course-level')[0]->name }}</div>
            <div class="info"><i class="ion-ios-location"></i> <span class="lbl">Modalidade: </span> {{ get_the_terms('', 'course-modality')[0]->name }}</div>
            <div class="info"><span class="lbl">Turno(s): </span>
                @if(get_field('course-shift'))
                    @for( $i=0 ; $i < sizeof(get_field('course-shift')) ; $i++)
                        {{ get_field('course-shift')[$i] }}
                        @if (sizeof(get_field('course-shift')) > $i+1)
                            ,
                        @endif
                    @endfor
                @endif
            </div>
        </span>
    </a>
</article>
