<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/css/404.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>404</title>

</head>

<body>
    <header class="header">
        <nav class="nav container">
            <a href="{{Route ('Welcome')}}" class="nav-logo"> <img src="{{ asset('assets/img/logo.png') }}" alt="Logo"> </a>

            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="{{Route ('Welcome')}}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>

                <div class="nav-close" id="nav-close">
                    <i class="bi bi-x"></i>
                </div>
            </div>

            <div class="nav-toggle" id="nav-toggle">
                <i class="bi bi-grid"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <section class="home">
            <div class="home-container container">
                <div class="home-data">
                    <span class="home-subtitle">Ooops!</span>
                    <h1 class="home-title">Error 404</h1>
                    <p class="home-description">
                        We can't seem to find the page <br />
                        you are looking for.
                    </p>
                    <a href="{{Route ('Welcome')}}" class="home-button"> Go Home </a>
                </div>

                <div class="home-img">
                    <img src="{{ asset('assets/img/ship-shrink.png') }}" alt="" />
                    <div class="home-shadow"></div>
                </div>
            </div>

            <footer class="home-footer">
                <span>+94 112565892</span>
                <span>|</span>
                <span>slpa@example.com</span>
            </footer>
        </section>
    </main>

    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>



    <script>
        const navMenu = document.getElementById('nav-menu'),
            navToggle = document.getElementById('nav-toggle'),
            navClose = document.getElementById('nav-close')


        if (navToggle) {
            navToggle.addEventListener('click', () => {
                navMenu.classList.add('show-menu')
            })
        }

        if (navClose) {
            navClose.addEventListener('click', () => {
                navMenu.classList.remove('show-menu')
            })
        }

        const navLink = document.querySelectorAll('.nav-link')

        function linkAction() {
            const navMenu = document.getElementById('nav-menu')

            navMenu.classList.remove('show-menu')
        }
        navLink.forEach(n => n.addEventListener('click', linkAction))


        const sr = ScrollReveal({
            distance: '90px',
            duration: 3000,
        })

        sr.reveal(`.home-img`, {
            origin: 'top',
            delay: 400
        })
        sr.reveal(`.home-data`, {
            origin: 'bottom',
            delay: 600
        })
        sr.reveal(`.home-footer`, {
            origin: 'bottom',
            delay: 800
        })
    </script>
</body>

</html>
