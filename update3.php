<?php 
include("chinesedbconnect.html"); 
//sql injection protection
$Fname=mysqli_real_escape_string($db,$_REQUEST['Fname']);
$Lname=mysqli_real_escape_string($db,$_REQUEST['Lname']);
//$useridx=mysqli_real_escape_string($db,$_REQUEST['useridx']);
$userid=mysqli_real_escape_string($db,$_REQUEST['userid']);
 
$itemcount=mysqli_real_escape_string($db,$_REQUEST['itemcount']);
$returnto=mysqli_real_escape_string($db,$_REQUEST['returnto']);
$listingno=mysqli_real_escape_string($db,$_REQUEST['listingno']);
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
$Stateover=mysqli_real_escape_string($db,$_REQUEST['Stateover']);
$Province=mysqli_real_escape_string($db,$_REQUEST['Province']);
$Stateover=mysqli_real_escape_string($db,$_REQUEST['Stateover']);
$Zip=mysqli_real_escape_string($db,$_REQUEST['Zip']);
$Country=mysqli_real_escape_string($db,$_REQUEST['Country']);
$Tel=mysqli_real_escape_string($db,$_REQUEST['Tel']);
$Cell=mysqli_real_escape_string($db,$_REQUEST['Cell']);
$Fax=mysqli_real_escape_string($db,$_REQUEST['Fax']);
$Website=mysqli_real_escape_string($db,$_REQUEST['Website']);
$Company=$_REQUEST['Company']; 
If ($Stateover == "")
{
$Stateover = $State;
}
 
$passwordwas = $password;
if ($Bionew != "")
{
    $Bio = $Bionew;
}

if ($province != "select state")
{
    if ($province != "")
    {
        $State = $province;
    }
}
 
mysqli_new_query("update listingstab 
SET 
taddress = \"$Address\",
taddress2 = \"$Address2\",
tlname = \"$Lname\",
tfname = \"$Fname\",
 
tcity = \"$City\",
tcity1 = \"$City1\",
tcity2 = \"$City2\",
tcity3 = \"$City3\",
tcity4 = \"$City4\",
tcity5 = \"$City5\",
tcity6 = \"$City6\",
tcity7 = \"$City7\",
tcity8 = \"$City8\",
tcity9 = \"$City9\",
tcity10 = \"$City10\",
tcity11 = \"$City11\",
tcity12 = \"$City12\",
tcity13 = \"$City13\",
tcity14 = \"$City14\",
tcity15 = \"$City15\",
tstate = \"$State\",
tcountry = \"$Country\",
twebsite = \"$Website\",
tstateover = \"$Stateover\",
tzip = \"$Zip\",
ttel = \"$Tel\",
tcell = \"$Cell\",
tfax = \"$Fax\",
tcompany = \"$Company\"

where tlistingno = \"$Listingno\";") or die("Update 1 failed"); 
    print  "<META http-equiv=\"refresh\" content=\"0;url=selectchinese.php?Listingno=$Listingno&printmess=$printmess,&userid=$userid&;\">";
 ?>    
