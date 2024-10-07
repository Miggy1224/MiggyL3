<!DOCTYPE HTML>
<html>
    <head>
        <title>Forty by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!-- Link to CSS files -->
        <link rel="stylesheet" href="{{ asset('build/assets/css/main.css') }}" />
        <noscript><link rel="stylesheet" href="{{ asset('build/assets/css/noscript.css') }}" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Header -->
            <header id="header" class="alt">
            <a href="{{ url('/') }}" class="logo"><strong>Japanese Domestic Market Cars</strong> <span>JDM CARS</span></a>
                <nav>
                    <a href="#menu">Menu</a>
                </nav>
            </header>

            <!-- Menu -->
            <nav id="menu">
                <ul class="links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('page1') }}">Nissan GTR R35</a></li>
                    <li><a href="{{ route('page2') }}">Subaru BRZ</a></li>
                    <li><a href="{{ route('page3') }}">Toyota Supra MK5</a></li>
                    <li><a href="{{ route('page4') }}">Subaru WRX STI</a></li>
                    <li><a href="{{ route('page5') }}">Mitsubishi Evolution X</a></li>
                </ul>
                <ul class="actions stacked">
                    @auth
                        <li><a href="{{ url('/dashboard') }}" class="button primary fit">Home</a></li>
                        <li><a href="{{ url('/page6') }}" class="button primary fit">My Profile</a></li>
                        <li><a href="{{ url('/page7') }}" class="button primary fit">Cars</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="button fit">Log Out</button>
                            </form>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="button fit">Log In</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="button fit">Register</a></li>
                        @endif
                    @endauth
                </ul>
            </nav>

            <!-- Banner -->
<section id="banner" class="major">
    <div class="inner">
        <header class="major">
            <h1>JDM Cars</h1>
        </header>
        <div class="content">
            <p>Get to see popular JDM CARS</p>
            <ul class="actions">
                <li><a href="#one" class="button next scrolly">Start</a></li>
            </ul>
        </div>
    </div>
</section>

<style>
   
    #banner {
        background-color: #ffffff ; 
        padding: 60px 20px; 
        color: #fff; 
    }
</style>


            <!-- Main -->
            <div id="main">

                <!-- One -->
                <section id="one" class="tiles">
                    <article>
                        <span class="image">
                            <img src="{{ asset('images/gtr1.jpg') }}" alt="" />
                        </span>
                        <header class="major">
                            <h3><a href="{{ route('page1') }}" class="link">Nissan GTR R35</a></h3>
                            <p>565 HP, AWD</p>
                        </header>
                    </article>
                    <article>
                        <span class="image">
                            <img src="{{ asset('images/brz.jpg') }}" alt="" />
                        </span>
                        <header class="major">
                            <h3><a href="{{ route('page2') }}" class="link">Subaru BRZ</a></h3>
                            <p>200 HP,RWD</p>
                        </header>
                    </article>
                    <article>
                        <span class="image">
                            <img src="{{ asset('images/supra.jpg') }}" alt="" />
                        </span>
                        <header class="major">
                            <h3><a href="{{ route('page3') }}" class="link">Toyota Supra MK5</a></h3>
                            <p>400 HP, RWD</p>
                        </header>
                    </article>
                    <article>
                        <span class="image">
                            <img src="{{ asset('images/sti.jpg') }}" alt="" />
                        </span>
                        <header class="major">
                            <h3><a href="{{ route('page4') }}" class="link">Subaru WRX STI</a></h3>
                            <p>310 HP, AWD</p>
                        </header>
                    </article>
                    <article>
                        <span class="image">
                            <img src="{{ asset('images/evo.jpg') }}" alt="" />
                        </span>
                        <header class="major">
                            <h3><a href="{{ route('page5') }}" class="link">Mitsubishi Evolution X</a></h3>
                            <p>291 HP, AWD</p>
                        </header>
                    </article>
                </section>

                <!-- Two -->
                <section id="two">
                    <div class="inner">
                        <header class="major">
                            <h2>JDM CARS</h2>
                        </header>
                        <p>Get to see different cars from the Japanese Domestic Market</p>

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
