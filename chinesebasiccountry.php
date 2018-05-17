<?php

 
$parm=mysql_real_escape_string($_REQUEST['parm']);
$language=mysql_real_escape_string($_REQUEST['language']);
$statesh=mysql_real_escape_string($_REQUEST['state']);
$state=mysql_real_escape_string($_REQUEST['state']);
$searchparm = "t" . $parm;

 $result1 = mysql_query("SELECT * FROM  practicetab
 where pshortname = \"$parm\"
order by pseq",$db) or die("cant read practice table" . mysql_error());
$MyIndex1 = 0; 
$number1 = mysql_numrows($result1);
$MyIndex1 = 0;
 
while ($MyIndex1 < $number1)
      
{
  $Shortname = (mysql_result($result1,$MyIndex1,"pshortname"));
  $Desc = (mysql_result($result1,$MyIndex1,"pdesc"));
  $Pagename = (mysql_result($result1,$MyIndex1,"ppagename"));
  $Capsname = (mysql_result($result1,$MyIndex1,"pcapsname"));
  $Capsname = (mysql_result($result1,$MyIndex1,"pcapsname"));
   $Titledesc = (mysql_result($result1,$MyIndex1,"ptitledesc"));
$Chinese = (mysql_result($result1,$MyIndex1,"pchinese"));
$MyIndex1++;
} 


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>

<?php
if ($language == "chinese")
{
Print "<title>" . $statesh . " Chinese " .  $Titledesc . " Lawyers Attorneys Mandarin Chinese Speaking Lawyer</title>";

}
else
{
Print "<title>" . $statesh . " Chinese " .  $Titledesc . " Lawyers Attorneys Mandarin Chinese Speaking Lawyer</title>";
}
?>

<?php
if ($language == "chinese")
{
 
 print "<meta name=\"keywords\" content=\"" . $statesh .  " " .  $Desc . " Lawyers, Chinese Lawyers, Lawyer, Mandarin, Cantonese, Attorney, Attorneys, Chinese Speaking, immigration, Chinese Law Firm, green cards, citizenships, work visas, investor visas, EB-5 Visas, intracompany  transfer  visas, student visas, fiance visas, artist and athlete visa, religious worker visa, labor certifications, re-entry permits, work permits, deportation proceedings, court representations, political asylum \">"; 
}
else
{
 print "<meta name=\"keywords\" content=\"" . $statesh .  " " .  $Desc . " Lawyers, Chinese Lawyers, Lawyer, Mandarin, Cantonese, Attorney, Attorneys, Chinese Speaking, immigration, Chinese Law Firm, green cards, citizenships, work visas, investor visas, EB-5 Visas, intracompany  transfer  visas, student visas, fiance visas, artist and athlete visa, religious worker visa, labor certifications, re-entry permits, work permits, deportation proceedings, court representations, political asylum \">"; 
}
?>

<?php
if ($language == "chinese")
{
 print "<meta name=\"description\" content=\"" . $statesh . " Chinese " .  $Titledesc . " lawyers . Contact Chinese speaking lawyers who are advocates of your goals.\">";

}
else
{
print "<meta name=\"description\" content=\"" . $statesh . " Chinese " .  $Titledesc . " lawyers . Contact Chinese speaking lawyers who are advocates of your goals.\">";
}
?>

<meta http-equiv="Content-Language" content="EN">
<meta name="revisit-after" content="30 days">
<meta name="robots" content="FOLLOW,INDEX">
<link href="http://www.chineselawyersnetwork.com/css/chinese.css" type="text/css" rel="stylesheet">

</head>
 <?php include("../chinesetop.html");  ?>
 
<table align="center" border="0" bordercolor="red" width="500px" style="font-size: 16px; color: blue">
<tr><td colspan="1" nowrap>

<H2 style="text-align: center"><?php
if ($language == "chinese")
{
//print   $statesh .  "  Hispano de  " . $Chinese;
}
else
{
print   $statesh .  " Chinese " . $Desc . " Lawyers ";
}
?>
</h2></td></tr>

  <tbody> 
   <?php

$result = mysql_query("SELECT * FROM  citiestab
  LEFT JOIN listingstab 
	ON citiestab.clistingno = listingstab.tlistingno 

where ccountry = \"$statesh\"
 and $searchparm = \"Y\"
order by ccity ",$db) or die("cant read it" . mysql_error());



$prevcity = "";
$MyIndex = 0; 
 $number = mysql_numrows($result);
 if ($number == 0)
{
echo "<tr><td class=textmsg><Br>We do not list any chinese lawyers in this state.  <Br>
<font color=black>To add your legal services to this page click <a href=\"http://www.chineselawyersnetwork.com/join.htm\"><font color=black>Lawyers Join</font></font></td></tr></a>";
}
 while ($MyIndex < $number)
      
    { 

  $City = (mysql_result($result,$MyIndex,"ccity"));
$State = (mysql_result($result,$MyIndex,"cstate"));
  $Company = (mysql_result($result,$MyIndex,"ccompany"));
  $Fname = (mysql_result($result,$MyIndex,"cfname"));
  $Lname = (mysql_result($result,$MyIndex,"clname"));
  $Personalinjury = (mysql_result($result,$MyIndex,"tpersonalinjury"));

if ($City != $prevcity)
{
echo "<tr><Td class=practice style=\"padding-left: 140px\"><a href=\"http://www.chineselawyersnetwork.com/listingsinternational.php?searchparm=$searchparm&City=$City&statesh=$statesh\">" . $City . ", " . $State;
 
$prevcity = $City;
echo "</a></td></tr>";
}

$MyIndex++;

}
if ($number > 0)
{
echo "<tr><td class=textmsg><Br><Br><Br><Br><Br><Br><Br><Br><Br>To add your legal services to this page in up to 16 cities click <a href=\"http://www.chineselawyersnetwork.com/join.html\">Lawyers Join</a></td></tr>";


}
?>
  
  </td></tr>
</tbody></table>

      
  

</body></html>