<?php
session_start();
$level = "admin";
$Listingno =  $_REQUEST['Listingno'];
?>

<html>

<HEAD>
<TITLE>Chinese Lawyers Network</TITLE>
<META 
content="Chinese Lawyers Network" 
name=DESCRIPTION>
<META 
content="Chinese Lawyers Network" 
name=KEYWORDS>
<META name="ROBOTS" content="NOINDEX,NOFOLLOW"> 

<meta http-equiv="imagetoolbar" content="no">
 
<link href="css/chinese.css" type="text/css" rel="stylesheet">
 
<script>
 
function dostate() 
{

if  (chinese.Country.options[chinese.Country.options.selectedIndex].value == "USA")
{

document.all.State.style.display = "block";
document.all.State.style.visibility = "visible";

}
 
if  (chinese.Country.options[chinese.Country.options.selectedIndex].value == "Canada")
{
document.all.State.style.display = "none";
document.all.State.style.visibility = "hidden";
document.all.canadabox.style.display = "block";
document.all.canadabox.style.visibility = "visible";
}
else
{
document.all.canadabox.style.display = "none";
document.all.canadabox.style.visibility = "hidden";
document.all.State.style.display = "block";
document.all.State.style.visibility = "visible";
}


}
 
</script>
</head> 
 
  
<body onLoad="dostate()">
<?php include("admintop.html");  ?>
<?php include("chinesedbconnect.html");  ?>

<?php
$result = mysql_query("SELECT * FROM  listingstab
where tlistingno = \"$Listingno\"
order by tcreatedate DESC",$db) or die("cant read it");
$MyIndex = 0; 
 $number = mysql_numrows($result);
 
 while ($MyIndex < $number)
      
    { 
       
         $userid = (mysql_result($result,$MyIndex,"tid"));
	     $Company = (mysql_result($result,$MyIndex,"tcompany"));
	     $Listingno = (mysql_result($result,$MyIndex,"tlistingno"));
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
             $Stateover = (mysql_result($result,$MyIndex,"tstateover"));
	     $Tel = (mysql_result($result,$MyIndex,"ttel"));
	     $Cell = (mysql_result($result,$MyIndex,"tcell"));
	     $Fax = (mysql_result($result,$MyIndex,"tfax"));
	     $Bio = (mysql_result($result,$MyIndex,"tbio"));
	     $Spanishbio = (mysql_result($result,$MyIndex,"tchinesebio"));

	     $Address = (mysql_result($result,$MyIndex,"taddress"));
	     $Address2 = (mysql_result($result,$MyIndex,"taddress2"));
	     $Logo = (mysql_result($result,$MyIndex,"tlogo"));
	     $Photo = (mysql_result($result,$MyIndex,"tphoto"));
	     $Zip = (mysql_result($result,$MyIndex,"tzip"));
	     $Website = (mysql_result($result,$MyIndex,"twebsite"));

             $Personalinjury = (mysql_result($result,$MyIndex,"tpersonalinjury"));
             $Accident= (mysql_result($result,$MyIndex,"taccident"));
             $Criminal = (mysql_result($result,$MyIndex,"tcriminal"));
             $Federal = (mysql_result($result,$MyIndex,"tfederal"));
             $Divorce = (mysql_result($result,$MyIndex,"tdivorce"));
             $Family = (mysql_result($result,$MyIndex,"tfamily"));
             $Immigration = (mysql_result($result,$MyIndex,"timmigration"));
             $DUI = (mysql_result($result,$MyIndex,"tdui"));
             $Traffic = (mysql_result($result,$MyIndex,"ttraffic"));
             $Bankruptcy = (mysql_result($result,$MyIndex,"tbankruptcy"));
             $Foreclosure = (mysql_result($result,$MyIndex,"tforeclosure"));
             $Socsec = (mysql_result($result,$MyIndex,"tsocsec"));
             $Realestate = (mysql_result($result,$MyIndex,"trealestate"));
             $Business = (mysql_result($result,$MyIndex,"tbusiness"));
             $International = (mysql_result($result,$MyIndex,"tinternational"));
             $Landlord = (mysql_result($result,$MyIndex,"tlandlord"));
             $Estate = (mysql_result($result,$MyIndex,"testate"));
             $Employment = (mysql_result($result,$MyIndex,"temployment"));
             $Civilrightslabor= (mysql_result($result,$MyIndex,"tcivilrightslabor"));
             $Civilrights = (mysql_result($result,$MyIndex,"tcivilrights"));
             $Medical= (mysql_result($result,$MyIndex,"tmedical"));
             $Wrongfuldeath = (mysql_result($result,$MyIndex,"twrongfuldeath"));
             $Tax= (mysql_result($result,$MyIndex,"ttax"));
             $Insurance = (mysql_result($result,$MyIndex,"tinsurance"));
             $Patents = (mysql_result($result,$MyIndex,"tpatents"));
             $Entertainment = (mysql_result($result,$MyIndex,"tentertainment"));
             $Military = (mysql_result($result,$MyIndex,"tmilitary"));
             $Email = (mysql_result($result,$MyIndex,"tid"));
             $Authcode = (mysql_result($result,$MyIndex,"tauthcode"));

$MyIndex++;





}


if ($Website == "")
{
$Website = "http://www.";
}
 
if ($Country == "USA")
{
$selusa = "Selected";
}
 


if ($State == "Alabama")
{
$selalabama = "Selected";
}
if ($State == "Alaska")
{
$selalaska = "Selected";
}
if ($State == "Arizona")
{
$selarizona = "Selected";
}
if ($State == "Arkansas")
{
$selarkansas = "Selected";
}

if ($State == "California")
{
$selcalifornia = "Selected";
}
if ($State == "Colorado")
{
$selcolorado = "Selected";
}
if ($State == "Connecticut")
{
$selconnecticut = "Selected";
}
if ($State == "Delaware")
{
$seldelaware = "Selected";
}
if ($State == "District of Columbia")
{
$seldc = "Selected";
}

if ($State == "Florida")
{
$selflorida = "Selected";
}
if ($State == "Georgia")
{
$selgeorgia = "Selected";
}
if ($State == "Hawaii")
{
$selhawaii = "Selected";
}
if ($State == "Idaho")
{
$selidaho = "Selected";
}
if ($State == "Illinois")
{
$selillinois = "Selected";
}
if ($State == "Indiana")
{
$selindiana = "Selected";
}
if ($State == "Iowa")
{
$seliowa = "Selected";
}
if ($State == "Kansas")
{
$selkansas = "Selected";
}
if ($State == "Kentucky")
{
$selkentucky = "Selected";
}
if ($State == "Louisiana")
{
$sellouisiana = "Selected";
}
if ($State == "Maine")
{
$selmaine = "Selected";
}
if ($State == "Maryland")
{
$selmaryland = "Selected";
}
if ($State == "Massachusetts")
{
$selmassachusetts = "Selected";
}
if ($State == "Michigan")
{
$selmichigan = "Selected";
}
if ($State == "Minnesota")
{
$selminnesota = "Selected";
}
if ($State == "Mississippi")
{
$selmississippi = "Selected";
}
if ($State == "Missouri")
{
$selmissouri = "Selected";
}
if ($State == "Montana")
{
$selmontana = "Selected";
}
if ($State == "Nebraska")
{
$selnebraska = "Selected";
}
if ($State == "Nevada")
{
$selnevada = "Selected";
}
if ($State == "New Hampshire")
{
$selnewhampshire = "Selected";
}
if ($State == "New Jersey")
{
$selnewjersey = "Selected";
}

if ($State == "New Mexico")
{
$selnewmexico = "Selected";
}
if ($State == "New York")
{
$selnewyork = "Selected";
}
if ($State == "North Carolina")
{
$selnorthcarolina = "Selected";
}
if ($State == "North Dakota")
{
$selnorthdakota = "Selected";
}
if ($State == "Ohio")
{
$selohio = "Selected";
}
if ($State == "Oklahoma")
{
$seloklahoma = "Selected";
}
if ($State == "Oregon")
{
$seloregon = "Selected";
}
if ($State == "Pennsylvania")
{
$selpennsylvania = "Selected";
}
if ($State == "Rhode Island")
{
$selrhodeisland = "Selected";
}
if ($State == "South Carolina")
{
$selsouthcarolina = "Selected";
}
if ($State == "South Dakota")
{
$selsouthdakota = "Selected";
}
if ($State == "Tennessee")
{
$seltennessee = "Selected";
}


if ($State == "Texas")
{
$seltexas = "Selected";
}

if ($State == "Utah")
{
$selutah = "Selected";
}

if ($State == "Vermont")
{
$selvermont = "Selected";
}

if ($State == "Virginia")
{
$selvirginia = "Selected";
}

if ($State == "Washington")
{
$selwashington = "Selected";
}

if ($State == "West Virginia")
{
$selwestvirginia = "Selected";
}

if ($State == "Wisconsin")
{
$selwisconsin = "Selected";
}

if ($State == "Wyoming")
{
$selwyoming = "Selected";
}
if ($State == "Alberta")
{
$selalberta = "Selected";
}
if ($State == "British Columbia")
{
$selbc = "Selected";
}
if ($State == "Manitoba")
{
$selmanitoba = "Selected";
}
if ($State == "New Brunswick")
{
$selnewbrunswick = "Selected";
}
if ($State == "Newfoundland")
{
$selnewfoundland = "Selected";
}
if ($State == "Northwest Territories")
{
$selnorthwest = "Selected";
}
if ($State == "Nova Scotia")
{
$selnova = "Selected";
}
if ($State == "Nunavut")
{
$selnunavut = "Selected";
}
if ($State == "Ontario")
{
$selontario = "Selected";
}
if ($State == "Prince Edward Island")
{
$selprince = "Selected";
}
if ($State == "Quebec")
{
$selprince = "Selected";
}
if ($State == "Saskatchewan")
{
$selses= "Selected";
}
if ($State == "Yukon")
{
$selyukon = "Selected";

}
?>

 
</Td></tr></table>
</td>
<td width="650px" valign="top" style="padding: 0 20px 0 20px" align="left" bgcolor="beige">
<table cellpadding="0" cellspacing="0" border="0" width="100%" bordercolor="Red"><tr><Td valign="top" bgcolor="beige">



<Center>


<!-- content table here -->
<td width="100%" align=center> 
 <FORM name="chinese" title="chinese" action="update1.php" method="get" 
style="margin-top: -2em">
      
    

       
      <TABLE cellSpacing="3" cellPadding="0" width="800px" border="0" align="center" class="myform" bgcolor=beige border-color="blue"
  valign="top"><TR>
          <TD  align="right" width="33%"><br></TD>
          <TD width="2%"></TD>
          <TD align="left" width="70%">
         </TR> 
<tr><td colspan="3" align="center">UPDATE LISTING<br>

</td>
</tr>
 <tr><td colspan="3" align=center style="margin: 0 0 0 0"> 
   <TR>
          <TD  align="right">First Name</TD>
          <TD></TD>
          <TD>
<INPUT maxLength="50" size="35" name="Fname" value="<?php echo $Fname ?>">
<INPUT maxLength="70" size="35" type=hidden name="Listingno" value="<?php echo $Listingno ?>">
 
		  </TD></TR>

<TR>
          <TD  align="right">Last Name</TD>
          <TD></TD>
          <TD>
<INPUT maxLength="50" size="35" name="Lname" value="<?php echo $Lname ?>">

 
		  </TD></TR>
<TR>
          <TD  align="right">Email</TD>
          <TD></TD>
          <TD>
<INPUT maxLength="50" size="35" name="useridx" value="<?php echo $Email ?>">

 
		  </TD></TR>
<!--<TR>
          <TD  align="right">Password</TD>
          <TD></TD>
          <TD>
<INPUT maxLength="50" size="35" type="password" name="password">

 
		  </TD></TR>-->
<TR>
          <TD  align="right">Business Name</TD>
          <TD></TD>
          <TD>
<INPUT maxLength="50" size="35" name="Company"  value="<?php echo $Company ?>">

 
		  </TD></TR>

          <br>
         <TR>
          <TD  align="right" valign="Bottom">Country:</TD>
          <TD></TD>
          <TD><select name="Country" size="1" style="margin-top: 10px"  onChange="dostate()">
<option value="select state">Select Country</option>         
<option value="USA" <?php echo $selusa ?>>USA</option>
<option value="Australia">Australia</option>
<option value="Brazil">Brazil</option>   
<option value="Cambodia">Cambodia</option>   
<option value="Canada">Canada</option>   
<option value="China">China</option>   
<option value="France">France</option>   
<option value="HongKong">Hong Kong</option>   
<option value="Indonesia">Indonesia</option>    
<option value="Italy">Italy</option>     
<option value="Japan">Japan</option>    
<option value="Malaysia">Malaysia</option>     
<option value="Myanmar">Myanmar</option>     
<option value="NewZealand">New Zealand</option>        
<option value="Peru">Peru</option>    
<option value="Philippines">Philippines</option>   
<option value="Singapor">Singapore</option>
<option value="SouthKorea">South Korea</option>   
<option value="Taiwan">Taiwan</option>   
<option value="Thailand">Thailand</option>   
<option value="UnitedKingdom">United Kingdom</option>   
<option value="Vietnam">Vietnam</option>  

</select>		 
		  </TD></TR> 
          <br>
          
        
          
		  <TR>
          <TD  align="right">Business Address:</TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="Address" value="<?php echo $Address ?>">
		 
		  </TD></TR>
		   <TR>
          <TD  align="right">Address Line 2:</TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="Address2" value="<?php echo $Address2 ?>">
		 
		  </TD></TR>
		  <TR>
          <TD  align="right">City:</TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="City" value="<?php echo $City ?>">
		 
		  </TD></TR>
		  <TR>
          <TD  align="right"> Other Cities Served:</TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="City1" value="<?php echo $City1 ?>">
		 
		  </TD></TR>
<TR>
          <TD  align="right"></TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="City2" value="<?php echo $City2 ?>">
		 
		  </TD></TR>
		    <TR>
          <TD  align="right"></TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="City3" value="<?php echo $City3 ?>">
		 
		  </TD></TR>
		  <TR>
          <TD  align="right"></TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="City4" value="<?php echo $City4 ?>">
		 
		  </TD></TR>
<TR>
          <TD  align="right"></TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="City5" value="<?php echo $City5 ?>">
		 
		  </TD></TR>
<TR>
          <TD  align="right"></TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="City6" value="<?php echo $City6 ?>">
		 
		  </TD></TR>
<TR>
          <TD  align="right"></TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="City7" value="<?php echo $City7 ?>">
		 
		  </TD></TR>
<TR>
          <TD  align="right"></TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="City8" value="<?php echo $City8 ?>">
		 
		  </TD></TR>
<TR>
          <TD  align="right"></TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="City9" value="<?php echo $City9 ?>">
		 
		  </TD></TR>
<TR>
          <TD  align="right"></TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="City10" value="<?php echo $City10 ?>">
		 
		  </TD></TR>
<TR>
          <TD  align="right"></TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="City11" value="<?php echo $City11 ?>">
		 
		  </TD></TR>
<TR>
          <TD  align="right"></TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="City12" value="<?php echo $City12 ?>">
		 
		  </TD></TR>
<TR>
          <TD  align="right"></TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="City13" value="<?php echo $City13 ?>">
		 
		  </TD></TR>
<TR>
          <TD  align="right"></TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="City14" value="<?php echo $City14 ?>">
		 
		  </TD></TR>
<TR>
          <TD  align="right"></TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="35" name="City15" value="<?php echo $City15 ?>">
		 
		  </TD></TR>

		  <TR>
          <TD  align="right" valign="bottom">State/Province:</TD>
          <TD></TD>
          <TD><select name="State" size="1" style="margin-top: 10px">
<option value="select state">Select State</option>         
<option value="select state">Select State</option>         
<option value="Alabama" <?php echo $selalabama ?>>Alabama</option>
<option value="Alaska" <?php echo $selalaska ?>>Alaska</option>
<option value="Arizona" <?php echo $selarizona ?>>Arizona</option>
<option value="Arkansas" <?php echo $selarkansas ?>>Arkansas</option>
<option value="California" <?php echo $selcalifornia ?>>California</option>
<option value="Colorado" <?php echo $selcolorado ?>>Colorado</option>
<option value="Connecticut" <?php echo $selconnecticut ?>>Connecticut</option>
<option value="Delaware" <?php echo $seldelaware ?>>Delaware</option>
<option value="District of Columbia" <?php echo $seldc ?>>District of Columbia</option>
<option value="Florida"<?php echo $selflorida ?>>Florida</option>
<option value="Georgia" <?php echo $selgeorgia ?>>Georgia</option>
<option value="Hawaii" <?php echo $selhawaii ?>>Hawaii</option>
<option value="Idaho" <?php echo $selidaho ?>>Idaho</option>
<option value="Illinois" <?php echo $selillinois ?>>Illinois</option>
<option value="Indiana" <?php echo $selindiana ?>>Indiana</option>
<option value="Iowa" <?php echo $seliowa ?>>Iowa</option>
<option value="Kansas" <?php echo $selkansas ?>>Kansas</option>
<option value="Kentucky" <?php echo $selkentucky ?>>Kentucky</option>
<option value="Louisiana" <?php echo $sellouisiana ?>>Louisiana</option>
<option value="Maine" <?php echo $selmaine ?>>Maine</option>
<option value="Maryland" <?php echo $selmaryland ?>>Maryland</option>
<option value="Massachusetts" <?php echo $selmassachusetts ?>>Massachusetts</option>
<option value="Michigan" <?php echo $selmichigan ?>>Michigan</option>
<option value="Minnesota" <?php echo $selminnesota ?>>Minnesota</option>
<option value="Mississippi" <?php echo $selmississippi ?>>Mississippi</option>
<option value="Missouri" <?php echo $selmissouri ?>>Missouri</option>
<option value="Montana" <?php echo $selmontana ?>>Montana</option>
<option value="Nebraska" <?php echo $selnebraska ?>>Nebraska</option>
<option value="Nevada" <?php echo $selnevada ?>>Nevada</option>
<option value="New Hampshire" <?php echo $selnewhampshire ?>>New Hampshire</option>
<option value="New Jersey"<?php echo $selnewjersey ?>>New Jersey</option>
<option value="New Mexico" <?php echo $selnewmexico ?>>New Mexico</option>
<option value="New York" <?php echo $selnewyork ?>>New York</option>
<option value="North Carolina" <?php echo $selnorthcarolina ?>>North Carolina</option>
<option value="North Dakota" <?php echo $selnorthdakota ?>>North Dakota</option>
<option value="Ohio" <?php echo $selohio ?>>Ohio</option>
<option value="Oklahoma" <?php echo $seloklahoma ?>>Oklahoma</option>
<option value="Oregon" <?php echo $seloregon ?>>Oregon</option>
<option value="Pennsylvania" <?php echo $selpennsylvania ?>>Pennsylvania</option>
<option value="Rhode Island" <?php echo $selrhodeisland ?>>Rhode Island</option>
<option value="South Carolina" <?php echo $selsouthcarolina ?>>South Carolina</option>
<option value="South Dakota" <?php echo $selsouthdakota ?>>South Dakota</option>
<option value="Tennessee" <?php echo $seltennessee ?>>Tennessee</option>
<option value="Texas" <?php echo $seltexas ?>>Texas</option>
<option value="Utah" <?php echo $selutah ?>>Utah</option>
<option value="Vermont" <?php echo $selvermont ?>>Vermont</option>
<option value="Virginia" <?php echo $selvirginia ?>>Virginia</option>
<option value="Washington" <?php echo $selwashington ?>>Washington</option>
<option value="West Virginia" <?php echo $selwestvirginia ?>>West Virginia</option>
<option value="Wisconsin" <?php echo $selwisconsin ?>>Wisconsin</option>
<option value="Wyoming" <?php echo $selwyoming ?>>Wyoming</option>
            </select>
<div id="canadabox" style="visibility: hidden; display: none">

<select name="province" size="1" style="margin-top: 0px">
<option value="select state">Select a Province</option>         
<option value="Alberta" <?php echo $selalberta ?>>Alberta</option>
<option value="British Columbia" <?php echo $selbc ?>>British Columbia</option>
<option value="Manitoba" <?php echo $selmanatoba ?>>Manitoba</option>
<option value="New Brunswick" <?php echo $selnewbunswick ?>>New Brunswick</option>
<option value="Newfoundland and Labrador" <?php echo $selnewfoundland ?>>Newfoundland</option>
<option value="Northwest Territories" <?php echo $selnorthwest ?>>Northwest Territories</option>
<option value="Nova Scotia" <?php echo $selnova ?>>Nova Scotia</option>
<option value="Nunavut" <?php echo $selnunavut ?>>Nunavut</option>
<option value="Ontario" <?php echo $selontario ?>>Ontario</option>
<option value="Prince Edward Island" <?php echo $selprince ?>>Prince Edward Island</option>
<option value="Quebec" <?php echo $selquebec ?>>Quebec</option>
<option value="Saskatchewan" <?php echo $selses?>>Saskatchewan</option>
<option value="Yukon" <?php echo $selyukon ?>>Yukon</option>
 
            </select><Br></div>
  <TR>
          <TD  align="right">State Override:</TD>
          <TD></TD>
          <TD><INPUT maxLength="50" size="25" name="Stateover" value="<?php echo $Stateover ?>">
		 
		  </TD></TR>


		  <TR>
          <TD  align="right">Zip Code:</TD>
          <TD></TD>
          <TD><INPUT maxLength="11" size="11" name="Zip" value="<?php echo $Zip ?>">
		 
		  </TD></TR>

		  <TR>
          <TD  align="right">Telephone:</TD>
          <TD></TD>
          <TD><INPUT maxLength="25" size="15" name="Tel" value="<?php echo $Tel ?>">
		 
		  </TD></TR>
		 
   <TR>
          <TD  align="right">Fax:</TD>
          <TD></TD>
          <TD><INPUT maxLength="15" size="15" name="Fax" value="<?php echo $Fax ?>">
		 
		  </TD></TR>

<TR>
          <TD  align="right">Website:</TD>
          <TD></TD>
          <TD><INPUT maxLength="155" size="35" name="Website" value="<?php echo $Website ?>">
		  </TD></TR>
		 
 
		  <Tr><td colspan=3 align=center>
 	<table cellpadding="0" cellspacing="0" border="0" bordercolor="red" class="myform" style="padding: 0 0 0 0; margin: 0 0 0 0" width="80%"> 




<tr><Td colspan="3" align="center">      
<?php
if ($printmess2 == "")
{
    print "<Br><INPUT type=submit value=CONTINUE name=function onMouseOver=\"edit()\">";
}
else
{
    print $printmess2;  
}
?>

<br><br></td>
		  </tr>
      </TABLE>
     </FORM>
</Td>
</tr></table>
</Td>
</tr></table>
</Td>
</tr></table>
<?php include("chinesebot.html");  ?>
</center>
<body>
</body>
</html>
