<?php

$html = '
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <style type="text/css">
            /* FONTS */
            @media screen {
                @font-face {
                font-family: \'Lato\';
                    font-style: normal;
                    font-weight: 400;
                    src: local(\'Lato Regular\'), local(\'Lato-Regular\'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format(\'woff\');
                }
    
                @font-face {
                    font-family: \'Lato\';
                    font-style: normal;
                    font-weight: 700;
                    src: local(\'Lato Bold\'), local(\'Lato-Bold\'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format(\'woff\');
                }
    
                @font-face {
                    font-family: \'Lato\';
                    font-style: italic;
                    font-weight: 400;
                    src: local(\'Lato Italic\'), local(\'Lato-Italic\'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format(\'woff\');
                }
    
                @font-face {
                    font-family: \'Lato\';
                    font-style: italic;
                    font-weight: 700;
                    src: local(\'Lato Bold Italic\'), local(\'Lato-BoldItalic\'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format(\'woff\');
                }
            }
    
            /* CLIENT-SPECIFIC STYLES */
            body, table, td, a {
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
            }
    
            table, td {
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
            }
    
            img {
                -ms-interpolation-mode: bicubic;
            }
    
            /* RESET STYLES */
            img {
                border: 0;
                height: auto;
                line-height: 100%;
                outline: none;
                text-decoration: none;
            }
    
            table {
                border-collapse: collapse !important;
            }
    
            body {
                height: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
                width: 100% !important;
            }
    
            /* iOS BLUE LINKS */
            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }
    
            /* MOBILE STYLES */
            @media screen and (max-width: 600px) {
                h1 {
                    font-size: 32px !important;
                    line-height: 32px !important;
                }
            }
    
            /* ANDROID CENTER FIX */
            div[style*="margin: 16px 0;"] {
                margin: 0 !important;
            }
        </style>
    </head>
    <body style="background-color: #5e72e4; margin: 0 !important; padding: 0 !important;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <!-- LOGO -->
            <tbody>
            <tr>
                <td bgcolor="#5e72e4" align="center">
                    <!--[if (gte mso 9)|(IE)]>
                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                        <tr>
                            <td align="center" valign="top" width="600">
                    <![endif]-->
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <tbody>
                        <tr>
                            <td align="center" valign="top" style="padding: 80px 10px 80px 10px;">
                                <a href="/" target="_blank">
                                    <img alt="Logo" src="http://' .$_SERVER['SERVER_NAME']. '/assets/img/brand/ftc.png"
                                         style="display: block; font-family: \'Lato\', Helvetica, Arial, sans-serif; color: #ffffff; font-size: 18px; width: 250px;"
                                         border="0" title="IOTec" alt="IOTec">
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <!--[if (gte mso 9)|(IE)]>
                    </td>
                    </tr>
                    </table>
                    <![endif]-->
                </td>
            </tr>
            <!-- HERO -->
            <tr>
                <td bgcolor="#5e72e4" align="center" style="padding:0px 10px 0px 10px">
        
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px">
                        <tbody>
                        <tr>
                            <td bgcolor="#ffffff" align="center" valign="top" style="padding:40px 20px 20px 20px;border-radius:4px 4px 0px 0px;color:#111111;font-family:\'Lato\',Helvetica,Arial,sans-serif;font-size:48px;font-weight:400;letter-spacing:4px;line-height:48px">
                                <h1 style="font-size:42px;font-weight:400;margin:0">Message</h1>
                            </td>
                        </tr>
                        </tbody>
                    </table>
        
                </td>
            </tr>
            <!-- COPY BLOCK -->
            <tr>
                <td bgcolor="#f4f4f4" align="center" style="padding:0px 10px 0px 10px">
        
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px">
        
                        <tbody>
                        <tr>
                            <td bgcolor="#ffffff" align="left" style="padding: 30px;color:#666666;font-family:\'Lato\',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:25px">
                                <p style="margin:0">
                                    ' . $_POST['message'] . '
                                </p>
                            </td>
                        </tr>
        
                        <tr>
                            <td bgcolor="#ffffff" align="left" style="padding:20px 30px 20px 30px;color:#666666;font-family:\'Lato\',Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:25px">
                                <hr style="width: 100%; margin: 30px auto; border-color: #f7f7f7; border-width: 0.5px;">
                                <p style="margin:0">Cheers,<br>FTC</p>
                            </td>
                        </tr>
        
                        </tbody>
                    </table>
        
                </td>
            </tr>
            <!-- FOOTER -->
            <tr>
                <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
                    <!--[if (gte mso 9)|(IE)]>
                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                        <tr>
                            <td align="center" valign="top" width="600">
                    <![endif]-->
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <!-- NAVIGATION -->
                        <tbody>
                        <tr>
                            <td bgcolor="#f4f4f4" align="left"
                                style="padding: 30px 30px 30px 30px;color: #aaaaaa;font-family: \'Lato\', Helvetica, Arial, sans-serif;font-size: 12px;font-weight: 400;line-height: 18px;text-align: center;">
                                <p style="margin: 0;">
                                    Copyright &#xA9; <script>document.write(new Date().getFullYear())</script>, <a href="/" target="_blank">FTC</a> All Rights Reserved.
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <!--[if (gte mso 9)|(IE)]>
                    </td>
                    </tr>
                    </table>
                    <![endif]-->
                </td>
            </tr>
            </tbody>
        </table>
    </body>
</html>
';