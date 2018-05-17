
<?php
//print "<br>auth=" . $auth; 
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