<header>
    <nav class="navbar navbar-expand-lg bg-body-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="/"><img src="/img/background.png" height="60px" width="60px" class="full_fit"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li>[{{app()->getLocale()}}]</li>
                    <x-forms.buttons.header/>
                </ul>
            </div>
            <div class="">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-secondary">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-secondary">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>
</header>
