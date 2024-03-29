<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top" dir="ltr">
    <form action="{{ url('/logout') }}" method="POST" id="logout_form" style="display: none">
        @csrf</form>
    <div class="container">
        <div class="company">
            <a class="navbar-brand text-capitalize" href="{{ url('/') }}">{{ $company->name }}</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a href="{{ route('home') }}"
                        class="nav-link {{ Request::is('/') ? 'active' : '' }}">{{ __('web.home') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}"
                        class="nav-link {{ Request::is('/about') ? 'active' : '' }}">{{ __('web.about') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/team') }}">{{ __('web.team') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/services') }}">{{ __('web.services') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">{{ __('web.contact') }} </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/testimonials') }}">{{ __('web.testimonials') }} </a>
                </li>
                @guest
                    <li class="nav-item">
                        <a href="{{ url('/login') }}" class="btn nav-link" form="logout_form">{{ __('web.login') }}
                        </a>
                    </li>
                @endguest
                @guest
                    <li class="nav-item">
                        <a href="{{ url('/register') }}" class="btn nav-link"
                            form="logout_form">{{ __('web.signup') }}
                        </a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <button type="submit" class="btn nav-link" form="logout_form">{{ __('web.logout') }}
                        </button>
                    </li>
                @endauth
                {{-- =================== localization ======================= --}}
                @if (App::getlocale() == 'en')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('lang/set/ar') }}">العربية<span
                                class="sr-only">(current)</span></a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('lang/set/en') }}">English<span
                                class="sr-only">(current)</span></a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
