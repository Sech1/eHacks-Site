<?php
/**
 * Created by PhpStorm.
 * User: jaredmschooley
 * Author: Jared M Schooley
 * Date: 2/3/18
 * Time: 2:07 AM
 */

/**
 * Updated by IntelliJ
 * User: jaredmschooley
 * Author: Jared M Schooley
 * Date: 1/24/19
 * Time: 3:14 PM
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
    //Allergies
    $allergies = strip_tags($_POST['allergyText']);
    //$shirt = $_POST['shirtSize'];
    $shirt = strip_tags($_POST['shirtSize']);
    //$bus = $_POST['bus'];
    $file = $_FILES['resumeUpload']['name'];

    $firstName = str_replace('\'', '', $firstName);
    $lastName = str_replace('\'', '', $lastName);
    $file = str_replace('\'', '', $file);
    $file = str_replace('\"', '', $file);

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

        echo REDIRECT;

        connect($firstName, $lastName, $email, $eduIns, $ethSel, $gender, $shirt, $file, $bus, $allergies);
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

//Connects to DB and writes data to database & table.
function connect($first, $last, $email, $edu, $eth, $gender, $shirt, $file, $bus, $allergies)
{
    $conn = new mysqli(DB_HOST, DB_USR, DB_PWD);
    $conn->select_db(DB_NAME);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $insertData = "INSERT INTO ehacks2019_registration(
                          First_Name, Last_Name, Email, School, Gender, Race, Allergies, Shirt_Size, File, Bus)
                   VALUES ('$first','$last','$email','$edu','$gender','$eth', '$allergies','$shirt','$file','$bus')";

    $conn->query($insertData);
}

//Handles sending out confirmation email.
function emailReg($firstName, $lastName, $email, $edu, $doBus)
{

    $headers = "From: no-reply@ehacks.cs.siue.edu" . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $subject = "eHacks 2019 Registration";

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


