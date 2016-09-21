<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Exnotion</title>
        <!-- Foundation -->
        <link rel="stylesheet" href="{{asset('asset/bower_components/foundation/css/foundation.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('asset/bower_components/components-font-awesome/css/font-awesome.css')}}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{url('css/default.css')}}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    EXNOTION
                </div>
                <div class="row">
                    <div class="large-6 columns">
                        <select type="text" name="category-select">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="large-6 columns">
                        <input type="text" name="category-text" placeholder="category">
                    </div>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Masa Lalu</a>
                    <a href="https://laracasts.com">Masa Depan</a>
                    <a href="https://laravel-news.com">Terpuruk</a>
                    <a href="https://forge.laravel.com">Lupakan</a>
                    <a href="https://github.com/laravel/laravel">Semangat</a>
                </div>
            </div>
        </div>
    </body>
</html>
