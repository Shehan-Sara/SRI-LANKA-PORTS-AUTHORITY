<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SLPA - Sri Lanka Port Autourity</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/button.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

</head>

<!-- Top Navigation Start-->
<nav class="top-nav" id="home">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-auto">
                <p>
                    <i class="bi bi-envelope-fill"></i>
                    <span>+94-11 2440651</span>
                </p>
                <p>
                    <i class="bi bi-printer-fill"></i>
                    <span>info@slpa.lk</span>
                </p>
                <p>
                    <i class="bi bi-telephone-plus-fill"></i>
                    <span>+94-11 242 12 01</span>
                </p>
            </div>
            <div class="col-auto">
                <div class="speed-dial">
                    <a href="tel:+1948">
                        <img src="{{ asset('assets/img/dial-icon.png') }}" alt="Dial 1948" />

                    </a>
                    <a href=""><button class="btn lang-translate">සිංහල</button></a>
                    <a href=""><button class="btn lang-translate">தமிழ்</button></a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Top Navigation End-->

<!-- Main Navigation Bar Start-->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('Welcome') }}">
            <img src="{{ asset('assets/img/logo.png') }}" alt="LOGO" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('local') }}">Local Purchases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('foreign') }}">
                        Foreign purchases
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('other') }}">Other</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!-- Main Navigation Bar End-->



<script src="{{ asset('assets/js/bootstrap-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>