<?php
//Libraries File
    require_once($_SERVER["DOCUMENT_ROOT"]."/page-includes/system/functions.php");    
    secure_session();

    isLoggedIn() == false ? header("Location: /") : '';
    
    $name = convert_string($_SESSION['full-name'], " "); 
    $role = strtolower($_SESSION['role']);
?>
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
    <title>Dashboard | WembSchool</title>

    <!-- Page Icons -->
    <!-- <link rel="shortcut icon" href="/page-includes/icons/icon.ico"> -->

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet"> -->

    <!-- Linked CSS -->
    <link rel="stylesheet" type="text/css" href="/page-includes/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/page-includes/css/w_dashboard.css">
    <link rel="stylesheet" type="text/css" href="/page-includes/css/calendar.css">

</head>    
    <body class="w_tintBg" data-role="<?php echo $role; ?>">
        <!-- Page Header -->
        <header>
            <nav role="navigation" class="w_baseBlue">
                <div class="nav-wrapper container">
                    <!-- Navbar Title -->
                    <a id="logo-container" class="brand-logo">
                        <div class="left w_accentOrange_text" id="pageName">
                            <?php echo ucfirst($_GET['page']); ?>
                        </div>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a data-target="profile" class="dropdown-trigger w_accentOrange_text">
                                <span class="user">Hello <?php echo $name[0];?>!</span>
                                <i class="tiny material-icons right">expand_more</i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Dropdown Menu Content -->
                    <ul id="profile" class="dropdown-content w_accentOrange">
                        <li>
                            <a href="#Profile?<?php echo $_SESSION['full-name'];?>" class="page-req" id="Profile">
                                <i class="material-icons">perm_identity</i>
                                <span class="user">Profile</span>
                            </a>
                        </li>
                        <li class="divider w_baseBlue"></li>
                        <li>
                            <a href="#Logout?<?php echo $_SESSION['full-name'];?>" class="page-req" id="Logout">
                                <i class="material-icons">power_settings_new</i>
                                <span class="user">Logout</span>
                            </a>
                        </li>
                    </ul>

                    <a data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons w_baseOrange_text">apps</i></a>
                </div>
            </nav>

            <ul id="nav-mobile" class="z-depth-3 sidenav sidenav-fixed">
                <li class="side-logo">
                    <img class="" src="/page-includes/img/w_logoText.svg">
                </li>
                <li class="bold hide-on-large-only">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header">
                                <span class="user">Hello <?php echo $name[0];?>!</span>
                                <i class="material-icons">expand_more</i>
                            </a>
                            <div class="collapsible-body">
                                <ul class="">
                                    <li>
                                        <a href="#Profile?<?php echo $_SESSION['full-name'];?>" class="page-req" id="Profile">
                                            <i class="material-icons orange-text">perm_identity</i>
                                            <span class="user">Profile</span>
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#Logout?<?php echo $_SESSION['full-name'];?>" class="page-req" id="Logout">
                                            <i class="material-icons red-text">power_settings_new</i>
                                            <span class="user">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li class="bold">
                    <div class="section"></div>
                </li>
                <li class="bold">
                    <a href="?page=dashboard" class="waves-effect waves-darken">
                        <i class="material-icons w_baseBlue_text">dashboard</i>
                        <span class="user">Dashboard</span>
                    </a>
                </li>
                <?php
                    require_once($_SERVER["DOCUMENT_ROOT"]."/members/dashboard/contents/".$role."-navigation.php");
                ?>
            </ul>
        </header>

        <!-- Page Content -->
        <main data-user="<?php echo $_SESSION['full-name']; ?>">
            <div class="progress center w_accentOrange">
                <div class="indeterminate w_baseBlue"></div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="section">&nbsp;</div>
                    <!-- <div class="col push-s1 s10 center">
                        <a href="#!" class="breadcrumb w_baseBlue_text">First</a>
                        <a href="#!" class="breadcrumb w_baseBlue_text">Second</a>
                        <a href="#!" class="breadcrumb w_baseBlue_text">Third</a>
                    </div> -->
                    <div class="col push-s1 s10 m10 push-m1 xl10 push-xl1 main-body">
                        <?php
                        
                            if(isset($_GET['page'])){
                                switch($_GET['page']){
                                    case "dashboard":
                                        include dirname(__FILE__)."/contents/dashboard-default.php";
                                        break;
                                    case "search":
                                        include dirname(__FILE__)."/contents/search-courses.php";
                                        break;
                                    case "courses":
                                        include dirname(__FILE__)."/contents/my-courses.php";
                                        break;
                                    case "notifications":
                                        include dirname(__FILE__)."/contents/notifications.php";
                                    break;
                                    case "assessments":
                                        include dirname(__FILE__)."/contents/assessments.php";
                                    break;
                                    case "files":
                                        include dirname(__FILE__)."/contents/files.php";
                                    break;
                                    case "forum":
                                        include dirname(__FILE__)."/contents/forum.php";
                                        break;
                                    default:
                                        echo "<h3>Error: </h3><br><h5>The page you requested could not be loaded. Please try again later</h5>";
                                        break;
                                }
                            }
                            else{
                                include dirname(__FILE__)."/contents/dashboard-default.php";
                            }
                        ?>

                            <!-- Page Requests Destination -->
                            <div id="page-req" class="modal fixed-footer">
                                <div class="modal-content"></div>
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
        <script type="text/javascript" src="/page-includes/js/materialize.min.js"></script>
        <script type="text/javascript" src="/page-includes/js/calendar.js"></script>
        <script type="text/javascript" src="/page-includes/js/dashboard.php.js"></script>
        <script type="text/javascript">
            ///--- Vanilla JS ---///
            document.addEventListener('DOMContentLoaded', function() {

                //Dropdowns
                var dropElem = document.querySelectorAll('.dropdown-trigger');
                var pageDropdowns = M.Dropdown.init(
                    dropElem, {
                        coverTrigger: false,
                        closeOnClick: true,
                        constrainWidth: true
                    });

                //Modals and Pop-Ups
                var modalElem = document.querySelectorAll('.modal');
                var pageModals = M.Modal.init(
                    modalElem, {
                        preventScrolling: false
                    });

                //Side Navigation for Mobile Devices
                var sidenavElem = document.querySelectorAll(".sidenav");
                var modileNav = M.Sidenav.init(
                    sidenavElem, {
                        edge: "left",
                        draggable: true,
                        preventScrolling: true
                    });

                //Collapsibles and Navigation Dropdowns
                var collapsibleElem = document.querySelectorAll('.collapsible');
                var pageCollapsibles = M.Collapsible.init(collapsibleElem);
                // Tabs
                var tabElem = document.querySelectorAll('.tabs');
                var pageTabs = M.Tabs.init(tabElem);
                // Form Select
                var selElem = document.querySelectorAll('select');
                var frmSelect = M.FormSelect.init(selElem);

            });



            ///--- jQuery ---///
            $('input.char_c, textarea').characterCounter();
            
            $(".collapsible-header span.badge").on('click', function(){
                // alert($(this).text());
                return false;
            });

            if ($("#pageName").text().indexOf("Dashboard") > -1){
                new calendar(document.getElementById('calendar'), {abbrDay: true});
                getNotification($("body").attr("data-role"), "home");
            }
            else if($("#pageName").text().indexOf("Notifications") > -1){
               getNotification($("body").attr("data-role"), "");
            }
            else{
                
            }

            //Current Time
            setInterval(t, 1000);

            function t() {
                var d = new Date();
                var hr = d.getHours();
                var mn = d.getMinutes();
                var sc = d.getSeconds();
                var ampm = hr >= 12 ? "PM" : "AM";

                hr = hr % 12;
                hr = hr ? hr : 12;

                mn = mn <= 9 ? "0" + mn : mn;
                sc = sc <= 9 ? "0" + sc : sc;

                var strTime = hr + " : " + mn + " : " + sc + " " + ampm;
                $(".time").text(strTime);
            }




            //*****************************************************************************
            //          FOR PAGES THAT WILL POP-UP
            //*****************************************************************************


            //Page Request Buttons
            $(".page-req").click(function() {
                getPage("/members/index.php", $(this).attr("id"));
                return false;
            });

            //Dismiss Error Message
            function dismissParent() {
                $("div.error").slideUp(350);
            }



            //*****************************************************************************
            //         THIS PART TAKE CARE OF THE SEARCH FIELD
            //*****************************************************************************

            //Variables for the Search Form
            // $s_form = $("form#search-project-form");
            $s_term = $("input[name=search-term]");
            // $s_btn = $("button[name=btn_search]");


            function init_search() {
                $.ajax({
                    type: "GET",
                    url: '/members/dashboard/init-search.js.php',
                    data: "search-term=" + $s_term.val() + "&btn_search=Search",
                    dataType: "html",
                    beforeSend: function(){
                        $("main .progress").show()
                    },
                    success: function(response) {
                        //Display the response from the AJAX request
                        $(".search-results-content").html(response);
                        //Show the search results field
                        $(".search-results").slideDown(300);
                        $("main .progress").delay(500).hide();
                    },
                    error: function(jXHR, textStatus, errorThrown) {
                        $("main .progress").delay(500).hide();
                        console.log("(" + textStatus + ") " + errorThrown);
                    }
                });
            }

            //Handle the search form
            $s_term.keyup(function() {
                if ($s_term.val() != "" && $s_term.val().length >= 3) {
                    init_search();
                } else {
                    $("div.search-results").hide();
                }

                return false;
            });

        </script>
    </body>

    </html>
