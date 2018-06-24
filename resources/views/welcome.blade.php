<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/lib.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                background: #34d240;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                color: #e0ef09;
            }

            .links > a {
                color: #fff;
                padding: 0 30px;
                /* height: 35px; */
                text-align: center;
                vertical-align: middle;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Book Library Application
                </div>

                <div class="links">
                    <a href="{{ url('/crud') }}" class="btn btn-success go_home">Books List</a>
                    <a href="{{ url('/live_search') }}" class="btn btn-danger go_home">Books Search</a>
                    <a href="{{ url('/mylist') }}" class="btn btn-warning go_home">My Books</a>
                    <a href="{{ url('/crud/create') }}" class="btn btn-info go_home">Add New Book</a>
                    <a href="https://github.com/phpac2017/booklibrary" target="_blank" class="btn btn-primary go_home">GitHub (Source Code)</a>
                </div>
            </div>
        </div>
    </body>
</html>
