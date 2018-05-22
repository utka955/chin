<?php 
session_start();
include("checklogon.php");  ?> 

<?php 
include("chinesedbconnect.html");
 
$_SESSION["Pro"] = $Pro; 
$Fname=mysqli_real_escape_string($db,$_REQUEST['Fname']);
$Lname=mysqli_real_escape_string($db,$_REQUEST['Lname']);
$useridx=mysqli_real_escape_string($db,$_REQUEST['useridx']);
$Company=mysqli_real_escape_string($db,$_REQUEST['Company']);
$Address=mysqli_real_escape_string($db,$_REQUEST['Address']);
$Address2=mysqli_real_escape_string($db,$_REQUEST['Address2']);
$City=mysqli_real_escape_string($db,$_REQUEST['City']);
$City1=mysqli_real_escape_string($db,$_REQUEST['City1']);
$City2=mysqli_real_escape_string($db,$_REQUEST['City2']);
$City3=mysqli_real_escape_string($db,$_REQUEST['City3']);
$City4=mysqli_real_escape_string($db,$_REQUEST['City4']);
$City5=mysqli_real_escape_string($db,$_REQUEST['City5']);
$City6=mysqli_real_escape_string($db,$_REQUEST['City6']);
$City7=mysqli_real_escape_string($db,$_REQUEST['City7']);
$City8=mysqli_real_escape_string($db,$_REQUEST['City8']);
$City9=mysqli_real_escape_string($db,$_REQUEST['City9']);
$City10=mysqli_real_escape_string($db,$_REQUEST['City10']);
$City11=mysqli_real_escape_string($db,$_REQUEST['City11']);
$City12=mysqli_real_escape_string($db,$_REQUEST['City12']);
$City13=mysqli_real_escape_string($db,$_REQUEST['City13']);
$City14=mysqli_real_escape_string($db,$_REQUEST['City14']);
$City15=mysqli_real_escape_string($db,$_REQUEST['City15']);
$State=mysqli_real_escape_string($db,$_REQUEST['State']);
$Province=mysqli_real_escape_string($db,$_REQUEST['Province']);
$Zip=mysqli_real_escape_string($db,$_REQUEST['Zip']);
$Country=mysqli_real_escape_string($db,$_REQUEST['Country']);
$Tel=mysqli_real_escape_string($db,$_REQUEST['Tel']);
$Cell=mysqli_real_escape_string($db,$_REQUEST['Cell']);
$Fax=mysqli_real_escape_string($db,$_REQUEST['Fax']);
$Website=mysqli_real_escape_string($db,$_REQUEST['Website']);
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

$result = mysqli_new_query("SELECT * FROM countertab",$db);
	$Itemcount = (mysql_result($result,$MyIndex,"itemcount"));
        $Itemcount++;
 
      mysqli_new_query("update countertab SET itemcount=\"$Itemcount\" ;",$db) or die("counter update failed");
$Listingno = "L" . $Itemcount;
$Paystatus = "N";

 
		
 mysqli_new_query("insert into listingstab (`tid`,`tlistingno`, `tauthcode`, `tcreatedate`, `tlastupdate`) VALUES
('$useridx', '$Listingno',  '$authcode',        Current_Timestamp,Current_Timestamp);",$db)
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
