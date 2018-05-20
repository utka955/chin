<?php
session_start();
$level = "all";
$adminpage = "y";
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
<table cellpadding="0" cellspacing="0" border="0" width="800px" bordercolor="Red" bgcolor=beige height=400px><tr><Td valign="top">
 
 <h1 style="text-indent: 30px">ADMIN</h1>

<p style="padding-left: 30px; color: black">
<?php
echo "Authorization level=" . $_SESSION["auth"] . "<br>";
print $message;
 

?>
<?php include("checklogon.php");  ?> 

 

 
</Td>
</tr></table>

</center>
<body>
</body>
</html>
