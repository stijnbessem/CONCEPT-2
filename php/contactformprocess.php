<?php

 /*
 * @Web Contact Page PHP Script
 * @author helpvid@ymail.com - http://www.helpvid.net
 * @version 1.0.0
 * @date January  05, 2010
 * @category Helpvid PHP Script for Contact page
 * @copyright (c) 2010 @helpvid.net (www.helpvid.net)
 * @Creative Commons Attribution-No Derivative Works 2.0 UK: England & Wales License.
 * @Creative Commons Attribution-No Derivative Works 2.5 UK: SCOTLAND License.
 * @Creative Commons Attribution-No Derivative Works 3.0 United States License.
 */


/* Email Variables */
$emailSubject = 'contactformprocess'; /*Make sure this matches the name of your file*/
$webMaster = 'info@midolifestyleperformance.com';

/*design by Mark Leroy @ http://www.helpvid.net*/

/* Data Variables */
$name = $_POST['name'];
$surname = $_POST['surname'];
$mail = $_POST['mail'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];

$body = <<<EOD
<br><hr><br>
Naam: $name <br>
Achternaam: $surname <br>
Email: $mail <br>
Onderwerp: $subject <br>
Bericht: $msg <br>


EOD;
$headers = "From: $mail\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body,
$headers);


/* Results rendered as HTML */
$theResults = <<<EOD
<html>
<head>
<title>sent message</title>
<meta http-equiv="refresh" content="3;URL=http://www.midolifestyleperformance.com/">
<style type="text/css">
<!--
body {
background-color: #FFF; /* You can edit this CSS to match your website*/
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 24px;
font-style: normal;
line-height: normal;
font-weight: normal;
color: #OOO;
text-decoration: none;
padding-top: 200px;
margin: 0 auto;
width: 800px;
text-align: center;
verical-align: middle;

}
-->
</style>
</head>
<div align="center">Bedankt voor het contact opnemen met MiDo Lifestyle & Performance! Wij nemen zo spoedig mogelijk contact met u op.</div>
</div>
</body>
</html>
EOD;
echo "$theResults";
?>