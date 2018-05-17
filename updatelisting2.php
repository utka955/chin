<?php
session_start();
//session_register("Bio");
 //session_register("Chinesebio");
include("chinesedbconnect.html");  
$result = mysql_query("SELECT * FROM  listingstab
where tlistingno = \"$Listingno\"
order by tcreatedate DESC",$db) or die("cant read it");
$MyIndex = 0; 
 $number = mysql_numrows($result);
  
 while ($MyIndex < $number)
      
    { 
       
        include("listingfields.php");  


$MyIndex++;





}
  

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
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<link href="css/chinese.css" type="text/css" rel="stylesheet">
<script>
 function edit()
{

	if (document.chinese.Bio.value.length > 2000)
	{
		alert("Bio must be less than 2000 characters!");
		document.chinese.Bio.focus();
		return;
	}
        if (document.chinese.Chinesebio.value.length > 2000)
	{
		alert("Bio must be less than 2000 characters!");
		document.chinese.Chinesebio.focus();
		return;
	}
}

 
</script>
 
 

 
 
<script>
 
function addbio() 
     {
 
      document.chinese.Bio.value = "<?Php echo htmlspecialchars($Bio) ?>";
 document.chinese.Chinesebio.value = "<?Php echo htmlspecialchars($Chinesebio) ?>";
      }
     
    
</script>

<body>
<?php include("admintop.html");   ?>



</Td></tr></table>
</td>
<td width="650px" valign="top" style="padding: 0 20px 0 20px" align="left" bgcolor="beige">
<table cellpadding="0" cellspacing="0" border="0" width="100%" bordercolor="Red"><tr><Td valign="top" bgcolor="beige">



<Center>


<!-- content table here -->
<td width="100%" align=center> 
 <FORM name="chinese" title="chinese" action="update2.php" method="post" >    
    

       
      <TABLE cellSpacing="0" cellPadding="0" width="800px" border="0" align="center" class="myform" bordercolor="blue" bgcolor=beige
  valign="top" style="padding-left: 10px"><TR>
          <TD  align="right" width="33%"><br></TD>
          <TD width="2%"></TD>
          <TD align="left" width="70%">
         </TR> 
<tr><td colspan="3" align="center">SETUP MY LISTING - PART 2<br>

</td>
</tr>
 <tr><td colspan="3" align=center style="margin: 0 0 0 0"> 

 
 <Tr><td colspan=3 align=center>
<table cellpadding="0" cellspacing="0" border="0" bordercolor="red" class="myform" style="padding: 0 0 0 0; margin: 0 0 0 20" width="95%"> 
<input type=hidden name=Listingno value="<?php echo $Listingno ?>">
 
<tr>
<td align="left" colspan="3"><br>Type of practice:</td>  </tr>
<tr height=10px><Td colspan="3"></td></tr>
<Tr height=15px>
<?php
$colcount = 0;
$result1 = mysql_query("SELECT * FROM  practicetab
 
order by pseq",$db) or die("cant read it");
$MyIndex1 = 0; 
 $number1 = mysql_numrows($result1);
$MyIndex1 = 0;
while ($MyIndex1 < $number1)
      
{
  $Shortname = (mysql_result($result1,$MyIndex1,"pshortname"));
  $Desc = (mysql_result($result1,$MyIndex1,"pdesc"));
  $Pagename = (mysql_result($result1,$MyIndex1,"ppagename"));
  $Capsname = (mysql_result($result1,$MyIndex1,"pcapsname"));
  $Seq = (mysql_result($result1,$MyIndex1,"pseq"));
$checkit = "";

 
if ($$Capsname == "Y")
{
 
$checkit = "checked";
}
$colcount++;

 
echo "<td align=\"left\" width=\"50%\" valign=middle>$Desc:<input  type=\"checkbox\" name=\"$Shortname\" value=Y " .  $checkit .  " ></td> "; 
if ($colcount == 2)
{
// print "<Br>doing it";
$colcount = 0;
echo "</tr><Tr>";
}

 

 
$MyIndex1++;
}
$selaccident = "checked";
?>

 
 </table> 
</td></tr>
<tr height="15px"><td colspan="3"></td></tr> 

 <TR>  
<td align="right"   valign=top><Br>Bio:<Br>Max 2000 characters)<Br>
<a href=# onClick="checksize()">Character Counter</a></td>  
<TD></TD>  
<td valign=middle><textarea name="Bio" rows="5" cols="40"><?php echo $Bio ?></textarea>
</td> </tr> 

<tr height="15px"><td colspan="3"></td></tr> 

 <TR>  
<td align="right"   valign=top><Br>Bio in Chinese:<Br>Max 2000 characters)<Br>
<a href=# onClick="checksize()">Character Counter</a></td>  
<TD></TD>  
<td valign=middle><textarea name="Chinesebio" rows="5" cols="40"><?php echo $Chinesebio ?></textarea>
</td> </tr> 
<!--<tr height="15px"><td colspan="3"></td></tr>--->


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
?><br> <br></td>
		  </tr>
      </TABLE>
     </FORM>
</Td>
</tr></table>
</Td>
</tr></table>
</Td>
</tr></table>
<script>
 <!--addbio was here-->
 
</script>
</center>
<body>
</body>
</html>
