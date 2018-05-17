<?php
session_start();
$level = "admin";
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
 
 
 
  
<body>
<?php include("admintop.html");  ?>
<?php include("chinesedbconnect.html");  ?>
</Td></tr></table>
</td>
<td width="650px" valign="top" style="padding: 0 20px 0 20px" align="left" bgcolor="beige">
<table cellpadding="0" cellspacing="0" border="0" width="100%" bordercolor="Red"><tr><Td valign="top" bgcolor="beige">



<Center>


<!-- content table here -->
<td width="100%" align=center> 

 <FORM name="chinese" title="chinese" action="addnew.php" method="get" 
style="margin-top:0">
      
    

       
      <TABLE cellSpacing="3" cellPadding="0" width="800px" border="0" align="center" class="myform" bgcolor=beige border-color="blue"
  valign="top"><TR>
          <TD  align="right" width="33%"><br></TD>
          <TD width="2%"></TD>
          <TD align="left" width="70%">
         </TR> 
<tr><td colspan="3" align="center">SETUP ORIGINAL LISTING<br>
<?php include("checklogon.php");  ?> 
</td>
</tr>

<TR>
          <TD  align="right">Email</TD>
          <TD></TD>
          <TD>
<INPUT maxLength="50" size="35" name="useridx">

 
		  </TD></TR>
<TR>
          <TD  align="right">Authorized</TD>
          <TD></TD>
          <TD>
<input style="margin: 0 0 0 0; height: 12px"  type="checkbox" name="authcode" value="Y">

 
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
<?php include("chinesebot.html");  ?>
</center>
<body>
</body>
</html>
