<a href="/cursos" class="see-all"><i class="ion-eye"></i> Ver todos os cursos</a>

<form action="#">
    <div class="form-group">
        <select name="unidade" id="" class="form-control custom-select">
            <option value="">Selecione a unidade</option>
            @if($course_places->have_posts())
                @while ($course_places->have_posts())
                    @php($course_places->the_post())
                        <option value="{{ get_the_ID() }}" {{isset($_GET['unidade']) && $_GET['unidade'] == get_the_ID() ? 'selected' : '' }} >{{ get_the_title() }}</option>
                @endwhile
            @endif
            @php(wp_reset_query())
        </select>
    </div>

    <div class="form-group">
        <select name="nivel" id="" class="form-control custom-select">
            <option value="">Selecione o nível</option>
            @foreach($course_levels as $level)
                <option value="{{ $level->term_id }}" {{isset($_GET['nivel']) && $_GET['nivel'] == $level->term_id ? 'selected' : '' }} >{{ $level->name }}</option>
            @endforeach
            @php(wp_reset_query())
        </select>
    </div>

    <div class="form-group">
        <select name="turno" id="" class="form-control custom-select">
            <option value="">Selecione o turno</option>
            <option value="matutino" {{isset($_GET['turno']) && $_GET['turno'] == 'matutino' ? 'selected' : '' }} >Matutino</option>
            <option value="vespertino" {{isset($_GET['turno']) && $_GET['turno'] == 'vespertino' ? 'selected' : '' }} >Vespertino</option>
            <option value="noturno" {{isset($_GET['turno']) && $_GET['turno'] == 'noturno' ? 'selected' : '' }} >Noturno</option>
        </select>
    </div>

    <div class="form-group">
        <input type="text" name="nome" value="{{ isset($_GET['nome']) ? $_GET['nome'] : '' }}" class="form-control course-name plh-it" placeholder="O que deseja cursar?" >
        <button class="btn btn-primary col-12">Aplicar filtros</button>
    </div>
</form>
