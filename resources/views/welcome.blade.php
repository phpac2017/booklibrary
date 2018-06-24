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
