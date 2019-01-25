<?php

/**
 * Created by PhpStorm.
 * User: jaredmschooley
 * Author: Jared M Schooley
 * Date: 2/19/18
 * Time: 1:10PM
 */

$emailHead = '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Ehacks 2019 Confirmation</title>
</head>

<body>

<style type="text/css">
    .apple-footer a {
        text-decoration: none !important;
        color: #999999 !important;
        border: none !important;
    }

    .apple-email a {
        text-decoration: none !important;
        color: #448BFF !important;
        border: none !important;
    }
</style>
<div id="wrapper" style="background-color:#ffffff; margin:0 auto; text-align:center; width:100%" bgcolor="#ffffff"
     align="center" width="100%">
    <table class="main-table" align="center"
           style="-premailer-cellpadding:0; -premailer-cellspacing:0; background-color:#ffffff; border:0; margin:0 auto; max-width:480px; mso-table-lspace:0; mso-table-rspace:0; padding:0; text-align:center; width:480px"
           cellpadding="0"
           cellspacing="0" bgcolor="#ffffff" width="480">

        <tbody>
        <tr>
            <td class="spacer-lg"
                style="-premailer-height:75; -premailer-width:100%; line-height:30px; margin:0 auto; padding:0"
                height="75" width="100%">&nbsp;
            </td>
        </tr>
        <tr>
            <td class="logo" align="center" style="background-color:#ffffff; text-align:center; width:480px"
                bgcolor="#ffffff" width="480">
                <a href="http://ehacks.cs.siue.edu/" target="_blank"><img
                        src="http://ehacks.cs.siue.edu/img/Logo2019-BlackOnWhite-resize.png" title="eHacks"
                        alt="eHacks"></a>
            </td>
        </tr>
        <tr>
            <td class="spacer-lg"
                style="-premailer-height:75; -premailer-width:100%; line-height:30px; margin:0 auto; padding:0"
                height="75" width="100%">&nbsp;
            </td>
        </tr>
        <tr>
            <td class="spacer-lg"
                style="-premailer-height:75; -premailer-width:100%; line-height:30px; margin:0 auto; padding:0"
                height="75" width="100%">&nbsp;
            </td>
        </tr>

        <tr>
            <td>

            </td>
        </tr>
        <tr>
            <td class="headline"
                style="color:#444444; font-family:&quot;Roboto&quot;, Helvetica, Arial, san-serif; font-size:30px; font-weight:100; line-height:36px; margin:0 auto; padding:0; text-align:center"
                align="center">Thanks for registering!
            </td>
        </tr>
        <tr>
            <td class="spacer-sm"
                style="-premailer-height:20; -premailer-width:100%; line-height:10px; margin:0 auto; padding:0"
                height="20" width="100%">&nbsp;
            </td>
        </tr>
        <tr>
            <td class="copy"
                style="color:#666666; font-family:&quot;Roboto&quot;, Helvetica, Arial, san-serif; font-size:18px; line-height:30px; text-align:center"
                align="center">';

$yesBusEmail = 'your registration was received and we will keep you updated on upcoming news related
                eHacks 2019. We will email you soon with agenda updates, prizes, and other information.
            </td>
        </tr>
        <tr>
            <td class="copy"
                style="color:#666666; font-family:&quot;Roboto&quot;, Helvetica, Arial, san-serif; font-size:18px; line-height:30px; text-align:center"
                align="center"><br></td>
        </tr>
        <tr>
            <td class="copy"
                style="color:#666666; font-family:&quot;Roboto&quot;, Helvetica, Arial, san-serif; font-size:18px; line-height:30px; text-align:center"
                align="center">If you\'re interested in riding the bus to the T-rex building (from SIUE) we will be
                emailing you more information shortly.
            </td>
        </tr>

        <tr>
            <td class="spacer-lg"
                style="-premailer-height:75; -premailer-width:100%; line-height:30px; margin:0 auto; padding:0"
                height="75" width="100%">&nbsp;
            </td>
        </tr>
        <tr>
            <td class="spacer-lg"
                style="-premailer-height:75; -premailer-width:100%; line-height:30px; margin:0 auto; padding:0"
                height="75" width="100%">&nbsp;
            </td>
        </tr>
        <tr>
            <td>
                <table class="footer-table"
                       style="-premailer-width:480; background-color:#ececec; margin:0 auto; text-align:center"
                       width="480" bgcolor="#ececec" align="center">
                    <tbody>
                    <tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
        </tr>
        </tbody>
    </table>
</div>
</body>';

$noBus = 'your registration was received and we will keep you updated on upcoming news related
                eHacks 2019. We will email you soon with agenda updates, prizes, and other information.
            </td>
        </tr>
        <tr>
            <td class="copy"
                style="color:#666666; font-family:&quot;Roboto&quot;, Helvetica, Arial, san-serif; font-size:18px; line-height:30px; text-align:center"
                align="center"><br></td>
        </tr>
        <tr>
            <td class="spacer-lg"
                style="-premailer-height:75; -premailer-width:100%; line-height:30px; margin:0 auto; padding:0"
                height="75" width="100%">&nbsp;
            </td>
        </tr>
        <tr>
            <td class="spacer-lg"
                style="-premailer-height:75; -premailer-width:100%; line-height:30px; margin:0 auto; padding:0"
                height="75" width="100%">&nbsp;
            </td>
        </tr>
        <tr>
            <td>
                <table class="footer-table"
                       style="-premailer-width:480; background-color:#ececec; margin:0 auto; text-align:center"
                       width="480" bgcolor="#ececec" align="center">
                    <tbody>
                    <tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
        </tr>
        </tbody>
    </table>
</div>
</body>';

DEFINE('EMAIL_HEADER', $emailHead);
DEFINE('SIUE_BUS_EMAIL', $yesBusEmail);
DEFINE('NO_SIUE_BUS', $noBus);

?>