<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">WsbAdvancedProgramming</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.index')}}/" redirect="true">{{__('messages.menu.home')}} </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.about.index')}}"
                   redirect="true">{{__('messages.menu.about')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.movies.index')}}"
                   redirect="true">{{__('messages.menu.movies')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.employees.index')}}"
                   redirect="true">{{__('messages.menu.employees')}}</a>
            </li>

        </ul>
        <ul class="navbar-nav float-right">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home.locale.setting', 'it') }}"
                   >Italy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home.locale.setting', 'pl') }}"
                   >Polski</a>
            </li>
        </ul>
    </div>
</nav>
