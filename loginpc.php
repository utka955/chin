<?php
session_start();
?>

<html>

<HEAD>
<TITLE>Chinese Lawyers Network</TITLE>
<META NAME="description" CONTENT="Chinese Lawyers Network.">
<META NAME="keywords" CONTENT="Chinese Lawyers Network">
<META HTTP-EQUIV="Content-Language" CONTENT="EN">
<META NAME="revisit-after" CONTENT="30 days">
<META NAME="robots" CONTENT="FOLLOW,INDEX">
<meta http-equiv="imagetoolbar" content="no">
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<link href="css/chinese.css" type="text/css" rel="stylesheet">
<script>
 
      function cleartext() 
	  {
document.form1.city.value = ""
      }
 

 
    
   </script>
</head>
<body>
<?php include("admintop.html");  ?>
 
</Td></tr></table>
</td>
<td width="650px" valign="top" style="padding: 0 20px 0 20px" align="center" bgcolor="beige">
<center>
<table cellpadding="0" cellspacing="0" border="0" width="800px" bordercolor="Red" bgcolor=beige><tr><Td valign="top">

 <h1 style="text-indent: 30px">ADMIN</h1>
<p style="padding-left: 30px; color: red">
<?php

    echo $message;


?>
 

 
<p class="para" style="padding-left: 40px; padding-right: 40px">
<FORM METHOD="get" ACTION="logonlogic.php">
 <h1 style="text-indent: 30px">LOGIN HERE</h1>
 <table class="forms" cellpadding="0" cellspacing="0" border="0" width="100%" bordercolor="red" align="center">


<tr><td  style="padding-right: 10px; font-size: 14px" align="right" width="40%"><b>Enter Email:</b></td>
 <td  align="left" width="60%">
 <INPUT type=hidden maxLength="50" size="30" name="goto" value="<?php echo $goto ?>">
  
 <INPUT maxLength="50" size="25" name="userid"></td></tr>
  <tr><td  style="padding-right: 10px; font-size: 14px" align="right"><b>Enter Password:</b></td>
 <td align="left"><INPUT type="password" maxLength="12" size="12" name="password">
</td></tr>
 <tr>
 <td></td>
<Td>

     <INPUT type="submit" value="LOGIN" name="function"> 
     
    
	  </form>
 

</center>
 
 
 
</td></tr></table>

<Br><Br>
</td> 
</tr>
<tr><Td colspan="2">

</Td></tr></table>
</Td>
</tr></table>
</Td>
</tr></table>

</center>
<body>
</body>
</html>
