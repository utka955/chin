<?PHP
session_start();
 include("chinesedbconnect.html");

$to = "ChineseLawyersNetwork.COM";
?>

<html>
<head>
<title>Chinese Lawyers Attorneys  Immigration Chinese Speaking</title>
<META NAME="keywords" CONTENT="Chinese Lawyers, Lawyer,  Attorney, Attorneys, Chinese Speaking, in Chinese, immigration, green cards, citizenships, work visas, investor visas, intracompany transfer visas, student visas, fiance visas, artist and athlete visa, religious worker visa, labor certifications, re-entry permits, work permits, deportation proceedings, court representations, political asylum">
<META NAME="description" CONTENT="Locate Chinese Lawyers  in your city.  Search all 50 states, USA, Central America, Latin America, and the Caribbean. Chinese Speaking Lawyers, .  Lawyer in Chinese.">

<META NAME="author" CONTENT="www.alpinecommerce.com">
<META NAME="revisit-after" CONTENT="30 days">
<META NAME="robots" CONTENT="FOLLOW,INDEX">

<link href="commonchin.css" type="text/css" rel="stylesheet"> 
<link href="chinres.css" type="text/css" rel="stylesheet">
 
<meta name="viewport" content="width=device-width"> 

 <?php  include("chinresjava.html");   ?> 

 
<script language="JavaScript" type="text/javascript" src="ajax_captcha.js"></script>
</head>

<body>
 <?php   include("topchinres.html"); ?>

<div id="mainphoto"><img src="images/chineseheader.jpg" style="width: 100%"></div>
            		
           
 
<form id="frmCaptcha" name="frmCaptcha">
<INPUT TYPE="hidden" NAME="oops" VALUE="http://www.naglrep.com/contact,php">
<INPUT TYPE="hidden" NAME="location" VALUE="http://www.naglrep.com/thanks.html">
<INPUT TYPE="hidden" NAME="part1"  id="part1" VALUE="<?php echo $part1 ?>">
<INPUT TYPE="hidden" NAME="part2"  id="part2" VALUE="<?php echo $part2 ?>">
<INPUT TYPE="hidden" NAME="First"  id="First"  VALUE="<?php echo $First ?>">
<INPUT TYPE="hidden" NAME="Last" id="Last" VALUE="<?php echo $Last ?>">

<?php

   
		  $Companyp = str_replace("_", "", $Company);
		     		  $First = str_replace("_", " ", $First);
   		  $Last = str_replace("_", " ", $Last);
		   		  $First = str_replace("*", "&", $First);

		   $First = str_replace("@", "'", $First);
   		  $Last = str_replace("@", "'", $Last);
$Name = $First . " " . $Last;
if ($Last == "")
{
$Name = "Chinese Lawyers Network";
}
?>
			



<h2>Contact <?php echo $Name ?></h2>
<?php echo $mess ?>
<p>Your Name 
<br><INPUT NAME="txtName" id="txtName" TYPE="TEXT" SIZE="25" MAXLENGTH="100"> 
<p>E-mail
<br><INPUT NAME="signerx_email"  id="signerx_email" TYPE=TEXT SIZE="25" MAXLENGTH="100">
<p>Phone
<br><INPUT NAME="tel" TYPE=TEXT SIZE="25" MAXLENGTH="100">
<p>Best Time to Call
<br><INPUT NAME="best" TYPE=TEXT SIZE="25" MAXLENGTH="100">
<p>Message
<br><textarea name="message" rows="3" cols="20" align="left">
</textarea>
<p>
					<label for="captcha">Enter security code</label>
<br>
					<input id="txtCaptcha" type="text" name="txtCaptcha" value="" maxlength="5" size="5" />
<p>
					<img id="imgCaptcha" src="create_image.php" />
<p>
					<input id="btnCaptcha" style="background-color: #152560; letter-spacing: 3px; height: 45px; color: white;font-size: 16px;padding: 10px 10px 10px 10px; border: none" type="button" value="SUBMIT" name="btnCaptcha" 
						onclick="getParam(document.frmCaptcha)" />
 

		<div id="result" style="text-align: center; width: 450px; margin-left: auto; margin-right: auto"></div>
	</form>
 
</div>
</div>
<div id="copyright" style="margin-top: <?php echo $footermargin ?>">
Copyright © 2005 - 2017 ChineseLawyersNetwork.com<br> 
All Rights Reserved
</div>
 <?php 
$footermargin = "20px";
 include("botchinres.html");   ?>
</body>
</html>