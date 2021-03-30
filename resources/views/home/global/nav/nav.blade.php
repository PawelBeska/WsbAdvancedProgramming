<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">WsbAdvancedProgramming</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.index')}}/" redirect="true">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.about.index')}}" redirect="true">O mnie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.table-1.index')}}" redirect="true">Tabela 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.employees.index')}}" redirect="true">Pracownicy</a>
            </li>
        </ul>
    </div>
</nav>
