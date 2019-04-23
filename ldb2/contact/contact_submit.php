<!DOCTYPE html>
<html>
<head>
    <!--Beginning META STUFF-->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='author' content='Lee Bennett'>
    
    <!-- TITLE -->
    <title>Contact Submission</title>
    
    <!--
    **********FAVICONS************
    -->
    <link rel='apple-touch-icon' sizes='57x57' href='img/f/apple-icon-57x57.png'>
    <link rel='apple-touch-icon' sizes='60x60' href='img/f/apple-icon-60x60.png'>
    <link rel='apple-touch-icon' sizes='72x72' href='img/f/apple-icon-72x72.png'>
    <link rel='apple-touch-icon' sizes='76x76' href='img/f/apple-icon-76x76.png'>
    <link rel='apple-touch-icon' sizes='114x114' href='img/f/apple-icon-114x114.png'>
    <link rel='apple-touch-icon' sizes='120x120' href='img/f/apple-icon-120x120.png'>
    <link rel='apple-touch-icon' sizes='144x144' href='img/f/apple-icon-144x144.png'>
    <link rel='apple-touch-icon' sizes='152x152' href='img/f/apple-icon-152x152.png'>
    <link rel='apple-touch-icon' sizes='180x180' href='img/f/apple-icon-180x180.png'>
    <link rel='icon' type='image/png' sizes='192x192'  href='img/f/android-icon-192x192.png'>
    <link rel='icon' type='image/png' sizes='32x32' href='img/f/favicon-32x32.png'>
    <link rel='icon' type='image/png' sizes='96x96' href='img/f/favicon-96x96.png'>
    <link rel='icon' type='image/png' sizes='16x16' href='img/f/favicon-16x16.png'>
    <meta name="msapplication-TileColor" content="#006beb">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#006beb">    

    <!--
    **********CSS************
    -->
    
    <!--Bootstrap Core-->
    <link href='../css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='../css/main.css' rel='stylesheet' type='text/css'>    
    <link href="../css/shadows.css" rel="stylesheet" type="text/css"/>
    <!--Custom Fonts-->
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Source%20Sans%20Pro'>
</head>
<body>
<?php

/* 
 * Part of submission for contact form; Alerts user
 * that email was a success or not
 */
if (isset($_POST["submit"])) {
$name = filter_input(INPUT_POST, "name");
$email = filter_input(INPUT_POST, "email");
$subject = filter_input(INPUT_POST, "subject");
$message = filter_input(INPUT_POST, "message");
$captcha = filter_input(INPUT_POST,"g-recaptcha-response");
$to = "LDBennett+request@gmail.com";
$body = "From: $name\n Subect: $subject\n E-Mail: $email\n Message:\n $message";

?>
<div class="container">
    <div class="row">
        <?php
$responseJSON =file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdcZhAUAAAAAMQ0x1hiDxE3EGQ6OJOWMnRk9Uo8&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
$response = json_decode( $responseJSON );

if (!$response->success ){
  echo "<div class='alert alert-danger box-shadow--6dp'>Sorry there was an error sending your message. Did you verify with reCAPTCHA? Please try again.</div>";
}
else{
        if (mail ($to, $subject, $body)) {
                echo "<div class='alert alert-success box-shadow--6dp'>Thank You " .$name ." ! I will be in contact with you soon!</div>";
        } else {
                echo "<div class='alert alert-danger box-shadow--6dp'>Sorry there was an error sending your message. Please try again.</div>";
        }
}
}
else{
echo "ERROR";
}
?>
                  <div class="alert alert-warning box-shadow--6dp">
                This window will close automatically in 10 seconds...
            </div>
    </div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<script src='../js/bootstrap.min.js' type='text/javascript'></script>
<script>
setTimeout(
function ( )
{
  self.close();
}, 10000 );
</script>
</body>
</html>