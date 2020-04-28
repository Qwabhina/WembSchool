<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/page-includes/system/functions.php";

    //If a request is sent to this file and it's a submit (GET) request
    if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['type'])){
        $db = create_db();

        // Get Notifications
        if($_GET['type'] == "notif"){
            $user = $_GET['user'];
            $src = $_GET['src'];

            echo getNotification($user, $src);
        }
    }
?>