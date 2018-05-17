
<?php

//session_start();
 include("chinesedbconnect.html"); 
 
$searchparm = $HTTP_GET_VARS['searchparm']; 
//added these
$City = $HTTP_GET_VARS['City']; 
$statesh = $HTTP_GET_VARS['statesh']; 
//end add
$Cityx       = "%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%";
if ($City != "")
     { 
    $Cityx = $City;
     }

$Passcity = $City;


 if ($parm == "")
{
$parm = substr($searchparm, 1);
}


 $result1 = mysqli_new_query("SELECT * FROM  practicetab
 where pshortname = \"$parm\"
order by RAND()",$db) or die("cant read practice table" . mysql_error());
$MyIndex1 = 0; 
$number1 = mysqli_num_rows($result1);
 
 
while ($MyIndex1 < $number1)
      
{
  $Shortname = (mysql_result($result1,$MyIndex1,"pshortname"));
  $Desc = (mysql_result($result1,$MyIndex1,"pdesc"));
  $Pagename = (mysql_result($result1,$MyIndex1,"ppagename"));
  $Capsname = (mysql_result($result1,$MyIndex1,"pcapsname"));
  $Capsname = (mysql_result($result1,$MyIndex1,"pcapsname"));
   $Titledesc = (mysql_result($result1,$MyIndex1,"ptitledesc"));
$Chinese = (mysql_result($result1,$MyIndex1,"pchinese"));
if ($language == "chinese")
{
$Titledesc = (mysql_result($result1,$MyIndex1,"pchinese"));
}
$MyIndex1++;
} 
$_SESSION["Desc"] = $Desc;
$_SESSION["Titledesc"] = $Titledesc;

if ($language == "chinese")
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
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><?php
if ($language == "chinese")
{
print "<title>" .  $City . " Chinese " .  $Titledesc . " Lawyers Attorneys Mandarin Chinese Speaking Lawyer</title>";

}
else
{
print "<title>" .  $City . " Chinese " .  $Titledesc . " Lawyers Attorneys Mandarin Chinese Speaking Lawyer</title>";
}
?>

<meta name="keywords" content="<?php echo $City ?> <?php echo $Titledesc ?> y Lawyers, Chinese Lawyers, Lawyer, Mandarin, California, Cantonese, Attorney, Attorneys, Chinese Speaking, immigration, Chinese Law Firm, green cards, citizenships, work visas, investor visas, EB-5 Visas, intracompany transfer visas, student visas, fiance visas, artist and athlete visa, religious worker visa, labor certifications, re-entry permits, work permits, deportation proceedings, court representations, political asylum"> 
<?php
if ($language == "chinese")
{
print "<meta name=\"description\" content=\"" . $City . " Chinese " . $Titledesc . " lawyers. Contact chinese speaking lawyers who are advocates of your goals.\">";
}
else
{
print "<meta name=\"description\" content=\"" . $City . " Chinese " . $Titledesc . " lawyers. Contact chinese speaking lawyers who are advocates of your goals.\">";
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="revisit-after" content="30 days">
<meta name="robots" content="FOLLOW,INDEX">
 

<link href="css/chinese.css" type="text/css" rel="stylesheet">
</head>
<?php include("chinesetop.html"); ?>

 
 
 
  
<table align="center" border="0" bordercolor="red" width="600px" class="listingsbox" style="line-height: 110%">
<tr><td colspan="3" nowrap><H2 style="text-align: center">



<?php
if ($language != "chinese")
{
print $City . " Chinese "  .  $Desc . " Lawyers  ";
}
else
{
print $City . "  Hispano de "  .  $Chinese;
}


?>

</h2></td></tr>

   
   <?php

$result = mysqli_new_query("SELECT * FROM  listingstab
  
where tcountry = \"$statesh\"
 and $searchparm = \"Y\"
 and ((tcity like \"$Cityx\")
 or (tcity1 like \"$Cityx\")
 or (tcity2 like \"$Cityx\")
 or (tcity3 like \"$Cityx\")
 or (tcity4 like \"$Cityx\")
 or (tcity5 like \"$Cityx\")
 or (tcity6 like \"$Cityx\")
 or (tcity7 like \"$Cityx\")
 or (tcity8 like \"$Cityx\")
 or (tcity9 like \"$Cityx\")
 or (tcity10 like \"$Cityx\")
 or (tcity11 like \"$Cityx\")
 or (tcity12 like \"$Cityx\")
 or (tcity13 like \"$Cityx\")
 or (tcity14 like \"$Cityx\")
 or (tcity15 like \"$Cityx\"))
order by RAND() ",$db) or die("cant read it" . mysql_error());

 

$prevcity = "";
$MyIndex = 0; 
 $number = mysqli_num_rows($result);
 
 if ($number == 0)
{
echo "<tr><td class=textmsg><Br>We do not list any chinese lawyers in this state.  <Br>
To add your legal services to this page click <a href=\"http://www.chineselawyersnetwork.com/join.htm\">Lawyers Join</td></tr></a>";
}
 while ($MyIndex < $number)
      
    { 

         include("listingfields.php");  
 

		 echo "<tr height=10px>
                   <td colspan=3>
                   </td>
               </tr>";
		 
		
         echo "<tr>
                   <Td colspan=3 valign=top bgcolor=silver width=100% 
                   style=\"margin-top: 5px; padding: 4 10 4 10; font-weight: bold; font-size: 14px\">";
	 echo  $Company . " - "  . $Fname . " " . $Lname;
     
         echo   
                     "</td>
                </tr>";
	 echo 
                "<tr height=5px>
                   <td colspan=3>
                   </td>
               </tr>";

	 echo 
                 "<tr>";
	 echo 
                     "<Td width=10% valign=top>";
	 echo 
                      "<img src=listingphotos/$Listingno/$Photo width=127px 
                      style=\"margin-right: 3px; filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=3, OffY=3, Color='black');
		         border: solid; border-width: 4px; border-color: silver\">";
	if ($Logo != "")
	    {
		   echo "<Br><img src=listingphotos/$Listingno/$Logo  style=\"margin-top: 5px; margin-right: 10px; width: 140px\">";
            }
		   echo "</td>";
		   echo "<Td  width=46% valign=Top>";

		   echo "<Table cellspacing=0 cellpadding=0 border=0 class=listingsbox width=100% style=\"line-height: 110%\"><tr>";
		   		
		   echo "<Td  width=50% valign=Top style=\"padding-right: 7px\">";
		   		 
                                  echo $Fname . " " . $Lname;
                                  echo "<Br><b>Lawyer</b>"; 
                                  echo "<p style=\"margin-top: 5px\"><b>$litpractice: </b>";

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
 
 
 
                  if ($Chinesebio != "")
                      {
                         $mycity = str_replace(" ", "-", $City);
                         $myno = str_replace("L", "", $Listingno);
 
                         $myno = $myno;
                
                         $mydesc = str_replace(" ", "-", $Desc);
                         $mydesc = strtolower($mydesc);

                         $filename = $mycity . "--" . $mydesc . "-" . $myno . ".html";
  

                        if (file_exists($filename)) 
                            {
 
                            echo "<p style=style=\"margin-top: 0px\"  class=red><a href=\"$filename?thelisting=$Listingno&Passcity=$Passcity\" style=\"font-size: 14px; color: red\"><B>In CHinese</b></a>";
                            }
                        else
                            {
 
                            echo "<p style=style=\"margin-top: 0px\"  class=red><a href=\"showindsp.php?thelisting=$Listingno&Passcity=$Passcity\" style=\"font-size: 14px; color: red\"><B>In Chinese</b></a>";
                            }
                      }
                  else
                      {
                        echo "<p style=\"margin-top: 0px\"><font color=red><B>我们讲中文</b></font>";
                      } 

		         
                                  echo "<p style=\"margin-top: 10px\">";
		  		  echo $Company . "<br>";
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
 
if ($Country == "select state")
{
$Country = "select country";
}
if ($Country != "select country")
{
    if ($Country != "")
    {
             echo  "<Br>" . $Country; 
    }
    }
  echo  " " . $Zip . " ";
  echo "<p style=\"margin-top: 5px\"><b>$litcities</b><Br>";   
  echo $City;    
		If ($City1 != "")
		{
		echo ", ";
		echo  $City1; 
		}
		If ($City2 != "")
		{
		echo ", " . $City2;
		}
				
		If ($City3 != "")
		{
		echo ", " . $City3;
		}
		
		If ($City4 != "")
		{
		echo ", " . $City4;
		}
		
		If ($City5 != "")
		{
		echo ", " . $City5;
		}
				If ($City6 != "")
		{
		echo ", " . $City6;
		}
		If ($City7 != "")
		{
		echo ", " . $City7;
		}
		If ($City8 != "")
		{
		echo ", " . $City8;
		}
		If ($City9 != "")
		{
		echo ", " . $City9;
		}
		If ($City10 != "")
		{
		echo ", " . $City10;
		}
		If ($City11 != "")
		{
		echo ", " . $City11;
		}
		If ($City12 != "")
		{
		echo ", " . $City12;
		}
		If ($City13 != "")
		{
		echo ", " . $City13;
		}
		If ($City14 != "")
		{
		echo ", " . $City14;
		}
		If ($City15 != "")
		{
		echo ", " . $City15;
		}

		
		  echo "</td><td width=43% valign=Top>";
		  echo "<b>TEL:</b> " .  $Telephone;
		  
		  echo "<Br><b>FAX:</b> " .  $Fax;
		  
		  if ($Website != "")
		  {
	              echo "<Br><a href=$Website target=_blank><img src=images/website1.jpg  width=100px style=\"margin-top: 3px; margin-bottom: 3px\" border=)></a>";

		  }
		 
		  $Companyq = str_replace(" ", "_", $Company);
                  list($part1,$part2)= split ('@',$userid,50);  
   		  $Fname = str_replace(" ", "_", $Fname);
   		  $Lname = str_replace(" ", "_", $Lname);
   		  $Fname = str_replace("'", "@", $Fname);
   		  $Lname = str_replace("'", "@", $Lname);
   		  $Fname = str_replace("&", "*", $Fname);


  		  echo "<Br><a href=contact.php?part1=$part1&First=$Fname&Last=$Lname&part2=$part2>
				   <img src=images/contact1.jpg  width=100px style=\"margin-top: 3px; margin-bottom: 3px\" border=)></a>";
                
               
                  $mycity = str_replace(" ", "-", $City);
                  $myno = str_replace("L", "", $Listingno);
 
                  $myno = $myno;
                
                  $mydesc = str_replace(" ", "-", $Desc);
                  $mydesc = strtolower($mydesc);

 
                  $filename = $mycity . "-chinese-" . $mydesc . "-lawyer-" . $myno . ".html";

$passcitynoblank = $Passcity;
$passcitynoblank = str_replace(" ", "%20", $passcitynoblank);  
if (file_exists($filename)) 
{
   echo "<p style=\"letter-spacing: 1px; margin-top: 10px\"><a href=\"$filename?thelisting=$Listingno&Passcity=$passcitynoblank\" style=\"font-size: 14px; color: #152560;\"><B>$litinfo</b></a>";
}
else
    {
        echo "<p style=\"letter-spacing: 1px; margin-top: 10px\"><a href=\"showind.php?thelisting=$Listingno&Passcity=$passcitynoblank\" style=\"font-size: 14px; color: #152560;\"><B>$litinfo</b></a>";
    }


		  echo "</td></tr>";
		  if ($number == 1)
                      {
                          echo "<tr height=25px><td colspan=2></td></tr>";
                      }
		 
		    echo "<tr><td colspan=2><Br>";
		 
		    echo "</td></tr>";
	
                 echo "</table>";
		 $MyIndex ++;
		
		 $MyCount ++;

		 }
		 
		
		 
 
 
 
?>
  
  </td></tr>
 </table>

      
    </td></tr>
 </table>


</body> 