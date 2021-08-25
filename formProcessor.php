<?php 
$name_error = $email_error = $phone_error = "";
$name = $email = $phone = $message = "";

if (isset($_POST['submit'])){

    if (empty($_POST['name'])){
        $name_error = "Name is required";
    } else {
        $name = test_input($_POST['name']);
    }

    if (empty($_POST['email'])){
        $email_error = "Email is required";
    } else {
        $email = test_input($_POST['email']);
        //Check email address is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_error = "Invalid email format";
        }
    }

    if (empty($_POST['phone'])){
        $phone_error = "Phone number is required";
    } else {
        $phone = test_input($_POST['phone']);
    }

    $numdivers = $_POST['numdivers'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $mailTo = "info@scubajuan.com";
    $subject = "ScubaJuan: ".$numdivers." ".$service;
    $headers = array("From: info@scubajuan.com",
    "Reply-To: info@scubajuan.com",
    "X-Mailer: PHP/" . PHP_VERSION);
    $headers = implode("\r\n", $headers);

    $txt = "";
    $txt .= "Name: ".$name."\r\n";
    $txt .= "Email: ".$email."\r\n";
    $txt .= "Phone: ".$phone."\r\n";
    $txt .= "Divers: ".$numdivers."\r\n";
    $txt .= "Message: \r\n".$message."\r\n";

    if ($name_error == "" and $email_error == "" and $phone_error == ""){
        mail($mailTo, $subject, $txt, $headers);
        header("Location: formconfirmation.html");
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}