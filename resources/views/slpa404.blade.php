<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="{{ asset('assets/css/404.css') }}" />


    <title>SPLA 404</title>
</head>

<body>
    <header class="header">
        <nav class="nav container">

            <img class="img-fluid rounded my-4 my-4" loading="lazy" src="{{ asset('assets/img/logo.png') }}"
                width="245" height="80" alt="Logo" />


            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">Contact</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="bx bx-x"></i>
                </div>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="bx bx-grid-alt"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <section class="home">
            <div class="home__container container">
                <div class="home__data">
                    <span class="home__subtitle">Error 404</span>
                    <h1 class="home__title">Hey Buddy</h1>
                    <p class="home__description">
                        We can't seem to find the page <br />
                        you are looking for.
                    </p>
                    <a href="#" class="home__button"> Go Home </a>
                </div>

                <div class="home__img">
                    <img src="assets/img/ghost-img2.png" alt="" />
                    <div class="home__shadow"></div>
                </div>
            </div>

            <footer class="home__footer">
                <span>+94 112565892</span>
                <span>|</span>
                <span>slpa@example.com</span>
            </footer>
        </section>
    </main>

    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
