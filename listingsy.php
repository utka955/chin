<?php
 
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
 
$MyIndex1++;
} 
$_SESSION["Desc"] = $Desc;
$_SESSION["Titledesc"] = $Titledesc;

 
$litpractice = "Practice Areas";
$litcities = "Cities Served";
$litinfo = "MORE INFORMATION";
 
include("traditional.html"); 
include("simplified.html"); 
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<HEAD>
<?php
if ($language == "chinese")
{
print "<title>" .  $City . " Chinese " .  $Titledesc . " Lawyers Attorneys Mandarin Chinese Speaking Lawyer</title>";

}
else
{
print "<title>" .  $City . " Chinese " .  $Titledesc . " Lawyers Attorneys Mandarin Chinese Speaking Lawyer</title>";
}
?>

<meta name="keywords" content="<?php echo $City ?> <?php echo $Titledesc ?> Lawyers, Chinese Lawyers, Lawyer, Mandarin, California, Cantonese, Attorney, Attorneys, Chinese Speaking, immigration, Chinese Law Firm, green cards, citizenships, work visas, investor visas, EB-5 Visas, intracompany transfer visas, student visas, fiance visas, artist and athlete visa, religious worker visa, labor certifications, re-entry permits, work permits, deportation proceedings, court representations, political asylum"> 
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
<META NAME="revisit-after" CONTENT="30 days">
<META NAME="robots" CONTENT="FOLLOW,INDEX">
<meta http-equiv="imagetoolbar" content="no">
 
<link href="commonchin.css" type="text/css" rel="stylesheet"> 
<link href="chinres.css" type="text/css" rel="stylesheet">
 
<link href="listingschin.css" type="text/css" rel="stylesheet">
  
 
<meta name="viewport" content="width=device-width"> 

 <?php  include("chinresjava.html");   ?> 

 
 
 


 

</head>
<body>

 <?php   include("topchinres.html"); 
 echo "<div style=\"max-width: 800px; margin-left: auto; margin-right: auto;\">";
?>
<div id="mainphoto"><img src="images/chineseheader.jpg" style="width: 100%; max-width: 800px"></div>

<h5 style="padding-top: 10px"> 
<?php
print $City . " Chinese "  .  $Desc . " Lawyers  ";
?>

</h5>
<?php
 
 

$passcity = $City; 
$myrand =  rand(0,4);
$mycap = $cap[$myrand];
 		
$checklist = $listingno;
$Cityx       = "%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%";
$Statex      = "%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%";
$Countryx    = "%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%";
//$Lastnamex   = "%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%";

if ($name != "")
{
$Lastnamex = $name;
}
$Titlex       = "%%%%%%%%%%%%%%%%%%%%%%%%%";
 
$thelisting   = "%%%%%%%%%"; 

if ($listingno != "")
{
    $thelisting = $listingno; 
}

if ($State == "select state")
{
    $State = "";
}

if ($State != "")
{ 
    $Statex = $State;
}

if ($Country == "select country")
{
    $Country = "";
}

if ($Country != "")
{ 
    $Countryx = $Country;
}

if ($City == "Enter a City")
{
    $City = "";
}

if ($City != "")
{ 
    $Cityx = $City;
}

if ($Title == "Select Title")
{
    $Title = "";
}


if ($Title != "")
{
    $mynum = 0;
    while ($mynum < 4)
    {

    if ($Titlex[$mynum] != "")
    {
        $Titlex[$mynum] = $Title[$mynum];
    }
     else
        {
            $mynum = 99;
         }
     $mynum++;
    }
} 

 
$spacer = "nbsp;";

 

$result = mysqli_new_query("SELECT * FROM  listingstab
  
where tstate = \"$statesh\"
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
order by RAND() ",$db) or die("cant read the listingstab" . mysql_error());


if (mysql_error() != "")
{
print "<br><span style=\"font-size: 14px; color: red\">Our site database is currently experiencing technical difficulties with the Firefox browser.  Please view our site <b>chineselawyersnetwork.com</b> 
using another internet browser such as explorer, chrome, safari, iOS, android.";
print "<Br>Error Message: " . mysql_error();
print "<br><br></span>";
exit();
}
$MyIndex = 0; 
$MyCount = 0; 

$number = mysqli_num_rows($result);
	
$num = $number - 1;

//show the results randomly

$myrand = rand(0,$num);
$showcity = str_replace("_", " ", $City);
$showstate = str_replace("_", " ", $State);




//print "<div id=\"list80\">"; 
//print "<div id=\"listcontainer\">";


 
 

 

//test only
//$number = 0;

if ($number == 0)

		{

 

print "<div id=\"formarea\">";
echo "<P  style=\"line-height: 150%; text-align: center; margin-top: 25px\">
Our professional directory does not list a Chinese lawyer in this category for the city you
 searched. ";
 
 

 
 
 
 
print "</div></div></div>";


 }
$MyIndex = $myrand;

while ($MyCount < $number)
      
    { 
       
          include("listingfields.php");  



//table being used for tabular data
echo "<table cellspacing=0 cellpadding=0 border=0 bordercolor=blue><tr><td colspan=3>";
 echo "<div id=\"grayheader\" style=\"vertical-align: middle;\">";   
	 echo  $Company . " - "  . $Fname . " " . $Lname . "</div>";
echo "<div id=\"grayheadersm\" style=\"vertical-align: middle;\">";   
	 echo  $Company . "<br>"  . $Fname . " " . $Lname . "</div>";
echo "</td></tr>";

echo "<Tr><Td valign=top width=30% align=center>";
 

 


	 echo "<div id=\"list1a\">";
		 
		
       
        
         
 
	 echo 
                      "<img src=listingphotos/$Listingno/$Photo width=127px  class=listingphoto
                      style=\"margin-right: 10px; 
		         border: solid; border-width: 4px; border-color: silver\">";
$MyIndex2 = 0;
 
 

 

	if ($Logo != "")
	    {
		   echo "<img src=listingphotos/$Listingno/$Logo width=131px style=\"margin-top: 15px\" class=listingphoto>";
            }
  else
           {
                echo "<img src=images/space.gif  class=listingphoto border=0 style=\"width: 131px; height: 1px; border: none; margin: 0\">";
   
           }
                  
 
 
               

 		    
print "</div></td><td colspan=2><div id=\"list2a\" style=\"text-align: left\">	";   		
		   
		   		  
if ($Lname != "")
{ 
echo $Fname . " " . $Lname . "<br>";
}
 echo "<b>Lawyer</b>"; 

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
$Spanish = (mysql_result($result1,$MyIndex1,"pspanish"));
 
$thename =  $Capsname;
$printdesc = $Desc;
$thename =  $Capsname;
//print "<Br>******************Lang=" . $language;

if ($language == "simplified")
{
$printdesc = $simplified[$Desc];
}
if ($language == "traditional")
{
$printdesc = $simplified[$Desc];
}
// print "<br>name=" . $$thename . " caps=" . $Capsname;
 
if ($$thename == "Y")
{
 
if ($language == "spanish")
{
print "<br>" . $Spanish;
}
else
{
print "<br>" . $printdesc;
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

                         $filename = $mycity . "-abogado-" . $mydesc . "-" . $myno . ".html";
  

                        if (file_exists($filename)) 
                            {
 
                            echo "<p style=style=\"margin-top: 0px\"  class=red><a href=\"$filename?thelisting=$Listingno&Passcity=$Passcity&language=$language\" style=\"font-size: 14px; color: red\"><B>In CHinese</b></a>";
                            }
                        else
                            {
 
                            echo "<p style=style=\"margin-top: 0px\"  class=red><a href=\"showindspx.php?thelisting=$Listingno&Passcity=$Passcity&language=$language\" style=\"font-size: 14px; color: red\">
<B>In Chinese</b></a>";
                            }
                      }
                  else
                      {
                        echo "<p style=\"margin-top: 0px\"><font color=red><B>In Chinese</b></font>";
                      } 
                              
		               //   echo "<p style=\"margin-top: 10px\">";
		  		//  echo $Company . "<br>";
		                //  echo $Address . "<br>";
		  
 

        
		
	 	
		echo "<p><b>$litcities</b><br>";
                If ($City != "")
		{
		echo  $City; 
		}
                If ($City1 != "")
		{
		echo ", " . $City1;
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

		 
		  echo "</div><div id=list3a  style=\"text-align: left\">";
		  echo "<b>TEL:</b> " .  $Telephone;
		  if ($Fax != "")
                  {
	    	  echo "<Br><b>FAX:</b> " .  $Fax;
                  }
		  
		  if ($Website != "")
		  {
	                 echo "<Br><a href=$Website target=_blank><img src=images/website1.jpg  width=100px style=\"margin-top: 3px; margin-bottom: 3px\" border=0></a>";

		  }

 

   $Passfirst = str_replace(" ", "_", $Fname);
  $Companyq = str_replace(" ", "_", $Company);
                  list($part1,$part2)= split ('@',$userid,50);  
   		  $Fname = str_replace(" ", "_", $Fname);
   		  $Lname = str_replace(" ", "_", $Lname);
   		  $Fname = str_replace("'", "@", $Fname);
   		  $Lname = str_replace("'", "@", $Lname);
   		  $Fname = str_replace("&", "*", $Fname);
//  print "<br>first=" . $Passfirst . " Last=" . $Lname . " part1=" . $part1 . " part2=" . $part2;
  echo "<Br><a href=contact.php?part1=$part1&First=$Passfirst&Last=$Lname&part2=$part2>
				   <img src=images/contact1.jpg  width=100px style=\"margin-top: 3px; margin-bottom: 3px\" border=0></a>";
		 
		
 
                  if ($Facebook != "")
		  {
		     echo "<p style=\"margin-top: 10px\"><b><a href=$Facebook target=_blank><img src=images/facebook.jpg border=0
		  	   style=\"margin-top: 5px; margin-bottom: 5px\"></b></a>";

		  }
               
                  $mycity = str_replace(" ", "-", $City);
                  $myno = str_replace("L", "", $Listingno);
 
                  $myno = $myno;
                $filename = $mycity . "-chinese-" . $mydesc . "-lawyer-" . $myno . ".html";

if (file_exists($filename)) 
{
   echo "</p style=\"letter-spacing: 1px\"><a href=\"$filename?thelisting=$Listingno&Passcity=$Passcity&Cityz=$passcity&language=$language\" style=\"font-size: 14px; color: #152560\"><B>$litinfo</b></a>";
}
else
    {
        echo "</p style=\"letter-spacing: 1px\"><a href=\"showindx.php?thelisting=$Listingno&Passcity=$Passcity&Cityz=$passcity&language=$language\" 
style=\"font-size: 14px; color: #152560\"><B>$litinfo</b></a>";
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
  echo  " " . $Zip . "<br>";


print "<Br><br>";
echo "</div>";
echo "</td></tr></table>";
		  
		 $MyIndex ++;
		 if ($MyIndex > $num)
		     {
		     $MyIndex = 0;
		     }
		 $MyCount ++;

		 }
		 
		
 ?>
</div></div></div></div></div> 
<?php
$footermargin = "10px";
 include("botchinres.html");   ?>

</body></html>
