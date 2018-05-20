<?php
session_start();
$level = "all";
include("chinesedbconnect.html"); 
$Listingno=mysqli_real_escape_string($db,$_REQUEST['Listingno']);
?>
<html>

<HEAD>
<TITLE>Chinese Lawyers Network - Select</TITLE>
<META 
content="Chinese Lawyers Networtk" 
name=DESCRIPTION>
<META 
content="Chinese Lawyers Network" 
name=KEYWORDS>
<meta http-equiv="imagetoolbar" content="no">
 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<META name="ROBOTS" content="NOINDEX,NOFOLLOW"> 

<link href="css/chinese.css" type="text/css" rel="stylesheet"></head>
<body>
  
 <?php include("admintop.html");  ?>


		 
		 
 
</Td></tr></table>
</td>
<td width="650px" bgcolor="white" valign="top" style="padding: 0 20px 0 20px" align="left">
<center><?php include("checklogon.php");  ?>

<table cellpadding="0" cellspacing="0" border="0" bordercolor="Red" class="listingsbox" width="800px">
<?php
$checklist = $Listingno;
$Listingnoc = "%%%%"; 
IF ($Listingno != "")
    {
        $Listingnoc = $Listingno; 
    }
$spacer = "nbsp;";
if ($auth == "G")
    {
        echo "<Br>Authorization Level=G";
        $result = mysqli_new_query("SELECT * FROM  listingstab
           where tlistingno like \"$Listingnoc\"
           and tauthcode like \"Y\" 
           order by tcreatedate DESC",$db) or die("cant read it");
    }
if ($auth == "A")
    {
        echo "<Br>Authorization Level=A";
        $result = mysqli_new_query("SELECT * FROM  listingstab
          where tlistingno like \"$Listingnoc\"
          order by tcreatedate DESC",$db) or die("cant read it");
    }
 $MyIndex = 0; 
 $number = mysqli_num_rows($result);
 print "<Br>num=" . $number;
 while ($MyIndex < $number)
      
    { 
       
         include("listingfields.php");  


 
		  echo "<tr height=10px><td colspan=3></td></tr>";
                  echo "<tr><Td colspan=3 valign=top bgcolor=silver width=100% style=\"margin-top: 5px; padding: 2 10 2 10; font-weight: bold\">";
		  echo  "No: " . $Listingno . " - " . $Company . " - "  . $Fname . $Lname;
                  echo " -- <a href=delete.php?listingno=$Listingno>DELETE</a>&nbsp;&nbsp;&nbsp;";
if ($auth == "A")
{
                  echo "    <a href=updatelisting89.php?Listingno=$Listingno>EDIT 1</a>&nbsp;&nbsp;&nbsp;";
}
else
{
echo "    <a href=updatelisting3.php?Listingno=$Listingno>EDIT 1</a>&nbsp;&nbsp;&nbsp;";
}
                  echo "    <a href=updatelisting2.php?Listingno=$Listingno>EDIT 2</a>&nbsp;&nbsp;&nbsp;";
                  echo "    <a href=loadphotos.php?Listingno=$Listingno>PHOTOS</a>&nbsp;&nbsp;&nbsp;";


                  echo " " . $Listingno;
                  echo "   AUTH=" . $Authcode;
		  echo "<tr height=5px><td colspan=3></td></tr>";

	          echo "</td><td></td><tr>";
		  echo "<Td width=180px valign=top>";
		  echo "<img src=listingphotos/$Listingno/$Photo width=127px>";
		  if ($Logo != "")
		   {
		   	 echo "<Br><img src=listingphotos/$Listingno/$Logo  width=170px style=\"margin-top: 5px\">";
		   }
		   		 

		   echo "</td>";
		   echo "<Td  width=225px valign=Top>";
		   echo "<b>Practice: </b>  <Br>";
                        $result1 = mysqli_new_query("SELECT * FROM  practicetab
 
order by pseq",$db) or die("cant read it");
 $MyIndex1 = 0; 
 $number1 = mysqli_num_rows($result1);
 
while ($MyIndex1 < $number1)
      
{
  $Shortname = (mysql_result($result1,$MyIndex1,"pshortname"));
  $Desc = (mysql_result($result1,$MyIndex1,"pdesc"));
  $Pagename = (mysql_result($result1,$MyIndex1,"ppagename"));
  $Capsname = (mysql_result($result1,$MyIndex1,"pcapsname"));
  $Seq = (mysql_result($result1,$MyIndex1,"pseq"));
 $Chinese = (mysql_result($result1,$MyIndex1,"pchinese"));
$thename =  $Capsname;
 // print  "<Br>value=" . $$thename . " capsname=" . $Capsname;
if ($$thename == "Y")
{
if ($language == "chinese")
{
print "<br>" . $Chinese;
}
else
{
print "<br>" . $Desc;
}
}
$MyIndex1++;

 }
 
echo "<br><br>";
		   echo "<b>Company Address</b><br>";
		   echo $Address . "<br>";
		  if ($Address2 != "")
		  {
		  
		  echo $Address2 . "<br>";
		  }


		  echo $City;
                  if ($State != "select state")
                       {
                            echo  ", " . $State; 
                       }
                  if ($Country != "select country")
                       {
                           if ($Country != "")
                           {
                                echo  "<Br>" . $Country; 
                            }
                        }
                echo  $Zip . "<br>";
		If ($City1 != "")
	      {
		echo "<b><span style=\"margin-top: 5px\"><Br>Other Cities Served</b>";
		echo "<Br>" . $City1; 
		}
		If ($City2 != "")
		{
		echo "<Br>" . $City2;
		}
				
		If ($City3 != "")
		{
		echo "<Br>" . $City3;
		}
		
		If ($City4 != "")
		{
		echo "<Br>" . $City4;
		}
		
		If ($City5 != "")
		{
		echo "<Br>" . $City5;
		}
		
		If ($City6 != "")
		{
		echo "<Br>" . $City6;
		}
		
		If ($City7 != "")
		{
		echo "<Br>" . $City7;
		}
		
		If ($City8 != "")
		{
		echo "<Br>" . $City8;
		}
		
		If ($City9 != "")
		{
		echo "<Br>" . $City9;
		}
		
		If ($City10 != "")
		{
		echo "<Br>" . $City10;
		}
		
		If ($City11 != "")
		{
		echo "<Br>" . $City11;
		}
		
		If ($City12 != "")
		{
		echo "<Br>" . $City12;
		}
		
		If ($City13 != "")
		{
		echo "<Br>" . $City13;
		}
		
		If ($City14 != "")
		{
		echo "<Br>" . $City14;
		}
		
		If ($City15 != "")
		{
		echo "<Br>" . $City15;
		}

		  echo "</td><td width=245px valign=Top>";
		  echo "TEL: " .  $Telephone;
		  	 
		  echo "<Br>FAX: " .  $Fax;
		  echo "<Br>Email: " .  $userid;
		  echo "<Br>Website: " .  "<a href=$Website target=_blank>" . $Website . "</a>";
 
//echo "</p style=\"letter-spacing: 1px\"><a href=\"showind.php?thelisting=$Listingno\" target=_blank><B>MORE INFO</b></a>";


		  echo "</td></tr>";
		  echo "<tr height=5px><td colspan=3></td></tr>";
		  echo "<tr><td colspan=3>";
		  echo  "<b>BIO: </b>" . utf8_encode($Bio);
		    echo  "<Br><Br><b>Chinese BIO: </b>" . utf8_encode($Chinesebio);
		  echo "</td></tr>";

echo "<tr height=15px><td colspan=3></td></tr>";
		 $MyIndex ++;
		 }
		 
		
		 ?>
</td></tr></table></center>
</Td>
</tr></table>
</center>
<body>
</body>
</html>
