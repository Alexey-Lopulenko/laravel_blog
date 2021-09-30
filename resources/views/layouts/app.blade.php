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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #ededed">
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
        <div class="col-md-4 d-flex justify-content-center">
            <i class="far fa-user fa-2x mr-3"></i>
            <i class="fas fa-balance-scale fa-2x mr-3"></i>
            <i class="fas fa-shopping-basket fa-2x mr-3"></i>
        </div>
    </nav>
    <div class="pos-f-t">
        <nav class="navbar navbar-light" style="background-color: #E19D59">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Links -->
            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between">
                    <a class="p-2 text-muted" href="#">World</a>
                    <a class="p-2 text-muted" href="#">U.S.</a>
                    <a class="p-2 text-muted" href="#">Technology</a>
                    <a class="p-2 text-muted" href="#">Design</a>
                    <a class="p-2 text-muted" href="#">Culture</a>
                    <a class="p-2 text-muted" href="#">Business</a>
                    <a class="p-2 text-muted" href="#">Politics</a>
                    <a class="p-2 text-muted" href="#">Opinion</a>
                    <a class="p-2 text-muted" href="#">Science</a>
                    <a class="p-2 text-muted" href="#">Health</a>
                    <a class="p-2 text-muted" href="#">Style</a>
                    <a class="p-2 text-muted" href="#">Travel</a>
                </nav>
            </div>
        </nav>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h4 class="text-white">Collapsed content</h4>
                <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5 class="text-white h4">Collapsed content</h5>
                <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
    </div>
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </main>
</div>
</body>
<!-- Footer -->
{{--<footer class="text-center text-lg-start bg-light text-muted fixed-bottom">--}}
{{--    <!-- Section: Social media -->--}}
{{--    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">--}}
{{--        <!-- Left -->--}}
{{--        <div class="me-5 d-none d-lg-block">--}}
{{--            <span>Get connected with us on social networks:</span>--}}
{{--        </div>--}}
{{--        <!-- Left -->--}}

{{--        <!-- Right -->--}}
{{--        <div>--}}
{{--            <a href="" class="me-4 text-reset">--}}
{{--                <i class="fab fa-facebook-f"></i>--}}
{{--            </a>--}}
{{--            <a href="" class="me-4 text-reset">--}}
{{--                <i class="fab fa-twitter"></i>--}}
{{--            </a>--}}
{{--            <a href="" class="me-4 text-reset">--}}
{{--                <i class="fab fa-google"></i>--}}
{{--            </a>--}}
{{--            <a href="" class="me-4 text-reset">--}}
{{--                <i class="fab fa-instagram"></i>--}}
{{--            </a>--}}
{{--            <a href="" class="me-4 text-reset">--}}
{{--                <i class="fab fa-linkedin"></i>--}}
{{--            </a>--}}
{{--            <a href="" class="me-4 text-reset">--}}
{{--                <i class="fab fa-github"></i>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <!-- Right -->--}}
{{--    </section>--}}
{{--    <!-- Section: Social media -->--}}

{{--    <!-- Section: Links  -->--}}
{{--    <section class="">--}}
{{--        <div class="container text-center text-md-start mt-5">--}}
{{--            <!-- Grid row -->--}}
{{--            <div class="row mt-3">--}}
{{--                <!-- Grid column -->--}}
{{--                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">--}}
{{--                    <!-- Content -->--}}
{{--                    <h6 class="text-uppercase fw-bold mb-4">--}}
{{--                        <i class="fas fa-gem me-3"></i>Company name--}}
{{--                    </h6>--}}
{{--                    <p>--}}
{{--                        Here you can use rows and columns to organize your footer content. Lorem ipsum--}}
{{--                        dolor sit amet, consectetur adipisicing elit.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <!-- Grid column -->--}}

{{--                <!-- Grid column -->--}}
{{--                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">--}}
{{--                    <!-- Links -->--}}
{{--                    <h6 class="text-uppercase fw-bold mb-4">--}}
{{--                        Products--}}
{{--                    </h6>--}}
{{--                    <p>--}}
{{--                        <a href="#!" class="text-reset">Angular</a>--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--                        <a href="#!" class="text-reset">React</a>--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--                        <a href="#!" class="text-reset">Vue</a>--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--                        <a href="#!" class="text-reset">Laravel</a>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <!-- Grid column -->--}}

{{--                <!-- Grid column -->--}}
{{--                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">--}}
{{--                    <!-- Links -->--}}
{{--                    <h6 class="text-uppercase fw-bold mb-4">--}}
{{--                        Useful links--}}
{{--                    </h6>--}}
{{--                    <p>--}}
{{--                        <a href="#!" class="text-reset">Pricing</a>--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--                        <a href="#!" class="text-reset">Settings</a>--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--                        <a href="#!" class="text-reset">Orders</a>--}}
{{--                    </p>--}}
{{--                    <p>--}}
{{--                        <a href="#!" class="text-reset">Help</a>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <!-- Grid column -->--}}

{{--                <!-- Grid column -->--}}
{{--                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">--}}
{{--                    <!-- Links -->--}}
{{--                    <h6 class="text-uppercase fw-bold mb-4">--}}
{{--                        Contact--}}
{{--                    </h6>--}}
{{--                    <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>--}}
{{--                    <p>--}}
{{--                        <i class="fas fa-envelope me-3"></i>--}}
{{--                        info@example.com--}}
{{--                    </p>--}}
{{--                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>--}}
{{--                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>--}}
{{--                </div>--}}
{{--                <!-- Grid column -->--}}
{{--            </div>--}}
{{--            <!-- Grid row -->--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- Section: Links  -->--}}

{{--    <!-- Copyright -->--}}
{{--    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">--}}
{{--        © 2021--}}
{{--        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">loft</a>--}}
{{--    </div>--}}
{{--    <!-- Copyright -->--}}
{{--</footer>--}}
<!-- Footer -->
</html>
