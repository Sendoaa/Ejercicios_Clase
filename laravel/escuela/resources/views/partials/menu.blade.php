<nav id="primary_nav_wrap">

    <ul>

        <li class="current-menu-item"><a href="{{route('alumnos.index')}}">Index</a></li>

        <li><a href="#"><b>Alumnos</b></a>

            <ul id="submenu">

                <li><a href="{{route('alumnos.index')}}">Listado de alumnos</a></li>

                <li><a href="{{route('alumnos.create')}}">Nuevo alumno</a></li>

            </ul>

        </li>

        {{-- <li><a href="#"><b>Cursos</b></a>

            <ul id="submenu">

                <li><a href="{{route('cursos.index')}}">Cursos</a></li>

                <li><a href="{{route('cursos.create')}}">Nuevo curso</a></li>

            </ul>

        </li> --}}

        {{-- <li><a href="#"><b>Profesores</b></a>

            <ul id="submenu">

                <li><a href="{{route('profesores.index')}}">Profesores</a></li>

                <li><a href="{{route('profesores.create')}}">Nuevo profesor</a></li>

            </ul>

        </li> --}}


    </ul>

<hr><br>

</nav>