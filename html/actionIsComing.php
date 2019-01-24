<?php
/**
 * Created by PhpStorm.
 * User: jaredmschooley
 * Author: Jared M Schooley
 * Date: 2/3/18
 * Time: 2:07 AM
 */

include("connectDB.php");
include("email.php");
include("redirect.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // DEBUG CODE:
    // Uncomment to enable
    //ini_set('display_errors', 'On');
    //error_reporting(E_ALL);

//This gets all the other information from the form
//Writes the Filename to the server

    //$firstName = $_POST['firstText'];
    $firstName = strip_tags($_POST['firstText']);
    //$lastName = $_POST['lastText'];
    $lastName = strip_tags($_POST['lastText']);
    //$email = strip_tags($_POST['emailText']);
    $email = strip_tags($_POST['emailText']);
    //$eduIns = $_POST['educationalSelect'];
    $eduIns = strip_tags($_POST['educationalSelect']);
    //$ethSel = $_POST['ethnicitySelect'];
    $ethSel = strip_tags($_POST['ethnicitySelect']);
    //$gender = $_POST['gender'];
    $gender = strip_tags($_POST['gender']);
    //$shirt = $_POST['shirtSize'];
    $shirt = strip_tags($_POST['shirtSize']);
    //$bus = $_POST['bus'];
    $file = $_FILES['resumeUpload']['name'];

    $firstName = str_replace('\'', '', $firstName);
    $lastName = str_replace('\'', '', $lastName);
    $file = str_replace('\'', '', $file);
    $file = str_replace('\"', '', $file);
    //$alteredFirst = $firstName;
    //$alteredLast = $lastName;
    //preg_replace("/(\W)+/", "", $alteredFirst);
    //preg_replace("/(\W)+/", "", $alteredLast);
    //$firstName = $alteredFirst;
    //$lastName = $alteredLast;

    $target = "2019Documents/";
    $target = $target . $firstName . $lastName . '/';
    $target = $target . basename($_FILES['resumeUpload']['name']);
    $dir = "2019Documents/";
    $dir = $dir . $firstName . $lastName;
    mkdir($dir, 0777, true); //create the directory
//This gets all the other information from the form
//Writes the Filename to the server
    if (move_uploaded_file($_FILES['resumeUpload']['tmp_name'], $target)) {
        if (empty($_POST['bus'])) {
            $bus = 'N/A';
            $doBus = false;
        } else {
            $bus = $_POST['bus'];
            $doBus = true;
        }

//print_r($eduIns);

        echo REDIRECT;

        connect($firstName, $lastName, $email, $eduIns, $ethSel, $gender, $shirt, $file, $bus);
        emailReg($firstName, $lastName, $email, $eduIns, $doBus);
        redirect();
    } else {
        echo "WARNING: There was an error uploading your file, please try again.";
        echo "Maybe the file name has already been uploaded, or the file is too large.";
    }
} else {
    echo "Something went wrong, Please resubmit form";
}

function redirect()
{

    echo "<script>
            var elmnt = document.getElementById(\"register\");
            elmnt.scrollIntoView();
          </script>";

    header(header("refresh:3;url=https://ehacks.cs.siue.edu/")); /* Redirect browser */
    exit();
}

function connect($first, $last, $email, $edu, $eth, $gender, $shirt, $file, $bus)
{

    //$phone = "000-000-0000";
    //$allergies = "NUL";
    //$allDesc = "NONE";
    //$file = "NULL";

    $conn = new mysqli(DB_HOST, DB_USR, DB_PWD);
    $conn->select_db(DB_NAME);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //  print_r("CONNECTED SUCCESSFULLY");

    // $test = ("SELECT * FROM ehacks2018_registration");
    // print_r($conn->query($test));
    $insertData = "INSERT INTO ehacks2019_registration(
                          First_Name, Last_Name, Email, School, Gender, Race, Shirt_Size, File, Bus)
                   VALUES ('$first','$last','$email','$edu','$gender','$eth','$shirt','$file','$bus')";


    //$insertData = "INSERT INTO ehacks2018_registration ()
    //              VALUES ('$first', '$last', '$email', '$phone', '$edu', '$gender', '$eth', '$shirt', '$allergies', '$allDesc', '$file');";

    $conn->query($insertData);
}

function emailReg($firstName, $lastName, $email, $edu, $doBus)
{

    $headers = "From: no-reply@ehacks.cs.siue.edu" . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    // $admin_email = "no-reply@ehacks.cs.siue.edu";
    $subject = "Ehacks 2019 Registration";

    if ($doBus) {
        $message = '<html><body>';
        $message .= EMAIL_HEADER;
        $message .= $firstName;
        $message .= ' ';
        $message .= $lastName;
        $message .= ' ';
        $message .= SIUE_BUS_EMAIL;
    } else {

        $message = '<html><body>';
        $message .= EMAIL_HEADER;
        $message .= $firstName;
        $message .= ' ';
        $message .= $lastName;
        $message .= ' ';
        $message .= NO_SIUE_BUS;
    }

    //send email
    mail("$email", "$subject", "$message", "$headers");

    //Email response
    //echo "Thank you for contacting us!";
}


