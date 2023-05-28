<?php

$Email_To = 'abd.alrahman.olabi@gmail.com'; //Company Email (That Will Receive The Mail)
$Name = $_POST['name'];
$Email = $_POST['email'];
$Subject_Form = $_POST['subject'];
$Subject = "Hadara Virtual School" . " - " . $Subject_Form;
$Email_Header = "Name: " . $Name . "\r\n" . "Email: " . $Email . "\r\n";
$Message = $_POST['message'];
$Message = $Email_Header . "\r\n" . $Message;

if (mail($Email_To, $Subject, $Message, $Email_Header)) {
    echo '<script>
    alert("Email Sent Successfully")
    window.location.replace("index.html");
    </script>';
   // header('Location: index.html');

} else {
    echo '<script>
    alert("Sorry, Failed While Sending Mail!")
    window.location.replace("contact.html");
    </script>';
}
?>