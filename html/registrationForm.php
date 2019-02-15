<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ehacks 2019 Registration Form">
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
                    <a class="page-scroll" href="#register">Register</a>
                </li>
                <li>
                    <a class="page-scroll" href="https://ehacks.cs.siue.edu/#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="https://ehacks.cs.siue.edu/#updates">Prizes</a>
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
            <p style="font-size: 150%">March 8th-10th, 2019 At T-Rex|St. Louis</p>

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
                        <h2 class="section-heading" align="center">Ehacks 2019 Registration</h2>
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
                        <select id="ethnicity" class="form-control" name="ethnicitySelect" required>
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

            <!-- Form Start - Allergies -->
            <div class="form-group">
                <label for="allergies" class="col-sm-3 control-label">Allergies and/or dietary restrictions (vegan,
                    etc)</label>
                <div class="col-sm-9">
                    <textarea id="allergies" name="allergyText" placeholder="Allergies / Dietary Restrictions"
                              class="form-control"
                              style="height: 75px; resize: none"></textarea>
                </div>
            </div>
            <!-- Form End - Allergies -->

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
                    <input id='buttonid' type='button' value='Upload Resume (.pdf ONLY)'/>
                    <span id="fileName">
                    </span>
                </div>
            </div>
            <input type="file" accept=".pdf, application/pdf" id="fileUpload"
                   name="resumeUpload" style="display:none"/>

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
        <div align="center">
            <a href="https://www.centene.com" target="_blank"><img
                        src="img/CENTENE_LOGO.jpg" title="Centene"
                        alt="Centene" style="width:70%; margin-top: 1px; margin-bottom: 1px;"></a>
            <br>
        </div>
        <div align="center">
            <a href="https://www.enterpriseholdings.com/en/index.html" target="_blank"><img
                        src="img/EHI_Logo.png" title="Enterprise"
                        alt="Enterprise" style="width:74%; margin-top: 10px; margin-bottom: 20px;"></a>
            <br>
        </div>
        <div align="center" style="width: 100%;">
            <div style="width:40%; margin-top: 5px; margin-bottom: 5px; display: inline-block">
                <a href="https://www.allscripts.com" target="_blank"><img
                            src="img/Allscripts-Logo.png" title="Allscripts"
                            alt="Bayer" style="width: 100%"></a>
            </div>
            <div style="width: 18%; margin: 10px 15px 10px 30px; display: inline-block">
                <a href="https://www.nisc.coop" target="_blank">
                    <img src="img/nisc_logo.png" title="NISC"
                         alt="NISC"
                         style="width: 100%"></a>
            </div>
            <div style="width:25%; margin-left: 20px; display: inline-block;">
                <a href="https://objectcomputing.com" target="_blank"><img
                            src="img/oci_logo.jpg" title="OCI"
                            alt="OCI" style="width: 100%"></a>
            </div>
            <br>
        </div>
        <div align="center" style="width: 100%;">
            <div style="width: 33%; display: inline-block;">
                <a href="https://www.bayer.com" target="_blank"><img
                            src="img/bayer.png" title="Bayer"
                            alt="Bayer" style="width: 100%"></a>
            </div>
            <div style="width: 33%; display: inline-block;">
                <a href="https://www.att.com" target="_blank"><img
                            src="img/att_logo.jpg" title="ATT"
                            alt="ATT" style="width: 100%"></a>
            </div>
            <div style="width: 33%; display: inline-block;">
                <a href="https://www.edwardjones.com/index.html" target="_blank"><img
                            src="img/EdwardJones.png" title="EdwardJones"
                            alt="EdwardJones" style="width: 100%"></a>
            </div>
            <br>
        </div>
    </div>
    <div align="center">
        <!--<span style='color:red;margin-right:4.00em; display:inline-block;'>&nbsp;</span>
        <a href="https://mlh.io" target="_blank"><img
                src="img/mlh_logo2.png" title="MLH"
                alt="MLH" style="width:20%;"></a>
        <span style='color:red;margin-right:5.00em; display:inline-block;'>&nbsp;</span> -->
        <br>
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
                    alt="SIUE" style="width:23%;"></a>
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
<script src="js/registrationJS.js"></script>

<!-- Theme JavaScript -->
<script src="js/creative.min.js"></script>

</body>
</html>