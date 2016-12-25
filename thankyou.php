<?php

require 'config.php';
$con    = Connect();
$name    = $conn->real_escape_string($_POST['u_name']);
$email   = $conn->real_escape_string($_POST['u_email']);
$subj    = $conn->real_escape_string($_POST['subj']);
$message = $conn->real_escape_string($_POST['message']);
$query   = "INSERT into tb_cform (u_name,u_email,subj,message) VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $message . "')";
$success = $con->query($query);

if (!$success) {
    die("Couldn't enter data: ".$con->error);

}

echo "Thank You For Contacting Us <br>";

$con->close();

?>