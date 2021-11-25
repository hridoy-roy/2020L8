<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-dark">
    <header class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('post') }}">Post</a>
                  </li>
                </ul>
                <span class="navbar-text">
                    <ul class="nav justify-content-end">

                        {{-- @if (auth()->user()) --}}
                        @auth
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">{{ auth()->user()->name }}</a>
                        </li>
                        <li class="nav-item">
                          <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn nav-link">Logout</button>
                          </form>
                        </li>
                        @endauth
                       @guest
                       <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li> 
                       @endguest
                        
                      </ul>
                </span>
              </div>
            </div>
          </nav>
    </header>
    @yield('content')
</body>
</html>