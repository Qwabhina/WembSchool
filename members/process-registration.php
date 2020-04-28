<?php
    //Libraries File
    require_once($_SERVER["DOCUMENT_ROOT"]."/page-includes/libraries/functions.php");

	//Start a secure Session
	secure_session();
	
	//Check Form Submission
	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['btn_register'])){
        
        //This part performs the server-side validation of the form
        $required_fields = array('first-name', 'other-names', 'gender', 'username', 'password', 'user-email', 'phone-number');
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
                //Compare Password Fields
                if($_POST['password'] != $_POST['confirm-password']){
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
        $username = sanitize_input($_POST['username'], "string");
        $password = sanitize_input($_POST['password'], "string");
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
    else{
        exit("You can't view this page now.");
    }
?>