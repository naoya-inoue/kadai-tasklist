<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Tasklist</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <li>{!! link_to_route('tasks.create', '新規タスクの登録') !!}</li>
                        <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                    @else
                        <li>{!! link_to_route('signup.get', 'Sign up') !!}</li>
                        <li>{!! link_to_route('login', 'Log in') !!}</li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>