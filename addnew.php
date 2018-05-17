<?php 
session_start();
include("checklogon.php");  ?> 

<?php 
include("chinesedbconnect.html");
 
$_SESSION["Pro"] = $Pro; 
$Fname=mysql_real_escape_string($_REQUEST['Fname']);
$Lname=mysql_real_escape_string($_REQUEST['Lname']);
$useridx=mysql_real_escape_string($_REQUEST['useridx']);
$Company=mysql_real_escape_string($_REQUEST['Company']);
$Address=mysql_real_escape_string($_REQUEST['Address']);
$Address2=mysql_real_escape_string($_REQUEST['Address2']);
$City=mysql_real_escape_string($_REQUEST['City']);
$City1=mysql_real_escape_string($_REQUEST['City1']);
$City2=mysql_real_escape_string($_REQUEST['City2']);
$City3=mysql_real_escape_string($_REQUEST['City3']);
$City4=mysql_real_escape_string($_REQUEST['City4']);
$City5=mysql_real_escape_string($_REQUEST['City5']);
$City6=mysql_real_escape_string($_REQUEST['City6']);
$City7=mysql_real_escape_string($_REQUEST['City7']);
$City8=mysql_real_escape_string($_REQUEST['City8']);
$City9=mysql_real_escape_string($_REQUEST['City9']);
$City10=mysql_real_escape_string($_REQUEST['City10']);
$City11=mysql_real_escape_string($_REQUEST['City11']);
$City12=mysql_real_escape_string($_REQUEST['City12']);
$City13=mysql_real_escape_string($_REQUEST['City13']);
$City14=mysql_real_escape_string($_REQUEST['City14']);
$City15=mysql_real_escape_string($_REQUEST['City15']);
$State=mysql_real_escape_string($_REQUEST['State']);
$Province=mysql_real_escape_string($_REQUEST['Province']);
$Zip=mysql_real_escape_string($_REQUEST['Zip']);
$Country=mysql_real_escape_string($_REQUEST['Country']);
$Tel=mysql_real_escape_string($_REQUEST['Tel']);
$Cell=mysql_real_escape_string($_REQUEST['Cell']);
$Fax=mysql_real_escape_string($_REQUEST['Fax']);
$Website=mysql_real_escape_string($_REQUEST['Website']);
$email = $useridx;
$mysessid = $_SERVER['REMOTE_ADDR'];
 

$_SESSION["auth"] = $auth;
 
$_SESSION["email"] = $email;
 

$auth = "A";
 


if ($province != "select state")
    {
    if ($province != "")
        {
           $State = $province;
        }
    }
 
$mysessid = $PHPSESSID;
 


$printmess = " <b>  Enter your data here.</b> ";

$printmess2 = "";


$sure = "n";
$isitvalid = "y";



if ($Name == "")
{
    $isitvalid = "n";
    $printmess = $printmess . "Name is required - ";
}


if ($useridx == "")
{
    $isitvalid = "n";
    $printmess = $printmess . "Email Address is required - ";
}




$nodata =  "";

$result = mysql_query("SELECT * FROM countertab",$db);
	$Itemcount = (mysql_result($result,$MyIndex,"itemcount"));
        $Itemcount++;
 
      mysql_query("update countertab SET itemcount=\"$Itemcount\" ;") or die("counter update failed");
$Listingno = "L" . $Itemcount;
$Paystatus = "N";

 
		
 mysql_query("insert into listingstab (`tid`,`tlistingno`, `tauthcode`, `tcreatedate`, `tlastupdate`) VALUES
('$useridx', '$Listingno',  '$authcode',        Current_Timestamp,Current_Timestamp);")
or die("cant insert listing " . mysql_error()); 


	$realid = $Listingno;
 
$dir =  $_SERVER['DOCUMENT_ROOT'];  
 

$dirpath =  $dir . "/listingphotos/$realid";

// print "<Br>create dir = " . $dirpath; 

mkdir("$dirpath", 0775);


   print 
	 "<META http-equiv=\"refresh\"content=\"0;url=selectchinese.php
?useridx=$useridx 
&userid=$useridx 
&listingno=$Listingno

\">";
 

 ?>    
