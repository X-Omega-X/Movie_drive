<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "oserver";

$result = mysqli_connect($server, $user, $password, $db);
if(!$result){
    echo "Wow Server Is nuked !!";
}

?>