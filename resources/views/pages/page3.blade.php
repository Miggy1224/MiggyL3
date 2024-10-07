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
                            <h1>Toyota Supra MK5</h1>
                        </header>
                        <span class="image main"><img src="{{ asset('images/supra1.jpg') }}" alt="Supra" style="width: 500px; height: auto;">
                        </span>
                        <p>The Toyota GR Supra (model code J29/DB or A90/A91 for marketing purposes) is a sports car produced by Toyota since 2019. The fifth-generation Supra, the GR Supra was sold under and developed by Toyota Gazoo Racing (TGR) brand in collaboration with BMW. It is the successor of the A80 Supra, which ceased production in 2002.</p>
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
