<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto  ">
                <li ><a class="navlink" href="#">Item </a></li>
                <li ><a class="navlink" href="#">Item </a></li>
                <li ><a class="navlink" href="#">Item </a></li>
                <li ><a class="navlink" href="#">Item </a></li>
                <li ><a class="navlink" href="#">Item </a></li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion ') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <img src="/storage/cover_images/{{auth::user()->cover_image}}"  style="width:32px; height:32px; position:absolute; top:10px; margin-left: 100px;; border-radius:50%">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>


                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>


                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            @if(Auth::user()->member_in != '0')
                            @foreach($gyms as $gym)
                            @if ($gym->id == Auth::user()->member_in)
                            <a class="dropdown-item fa fa-hand-grab-o"  href="/gyms/{{$gym->id}}">
                                {{ __('salle de sport') }}
                            </a>

                            @endif
                            @endforeach

                            @endif

                            @if(Auth::user()->role != 'User')
                            <a class="dropdown-item fa  fa-tachometer" href="/dashboardAdmin">
                                {{ __('tableau de bord') }}
                            </a>
                            @endif
                            <a class="dropdown-item fa fa-user" href="/userprofile">
                                {{ __('profile') }}
                            </a>


                            <a class="dropdown-item fa fa-sign-out" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>



                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

