<?php
/**
 * Created by PhpStorm.
 * User: jaredmschooley
 * Date: 2/19/18
 * Time: 1:19 PM
 */

$redirect = "<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta property=\"og:image\" content=\"http://ehacks.cs.siue.edu/img/ehacks-text-large.png\" />
    <title>eHacks</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href=\"vendor/magnific-popup/magnific-popup.css\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link href=\"css/creative.min.css\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    
</head>

<body id=\"page-top\">
<header>
    <div class=\"header-content\">
        <div class=\"header-content-inner\">
            <img src=\"img/ehacks-text-large.png\">
            <hr>
            <p style=\"font-size: 150%\">March 2nd-4th, 2018 at the T-Rex building</p>

        </div>
    </div>
</header>
<br>
<br>
<br>

<section class=\"register\" id=\"register\">
    <div class=\"container\">
                <div class=\"container\">
                    <div class=\"col-lg-12 text-center\">
                        <h2 class=\"section-heading\" align=\"center\">Form Submitted!</h2>
                        <hr class=\"primary\">
                    </div>
                </div>
                <div class=\"col-lg-12 text-center\">
                <div align='center'>
                    <span>Redirecting...</span>
                    </div>
                </div>
            </div>
</section>
</body>
<a name=\"bottomOfPage\"></a>
";

DEFINE('REDIRECT', $redirect);