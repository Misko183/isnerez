<?php 

    if (isset($_POST['submit'])) {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $from = "IsNerez@web.com";

        $mailTo = "sladecek@isnerez.sk";
        $headers = "From: ".$from;
        $txt =  "Email od: ".$email."\n"."Meno a Priezvisko: ".$fname." ".$lname."\n"."Tel. číslo: ".$phone."\n\n\n\n"."Správa: "."\n\n".$message;


        mail($mailTo, $subject, $txt, $headers);
        header("Location: home?mailsend");
    }

?>