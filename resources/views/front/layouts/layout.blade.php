<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('plugin/fontawesome-free/css/all.min.css')}}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon" />
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon" />
    <title>Blog</title>
</head>
<body>
<div class="wrapper">
    <header class="purple">
        <nav class="navbar wrapper_content">
            <div class="navbar_title">
                <div class="navbar_logo">
                    <i class="fas fa-book-open"></i>
                </div>

                <div class="navbar_brand">
                    <a class="navbar_brand_link" href="{{route('home')}}">Blog</a>
                </div>
            </div>

            <div class="navbar_menu">
                <div class="navbar_link">
                    <a href="{{route('home')}}">Home</a>
                </div>
                <div class="navbar_link">
                    <a href="{{route('articles')}}">All articles</a>
                </div>
                <form class="navbar_form_search">
                    <input
                        class="form_search_input"
                        type="text"
                        placeholder="Search"
                    />
                    <button class="btn btn_search" type="submit">Search</button>
                </form>
                <div class="navbar_enter">
                    <div class="navbar_login">
                        LogIn/RegIn <i class="fas fa-sign-in-alt"></i>
                    </div>
                    <div class="navbar_logout">
                        LogOut <i class="fas fa-door-open"></i>
                    </div>
                </div>
            </div>
            <div class="navbar_burger">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer class="purple">
        <div class="footer_content wrapper_content">
            Created by Soloviev NV in 2023, all rights reserved.
            <div class="footer_social_icon">
                <i class="fab fa-instagram-square"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-google-plus-square"></i>
                <i class="fab fa-twitter-square"></i>
            </div>
        </div>
    </footer>
</div>

<script src="{{'js/itc-slider.js'}}" defer></script>
</body>
</html>
