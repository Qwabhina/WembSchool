<?php
   require_once($_SERVER["DOCUMENT_ROOT"]."/page-includes/system/functions.php");
    secure_session();

    isLoggedIn() == false ? '' : header('location: /members/dashboard/?page=dashboard');
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
    <meta name="author" content="QM Concepts">
    <!-- <meta name="msapplication-tap-highlight" content="no">
    <meta name="theme-color" content="#008C50">
    <meta name="keywords" content="Webbing, creatives, software, technology, desktop apps, company, tech">
    <meta name="description" content="QM Concepts is an Information Technology firm that seeks to address the many software problems around us with very simple, yet powerful and creative familiar technologies."> -->

    <!-- Page Title -->
    <title>Sign In | WembSchool</title>

    <!-- Page Icons -->
    <!-- <link rel="shortcut icon" href="/page-includes/icons/icon.ico"> -->

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet"> -->

    <!-- Linked CSS -->
    <link rel="stylesheet" type="text/css" href="/page-includes/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/page-includes/css/w_login.css">

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
    <header>
        <!-- Navbar -->
        <div class="navbar-fixed">
            <nav class="w_baseBlue z-depth-4">
                <div class="nav-wrapper">
                    <div class="container">
                        <a id="logo-container" class="brand-logo">
                            <img class="" src="/page-includes/img/w_logoText-white.svg">
                        </a>
                        <!-- Mobile Menu Icon -->
                        <a href="/" class="hide-on-large-only">
                            <i class="material-icons w_baseOrange_text">arrow_back</i>
                        </a>
                        <!-- Navbar Menu -->
                        <ul id="menu" class="right hide-on-med-and-down">
                            <li>
                                <a href="/" class="right">
                                    <i class="material-icons w_baseOrange_text center">home</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Page Body -->
    <main>
        <div class="container-fluid">
            <!-- Login Form -->
            <div class="row">
                <div class="w_section">
                    
                    <div class="row">
                        <!-- Login Form -->
                        <div class="col push-l4 l4 push-m3 m6 s12" id="w_login-form">
                            <h3 class="w_baseBlue_text center hide-on-small-only">Sign In</h3>
                            <h4 class="w_baseBlue_text center hide-on-med-and-up">Sign In</h4>
                            <div class="card z-depth-3">
                                <!-- Progress Bar -->
                                <div class="progress center w_tintBg">
                                    <div class="indeterminate w_baseBlue"></div>
                                </div>
                                <!-- Error -->
                                <div class="error red darken-2 white-text"></div>
                                <!-- Form content -->
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col m12 s12">
                                            <form method="post" name="login-form" id="login-form">
                                                <!-- Username -->
                                                <div class='row'>
                                                    <div class="input-field col m8 offset-m2 s10 offset-s1">
                                                        <i class="material-icons prefix w_baseBlue_text">account_circle</i>
                                                        <input type="text" class="validate" id="resa" name="resa" required>
                                                        <label for="resa">Username</label>
                                                    </div>
                                                </div>
                                                <!-- Password -->
                                                <div class="row">
                                                    <div class="input-field col m8 offset-m2 s10 offset-s1">
                                                        <i class="material-icons prefix w_baseBlue_text">lock</i>
                                                        <input type="password" class="validate" name="srcs" id="srcs" required />
                                                        <label for="srcs">Password</label>
                                                    </div>
                                                </div>
                                                <!-- Remember Me -->
                                                <div class="row">
                                                    <div class="col m8 offset-m2 s10 offset-s1 center">
                                                        <label>
                                                            <input id="remember-me" name="remember-me" type="checkbox" required />
                                                            <span>Keep Me Signed In</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- Submit Button -->
                                                <div class="row">
                                                    <div class="col s10 offset-s1">
                                                        <button type='submit' id="form_btn" name='btn_login' class='col offset-m3 offset-s2 m6 s8 w_btn btn-large waves-effect w_baseBlue w_accentOrange_text'>Sign In</button>
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
    </main>

    <!-- Page Footer -->
    <footer class="page-footer w_accentOrange">
        <div class="footer-copyright">
            <div class="container w_baseBlue_text">
                &copy; <?php echo date('Y'); ?> | WembSchool
                <span class="right hide-on-small-only" style="vertical-align: middle !important">
                    Made with&nbsp;<i class="material-icons tiny red-text text-darken-2">favorite</i>&nbsp;by&nbsp;
                    <a class="w_accentBlue_text" href="#!">QM Concepts</a>
                </span>
            </div>
        </div>
    </footer>

    <!-- Linked JS -->
    <script type="text/javascript" src="/page-includes/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/page-includes/js/process_form.php.js"></script>
    <script type="text/javascript" src="/page-includes/js/materialize.min.js"></script>
    <script>
        window.onload = function(){
            $('#preloader').delay(1000).fadeOut('slow');
        }
    </script>
</body>

</html>
