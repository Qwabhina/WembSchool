<?php 
    require_once $_SERVER["DOCUMENT_ROOT"]."/page-includes/libraries/functions.php";
    secure_session();

    //If a request is sent to this file and it's a submit (POST) request
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['btn_upload']) == "Submit"){
        
         //This part performs the server-side validation of the form
        $required_fields = array('project-title', 'primary-code-lang', 'author-phone', 'project-desc', 'user-password');
        //Check for Empty Fields
        foreach($required_fields as $key){
            if(empty($_POST[$key]) || $_POST[$key] == ""){
                exit(
                    json_encode(
                        array(
                            "type" => "error",
                            "content" => "One or more fields have been left empty. <br>Please fill all fields:<br><br>".$key
                        )
                    )
                );
            }
            else{
                
                if(!password_verify(sanitize_input($_POST['user-password'], "string"), $_SESSION["sess-password"])){
                    exit(
                        json_encode(
                            array(
                                "type" => "error",
                                "content" => "The Password you entered is Incorrect."
                            )
                        )
                    );
                }
            }
        }
        
        
        //Retrieve and sanitize input from form
        $project_title = sanitize_input($_POST['project-title'], "string");
        $primary_lang  = sanitize_input($_POST['primary-code-lang'], "string");
        $author_phone  = sanitize_input($_POST['author-phone'], "number");
        $caption       = sanitize_input($_POST['project-desc'], "string");
        
        $filename = $_FILES["project-file"]["name"];
        $file_tmp = $_FILES["project-file"]["tmp_name"];
        
        $file_basename = substr($filename, 0, strripos($filename, '.')); // get file name
        $file_ext = substr($filename, strripos($filename, '.')); // get file extention
        //Get the file size and convert it to the right unit
        $filesize = $_FILES["project-file"]["size"];
        //List of allowed file types
        $allowed_file_types = array('.doc', '.docx', '.zip', '.pdf', '.rar');	

        
        if ($filesize >= 26214401){
        // Maximum file size exceeded
            unlink($_FILES["project-file"]["tmp_name"]);
            
            exit(
                json_encode(
                    array(
                        "type" => "error",
                        "content" => "The file you are trying to upload is too large. <br> Only files with size less than or equal to 25MB are allowed."
                    )
                )
            );
        }
        elseif (empty($file_basename)){	
            // file selection error
            exit(
                json_encode(
                    array(
                        "type" => "error",
                        "content" => "Please select a file to upload."
                    )
                )
            );
        } 
        elseif (in_array(strtolower($file_ext), $allowed_file_types)){
            //Check the directory if it exists
            if (!file_exists($_SERVER['DOCUMENT_ROOT'] . "/members/uploads/" . $_SESSION['user-name'])) {
                mkdir($_SERVER['DOCUMENT_ROOT'] . "/members/uploads/" . $_SESSION['user-name'], 0777, true);
            }
            
            // Rename file
            $newfilename = $_SESSION['mem-id'] . "_" . md5($file_basename) . $file_ext;
            
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . "/members/uploads/" . $_SESSION['user-name'] ."/". $newfilename)){
                // file already exists error
                exit(
                    json_encode(
                        array(
                            "type" => "error",
                            "content" => "You have already uploaded this file."
                        )
                    )
                );
            }
            else{
                if(move_uploaded_file($file_tmp, $_SERVER['DOCUMENT_ROOT'] . "/members/uploads/" . $_SESSION['user-name'] ."/". $newfilename)){
                    //Record the details into the database
                    init_upload(
                        $_SESSION['user-name'], 
                        $_SESSION['full-name'],
                        $project_title,
                        $primary_lang,
                        $author_phone,
                        $caption,
                        "/members/downloads/" . $_SESSION['user-name'] ."/". $newfilename,
                        format_file_sizes($filesize)
                    );
                    
                    //echo "File uploaded successfully.";		
                }
                else{
                    exit(
                        json_encode(
                            array(
                                "type" => "error",
                                "content" => "Project Upload was unsuccessful. <br>Please again try later."
                            )
                        )
                    );
                }
            }	
            
        }
        else{
            // file type error
            exit(
                json_encode(
                    array(
                        "type" => "error",
                        "content" => "Only these file types are allowed for upload: <br>" . strtoupper(implode(', ', $allowed_file_types))
                    )
                )
            );
            
            unlink($_FILES["project-file"]["tmp_name"]);
        }
    }
    
    //Somebody is trying to access the file directly
    else{
        header("Location: /");
        exit();
    }
?>
