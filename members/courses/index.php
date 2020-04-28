<?php
   require_once($_SERVER["DOCUMENT_ROOT"]."/page-includes/system/functions.php");
    secure_session();
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
    <!-- Page Title -->
    <title>WembSchool | Courses</title>
    <!-- Linked CSS -->
    <link rel="stylesheet" type="text/css" href="/page-includes/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/page-includes/css/w_courses.css">
</head>

<body class="w_baseBlue_text">
    <!-- Page Preloader -->
    <div id="preloader" class="w_tintBg">
        <div class="row">
            <div class="col s10 push-s1">
                <img class="center" src="../../page-includes/img/w_logoText.svg" alt="">
                <div class="progress show center w_accentOrange">
                    <div class="indeterminate w_baseBlue"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Header -->
    <header class="">
        <!-- Navbar -->
        <div class="navbar-fixed container-fluid">
            <nav class="z-depth-0 w_baseBlue">
                <div class="nav-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col l10 offset-l1">
                                <a id="logo-container" class="brand-logo">
                                    <img width="235px" src="../../page-includes/img/w_logoText-white.svg">
                                </a>

                                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i
                                        class="material-icons w_baseOrange_text">apps</i></a>

                                <ul id="menu" class="right hide-on-med-and-down">
                                    <li>
                                        <a class='right' href='/members/login/'>
                                            <i class="material-icons right w_baseOrange_text">perm_identity</i>
                                            Sign In
                                        </a>
                                    </li>
                                    <li>|</li>
                                    <li>
                                        <a href="/" class="right"><i
                                                class="material-icons w_baseOrange_text">home</i></a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Mobile Menu -->
        <ul class="sidenav w_tintBg" id="mobile-demo">
            <h4 class="center w_baseBlue w_accentOrange_text">
                WembSchool
            </h4>

            <li style="margin-top: 30px;">
                <a href="/" class="w_baseBlue_text">
                    <i class="material-icons right">home</i>Home
                </a>
            </li>
            
            <li>
                <a href="/members/login" class="w_baseBlue_text">
                    <i class="material-icons right">exit_to_app</i>Sign In
                </a>
            </li>

        </ul>

        <!-- Hero -->
        <div class="container col w_accentOrange_text" id="w_jumbo-section">
            <h1 class="w_tint_text">Courses</h1>
        </div>

        <!-- FAB Button -->
        <div class="w_fab-btn">
            <div id="upwd">
                <div class="fixed-action-btn">
                    <a class="btn-floating btn-large w_btn-fab waves-effect waves-dark w_baseBlue"><i
                            class="material-icons w_accentOrange_text">arrow_upward</i></a>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Body -->
    <main class="container-fluid">
        <div class="" id="w_courses-section">

            <!-- Features -->
            <section class="row">
                <div class="col l10 push-l1 m10 push-m1 s12">
                    <!-- Undergrate Courses -->
                    <div class="row">
                        <h1 class="w_greyShade_text center">Tertiary Courses</h1>

                        <div class="col s12 m4 xl3 l4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../../../page-includes/img/ap-chem241.jpg">
                                    <a class="btn-floating halfway-fab waves-effect waves-light w_darkOrange">
                                        <i class="material-icons  w_tintBg_text">add</i>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <span class="card-title w_baseBlue_text"><b>Applied Chemistry
                                            (AP-CHEm241)</b></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 xl3 l4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../../../page-includes/img/lit-eng246.jpg">
                                    <a class="btn-floating halfway-fab waves-effect waves-light w_darkOrange">
                                        <i class="material-icons  w_tintBg_text">add</i>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <span class="card-title w_baseBlue_text"><b>Literature in English
                                            (Lit-ENG246)</b></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 xl3 l3">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../../../page-includes/img/bs-mat248.jpg">
                                    <a class="btn-floating halfway-fab waves-effect waves-light w_darkOrange">
                                        <i class="material-icons  w_tintBg_text">add</i>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <span class="card-title w_baseBlue_text"><b>Mathematics (BS-MAT248)</b></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <h1 class="w_greyShade_text center">High School Courses</h1>
                    </div>

                    <div class="row">
                        <h1 class="w_greyShade_text center">Basic School Courses</h1>
                    </div>
            </section>
        </div>
    </main>


    <!-- Page Footer -->
    <footer class="page-footer w_accentBlue">
        <div class="container">
            <div class="row"></div>
        </div>
        <div class="footer-copyright w_baseBlue">
            <div class="container w_accentOrange_text">
                &copy; <?php echo date('Y'); ?> | WembSchool
                <span class="right hide-on-small-only" style="vertical-align: middle !important">
                    Made with&nbsp;<i class="material-icons tiny red-text text-darken-2">favorite</i>&nbsp;by&nbsp;
                    <a class="w_dark-link" href="#!">QM Concepts</a>
                </span>
            </div>
        </div>
    </footer>

    <!-- Linked JS -->
    <script type="text/javascript" src="/page-includes/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/page-includes/js/homeScript.js"></script>
    <script type="text/javascript" src="/page-includes/js/materialize.min.js"></script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            //Side Navigation for Mobile Devices
            var sidenavElem = document.querySelectorAll(".sidenav");
            var modileNav = M.Sidenav.init(
                sidenavElem, {
                    edge: "right",
                    draggable: true,
                    preventScrolling: true
                });

            //Fixed Action Button
            var FABelems = document.querySelectorAll('.fixed-action-btn');
            var FABbtn = M.FloatingActionButton.init(
                FABelems, {
                    hoverEnabled: false
                });
        });

        
        window.onload = function(){
            $('#preloader').delay(1000).fadeOut('slow');
        }
    </script>
</body>

</html>