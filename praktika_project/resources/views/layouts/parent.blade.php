<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/parent.css')}}">

    @yield('style')
    @yield('title')
</head>
<body>
    <header>
        <img src="{{asset('css/logo.png')}}" height="65px" width="65px">
        <nav>
            <a href="\" class="nav_item">главная</a>
            <a href="\afisha" class="nav_item">наши постановки</a>
            <a href="\contacts" class="nav_item">контакты</a>
        </nav>
        <div class="auth">
            @if (Route::has('login'))
    
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="nav_item"
                                    >
                                        личный кабинет
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="nav_item"
                                    >
                                        вход
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="nav_item"
                                        >
                                            регистрация
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
        </div>
    </header>
    @yield('main')
    <hr>
    <footer>
        
        <img src="{{asset('css/logo.png')}}" height="65px" width="65px">
        <div class="nav_block">
            <div class="socials">
            <img src="{{asset('css/fb.png')}}" alt="" width="15px" height="26px">
            <img src="{{asset('css/instagram.png')}}" alt="" width="26px" height="26px">
            <img src="{{asset('css/vk.png')}}" alt="" width="35px" height="20px">
            <img src="{{asset('css/yt.png')}}" alt="" width="30px" height="21px">
        </div>
        <div class="nav_footer">
            <a href="\" class="nav_item_footer">главная</a>
            <a href="\afisha" class="nav_item_footer">наши постановки</a>
            <a href="\contacts" class="nav_item_footer">контакты</a>
        </div>
        </div>
    </footer>
</body>
</html>