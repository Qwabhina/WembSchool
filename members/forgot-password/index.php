<?php
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Metadata -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="theme-color" content="#008C50">
    <meta name="author" content="Webbing Creatives">
    <meta name="keywords" content="Webbing, creatives, software, technology, desktop apps, company, tech">
    <meta name="description" content="Webbing Creatives is an Information Technology firm that seeks to address the many software problems around us with very simple, yet powerful and creative familiar technologies.">

    <!-- Page Title -->
    <title>Sign In | Learn As You Do</title>

    <!-- Page Icons -->
    <link rel="shortcut icon" href="/page-includes/icons/icon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="/page-includes/icons/icon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="/page-includes/icons/icon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="/page-includes/icons/icon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/page-includes/icons/icon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="/page-includes/icons/icon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/page-includes/icons/icon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/page-includes/icons/icon-16.png">
    <link rel="apple-touch-icon" href="/page-includes/icons/icon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/page-includes/icons/icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/page-includes/icons/icon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/page-includes/icons/icon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/page-includes/icons/icon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/page-includes/icons/icon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/page-includes/icons/icon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/page-includes/icons/icon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/page-includes/icons/icon-180.png">
    <meta name="msapplication-TileColor" content="#E1E1E1">
    <meta name="msapplication-TileImage" content="/page-includes/icons/icon-144.png">
    <meta name="msapplication-config" content="/page-includes/icons/browserconfig.xml">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Linked CSS -->
    <link rel="stylesheet" type="text/css" href="/page-includes/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/page-includes/css/fonts-and-labels.css">
    <link rel="stylesheet" type="text/css" href="/page-includes/css/layd_login.css">

</head>

<body class="layd_light-bg layd_dark-text layd_content-sans">

    <!-- Page Header -->
    <header>

        <div class="navbar-fixed layd_grad">
            <nav class="layd_grad z-depth-4">
                <div class="nav-wrapper">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col l10 offset-l1">
                                <a id="logo-container" class="brand-logo">
                                    <div class="hide-on-med-and-down left layd_heading">Sign In</div>
                                    <img class="hide-on-large-only center" width="80px" src="/page-includes/img/ktu_logo_small.svg">
                                </a>

                                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">apps</i></a>


                                <ul id="menu" class="right hide-on-med-and-down">

                                    <li>
                                        <a class='right' href='#layd_courses-section'>
                                            <i class="material-icons left">school</i>
                                            Courses
                                        </a>
                                    </li>

                                    <li>|</li>

                                    <li>
                                        <a class='right' href='/members/join-us/'>
                                            <i class="material-icons right">perm_identity</i>
                                            Sign Up
                                        </a>
                                    </li>

                                    <li>|</li>

                                    <li>
                                        <a href="/" class="right"><i class="material-icons center">home</i></a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>
        </div>


        <ul class="sidenav layd_dark-bg" id="mobile-demo">
            <h4 class="center layd_heading layd_green-bg layd_light-text">
                Sign In
            </h4>

            <li style="margin-top: 30px;">
                <a href="/#layd_join-section" class="layd_light-text"><i class="material-icons right layd_green-text">person</i>Join Us</a>
            </li>
            <li>
                <a href="/" class="layd_light-text"><i class="material-icons right layd_green-text">home</i>Home</a>
            </li>
            <li style="margin-top: 10px;">
                <a href="/#layd_courses-section" class="layd_light-text"><i class="material-icons right layd_green-text">school</i>Courses</a>
            </li>
        </ul>



    </header>

    <!-- Page Body -->
    <main>
        <div class="container-fluid">

            <!-- Register Form and Banner Image -->
            <div class="row">
                <div class="layd_section">

                    <div class="row">
                        <div class="col l10 offset-l1 m12 s12">

                            <!-- Register Form -->
                            <div class="col offset-m3 m6 s12" id="layd_login-form">



                                <div class="card hoverable">
                                    <!-- Progress Bar -->
                                    <div class="progress center">
                                        <div class="indeterminate"></div>
                                    </div>

                                    <div class="error layd_red-bg layd_light-text"></div>


                                    <div class="card-content layd_light-text">
                                        <h4 class="layd_red-text center"></h4>
                                        <div class="row">
                                            <div class="col m10 offset-m1 s12">
                                                <form method="post" name="login-form" id="login-form">
                                                    <!-- Full Name -->
                                                    <div class='row'>
                                                        <!-- Username -->
                                                        <div class="input-field col m8 offset-m2 s10 offset-s1">
                                                            <i class="material-icons prefix layd_lime-text">account_circle</i>
                                                            <input type="text" class="validate" id="resa" name="resa" required>
                                                            <label for="resa">Username</label>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <!-- Password -->
                                                        <div class="input-field col m8 offset-m2 s10 offset-s1">
                                                            <i class="material-icons prefix layd_lime-text">lock_outline</i>
                                                            <input type="password" class="validate" name="srcs" id="srcs" required />
                                                            <label for="srcs">Password</label>
                                                        </div>
                                                    </div>

                                                    <!-- Terms & Conditions -->
                                                    <div class="row">
                                                        <div class="col m8 offset-m2 s10 offset-s1">
                                                            <label class="center">
                                                                <input id="remember-me" name="remember-me" type="checkbox" required />
                                                                <span>Keep Me Signed In</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col s10 offset-s1">
                                                            <button type='submit' id="form_btn" name='btn_login' class='col offset-m3 offset-s2 m6 s8 layd_btn btn-large waves-effect layd_grad layd_light-text'>Login</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>


    <!-- Page Footer -->
    <footer class="page-footer layd_light-bg">
        <div class="container">
            <div class="row">
                <div class="col l6 m6 s12">
                    <h5 class="layd_dark-text layd_heading">Learn As You Do</h5>
                    <span class="layd_dark-text">Digital Skills, At Your Fingertips!</span>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container layd_dark-text">
                &copy; 2018 Learn As You Do
                <a class="layd_dark-text right hide-on-small-only" href="/sitemap">Sitemap</a>
                <a class="layd_dark-text right hide-on-small-only" href="/us">About Us&nbsp;&nbsp;|&nbsp;&nbsp;</a>
                <a class="layd_dark-text right hide-on-small-only" target="_blank" href="/terms">Terms &amp; Conditions&nbsp;&nbsp;|&nbsp;&nbsp;</a>
            </div>
        </div>
    </footer>

    <!-- Linked JS -->
    <script type="text/javascript" src="/page-includes/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/page-includes/js/process_form.php.js"></script>
    <script type="text/javascript" src="/page-includes/js/materialize.min.js"></script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            //Side Navigation for Mobile Devices
            var sidenavElem = document.querySelectorAll(".sidenav");
            var modileNav = M.Sidenav.init(
                sidenavElem, {
                    edge: "right",
                    draggable: true,
                    preventScrolling: true
                });

            //Dropdowns
            var dropElem = document.querySelectorAll('.dropdown-trigger');
            var pageDropdowns = M.Dropdown.init(
                dropElem, {
                    coverTrigger: false,
                    closeOnClick: true,
                    constrainWidth: false
                });

            //Modals and Pop-Ups
            var modalElem = document.querySelectorAll('.modal');
            var pageModals = M.Modal.init(
                modalElem, {
                    preventScrolling: false,
                    dismissible: false
                });

            //Tabs
            var tabElem = document.querySelectorAll('.tabs');
            var pageTabs = M.Tabs.init(
                tabElem, {
                    swipeable: true
                });
        });

    </script>
</body>

</html>
