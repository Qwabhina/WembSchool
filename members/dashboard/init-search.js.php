<?php
    require_once $_SERVER["DOCUMENT_ROOT"]."/page-includes/system/functions.php";

    //If a request is sent to this file and it's a submit (GET) request
    if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['btn_search']) == "Search"){
        if(!empty(trim($_GET['search-term'])) || trim($_GET['search-term']) != ""){
            $term = sanitize_input($_GET['search-term'], "string");
            // $term = str_replace(" ", "%", $term);
                
            init_search("%".$term."%");
        }
        else{
            echo("<li class='collection-item'>Please enter a Course Title or Code.</li>");
        }
    }
    else{
        header("Location: /");
        //exit();
    }
?>
