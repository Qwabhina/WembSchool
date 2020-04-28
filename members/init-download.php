<?php

    if(isset($_REQUEST["file"])){
        if(!isset($_SESSION['sess_generic_name'])) 
            echo "You are not allowed to download this file at this time. Please try again later.";

        // Get parameters
        $file = urldecode($_REQUEST["file"]); // Decode URL-encoded string
        $file = str_replace("downloads", "uploads", $file);
        $filepath = substr($file, 9);
        
        // Process download
        if(file_exists($filepath)) {

            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filepath));
            flush(); // Flush system output buffer

            readfile($filepath);

            exit;
        }else{
            echo "File does not exist";
        }
    }
    else{
            return false;
    
    }

?>
