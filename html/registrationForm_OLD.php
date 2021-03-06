<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ehacks 2018 Registration Form">
    <meta name="author" content="Jared M Schooley">
    <meta property="og:image" content="http://ehacks.cs.siue.edu/img/ehacks-text-large.png"/>
    <title>eHacks</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        function setup() {
            document.getElementById('buttonid').addEventListener('click', openDialog);

            function openDialog() {
                document.getElementById('fileUpload').click();

                // showFileName();
            }

            document.getElementById('fileUpload').onchange = function () {
                var fullPath = document.getElementById('fileUpload').value;
                if (fullPath) {
                    var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                    var filename = fullPath.substring(startIndex);
                    if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                        filename = filename.substring(1);
                    }
                    document.getElementById('fileName').innerHTML = filename;
                }
                //document.getElementById("fileName").style.borderBottomStyle = "thin solid #000000";
                //document.getElementById("fileName").style.borderBottomWidth = "100px";
                document.getElementById('fileName').style.border = "thin solid #000000";
                document.getElementById('fileName').style.borderRadius = "5px";
                document.getElementById('fileName').style.padding = "2px";
                document.getElementById('fileName').style.marginLeft = "0px";
            }
            // document.getElementById('firstName').style.width = "500px";
            // document.getElementById('firstName').style.width = "500px";
            // document.getElementById('lastName').style.width = "500px";
            // document.getElementById('email').style.width = "500px";
            // document.getElementById('educational').style.width = "500px";
            // document.getElementById('ethnicity').style.width = "500px";
            // document.getElementsByName('gender').style.width = "500px";
            // document.getElementsByName('shirtSize').style.width = "500px";
            // document.getElementById('errorSection').style.width = "500px";
            // document.getElementById('fileUpload').style.width = "500px";
            // document.getElementById('buttonDiv').style.width = "200px";
        }
    </script>

    <!--School Selection JS-->
    <script type="text/javascript">
        function showfield(name) {
            if (name === 'Other') {
                document.getElementById('eduError').innerHTML = '<input type="text" id="otherSchool" name="otherSchoolText" placeholder="Enter Other Institution"' +
                    'class="form-control" autofocus required />' +
                    '<span class="help-block">Full Educational Institution Name, eg.: Southern Illinois University Edwardsville</span>';
            } else if (name === 'SIUE') {
                document.getElementById('eduError').innerHTML = '<span>Please note; If you are a student of SIUE, we will be providing ' +
                    'a bus to get you to and from eHacks (The T-Rex building). If you are interested in taking advantage of this option please let us know below.</span>' +
                    '<div class="form-group">' +
                    '<label class="control-label col-sm-3">Will you make use of the bus?</label>' +
                    '<div class="col-sm-6">' +
                    '<div class="row">' +
                    '<div class="col-sm-4">' +
                    '<label class="radio-inline">' +
                    '<input type="radio" name="bus" id="yesRadio" value="Yes" required />Yes' +
                    '</label>' +
                    '</div>' +
                    '<div class="col-sm-4">' +
                    '<label class="radio-inline">' +
                    '<input type="radio" name="bus" id="noRadio" value="No" required />No' +
                    '</label>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>';
            } else {
                document.getElementById('otherText').innerHTML = '';
            }
        }

        function functSubmit(event) {
            alert("REGISTADA");
        }
    </script>
    <!--/School js-->

    <!--Validation JS-->
    <script>
        var isValid = false;
        var count = 0;

        function validate() {

            var firstValid = false;
            var lastValid = false;
            var emailValid = false;
            var eduValid = false;
            var ethValid = false;
            var genValid = false;
            var shirtValid = false;
            var resumeValid = false;

            var inpObj = document.getElementById('firstName');
            var lastObj = document.getElementById('lastName');
            var emailObj = document.getElementById('email');
            var eduObj = document.getElementById('educational');
            var ethObj = document.getElementById('ethnicity');
            var genderObj = document.getElementsByName('gender');
            var shirtObj = document.getElementsByName('shirtSize');
            var errorSec = document.getElementById('errorSection');
            var fileObj = document.getElementById('fileUpload');
            var errorMessage = '';

            if (!inpObj.checkValidity()) {
                inpObj.setAttribute("placeholder", "Required Field - Please enter first name");
                errorMessage += '<span style="color:red">Required Field - Please enter first name.</span><br>';
                document.getElementById('firstNameError').innerHTML = '<span style="color:red">Enter first name.</span><br>';
                firstValid = false;
            } else {
                firstValid = true;
                document.getElementById('firstNameError').innerHTML = '';
            }
            if (!lastObj.checkValidity()) {
                lastObj.setAttribute("placeholder", "Required Field - Please enter last name");
                errorMessage += '<span style="color:red">Required Field - Please enter last name.</span><br>';
                document.getElementById('lastNameError').innerHTML = '<span style="color:red">Enter last name.</span><br>';
                lastValid = false;
            } else {
                lastValid = true;
                document.getElementById('lastNameError').innerHTML = '';
            }
            if (!emailObj.checkValidity()) {
                emailObj.setAttribute("placeholder", "Required Field - Please enter email");
                errorMessage += '<span style="color:red">Required Field - Please enter valid email.</span><br>';
                document.getElementById('emailError').innerHTML = '<span style="color:red">Enter email.</span><br>';
                emailValid = false;
            } else {
                emailValid = true;
                document.getElementById('emailError').innerHTML = '';
            }
            if (eduObj.selectedIndex === 0) {
                errorMessage += '<span style="color:red">Required Field - Please select educational institution.</span><br>';
                document.getElementById('eduError').innerHTML = '<span style="color:red">Select valid educational institution.</span><br>';
                eduValid = false;
            } else if (eduObj.selectedIndex === 9) {
                var otherSchoolInput = document.getElementById('otherSchool');

                if (!otherSchoolInput.checkValidity()) {
                    otherSchoolInput.setAttribute("placeholder", "Required Field - Please enter other school");
                    errorMessage += '<span style="color:red">Required Field - Please enter other school.</span><br>';
                    document.getElementById('eduError').innerHTML += '<span style="color:red">' +
                        'Required Field - Please enter other educational institution.</span><br>';
                    eduValid = false;
                } else {
                    eduValid = true;
                    var otherSet = document.getElementById('otherSchool').value;
                    eduObj[9].value = otherSet;
                }
            } else if (eduObj.selectedIndex === 1) {
                var selectedBusOp = document.getElementsByName('bus');
                if (!(selectedBusOp[0].checked || selectedBusOp[1].checked)) {
                    if (count === 0) {
                        document.getElementById('eduError').innerHTML += '<span style="color:red">Please select yes or no</span><br>';
                        count++;
                    }
                    errorMessage += '<span style="color:red">Required Field - Please select a bus option.</span><br>';
                    eduValid = false;
                } else {
                    eduValid = true;
                    if (count > 0) {
                        var checked;
                        checked = document.getElementById('yesRadio').checked;

                        document.getElementById('eduError').innerHTML = '';
                        document.getElementById('eduError').innerHTML = '<span>Please note; If you are a student of SIUE, we will be providing ' +
                            'a bus to get you to and from eHacks (The T-Rex building). If you are interested in taking advantage of this option please let us know below.</span>' +
                            '<div class="form-group">' +
                            '<label class="control-label col-sm-3">Will you make use of the bus?</label>' +
                            '<div class="col-sm-6">' +
                            '<div class="row">' +
                            '<div class="col-sm-4">' +
                            '<label class="radio-inline">' +
                            '<input type="radio" name="bus" id="yesRadio" value="Yes" required />Yes' +
                            '</label>' +
                            '</div>' +
                            '<div class="col-sm-4">' +
                            '<label class="radio-inline">' +
                            '<input type="radio" name="bus" id="noRadio" value="No" required />No' +
                            '</label>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';

                        if (checked === true) {
                            var yesCheck = document.getElementById("yesRadio");
                            yesCheck.value = "Yes";
                            yesCheck.checked = true;
                        } else if (checked === false) {
                            var noCheck = document.getElementById('noRadio');
                            noCheck.value = "No";
                            noCheck.checked = true;
                        }
                    }
                }
            } else {
                document.getElementById('eduError').innerHTML = '';
                eduValid = true;
            }
            if (ethObj.selectedIndex === 0) {
                errorMessage += '<span style="color:red">Required Field - Please select ethnicity - If you wish not to answer select "Prefer Not to Say".</span><br>';
                document.getElementById('ethError').innerHTML = '<span style="color:red">Please select ethnicity</span><br>';
                ethValid = true
            } else {
                document.getElementById('ethError').innerHTML = '';
                ethValid = true;
            }
            if (!(genderObj[0].checked || genderObj[1].checked || genderObj[2].checked || genderObj[3].checked)) {
                errorMessage += '<span style="color:red">Required Field - Please select gender - If you wish not to answer select "Prefer Not to Say".</span><br>';
                document.getElementById('genderError').innerHTML = '<span style="color:red">Please select gender field.</span><br>';
                genValid = false;
            } else {
                document.getElementById('genderError').innerHTML = '';
                genValid = true;
            }
            if (!(shirtObj[0].checked || shirtObj[1].checked || shirtObj[2].checked || shirtObj[3].checked || shirtObj[4].checked)) {
                errorMessage += '<span style="color:red">Required Field - Please select shirt size</span><br>';
                document.getElementById('shirtError').innerHTML = '<span style="color:red">Please select shirt size.</span><br>';
                shirtValid = false;
            } else {
                document.getElementById('shirtError').innerHTML = '';
                shirtValid = true;
            }
            if (fileObj.value === '') {
                errorMessage += '<span style="color:red">Required Field - Please upload a resume.</span><br>';
                document.getElementById('fileError').innerHTML = '<span style="color:red">Please upload a resume (.pdf)</span><br>';
            } else {
                document.getElementById('fileError').innerHTML = '';
                resumeValid = true;
            }

            errorSec.innerHTML = errorMessage;

            if ((firstValid && lastValid && emailValid && eduValid && ethValid && genValid && shirtValid && resumeValid)) {
                isValid = true;
            }
            return isValid;
        }
    </script>
    <!--/validation-->
</head>

<body id="page-top" onload="setup()">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!--<img alt="major League Hacking Banner" src="img/mlh_banner.svg" style="width:4%;">-->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="https://ehacks.cs.siue.edu/#updates">Updates</a>
                </li>
                <li>
                    <a class="page-scroll" href="https://ehacks.cs.siue.edu/#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="https://ehacks.cs.siue.edu/#faq">FAQ</a>
                </li>
                <li>
                    <a class="page-scroll" href="https://ehacks.cs.siue.edu/#agenda">Agenda</a>
                </li>
                <li>
                    <a class="page-scroll" href="https://ehacks.cs.siue.edu/#sponsors">Sponsors</a>
                </li>
                <li>
                    <a class="page-scroll" href="#register">Register</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header>
    <div class="header-content">
        <div class="header-content-inner">
            <img src="img/ehacks-text-large.png">
            <hr>
            <p style="font-size: 150%">March 2nd-4th, 2018 at the T-Rex building</p>

        </div>
    </div>
</header>
<br>
<br>
<br>

<section class="register" id="register">
    <div class="container">
        <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" id="form1"
              action="https://ehacks.cs.siue.edu/actionIsComing.php" onsubmit="return validate()">
            <div class="form-group">

                <div class="container" align="center">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading" align="center">Ehacks 2018 Registration</h2>
                        <hr class="primary">
                    </div>
                </div>

                <!--Form start - NAME-->
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="firstText" placeholder="First Name" class="form-control"
                               autofocus
                               required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="firstNameError" class="col-sm-3 control-label"></label>
                    <div class="col-sm-9" id="firstNameError">
                    </div>
                </div>
                <!--Form End - NAME-->

                <!--Form Start - LAST NAME-->
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" name="lastText" placeholder="Last Name" class="form-control"
                               autofocus
                               required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="lastNameError" class="col-sm-3 control-label"></label>
                    <div class="col-sm-9" id="lastNameError">
                    </div>
                </div>
                <!--Form End - LAST NAME-->

                <!--Form Start - EMAIL-->
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" name="emailText" placeholder="Email" class="form-control"
                               required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="emailError" class="col-sm-3 control-label"></label>
                    <div class="col-sm-9" id="emailError">
                    </div>
                </div>
                <!--Form End - Email-->

                <!--Form Start - EDUCATION-->
                <div class="form-group">
                    <label for="educational" class="col-sm-3 control-label">Educational Institution</label>
                    <div class="col-sm-9">
                        <select id="educational" class="form-control" name="educationalSelect"
                                onchange="showfield(this.options[this.selectedIndex].value)" required>
                            <option value="" selected disabled>Please Select Educational Institution</option>
                            <option value="SIUE">Southern Illinois University Edwardsville</option>
                            <option value="Washington University">Washington University in St. Louis</option>
                            <option value="University of Louisville">University of Louisville</option>
                            <option value="Saint Louis University">Saint Louis University</option>
                            <option value="University of Missouri">University of Missouri–St. Louis</option>
                            <option value="Lindenwood U">Lindenwood University</option>
                            <option value="Southeast Missouri State University">Southeast Missouri State University
                            </option>
                            <option value="Principia College">Principia College</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="eduError" class="col-sm-3 control-label"></label>
                    <div class="col-sm-9" id="eduError">
                    </div>
                </div>
                <!--Form End - EDUCATION-->

                <!--Form Start - ETHNICITY-->
                <div class="form-group">
                    <label for="ethnicity" class="col-sm-3 control-label">Ethnicity</label>
                    <div class="col-sm-9">
                        <select id="ethnicity" class="form-control" name="ethnicitySelect"
                                onchange="showfield(this.options[this.selectedIndex].value)" required>
                            <option value="" selected disabled>Please Select Ethnicity</option>
                            <option value="American Indian or Alaskan Native">American Indian or Alaskan Native</option>
                            <option value="Asian">Asian</option>
                            <option value="Black or African American">Black or African American</option>
                            <option value="Native Hawaiian or Other Pacific Islander">Native Hawaiian or Other Pacific
                                Islander
                            </option>
                            <option value="Hispanic or Latino">Hispanic or Latino</option>
                            <option value="White/Caucasian">White / Caucasian</option>
                            <option value="Not Listed">Not Listed</option>
                            <option value="Prefer Not To Say">Prefer Not to Say</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ethError" class="col-sm-3 control-label"></label>
                    <div class="col-sm-9" id="ethError">
                    </div>
                </div>
                <!--Form End - ETHNICITY-->
            </div>
            <!--form-group-->

            <!--Form Start - GENDER-->
            <div class="form-group">
                <label class="control-label col-sm-3">Gender</label>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="femaleRadio" value="Female" required>Female
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="maleRadio" value="Male" required>Male
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="unknownRadio" value="Other" required>Other
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="notRadio" value="NotStated" required>Prefer Not to
                                Say
                            </label>
                        </div>
                    </div>
                </div>
            </div> <!-- /.form-group -->

            <div class="form-group">
                <label for="genderError" class="col-sm-3 control-label"></label>
                <div class="col-sm-6" id="genderError">
                </div>
            </div>
            <!--Form End - GENDER-->

            <!--Form Start - TSHIRT-->
            <div class="form-group">
                <label class="control-label col-sm-3">T-Shirt Size</label>
                <div class="col-sm-9">
                    <div class="checkbox">
                        <label>
                            <input type="radio" name="shirtSize" id="smallCheckbox" value="Small" required>S
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="radio" name="shirtSize" id="mediumCheckbox" value="Medium" required>M
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="radio" name="shirtSize" id="largeCheckbox" value="Large" required>L
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="radio" name="shirtSize" id="xtraLargeCheckbox" value="ExtraLarge" required>XL
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="radio" name="shirtSize" id="xxLargeCheckbox" value="XtraExtraLarge" required>XXL
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="shirtError" class="col-sm-3 control-label"></label>
                <div class="col-sm-9" id="shirtError">
                </div>
            </div>
            <!--Form End - TSHIRT-->

            <!--Form Start - FILE_UPLOAD-->
            <div class="form-group">
                <label for="fileUpload" class="col-sm-3 control-label">Select Resume</label>
                <div class="col-sm-9" id="fileDiv">
                    <input id='buttonid' type='button' value='Upload Resume (.pdf, .docx, etc)'/>
                    <span id="fileName">
                    </span>
                </div>
            </div>
            <input type="file" id="fileUpload" name="resumeUpload" style="display:none"/>

            <div class="form-group">
                <label for="fileError" class="col-sm-3 control-label"></label>
                <div class="col-sm-9" id="fileError">
                </div>
            </div>
            <!--Form End - FILE_UPLOAD-->

            <input type="hidden" name="busSel" value="N/A">
            <input type="hidden" name="otherSchoolValue" value="">

            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary btn-block" onclick="return validate()">Register
                    </button>
                </div>
            </div>

            <div class="form-group">
                <label for="errorSection" class="col-sm-3 control-label"></label>
                <div class="col-sm-9" id="errorSection">
                </div>
            </div>
        </form>
        <!-- /form -->
        <!-- ./container -->
    </div>
</section>

<br>
<br>
<br>

<section class="no-padding" id="sponsors">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Sponsors</h2>
            <hr class="primary">
        </div>
        <center><a href="https://www.centene.com" target="_blank"><img
                        src="img/CENTENE_LOGO.jpg" title="Centene"
                        alt="Centene" style="width:70%;"></a></center>
        <br>
        <div align="center">
        </div>
    </div>
    <div align="center">
        <a href="https://www.nisc.coop" target="_blank">
            <a href="https://www.att.com" target="_blank"><img
                        src="img/att_logo.jpg" title="ATT"
                        alt="ATT" style="width: 45%;"></a>
            <br>
            <a href="https://www.nisc.coop" target="_blank">
                <img src="img/nisc_logo.png" title="NISC"
                     alt="NISC" style="width: 20%;"></a>
            <!--<span style='color:red;margin-right:4.00em; display:inline-block;'>&nbsp;</span>
            <a href="https://mlh.io" target="_blank"><img
                    src="img/mlh_logo2.png" title="MLH"
                    alt="MLH" style="width:20%;"></a>-->
            <span style='color:red;margin-right:5.00em; display:inline-block;'>&nbsp;</span>
            <a href="https://objectcomputing.com" target="_blank"><img
                        src="img/oci_logo.jpg" title="OCI"
                        alt="OCI" style="width:30%;"></a>
            <br>
            <a href="https://www.enterpriseholdings.com/en/index.html" target="_blank"><img
                        src="img/EHI_Logo.png" title="Enterprise"
                        alt="Enterprise" style="width:27%;"></a>
            <span style='color:red;margin-right:2.00em; display:inline-block;'>&nbsp;</span>
            <a href="http://www.downtowntrex.org" target="_blank"><img
                        src="img/Trex_Logo.png" title="TREX"
                        alt="TREX" style="width:27%;"></a>
            <span style='color:red;margin-right:2.00em; display:inline-block;'>&nbsp;</span>
            <a href="http://bjsprintables.com/index.php" target="_blank"><img
                        src="img/bjs_Logo.png" title="BJS"
                        alt="BJS" style="width:27%;"></a>
            <br>
            <a href="http://www.siue.edu" target="_blank"><img
                        src="img/Siue_stylized_wordmark.png" title="SIUE"
                        alt="SIUE" style="width:35%;"></a>
    </div>
    <br>
</section>

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Theme JavaScript -->
<script src="js/creative.min.js"></script>