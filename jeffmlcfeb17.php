<?php
// IMPORTANT NOTE: DO NOT change anything that has a $ before it
session_start();

  
//Make sure that the input come from a posted form. Otherwise quit immediately
if ($_SERVER["REQUEST_METHOD"] <> "POST") 
 die("You can only reach this page by posting from the html form");

//Check if the securidy code and the session value are not blank 
//and if the input text matches the stored text
if ( ($_REQUEST["txtCaptcha"] == $_SESSION["security_code"]) && 
    (!empty($_REQUEST["txtCaptcha"]) && !empty($_SESSION["security_code"])) ) {
//  echo $_REQUEST["txtName"];
} else {
  echo "<h1>The security code is invalid. Try again!</h1>";
exit();
}

 include("chinesedbconnect.html");

$signerx_email1 = $HTTP_POST_VARS['signerx_email'];
$txtName = $HTTP_POST_VARS['txtName'];
$part1 = $HTTP_POST_VARS['part1'];
$part2 = $HTTP_POST_VARS['part2'];
$First = $HTTP_POST_VARS['First'];
$Last = $HTTP_POST_VARS['Last'];
$tel = $HTTP_POST_VARS['tel'];
$best = $HTTP_POST_VARS['best'];
$message = $HTTP_POST_VARS['message'];

$h1 = "CHINESELAWYERSNETWORK.COM inquiry";

$recx = "tuckman4@msn.com";
//$recx = "pcordes_98@yahoo.com";



if ($part1 != "")
{
$recx = $part1 . "@" . $part2; // who do you want to send this email to
}
$subject = $h1; // this is the subject line of the email
$testit = substr($message,0,10);

if ($signerx_email == "")
{
echo "Your email is Invalid";
 
exit();
}


if ($signerx_email == $name)
{
echo "Your message is Invalid";
 
exit();
}


$testit = substr($message,0,1);


if ($testit == "<")
{
echo "Your message is Invalid";
 
exit();
}


// End Customizable Email Information

// The Body of the Email message
// You can customize the email you receive by changing the text inside the quotes below
// The code "\n" (without quotes) will add a new line in the email body
// Don't forget to add extra '$msg_body .='
// for each additional input field you have added to your form
// IMPORTANT NOTE: DO NOT change anything that has a $ before it
$msg_body = "Message from $SERVER_NAME\n";
$msg_body .= "*****************************************\n";
$msg_body .= "Name:               $txtName\n";
$msg_body .= "E-Mail:             $signerx_email\n";
$msg_body .= "Phone:              $tel\n";
$msg_body .= "Best Time to Call:  $best\n";
$msg_body .= "Comments:           $message\n";
$msg_body .= "*****************************************\n";
$msg_body .= "\n\n";
$msg_body .= "Additional Sender Information\n";
$msg_body .= "*****************************************\n";
$msg_body .= "IP Address: $REMOTE_ADDR\n";
$HostName = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$msg_body .= "Host: $HostName\n";
$msg_body .= "User Agent: $HTTP_USER_AGENT\n";
$msg_body .= "*****************************************\n";

// Add Some Extra Header Information to the Mail

$from_email = "contact@chineselawyersnetwork.com";

//$header_info = "From: ".$name." <".$from_email.">\r\nReply-to: $signerx_email";
//$header_info .= "Reply-to: ".$name." <".$signerx_email.">";
  $header_info = "From: $from_email\r\nReply-to: $signerx_email";


//print "<br>header info=" . $header_info;
// bool mail($recx, $subject, $msg_body, $header_info);
$emailSent = mail($recx, $subject, $msg_body, $header_info);
// print "<Br>sent=" . $emailSent;
//if (true)
//{
//echo "<br>sucessful";
//}
//else
//{
//echo "<br>failed";
//}
$showname = $First . " " . $Last;
 
if ($Last == "")
{
$showname = "Chinese Lawyers Network";
}
 echo "<br><h3 style=\"font-size: 16px\"><font color=red>Your email has been sent to $showname  </font></h3>";
// echo "<br><h1>Your email has been sent to $recx  </h1>";
 
?>