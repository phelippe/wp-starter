<section class="find-courses">
    <div class="container">
        <div class="sect-header">
            <h2 class="sect-title">Encontre o seu curso</h2>
            <span class="sect-subtitle">Escolha o curso, confira todas as informações e <i>inscreva-se agora!</i></span>
        </div>
        <div class="sect-body">
            @if($course_levels)
                @foreach($course_levels as $level)
                    <a href="#{{ $level->slug }}" class="" title="{{ $level->name }}">
                        <img src="{{ get_field('course-taxonomy-level-image-mobile', 'course-level_'.$level->term_id)['sizes']['large'] }}"
                             alt="{{ $level->name }}" class="course-level-image img-mobile" />
                        <img src="{{ get_field('course-taxonomy-level-image-desktop', 'course-level_'.$level->term_id)['sizes']['large'] }}"
                             alt="{{ $level->name }}" class="course-level-image img-desktop" />
                        <span class="course-level-name">{{ $level->name }}</span>
                    </a>
                @endforeach
            @endif
            @php(wp_reset_query())
        </div>
    </div>
</section>