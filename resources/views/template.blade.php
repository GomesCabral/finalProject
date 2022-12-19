<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/store.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/store-details.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tool-details.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/userPage.css') }}">
    <!--<link rel="stylesheet" href="{{ asset('assets/css/forum.css') }}">-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    

</head>

<body>
    <div class="nav" style="justify-content: space-between">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <div class="nav-title">
                <a class="logo" href="/">EnliTe</a>
            </div>
        </div>
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>

        <div class="nav-links">
            <a href="/store">Store</a>
            @if (session('isAdmin'))
            <a href="/users">Users list</a>
            <a href="/createTool">Create Tool</a>
            <a href="/admin-profile">Admin Profile</a>
            @endif
            @if (session('user_id'))
            <a href="/profile">Profile</a>
            <a href="/calculator">Energy Calculator</a>
            <a href="/compare">Compare</a>
            <a href="/forum">Forum</a>
            <a href="/createPost">Create Post</a>
            <a href="/logout">Logout</a>
            @else
            <a href="/register">Register</a>
            <a href="/admin-login">Admin Login</a>
            <a href="/login">Login</a>
            @endif
        </div>
    </div>
    <div class="content">
        @yield('content')

    </div>


    <div class="footer">
        <footer class="text-center text-lg-start bg-white text-secondary footer">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

                <!-- Right -->
                <div>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5 ">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 ">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3 "></i>EnliTe
                            </h6>
                            <p class="footer">
                                Electro is a tool for estimating the electricity consumption of your home which calculates the total electricity consumption of your home and the electricity consumption of each appliance.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->

                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                            Team Members
                            </h6>
                            <p class="footer">
                                <a href="#!" class="text-reset">Pragya</a>
                            </p>
                            <p class="footer">
                                <a href="#!" class="text-reset">Gilbert</a>
                            </p>
                            <p class="footer">
                                <a href="#!" class="text-reset">Pedro</a>
                            </p>
                            <p class="footer">
                                <a href="#!" class="text-reset">Khaled</a>
                            </p>
                            <p class="footer">
                                <a href="#!" class="text-reset"></a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p class="footer"><i class="fas fa-home me-3 footer"></i> Luxembourg - NumericAll</p>
                            <p class="footer">
                                <i class="fas fa-envelope me-3"></i>
                                https://www.numericall.com/
                            </p>
                            <p class="footer"><i class="fas fa-phone me-3 "></i> + 01 234 567 88</p>
                            <p class="footer"><i class="fas fa-print me-3 "></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2022 Copyright:
                <a class="text-reset fw-bold" href="https://www.numericall.com/" target="_blank">NUMERICALL</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

</body>

</html>