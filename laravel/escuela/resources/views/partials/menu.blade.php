<nav id="primary_nav_wrap">

    <ul>
        <li><a href="{{ route('alumnos.index') }}">Listado de alumnos</a></li>
        <li><a href="{{ route('alumnos.create') }}">Nuevo alumno</a></li>
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

<style>
    #primary_nav_wrap {
        margin-top: 15px;
    }

    #primary_nav_wrap ul {
        list-style: none;
        position: relative;
        float: left;
        margin: 0;
        padding: 0;
        background: #333;
    }

    #primary_nav_wrap ul li {
        float: left;
        margin: 0;
        padding: 0;
    }

    #primary_nav_wrap ul li a {
        display: block;
        color: #fff;
        text-decoration: none;
        padding: 10px 15px;
        font-family: Arial, sans-serif;
        font-size: 14px;
    }

    #primary_nav_wrap ul li a:hover {
        background: #4CAF50;
    }

    #primary_nav_wrap ul ul {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background: #333;
        padding: 0;
    }

    #primary_nav_wrap ul ul li {
        float: none;
        width: 200px;
    }

    #primary_nav_wrap ul ul li a {
        padding: 10px;
    }

    #primary_nav_wrap ul ul li a:hover {
        background: #4CAF50;
    }

    #primary_nav_wrap ul li:hover > ul {
        display: block;
    }
</style>