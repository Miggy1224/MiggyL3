<!DOCTYPE HTML>
<html>
    <head>
        <title>Generic - Forty by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('build/assets/css/main.css') }}" />
        <noscript><link rel="stylesheet" href="{{ asset('build/assets/css/noscript.css') }}" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Header -->
            <header id="header">
                <a href="{{ url('/') }}" class="logo"><strong>Japanese Domestic Market Cars</strong> <span>JDM CARS</span></a>
                <nav>
                    <a href="#menu">Menu</a>
                </nav>
            </header>

            <!-- Menu -->
            <nav id="menu">
            <ul class="links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('page1') }}">GTR</a></li>
                    <li><a href="{{ route('page2') }}">BRZ</a></li>
                    <li><a href="{{ route('page3') }}">SUPRA</a></li>
                    <li><a href="{{ route('page4') }}">STI</a></li>
                    <li><a href="{{ route('page5') }}">EVO X</a></li>
                </ul>
                <ul class="actions stacked">
                    <li><a href="#" class="button primary fit">Start</a></li>
                    <li><a href="#" class="button fit">Log In</a></li>
                </ul>
            </nav>

            <!-- Main -->
            <div id="main" class="alt">

                <!-- One -->
                <section id="one">
                    <div class="inner">
                        <header class="major">
                            <h1>Nissan GTR R-35</h1>
                        </header>
                        <span class="image main"><img src="{{ asset('images/gtr11.jpg') }}" alt="REd Bull Logo" style="width: 500px; height: auto;">
                        </span>
                        <p>The Nissan GT-R (Gran Turismo–Racing; model code: R35; Japanese: 日産・GT-R; Nissan GT-R) is a car built by Japanese marque Nissan since 2007. It has a 2+2 seating layout and is considered both a sports car and a grand tourer. The engine is front-mid mounted and drives all four wheels. It succeeds the Nissan Skyline GT-R, a faster variant of the Nissan Skyline. Although this model was the sixth-generation to bear the GT-R name, it is no longer part of the Skyline line-up. The car is built on the PM platform, derived from the FM platform used in the Skyline and Nissan Z models. Production is conducted in a shared production line at Nissan's Tochigi plant in Japan.</p>
                        </div>
                </section>

            </div>


            <!-- Footer -->
            <footer id="footer">
                <div class="inner">
                    <ul class="copyright">
                        <li>&copy; JDM CARS</li><li>By: Carlos Miguel Calimlim</li>
                    </ul>
                </div>
            </footer>

        </div>

        <!-- Scripts -->
        <script src="{{ asset('build/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('build/assets/js/jquery.scrolly.min.js') }}"></script>
        <script src="{{ asset('build/assets/js/jquery.scrollex.min.js') }}"></script>
        <script src="{{ asset('build/assets/js/browser.min.js') }}"></script>
        <script src="{{ asset('build/assets/js/breakpoints.min.js') }}"></script>
        <script src="{{ asset('build/assets/js/util.js') }}"></script>
        <script src="{{ asset('build/assets/js/main.js') }}"></script>

    </body>
</html>
