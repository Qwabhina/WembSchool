<?php
    ini_set('display_errors', 1);

/***********************************************************************/
//  CORE FUNCTIONS
/***********************************************************************/

    //Always use UTC time
	date_default_timezone_set("UTC");

	//The database configuration
    function create_db(){
        return new mysqli("localhost", "root", "2wentey", "layd");
    }

	//Storage for AJAX response
	$_GLOBAL['msg'] = array();

    //Sanitize User Inputs
    function sanitize_input($x, $type){
        switch($type){
            case "url":
                filter_var($x, FILTER_SANITIZE_URL);
                break;
            case "email":
                filter_var($x, FILTER_SANITIZE_EMAIL);
                break;
            case "number":
                filter_var($x, FILTER_SANITIZE_NUMBER_INT);
                break;
            case "decimal":
                filter_var($x, FILTER_SANITIZE_NUMBER_FLOAT);
                break;
            default:
                filter_var($x, FILTER_SANITIZE_STRING);
        }
        
		htmlspecialchars($x);
		strip_tags($x);
		trim($x);
		stripslashes($x);
		
		return $x;
	}


    //Mask String
    function mask_string( $action = 'e', $string ) {
        $secret_key = 'RTlOMytOZStXdjdHbDZtamNDWFpGdz09';
        $secret_iv = 'RTlOMytOZStXdjdH';

        $output = 'false';
        $encrypt_method = "AES-256-CBC";
        $key = hash( 'sha256', $secret_key );
        $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );

        if( $action == 'e' ) {
            $output = base64_encode(openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
        }
        else if( $action == 'd' ){
            $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
        }

        return $output;
    }

    //Convert a string (sentence) into and array
    function convert_string($str, $pointer){
        return explode($pointer, $str);
    }

    //Start a Secure Session
	function secure_session(){        
        //session_name("Learn As You Do");
		session_start();
		session_regenerate_id(true);
	}

    //Logout
	function logout($name, $m_id, $dir){
        //Update Last Login Details
        create_last_login($m_id, $dir);
                
		//Record logout action
		do_log($name, "logged out of the system");
                    
		//Destroy Current $_SESSION data
		session_destroy();
        
		header ("Location: /");
	}

    //Keep Record of all major actions in the system
    function do_log($person, $action){
        if (!file_exists($_SERVER['DOCUMENT_ROOT']."/page-includes/logs/".gmdate("F Y"))) {
            mkdir($_SERVER['DOCUMENT_ROOT']."/page-includes/logs/".gmdate("F Y"), 0777, true);
        }
        
        $dateFile = gmdate("jS");
		$logTime = gmdate("g:i:s A");
        $filename = $_SERVER['DOCUMENT_ROOT']."/page-includes/logs/".gmdate("F Y")."/". $dateFile.".txt";
		$message = $person." ".$action;
		$content = "[".$logTime."] ".$message."<br>\n";
		
		$handler = @fopen($filename, "a");
		@fwrite($handler, $content);
		@fclose($handler);
    }



    

/***********************************************************************/
//  LOGIN FUNCTIONS
/***********************************************************************/

    //Search for Username from Database
    function find_username($user){
        //Get Database Connection Instance
        $db = create_db();
        //Query String
        $sql = "SELECT `member_id`, `first_name`, `other_names`, `username_hash`, `password`, `phone_number`, `role` FROM `members` WHERE `username` = ? LIMIT 1";
        
        if($stmt = $db -> prepare($sql)){
            $stmt -> bind_param("s", $user);
            $stmt -> execute();
            $stmt -> store_result();

            if($stmt -> num_rows === 0){
                $msg["type"] = "error";
                $msg["content"] = "We didn't find this Username";

                exit(json_encode($msg));
            }

            $stmt -> bind_result($mem_id, $fName, $oName, $userhash, $password, $phone, $role);
            $stmt -> fetch();
	
            $actualName = $fName . " " . $oName;
            $sessName = $actualName;
            
            $user_n = hash('ripemd160', $user);
            
            if(!hash_equals($userhash, $user_n)){
                $msg["type"] = "error";
                $msg["content"] = "We didn't find this Username";

                exit(json_encode($msg));
            }
            
            //Add these to Session
            $_SESSION['mem-id'] = $mem_id;
            $_SESSION['user-name'] = $user;
            $_SESSION['full-name'] = $sessName;
            $_SESSION['sess-password'] = $password;
            $_SESSION['phone-number'] = $phone;
            $_SESSION['role'] = $role;

            return "Success";
        }
        else{
            $msg["type"] = "error";
            $msg["content"] = "An Error Occured: ".$db -> error;

            exit(json_encode($msg));    
        }
		
        $stmt -> free_result();
		$stmt -> close();
        
		$db -> close();
	}
    
    //Sign users In
    function sign_user_in($passwd, $name, $sess_passwd){
		if(!password_verify($passwd, $sess_passwd)){
            $msg["type"] = "error";
            $msg["content"] = "Password does not match this Username";
            
            do_log($name, "entered a wrong password.");

            exit(json_encode($msg));
        }
		else{
			//Record this action in log file
			do_log($name, "logged in successfully");
            
			//Everythings has checked out so log user in
			//But close db connection before - Security Issues
			//$db -> close();
            $_SESSION['logged_in_status'] = "Logged_In";
            $_SESSION['sess_generic_name'] = "Wemb";
			
			$msg["type"] = "success";
			exit(json_encode($msg));
        }
	}

    //Record Last Login information of users
    function create_last_login($mem_id, $path){
        //Create an instance of the Database
        $db = create_db();
        
        //Veriify if user has logged in before: If YES, replace the old details; Else, Add new records
        if($stmt = $db -> prepare("SELECT * FROM `last_login` WHERE `member_id` = ? LIMIT 1")){
			$stmt -> bind_param("s", $mem_id);
			$stmt -> execute();
			$stmt -> store_result();
			
			if($stmt -> num_rows === 0){
				$db -> query("INSERT INTO `last_login` (`member_id`, `last_ip`, `date`) VALUES ('$mem_id', '".$path."', '".time()."')") or die("Update Query: ". $db -> error);
            }
            else{
				$db -> query("UPDATE `last_login` SET `last_ip` = '".$path."', `date` = '".time()."' WHERE `member_id` = '$mem_id'") or die("Update Query: ". $db -> error);
            }
			
			$stmt -> free_result();
			$stmt -> close();
        }
    }

    //Validate login status
	function isLoggedIn(){
        if(isset($_SESSION['sess_generic_name']) == "Wemb" && isset($_SESSION["logged_in_status"]) == "Logged_In"){	
                return true;
        }
        else{ 
            return false;
        }
	}


/***********************************************************************/
//  DASHBOARD FUNCTIONS
/***********************************************************************/

function getCourseDetails($crs){
    $db = create_db();
    
    $data = $db -> query("SELECT * FROM `course` WHERE `crs_code` = '$crs'");
    
    return $data -> fetch_array(MYSQLI_ASSOC);
}


function format_file_sizes($bytes){
    if ($bytes >= 1048576){
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    }
    elseif ($bytes >= 1024){
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    }
    elseif ($bytes > 1){
        $bytes = $bytes . ' bytes';
    }
    elseif ($bytes == 1){
        $bytes = $bytes . ' byte';
    }
    else{
        $bytes = 'Unknown';
    }
    
    return $bytes;
}


function init_search($term){
    $db = create_db();
    
    $sql_pt = "SELECT `crs_code`,`crs_title` FROM `course` WHERE `crs_title` LIKE ? OR `crs_code` LIKE ? ORDER BY `crs_code` ASC";
    
    if($stmt = $db -> prepare($sql_pt)){
        $stmt -> bind_param("ss", $term, $term);
        $stmt -> execute();
        $stmt -> bind_result($crs_id, $title);
		$stmt -> store_result();
        
        if($stmt -> num_rows < 1){
            echo "<li class='collection-item'>No results found. Please try again.</li>";
            exit();
        }
        else{            
            while($stmt -> fetch()){                
                echo "
                    <li class='collection-item'>
                        ".$title." (".$crs_id.")
                        <a target='_blank' class='secondary-content' href='/members/dashboard/view-course.php?crs_code=".$crs_id."'>
                            <i class='material-icons w_baseBlue_text'>arrow_forward</i>
                        </a>
                    </li>
                ";
            }
            exit();
        }
    }else{
        echo "<li class='collection-item'>An error Occured: ". $db -> error."</li>";
    }
    
}



function getNotification($u, $s){
    $db = create_db();
    
    $lim = '';
    $s == "home" ? $lim = " LIMIT 3" : $lim;
    $role = ucfirst($u)."s";

    $query = "SELECT * FROM `notification` WHERE `ntf_tag` IN('General', '$role') ORDER BY `ntf_date` $lim";

    $data = $db->query($query) or die($db->error . "<br><br>".$query);
    
    if($data->num_rows > 0){
        while($notif = $data -> fetch_array(MYSQLI_ASSOC)){
            echo '<li>
            <div class="collapsible-header w_baseBlue_text">
            <i class="material-icons">chevron_right</i>
            '.$notif["ntf_title"].'
            <span class="badge">
            <i class="material-icons">delete</i>
            </span>
            </div>
            <div class="collapsible-body w_accentOrange_text w_baseBlue"><span>
            '.$notif["ntf_content"].'
            </span></div></li>
            ';
        }
    }
    else{
        echo '
                <ul class="collapsible"><li><div class="collapsible-header w_baseBlue_text">
                <i class="material-icons">info</i>No new notifications</div></li></ul>
                ';
        exit();
    }
}



    
function get_user_details($user){
    $db = create_db();
    $c_name = convert_string($user, " ");
    
    $f = $c_name[0];
    $o = implode(" ", array_slice($c_name, 1));
    
    $sql_det = "SELECT `member_id`, `user_email`, `date_registered` FROM `members` WHERE `first_name` = '$f' AND `other_names` = '$o' LIMIT 1";
    if($res_det = $db -> query($sql_det)){        
    
        $row_det = (object) $res_det -> fetch_array();

        $sql_l = "SELECT `last_ip`, `date` FROM `last_login` WHERE `member_id` = '".$row_det->member_id."'";
        $res_l = $db -> query($sql_l);

        if($res_l -> num_rows > 0){
            $row_l = $res_l -> fetch_array();
            $row_l['date'] = calc_days_mins_more($row_l['date']);
        }
        else{
            $row_l = array(
                "last_ip" => "N/A", "date" => "Today"
            );
        }

        $date_reg_text = calc_days_mins_more($row_det->date_registered);

        $ret = array(
                    "type" => "full",
                    "name" => $user,
                    "date_registered" => $date_reg_text,
                    "last_login_date" => $row_l['date'],
                    "last_login_ip" => $row_l['last_ip'],
                    "user_email" => $row_det->user_email,
                    "phone_number" => $_SESSION['phone-number']
                ); 
        return $ret;
    }
    else{
        exit(
            array(
                    "type" => "empty",
                    "content" => "SQL Error: ".$db->error
            )
        );   
    }
}


function calc_days_mins_more($time){
        $date_text = "";
    
        $calc_days = round(abs(time() - $time) / (60 * 60 * 24));
        $calc_mins = round(abs(time() - $time) / 60);

        if($calc_days > 1){
            if($calc_days < 7){
                $date_text .= $calc_days." days ago.";
            }
            else{
                $d_Arr = getQuotientAndRemainder($calc_days, 7);
                $wk = $d_Arr[0];
                $dy = $d_Arr[1];
                
                if($wk == 1 && $dy == 0){
                    $date_text .= $wk. " week ago.";
                }
                elseif($wk == 1 && $dy == 1){
                        $date_text .= $wk." week, ".$dy." day ago.";                                        
                }
                elseif($wk == 1 && $dy > 1){
                        $date_text .= $wk." week, ".$dy." days ago.";                                        
                }
                elseif($wk > 1 && $dy > 1){
                        $date_text .= $wk." weeks, ".$dy." days ago.";                                        
                }
                else{                   
                        $date_text .= $wk." weeks ago.";                                        
                }
            }
        }
        elseif($calc_days == 0){
            if($calc_mins > 1){
                if($calc_mins < 60){
                    $date_text .= $calc_mins." minutes ago.";
                }
                elseif($calc_mins == 60){
                    $date_text .= "An hour ago.";
                }
                else{
                    $getHrM = getQuotientAndRemainder($calc_mins, 60);
                    $hr = $getHrM[0];
                    $min = $getHrM[1];
                    
                    if($hr == 1 && $min == 1){
                        $date_text .= "About an hour ago.";
                    }
                    elseif($hr == 1 && $min > 1){
                        $date_text .= $hr." hour, ".$min." minutes ago.";
                    }
                    elseif($hr > 1 && $min == 1){
                        $date_text .= $hr." hours, ".$min." minute ago.";
                    }
                    else{
                        $date_text .= $hr." hours, ".$min." minutes ago.";
                    }
                }
            }
            elseif($calc_mins == 0){
                $date_text .= "A few seconds ago.";            
            }
            else{
                $date_text .= $calc_mins." minute ago.";                        
            }
        }
        else{
            $date_text .= "Yesterday";
        }
    return $date_text;
}


function getQuotientAndRemainder($divisor, $dividend) {
    $quotient = (int)($divisor / $dividend);
    $remainder = $divisor % $dividend;
    return array( $quotient, $remainder );
}



//**********  END OF CODE ************//
?>
