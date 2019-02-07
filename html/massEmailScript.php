<?php
/**
 * Created by PhpStorm.
 * User: jaredmschooley
 * Name: Jared M Schooley
 * Date: 2/26/18
 * Time: 4:46 PM
 */

include("email_accept_siue.php");
include("email_accept_notSIUE.php");
include("mass_email_general.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $fileSIUE = $_FILES['mass_email_SIUE']['tmp_name'];
    $fileNOTSIUE = $_FILES['mass_email_notSIUE']['tmp_name'];
    $fileGeneral = $_FILES['mass_email_general']['tmp_name'];
    $formValue = $_POST['formValue'];

    if ($formValue == 0) {
        emailFun($fileSIUE, SIUE_ACCEPT_EMAIL);
        echo $formValue;

    } else if ($formValue == 1) {
        emailFun($fileNOTSIUE, NOTSIUE_ACCEPT_EMAIL);
        echo $formValue;
    } else if ($formValue == 2) {
        emailFun($fileGeneral, GENERAL_EMAIL);
        echo $formValue;
    }

}

function emailFun($inputFile, $message)
{

    $headers = "From: no-reply@ehacks.cs.siue.edu" . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    // $admin_email = "no-reply@ehacks.cs.siue.edu";
    $subject = "eHacks 2019 Reminder";

    //send email

    $handle = fopen($inputFile, "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            mail("$line", "$subject", "$message", "$headers");
        }
        echo "MASS EMAIL SUCCESS!";
    } else {
        echo "FILE CANNOT BE OPENED!";
    }

    fclose($handle);

}