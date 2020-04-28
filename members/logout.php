<?php
    //Load the PHP file containing the Logout Function
    require_once($_SERVER["DOCUMENT_ROOT"]."/page-includes/system/functions.php");

    //Start of resume a Secure Session
    secure_session();
    
    //Log the User out of the System
    logout($_SESSION['full-name'], $_SESSION['mem-id'], $_GET['last_addr_before_logout']); 

?>
