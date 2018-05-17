<?php
include("traditional.html"); 
include("simplified.html"); 


 echo "<div style=\"max-width: 800px; margin-left: auto; margin-right: auto; text-align: left\">";
 
   
 
$litpractice = "Practice Areas";
$litcities = "Cities Served";
$litinfo = "MORE INFORMATION";
 
if ($Cityz == "")
{
$Cityz = $Passcity;
}
 
echo "<p class=smalltopline>" . $Cityz .  " Lawyer";
  
echo "<div id=\"grayheader\">";   
	 echo  $Company . " - "  . $Fname . " " . $Lname . "</div>";

echo "<div id=\"grayheadersm\">";   
	 echo  $Company . "<Br>"  . $Fname . " " . $Lname . "</div>";

	 echo "<div id=\"list1\" style=\"min-height: 10px; padding-right: 3px; \">";


if ($number == 0)
		{
		echo "<Br><Br>No results are avalable for your search.<br>Please click CONTACT on our menu bar and send to us a referral request";
		}  
$MyIndex = 0;

//the database was read prior to the headers in showindtop

 while ($MyCount < $number)
      
    { 
       
 

	     $First = $Fname;
	     $Last = $Lname;

		  
	  
		   
		   echo "<img src=listingphotos/$Listingno/$Photo width=127px  class=listingphoto style=\"margin-right: 10px;  
		   border: solid; border-width: 4px; border-color: silver\">";
		   
	if ($Logo != "")
	    {

 
		   echo "<img src=listingphotos/$Listingno/$Logo width=131px class=listingphoto style=\"margin-top: 15px\">";
            }
                   
                

                 echo "</div>";
           echo "<table cellspacing=0 cellpadding=0 border=0 bordercolor=blue><tr><Td width=\"50%\"  valign=\"top\"><div  id=\"list2\">";
  	          
		 
                  echo $Fname . " " . $Lname;
                  echo "<Br><b>Lawyer</b>"; 
                    echo "<p style=\"margin-top: 5px\"><b>$litpractice: </b>";
                    $result1 = mysql_query("SELECT * FROM  practicetab
 
order by pseq",$db) or die("cant read it");
 $MyIndex1 = 0; 
 $number1 = mysql_numrows($result1);
 
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
 
 
 
if ($language == "simplified")
{
$printdesc = $simplified[$Desc];
}
if ($language == "traditional")
{
$printdesc = $traditional[$Desc];
}
  
 
if ($$thename == "Y")
{
 
print "<br>" . $printdesc;
 
}
$MyIndex1++;

 }         

 if ($inchinese != "y")
{
     echo "<p style=\"margin-top: 10px\"><font color=red><B>" . $showchinese . "</b></font>";
}
              echo "<p><b>$litcities</b><br>";
        
		 If ($City != "")
		{
		echo  $City; 
		}
                If ($City1 != "")
		{
		echo ", " . $City1;
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

		 
	       

               echo "</div><div  id=\"list3\">";
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

	        echo "<Br><a href=#contact onclick=\"hidemenu()\">
	      	       <img src=images/contact1.jpg  width=100px style=\"margin-top: 3px; margin-bottom: 3px\" border=0></a>";
               if ($Facebook != "")
		  {
                       echo "<Br><b><a href=$Facebook target=_blank><img src=images/facebook.jpg border=0
		 	   style=\"margin-top: 5px; margin-bottom: 5px\"></b></a>";
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
	 
            echo "</div></td></tr></table><div id=\"list4\">";
if ($language != "english")
{
echo $Chinesebio;
}
else
{
echo $Bio;
}
           
	     
	   

 


echo "<p>";

//echo "<p><a href=\"ranking.php?listingno=$Listingno\"><b>Rate this Agent and Provide a Review</b></a>";
		 
	      if ($Twitter != "")
		{
		
		 
 
echo "<a href=\"http://twitter.com/$Twitter\" id=\"twitter-link\"><center><img style=\"margin-top: 0px\" src=images/twitterlogo.jpg border=0></a></center>
<Br>
";
	}

 
echo "</div></table>";
		 $MyIndex ++;
		 if ($MyIndex > $num)
		 {
		     $MyIndex = 0;
		 }
		 $MyCount ++;

		 }
		 
		
		 

 

 
?>
<div id=myform>		 
<a name=contact></a>
 
<form id="frmCaptcha" name="frmCaptcha">
<INPUT TYPE="hidden" NAME="oops" VALUE="http://www.chineselawyersnetwork.com/contact,php">
<INPUT TYPE="hidden" NAME="location" VALUE="http://www.chineselawyersnetwork.com/thanks.html">
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
<p><B>Contact <?php echo $Name ?> </b>
<?php echo $mess ?>
<p>Your Name
<p><INPUT NAME="txtName" id="txtName" TYPE="TEXT" SIZE="35" MAXLENGTH="100">
<p>E-mail:&nbsp;</TD>
<p><INPUT NAME="signerx_email"  id="signerx_email" TYPE=TEXT SIZE="35" MAXLENGTH="100">
<p>Phone:
<p><INPUT NAME="tel" TYPE=TEXT SIZE="35" MAXLENGTH="100">
<p>Best Time to Call:<p><INPUT NAME="best" TYPE=TEXT SIZE="35" MAXLENGTH="100">
<p>Message:
<p><textarea name="message" rows="3" cols="35" align="left">
</textarea>
<p>
		 
					<label for="captcha">Enter security code</label>
				<p>
					<input id="txtCaptcha" type="text" name="txtCaptcha" value="" maxlength="5" size="5" />
				<p>
					<img id="imgCaptcha" src="create_image.php" />
				<p>
						<input id="btnCaptcha" style="background-color: #152560; letter-spacing: 3px; height: 45px; color: white;font-size: 16px;padding: 10px 10px 10px 10px; border: none" type="button" value="SUBMIT" name="btnCaptcha" 
				
						onclick="getParam(document.frmCaptcha)" />
				<p> 

		<div id="result" style="text-align: center">&nbsp;</div>
	</form>
 
</div>
</div>
</div>
</div>
 
 </div>
 <?php 
$footermargin = "20px";
 include("bothispres.html");   ?>
