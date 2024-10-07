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
                            <h1>Subaru BRZ</h1>
                        </header>
                        <span class="image main"><img src="{{ asset('images/brz1.jpg') }}" alt="brz" style="width: 500px; height: auto;">
                        </span>
                        <p>The Subaru BRZ is what sports car dreams are made of. Lightweight, nimble, and—best of all—affordable. Like its Toyota GR86 mechanical twin, the BRZ shines a light on driving engagement. Features like the standard six-speed manual transmission, rear-wheel drive, and sunk-down 2+2 seating orientation have helped make the BRZ a multiple 10Best winner and a 2024 Editors' Choice honoree. The little coupe is powered by Subaru's 228-hp 2.4-liter flat-four engine, providing just enough oomph to make it feel quick.</p>
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
