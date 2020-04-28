<?php
    //Libraries File
    require_once($_SERVER["DOCUMENT_ROOT"]."/page-includes/system/functions.php");
    $db = create_db();
    

	//Start a secure Session
	secure_session();
	
	//Check Form Submission
	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['btn_register'])){
        
        //This part performs the server-side validation of the form
        $required_fields = array('first-name', 'other-names', 'gender', 'srcs', 'ferm', 'user-email', 'phone-number');
                
        //Check for Empty Fields
        foreach($required_fields as $key){
            if(empty($_POST[$key]) || $_POST[$key] == ""){
                if($key == "srcs"){
                    $key = "Username";
                }
                if($key == "ferm"){
                    $key = "Password";
                }
                
                exit(
                    json_encode(
                        array(
                            "type" => "error",
                            "content" => "One or more fields have been left empty. Please fill the ".str_replace("-", " ", strtoupper($key)). " field in order to continue."
                        )
                    )
                );
            }
            else{
                //Compare Password Fields
                if($_POST['ferm'] != $_POST['cfc']){
                    exit(
                        json_encode(
                            array(
                                "type" => "error",
                                "content" => "Your passwords do not match."
                            )
                        )
                    );
                }
            }
        }
                    
        //Retrieve and Sanitize User Input
        $first_name = sanitize_input($_POST['first-name'], "string");
        $other_names = sanitize_input($_POST['other-names'], "string");
        $member_id = sanitize_input($_POST['member-id'], "string");
        $gender = sanitize_input($_POST['gender'], "string");
        $username = sanitize_input($_POST['srcs'], "string");
        $password = sanitize_input($_POST['ferm'], "string");
        $user_email = sanitize_input($_POST['user-email'], "email");
        $phone_number = sanitize_input($_POST['phone-number'], "number");
        
        //Perform the Registration
        register_member(
            $first_name,
            $other_names,
            $member_id,
            $gender,
            ucfirst($username),
            $password,
            $user_email,
            $phone_number
        );
        
    }
	elseif($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['btn_pre_signup'])){
        
        //This part performs the server-side validation of the form
        $required_fields = array('first-name', 'resa', 'srcs', 'pobx', 'agree');
                
        //Check for Empty Fields
        foreach($required_fields as $key){
            if(empty($_POST[$key]) || $_POST[$key] == ""){
                if($key == "resa"){
                    $key = "Username";
                }
                if($key == "srcs"){
                    $key = "Password";
                }
                
                exit(
                    json_encode(
                        array(
                            "type" => "error",
                            "content" => "One or more fields have been left empty. <br>Please fill the ".str_replace("-", " ", strtoupper($key)). " field in order to continue."
                        )
                    )
                );
                
            }
            else{
                $pobx = sanitize_input($_POST["pobx"], "email");
                $resa = sanitize_input($_POST["resa"], "string");
                $name = sanitize_input($_POST["first-name"], "string");
                $pass = sanitize_input($_POST["srcs"], "string");
                $agree = isset($_POST["agree"]) ? $_POST["agree"] : "";
                
                $q = "SELECT * FROM `members` WHERE `username` = '$resa' OR `user_email` = '$pobx'";
        
        $chkDp = $db -> query($q) or die(json_encode(array("type"=>"error", "content"=>"Error: ". $db -> error)));
        //$chkDp = $db -> query() or die(json_encode(array("type"=>"error", "content"=>"An Internal Error Occured. Please try again later.")));
        

        if($chkDp -> num_rows > 0){
            $msg['type'] = "error";
            $msg['content'] = "<p>It appears that you're already a registered member.</p><p>The Username or E-mail you entered has already been used to register for an account.</p><br><br>Want to <a class='layd_light-link' href='/members/login/?continue=dashboard&ref=Sign-Up-Form&clk_source=formMessage'>Sign In</a>?";

            exit(json_encode($msg));
        }
        else{
                $_SESSION["s"] = mask_string('e', $name);
                $_SESSION["r"] = mask_string('e', $resa);
                $_SESSION["c"] = mask_string('e', $pass);
                $_SESSION["t"] = mask_string('e', $pobx);
                $accesss = mask_string('e', md5($agree));
        }
            }
        }
                
        exit(
            json_encode(
                array(
                    "type" => "preposted",
                    "a" => $accesss
                )
            )
        );
    }
    else{
        exit(
            json_encode(
                array(
                    "type" => "error",
                    "content" => "Your access to this resource has been denied."
                )
            )
        );
    }
?>
