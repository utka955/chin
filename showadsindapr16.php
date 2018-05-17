
<?php
if ($language == "chinese")
{
$litpractice = "Area of Practice";
$litcities = "Cities";
$litinfo = "MORE INFORMATION";
}
else
{
$litpractice = "Practice Areas";
$litcities = "Cities Served";
$litinfo = "MORE INFORMATION";
}

$spacer = "nbsp;";
if ($language != "chinese")
{
echo "<tr><td colspan=2><b><p class=listingshead style=\"text-indent: 0px; margin-top: 5px\"><font color=gray>" . $Passcity .  " Lawyer</font></b>";
}
else
{
echo "<tr><td colspan=2><b><p class=listingshead style=\"text-indent: 0px; margin-top: 5px\"><font color=gray>" . $Passcity .  " </font></b>";
}

if ($number == 0)
		{
		echo "<Br><Br>No results are avalable for your search.<br>To add your legal services to this page in up to 16 cities click <a href=join.htm>Lawyers Join</a>";
		}

echo "</td></tr>";
$MyIndex = 0;

//the database was read prior to the headers in showindtop

 while ($MyCount < $number)
      
    { 
       
              include("listingfields.php");  
	     $First = $Fname;
	     $Last = $Lname;

		   echo "<tr height=10px><td colspan=2></td></tr>";
	           echo "<tr><Td colspan=2 valign=top bgcolor=silver width=100% style=\"margin-top: 5px; padding: 4 10 4 10; font-weight: bold; font-size: 14px\">";
	           echo  $Company . " - "  . $Fname . " " . $Lname;
		   echo "<tr height=5px><td colspan=2></td></tr>";
		   echo "<tr>";
		   echo "<Td width=147px valign=top>";
		   echo "<img src=listingphotos/$Listingno/$Photo width=127px style=\"margin-right: 10px; filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=3, OffY=3, Color='black');
		   border: solid; border-width: 4px; border-color: silver\">";
		   if ($Logo != "")
		   {
		       echo "<img src=listingphotos/$Listingno/$Logo  style=\"margin-top: 15px; margin-right: 10px; width: 140px\">";
                    }	
	
                  echo "</td>";
	          echo "<Td  width=460px valign=Top>";
  	          echo "<Table cellspacing=0 cellpadding=0 border=0 class=listingsbox width=100%><tr>";
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
 $Spanish = (mysql_result($result1,$MyIndex1,"pchinese"));
$thename =  $Capsname;
 
if ($$thename == "Y")
{
if ($language == "chinese")
{
print "<br>" . $Spanish;
}
else
{
print "<br>" . $Desc;
}
}
$MyIndex1++;

 }
 
                  echo "<p style=\"margin-top: 10px\"><font color=red><B>" . $wespeackchinese . "</b></font>";


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
        
	  echo "<p style=\"margin-top: 10px\"><B>$litcities</b><br>";
                echo  $City; 
		If ($City1 != "")
		{
		
		echo  ", " . $City1; 
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

		if ($Orientation != "")
		{
		    echo "<br><p class=listingshead>Orientation</p>";
                    echo $Orientation;
                }
	        echo "</td><td width=280px valign=Top>";
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
 
                  echo "<Br><a href=#contact>
	       <img src=images/contact1.jpg  width=100px style=\"margin-top: 3px; margin-bottom: 3px\" border=)></a>";
              
	      echo "</td></tr>";
              echo "<tr><td colspan=2><Br>";
	      echo $Bio;
	      echo "</td></tr>";
		 
	      
?>	 	
 


<?php
 

 
echo "</table>";
		 $MyIndex ++;
		 if ($MyIndex > $num)
		 {
		     $MyIndex = 0;
		 }
		 $MyCount ++;

		 }
		 
		
		 ?>
		 
<Br>

<?php
$validmap = "n"; 
if ($Country == "Canada")
{
    $validmap = "y"; 
}
if ($Country == "USA")
{
    $validmap = "y"; 
}
if ($Country == "United States")
{
   $validmap = "y"; 
}
if ($Country == "")
{
   $validmap = "y"; 
}
if ($Country == " ")
{
    $validmap = "y"; 
}
if ($Country == "select country")
{
    $validmap = "y"; 
}
 $validmap = "n";
if ($validmap == "y")
{
//    echo "<div  id=\"map\" style=\"width: 450px; height: 450px\"></div>"; 
}
?>		 
 
<a name=contact>
<table class="myform" border="0" cellpadding="0" cellspacing="0" align="center" width="90%"><tr><td>
<form id="frmCaptcha" name="frmCaptcha">
<INPUT TYPE="hidden" NAME="oops" VALUE="http://www.naglrep.com/contact,php">
<INPUT TYPE="hidden" NAME="location" VALUE="http://www.naglrep.com/thanks.html">
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
<Tr><Td colspan="2" align="CENTER" class="myform" style="line-height: 140%"><br>Contact <?php echo $Name ?><Br><br> 
<?php echo $mess ?>
</Td></Tr>
<TR>
<TD align="right" width="50%" class="myform" nowrap> Your Name:&nbsp;</TD>
<TD width="50%"><INPUT NAME="txtName" id="txtName" TYPE="TEXT" SIZE="40" MAXLENGTH="100"></TD>
</TR>
					

<TR>
<TD align="right" class="myform">E-mail:&nbsp;</TD>
<TD width="50%"><INPUT NAME="signerx_email"  id="signerx_email" TYPE=TEXT SIZE="40" MAXLENGTH="100"></TD>
</TR>
			
<TR>
<TD align="right" class="myform">Phone:&nbsp;</TD>
<TD width="50%"><INPUT NAME="tel" TYPE=TEXT SIZE="40" MAXLENGTH="100"></TD>
</TR>
			
<TR>
<TD align="right" class="myform" nowrap>Best Time to Call:&nbsp;</TD>
<TD width="50%"><INPUT NAME="best" TYPE=TEXT SIZE="40" MAXLENGTH="100"></TD>
</TR>
			

					
<TR>
<TD width="50%" VALIGN="top" align="right" class="myform"><br>Message:&nbsp;</TD>
<TD width="50%"><textarea name="message" rows="3" cols="40" align="left">
</textarea></TD>
</TR>
		<Center><table align=center> 
			<tr>
				<td colspan=2 align="left" class="myform">
					<label for="captcha">Enter security code</label>
				</td></tr>
				<tr><td>
					<input id="txtCaptcha" type="text" name="txtCaptcha" value="" maxlength="5" size="5" />
				</td>
				<td> 
					<img id="imgCaptcha" src="create_image.php" />
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input id="btnCaptcha" type="button" value="submit" name="btnCaptcha" 
						onclick="getParam(document.frmCaptcha)" />
				</td>
			</tr>
		</table> </center>

		<div id="result">&nbsp;</div>
	</form>
</TABLE>