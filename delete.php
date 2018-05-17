<?php
session_start();
$level = "all";
?>

<?php include("chinesedbconnect.html");  ?>
<?php include("checklogon.php");  ?>

<?php 
$listingno=mysql_real_escape_string($_REQUEST['listingno']);
$passwordwas = $password;
  
$status = "H";
 
 mysql_query("delete from listingstab 
    where tlistingno = \"$listingno\";") or die("Update 1 failed"); 
        print 
	     "<META http-equiv=\"refresh\" content=\"0;url=selectchinese.php?
        printmess=$printmess,
        &userid=$userid
        &listingno=$listingno
        ;\">";
 ?>    
