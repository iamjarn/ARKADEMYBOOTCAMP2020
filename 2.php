<?php

function usernameCheck($username) { 
	$upper = preg_match('/[A-Z]{7,7}/', $username);
	
if($upper || strlen($username) == 7) {
	echo "Username		: ".$username."</BR>";
	$bool = true;
    echo "return ".json_encode($bool);
} else  if ($upper || strlen($username) < 7){
	echo "Username		: ".$username."</BR>";
	$bool = false;
	echo "return ".json_encode($bool);
} else {
	echo "Username		: ".$username."</BR>";
	$bool = false;
	echo "return ".json_encode($bool);
}
}

function passwordCheck($password) {
	$check = preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{9,15}$/', $password);
	
if($check) {
	echo "Password 		: ".$password."</BR>";
	$bool = true;
	echo "return ".json_encode($bool);
} else {
	echo "Password		: ".$password."</BR>";
	$bool = false;
	echo "return ".json_encode($bool);
}	
}

echo "</BR>".usernameCheck("SABRINA")."</BR>";
echo "</BR>".usernameCheck("KEVIN")."</BR>";
echo "</BR>".passwordCheck("#DirumahAj4")."</BR>";
echo "</BR>".passwordCheck("Cuci#Tangan")."</BR>";