<?php

function checkValidUsername($username){
	if (strlen($username) == 8 && ctype_lower($username)) {
		return true;
	}else{
		return false;
	}
}


function checkValidEmail($email){
	 $emails = explode("@", $email);
    
    if(strlen($emails[0]) == 4){
        return "true";
    }else{
        return "false";
    }
}


$username = "rizkigum";
$email = "Kamu@gmail.com";


echo checkValidUsername($username) ? "true" : "false";
echo "\n";
echo checkValidEmail($email) ? "true" : "false";