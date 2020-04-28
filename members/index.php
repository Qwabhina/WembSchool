<?php

    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["page"])){
        
        switch($_GET["page"]){
            case "Login":
                return readfile(dirname(__FILE__)."/dashboard/contents/login-page-content.php");
                break;
                
            case "Register":
                return readfile(dirname(__FILE__)."/dashboard/contents/register-page-content.php");
                break;
                
            case "Settings":
                return readfile(dirname(__FILE__)."/dashboard/contents/settings-content.php");
                break;
                
            case "Profile":
                return include(dirname(__FILE__)."/dashboard/contents/user-profile-content.php");
                break;
                
            case "Logout":
                echo "Logging Out";                
                break;
                
            default:
                echo "No Page was requested";
        }
    }
    else{
        echo "An Error Occured.";
    }
?>
