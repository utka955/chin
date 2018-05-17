<?php
$showchinese = "我们讲中文";

 

include("chinesedbconnect.html"); 
 
if ($thelisting == "")
{
$thelisting=$_REQUEST['thelisting']; 
}

$listingno = $thelisting;
$Listingno = $thelisting; 

if ($language == "spanish")
{
$litpractice = "Áreas de la Práctica";
$litcities = "Ciudades";
$litinfo = "MAS INFORMACIÓN";
}
else
{
$litpractice = "Practice Areas";
$litcities = "Cities Served";
$litinfo = "MORE INFORMATION";
}

$spacer = "nbsp;";
 
$result = mysqli_new_query("SELECT * FROM  listingstab WHERE
    (tlistingno = \"$thelisting\")
     ",$db) or die("cant read the table". mysql_error());


$MyIndex = 0; 
$MyCount = 0; 

$number = mysqli_num_rows($result);

//print "<Br>listing=" . $thelisting . " num=" . $number;
 	
$num = $number - 1;
 if ($number > 0)
{
             $Lname = (mysql_result($result,$MyIndex,"tlname"));
	       include("listingfields.php");  
}

$printcity = $City;
if ($Cityz != "")
{
$printcity = $Cityz;
}

$theaddress = $Address . "," . $Address2 .  "," . $City . "," . $State . " " . $Zip; 
$showaddress = "";
if ($Address != "")
{
    $showaddress = $Address . "<br>";
}
if ($Address2 != "")
{
    $showaddress = $showaddress . $Address2 . "<br>";
}

$showaddress = $showaddress .  $City . " " . $State . " " . $Zip . "<br>";

if ($Cell != "")
{
    $showaddress = $showaddress . $Cell . "<br>";
}

$thetitle = "";

$mycity = $City;
if ($thecity != "")
{
    $mycity = $thecity;
}

$thetitle = $mycity . " Gay "; 

if ($friendly != "")
{
    $thetitle = $thetitle . $friendly . " ";
}

$thetitle = $thetitle  . "Realtor Gay Real Estate Association"; 
?>

<!DOCTYPE html> 
 
<HEAD>
<title><?php echo $Passcity ?> Chinese <?php echo $Titledesc ?> Lawyers Attorneys Abogados Spanish Speaking Espanol</title>
<meta name="keywords" content="<?php echo  $Passcity ?> Criminal Law Lawyers, Chinese Lawyers, Lawyer, Abogado, California, Abogados, Attorney, Attorneys, Spanish Speaking, en espanol, immigration, green cards, citizenships, work visas, investor visas, intracompany transfer visas, student visas, fiance visas, artist and athlete visa, religious worker visa, labor certifications, re-entry permits, work permits, deportation proceedings, court representations, political asylum "> 
<meta name="description" content="<?php echo  $Passcity ?> Chinese <?php echo $Titledesc ?> lawyers abogados. Contact spanish speaking lawyers who are advocates of your goals.">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<META NAME="revisit-after" CONTENT="30 days">
<META NAME="robots" CONTENT="FOLLOW,INDEX">
<script language="JavaScript" type="text/javascript" src="ajax_captcha.js"></script>
<meta http-equiv="imagetoolbar" content="no">
<link href="commonchin.css" type="text/css" rel="stylesheet"> 
<link href="chinres.css" type="text/css" rel="stylesheet">
 
<link href="moreinfochin.css" type="text/css" rel="stylesheet">
    
 
<meta name="viewport" content="width=device-width">
 <?php  include("chinresjava.html");   ?>

 
<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" /> 
    <style type="text/css">       html { height: 100% }      
    body { height: 100%; margin: 0; padding: 0 }     
    </style>    

 

    
  

<script>
function mycap()
{
  
if (document.myform.security.value != document.myform.cap.value)
	{
		alert("Invalid security code");
		document.myform.security.focus();
		return false;
	}
}
 
<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" /> 
    <style type="text/css">       html { height: 100% }      
    body { height: 100%; margin: 0; padding: 0 }   
    </style>    

 

 
<script>
function mycap()
{
  
if (document.myform.security.value != document.myform.cap.value)
	{
		alert("Invalid security code");
		document.myform.security.focus();
		return false;
	}
}
</script>

 
  </head>




 
 