<?php 
include("chinesedbconnect.html"); 
//sql injection protection
$Fname=mysql_real_escape_string($_REQUEST['Fname']);
$Lname=mysql_real_escape_string($_REQUEST['Lname']);
$useridx=mysql_real_escape_string($_REQUEST['useridx']);
$userid=mysql_real_escape_string($_REQUEST['userid']);
 
$itemcount=mysql_real_escape_string($_REQUEST['itemcount']);
$returnto=mysql_real_escape_string($_REQUEST['returnto']);
$listingno=mysql_real_escape_string($_REQUEST['listingno']);
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
$Stateover=mysql_real_escape_string($_REQUEST['Stateover']);
$Province=mysql_real_escape_string($_REQUEST['Province']);
$Stateover=mysql_real_escape_string($_REQUEST['Stateover']);
$Zip=mysql_real_escape_string($_REQUEST['Zip']);
$Country=mysql_real_escape_string($_REQUEST['Country']);
$Tel=mysql_real_escape_string($_REQUEST['Tel']);
$Cell=mysql_real_escape_string($_REQUEST['Cell']);
$Fax=mysql_real_escape_string($_REQUEST['Fax']);
$Website=mysql_real_escape_string($_REQUEST['Website']);
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
 
mysql_query("update listingstab 
SET 
taddress = \"$Address\",
taddress2 = \"$Address2\",
tlname = \"$Lname\",
tfname = \"$Fname\",
tid = \"$useridx\",
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
