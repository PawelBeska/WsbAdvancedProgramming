<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" redirect="true" href="/">WsbAdvancedProgramming</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.index')}}/"
                       redirect="true">{{__('messages.menu.home')}} </a>
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
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.posts.index')}}"
                       redirect="true">{{__('messages.menu.posts')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.blog.index')}}"
                       redirect="true">{{__('messages.menu.blog')}}</a>
                </li>
            @endauth
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}"
                       redirect="true">{{__('messages.menu.login')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}"
                       redirect="true">{{__('messages.menu.register')}}</a>
                </li>
            @endguest
        </ul>
        <ul class="navbar-nav float-right">
            @auth()
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">@lang('messages.menu.logout')</a>
                </li>
                @endauth
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
