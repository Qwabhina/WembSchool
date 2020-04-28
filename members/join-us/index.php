<?php
    require_once($_SERVER["DOCUMENT_ROOT"]."/page-includes/system/functions.php");
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
    <title>Sign Up | WembSchool</title>

    <!-- Page Icons -->
    <!-- <link rel="shortcut icon" href="/page-includes/icons/icon.ico"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">

    <!-- Linked CSS -->
    <link rel="stylesheet" type="text/css" href="/page-includes/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/page-includes/css/w_register.css">

</head>

<body class="w_baseBlue_text">
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
                        <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                            <i class="material-icons w_baseOrange_text">apps</i>
                        </a>
                        <!-- Navbar Menu -->
                        <ul id="menu" class="right hide-on-med-and-down">
                            <li>
                                <a class='right' href='#'>
                                    <i class="material-icons left w_baseOrange_text">school</i>Courses
                                </a>
                            </li>
                            <li>|</li>
                            <li>
                                <a class='right' href='/members/join-us/'>
                                    <i class="material-icons w_baseOrange_text right">exit_to_app</i>Sign In
                                </a>
                            </li>
                            <li>|</li>
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
        <!-- Mobile Menu -->
        <ul class="sidenav w_tintBg" id="mobile-demo">
            <h4 class="center w_baseBlue w_accentOrange_text">Join Us</h4>
            <li style="margin-top: 30px;">
                <a href="/members/join-us" class="w_baseBlue_text">
                    <i class="material-icons right layd_green-text">exit_to_app</i>Sign In
                </a>
            </li>
            <li>
                <a href="/" class="w_baseBlue_text">
                    <i class="material-icons right layd_green-text">home</i>Home
                </a>
            </li>
            <li style="margin-top: 10px;">
                <a href="/#layd_courses-section" class="w_baseBlue_text">
                    <i class="material-icons right layd_green-text">school</i>Courses
                </a>
            </li>
        </ul>
    </header>

    <!-- Page Body -->
    <main>
        <div class="container-fluid">
            <!-- Login Form -->
            <div class="row">
                <div class="w_section">
                    
                    <div class="row">
                        <!-- Sign Up Form -->
                        <div class="col push-l2 l8 push-m1 m10 s12" id="w_register-form">
                            <h3 class="center hide-on-small-only">Join Us</h3>
                            <h4 class="center hide-on-med-and-up">Sign In</h4>
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
                                        <div class="col m12 s12"><div class="card-content layd_light-text" id="scForm">
                                        <h4 class="layd_red-text center"></h4>
                                        <div class="row">
                                            <div class="col m10 offset-m1 s10 offset-s1">
                                                <form method="post" name="register-form" id="register-form">

                                                    <!-- Full Name -->
                                                    <div class='row'>
                                                        <!-- First Name -->
                                                        <div class='input-field col m6 s12'>
                                                            <i class='material-icons prefix layd_lime-text'>person</i>
                                                            <input class='validate' type='text' name='first-name' id='first-name' pattern='^[A-Za-z]+$' required />
                                                            <label for='first-name'>First Name</label>
                                                        </div>
                                                        <!-- Other Names -->
                                                        <div class='input-field col m6 s12'>
                                                            <i class="material-icons prefix layd_lime-text">person_outline</i>
                                                            <input class='validate' type='text' name='other-names' id='other-names' pattern="^[A-Za-z -]+$" required />
                                                            <label for='other-names'>Other Names</label>
                                                        </div>
                                                    </div>



                                                    <!-- Member ID, Gender & Username -->
                                                    <div class='row'>
                                                        <!-- Member ID -->
                                                        <div class='input-field col m4 s12'>
                                                            <i class="material-icons prefix layd_lime-text">call_to_action</i>
                                                            <input class='validate' value="<?php echo create_member_id(); ?>" type='text' name='member-id' id='member-id' readonly />
                                                            <label for='member-id'>Member ID</label>
                                                        </div>
                                                        <!-- Gender -->
                                                        <div class="input-field col m4 s12">
                                                            <i class="material-icons prefix layd_lime-text">people</i>
                                                            <select id="gender" name="gender">
                                                                <option value="" selected>I am...</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="N/A">Prefer Not To Say</option>
                                                            </select>
                                                            <label for="gender">Gender</label>
                                                        </div>
                                                        <!-- Username -->
                                                        <div class="input-field col m4 s12">
                                                            <i class="material-icons prefix layd_lime-text">account_circle</i>
                                                            <input type="text" class="validate" id="srcs" name="srcs" pattern="^[A-Za-z_.]+$" required>
                                                            <label for="srcs">Username</label>
                                                        </div>
                                                    </div>



                                                    <!-- Passwords -->
                                                    <div class="row">

                                                        <!-- New Password -->                   
                                                        <div class="input-field col m6 s12">
                                                            <i class="material-icons prefix layd_lime-text">lock_outline</i>
                                                            <input type="password" class="validate" name="ferm" id="ferm" />
                                                            <label for="ferm">New Password</label>
                                                        </div>                                                        
                                                        <!-- Confirm Password -->
                                                        <div class="input-field col m6 s12">
                                                            <i class="material-icons prefix layd_lime-text">lock</i>
                                                            <input type="password" class="validate" name="cfc" id="cfc" />
                                                            <label for="cfc">Confirm Password</label>
                                                        </div>
                                                    </div>

                                                    <!-- Email & Phone Number -->
                                                    <div class="row">
                                                        <!-- Email -->
                                                        <div class="input-field col m8 s12">
                                                            <i class="material-icons prefix layd_lime-text">mail_outline</i>
                                                            <input type="email" class="validate" name="user-email" id="user-email" />
                                                            <label for="user-email">Email</label>
                                                        </div>
                                                        <!-- Phone Number -->
                                                        <div class="input-field col m4 s12">
                                                            <i class="material-icons prefix layd_lime-text">phone</i>
                                                            <input type="text" class="validate" name="phone-number" id="phone-number" />
                                                            <label for="phone-number">Phone Number</label>
                                                        </div>
                                                    </div>
                                                    
                                                <!-- Submit Button -->
                                                <div class="row">
                                                    <div class="col s10 offset-s1">
                                                        <button type='submit' id="form_btn" name='btn_register' class='col offset-m3 offset-s2 m6 s8 w_btn btn-large waves-effect w_baseBlue w_accentOrange_text'>Join Us</button>
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
    <script type="text/javascript" src="/page-includes/js/jquery.validate.min.js"></script>
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

            //Modals and Pop-Ups
            var modalElem = document.querySelectorAll('.modal');
            var pageModals = M.Modal.init(
                modalElem, {
                    preventScrolling: false,
                    dismissible: false
                });

        });

    </script>
</body>

</html>
