<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/page-includes/libraries/functions.php";
    secure_session();

    if(isset($_GET['user'])){
        get_user_details(sanitize_input($_GET['user'], "string"));
    }
    else{
        exit(
            json_encode(
                array(
                    "type" => "empty",
                    "content" => "An unknown error occured."
                )
            )
        );
    }
?>
