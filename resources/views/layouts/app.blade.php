<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        #app {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
        .footer {
            background-color: #0B357A;
            color: white;
            padding: 20px 0;
        }
        .footer .container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .footer .container > div {
            flex: 1;
            margin: 10px;
            min-width: 200px;
        }
        .footer h5 {
            margin-bottom: 15px;
        }
        .footer ul {
            list-style: none;
            padding: 0;
        }
        .footer ul li {
            margin-bottom: 10px;
        }
        .footer ul li a {
            color: white;
            text-decoration: none;
        }
        .footer ul li a:hover {
            text-decoration: underline;
        }
        .footer .social-media img {
            width: 30px;
            margin-right: 10px;
        }
        .footer .social-media a {
            display: inline-flex;
            align-items: center;
            color: white;
            text-decoration: none;
        }
        .footer .social-media a:hover {
            text-decoration: underline;
        }
        .footer .payment-method img {
            width: 100px;
            height: auto;
        }
        .navbar-custom {
            background: linear-gradient(to right, #0B357A, #d2def4);
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link,
        .navbar-custom .form-control,
        .navbar-custom .btn {
            color: #ffffff;
        }
        .navbar-custom .form-control {
            background-color: rgba(255, 255, 255, 0.2);
            border: none;
        }
        .navbar-custom .btn-login {
            background-color: #1E65A8;
            border: none;
            color: white;
        }
        /* .navbar-custom .btn-register {
            background-color: #0B357A;
            border: none;
            color: white;
        } */
        .navbar-custom .btn-login:hover,
        .navbar-custom .btn-register:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md fixed-top navbar-custom">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    RIDHO.CO
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a href="{{ route('shop.index') }}" class="nav-link">Shop</a>
                        </li>
                        <livewire:shop.cartnav />
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="btn btn-login my-2 my-sm-0" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-register my-2 my-sm-0" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a href=" {{ route('admin.product') }} " class="dropdown-item">Product</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <nav>
            <br><br>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="footer">
        <div class="container">
            <div>
                <h5>Ridho Advertising</h5>
                <ul>
                    <li><a href="#">All Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Help Center</a></li>
                </ul>
            </div>
            <div>
                <h5>Contact</h5>
                <ul>
                    <li>Jl. Keben II Blk C No.20, Bandungrejosari, Kec. Sukun, Kota Malang, Jawa Timur</li>
                    <li>No. WA: 0856-4507-8880</li>
                </ul>
            </div>
            <div class="payment-method">
                <h5>Payment Method</h5>
                <img src="{{ asset('logo/R 1.png') }}" alt="BCA">
            </div>
            <div class="social-media">
                <h5>Social Media</h5>
                <a href="https://www.instagram.com/ridhoadvertisingmlg?igsh=MTI1bmdxcTMxbmVycg==">
                    <img src="{{ asset('logo/ig.png') }}" alt="Instagram">
                </a>
                <a href="https://wa.me/6285645078880">
                    <img src="{{ asset('logo/whatsapp.png') }}" alt="WhatsApp">
                </a>
                <a href="https://www.facebook.com/p/Percetakan-RIDHO-Advertising-100037758291010/">
                    <img src="{{ asset('logo/facebook.png') }}" alt="Facebook">
                </a>
            </div>
        </div>
    </footer>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
    @livewireScripts
</body>
</html>
