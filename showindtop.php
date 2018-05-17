<?php
$wespeackchinese = "我们讲中文";

 
include("chinesedbconnect.html"); 
 
$result = mysql_query("SELECT * FROM  listingstab WHERE
    (tlistingno = \"$thelisting\")
     ",$db) or die("cant read the table". mysql_error());


$MyIndex = 0; 
$MyCount = 0; 

$number = mysql_numrows($result);
 	
$num = $number - 1;
 
             $Lname = (mysql_result($result,$MyIndex,"tlname"));
	     $Fname = (mysql_result($result,$MyIndex,"tfname"));
	     $Title = (mysql_result($result,$MyIndex,"ttypebus"));
   	     $City = (mysql_result($result,$MyIndex,"tcity"));
	     $City1 = (mysql_result($result,$MyIndex,"tcity1"));
	     $City2 = (mysql_result($result,$MyIndex,"tcity2"));
	     $City3 = (mysql_result($result,$MyIndex,"tcity3"));
	     $City4 = (mysql_result($result,$MyIndex,"tcity4"));
	     $City5 = (mysql_result($result,$MyIndex,"tcity5"));
	     $City6 = (mysql_result($result,$MyIndex,"tcity6"));
	     $City7 = (mysql_result($result,$MyIndex,"tcity7"));
	     $City8 = (mysql_result($result,$MyIndex,"tcity8"));
	     $City9 = (mysql_result($result,$MyIndex,"tcity9"));
	     $City10 = (mysql_result($result,$MyIndex,"tcity10"));
	     $City11 = (mysql_result($result,$MyIndex,"tcity11"));
	     $City12= (mysql_result($result,$MyIndex,"tcity12"));
	     $City13 = (mysql_result($result,$MyIndex,"tcity13"));
	     $City14 = (mysql_result($result,$MyIndex,"tcity14"));
	     $City15 = (mysql_result($result,$MyIndex,"tcity15"));
             $Country = (mysql_result($result,$MyIndex,"tcountry"));
	     $State = (mysql_result($result,$MyIndex,"tstate"));
	     $Telephone = (mysql_result($result,$MyIndex,"ttel"));
	     $Cell = (mysql_result($result,$MyIndex,"tcell"));
	     $Fax = (mysql_result($result,$MyIndex,"tfax"));
	     $Bio = (mysql_result($result,$MyIndex,"tbio"));
             $Spanishbio = (mysql_result($result,$MyIndex,"tchinesebio"));
	     
	     $Address = (mysql_result($result,$MyIndex,"taddress"));
 	     $Address2 = (mysql_result($result,$MyIndex,"taddress2"));
	     $Logo = (mysql_result($result,$MyIndex,"tlogo"));
	     $Photo = (mysql_result($result,$MyIndex,"tphoto"));
	     $Zip = (mysql_result($result,$MyIndex,"tzip"));
	     $type = (mysql_result($result,$MyIndex,"ttypebus"));
	     $Website = (mysql_result($result,$MyIndex,"twebsite"));
	    

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

$savedesc =   $Desc;
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<title><?php echo $Passcity ?> Chinese <?php echo $Titledesc ?> Lawyers Attorneys  Chinese Speaking</title>
<meta name="keywords" content="<?php echo  $Passcity ?> <?php echo $Titledesc ?> Lawyers, Chinese Lawyers, Lawyer,  California,  Attorney, Attorneys, Chinese Speaking, in Chinese, immigration, green cards, citizenships, work visas, investor visas, intracompany transfer visas, student visas, fiance visas, artist and athlete visa, religious worker visa, labor certifications, re-entry permits, work permits, deportation proceedings, court representations, political asylum "> 
<meta name="description" content="<?php echo  $Passcity ?> Chinese <?php echo $Titledesc ?> lawyers . Contact chinese speaking lawyers who are advocates of your goals.">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="revisit-after" content="30 days">
<meta name="robots" content="FOLLOW,INDEX">
 

<link href="css/chinese.css" type="text/css" rel="stylesheet">
<script language="JavaScript" type="text/javascript" src="ajax_captcha.js"></script>
<script> 
function edit()
{
 
mess = "";
if  (document.theform.sec.value != "bcxw") 
{
mess = mess + "Invalid security code\n";
}

if (mess != "")
{
alert (mess);
}

}

</script>
</head> 