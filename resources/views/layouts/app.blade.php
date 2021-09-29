<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #b0acac">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    Variable width content
                </div>
            </div>
            <div class="row">
                <div class="col-md-auto">
                    Variable width content
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

           <div class="col-md-4 text-left">
               <img src="{{url('/images/loft.svg')}}" class="img-fluid" alt="Responsive image">
           </div>
           <div class="col-md-4">
               <div class="md-form active-cyan-2 mb-3">
                   <input class="form-control" type="text" placeholder="Search" aria-label="Search">
               </div>
           </div>
           <div class="col-md-4"></div>


    </nav>
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
</div>
</body>
</html>
