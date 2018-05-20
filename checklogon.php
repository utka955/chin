
<?php
//print "<br>auth=" . $auth; 
$auth =   $_SESSION["auth"];
if ($auth == "")
{
echo "<Br>You are not authorized for this page. <Br><a href=loginpc.php>Please Logon</a>"; 
exit();
}
if ($level == "admin")
{
 
if ($auth == "G")
{
 
echo "<Br>You are not authorized for this page."; 
exit();
}

} 
 
?>