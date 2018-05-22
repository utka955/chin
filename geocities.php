<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>create cities table - new</TITLE>

<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<META content="Microsoft FrontPage 4.0" name=GENERATOR></HEAD>
<BODY leftMargin=0 background=bkpurpled.jpg>
<DIV align=center>
<CENTER>
<TABLE height=100 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
  <TD align=middle width="100%"></TD><A 
  name=top></A></TR></TBODY></TABLE></CENTER></DIV>
<H1>create ip table</H1>
<H2>db development</H2>
<DIV align=center>
<CENTER>&nbsp;</CENTER></DIV>
<DIV align=center>
<TABLE height=944 cellSpacing=0 cellPadding=0 width="78%" background="" 
border=0>
  <TBODY>
  <TR>
    <TD vAlign=top width="70%"><?php
    $mylit = "pat cordes"; 
    print $mylit;
    ?>
      <P><?php
session_start();
//$_SESSION["auth"] = $auth;
   include("chinesedbconnect.html");   
 include("checklogon.php");   
?>
      <P>after second one</P>
     
<?php
 mysqli_new_query("drop table citiestab",$db);






mysqli_new_query("create table citiestab( cstate varchar(50), ccity varchar(50), ccompany varchar(150), clistingno varchar(5),
 clink varchar(150), cfname varchar(50), clname varchar(50), ccountry varchar(50), cmain varchar(1),

UNIQUE id(cstate, ccity, clistingno) );",$db) 
or die("cant createx" . mysql_error());

$MyIndex = 0;

$result = mysqli_new_query("SELECT * FROM  listingstab order by tcreatedate DESC",$db) or die("cant read it");
 $MyIndex = 0; 
    $number = mysqli_num_rows($result);
 while ($MyIndex < $number)
      
    { 
     $Company = (mysql_result($result,$MyIndex,"tcompany"));
	     $Listingno = (mysql_result($result,$MyIndex,"tlistingno"));
	     $Lname = (mysql_result($result,$MyIndex,"tlname"));
	     $Fname = (mysql_result($result,$MyIndex,"tfname"));
	     $Title = (mysql_result($result,$MyIndex,"ttypebus"));
	       $Stateover = (mysql_result($result,$MyIndex,"tstateover"));
	         $Country = (mysql_result($result,$MyIndex,"tcountry"));
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
	                                                               $City12 = (mysql_result($result,$MyIndex,"tcity12"));
	                                                                    $City13 = (mysql_result($result,$MyIndex,"tcity13"));
	                                                                         $City14 = (mysql_result($result,$MyIndex,"tcity14"));
	                                                                              $City15 = (mysql_result($result,$MyIndex,"tcity15"));
	     $State = (mysql_result($result,$MyIndex,"tstate"));
	     
	  if ($Stateover == "select state")
          {
          print "<Br>##################### Stateover error " . $Listingno;
          $Stateover = " ";
          }
	  if ($Stateover > " ")
	  {
	  $State = $Stateover;
	  }  
 
	   print "<Br>*******country=" . $Country . " state=" . $State . " stateover=" . $Stateover . " city=" . $City . " Ln=" . $Listingno;

	  if ($Country == "select country")
	  {
	  $Country = "USA";
	  print "<Br>fix1";
	  }
	   if ($Country == "select state")
	  {
	  $Country = "USA";
	    print "<Br>fix2";
	  }
	  if ($Country == "United States")
	  {
	    print "<Br>fix3";
	  $Country = "USA";
	  }
	   if ($Country ==  " ")
	  {
	    print "<Br>fix4";
	  $Country = "USA";
	  }
	     if ($Country ==  "")
	  {
	    print "<Br>fix5";
	  $Country = "USA";
	  }
	  
	  
	   if ($State == "texas")
	  {
	  $State = "Texas";
	  }
$Main = "M";
	  doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db); 
$Main = "";
 if ($City1 > " ")
 {
 $City = $City1;
 doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db);
 }
 if ($City2 > " ")
 {
 $City = $City2;
 doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db);
 }
 if ($City3 > " ")
 {
 $City = $City3;
 doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db);
 }
 if ($City4 > " ")
 {
 $City = $City4;
 doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db);
 }
 if ($City5 > " ")
 {
 $City = $City5;
 doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db);
 }
 if ($City6 > " ")
 {
 $City = $City6;
 doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db);
 }
 if ($City7 > " ")
 {
 $City = $City7;
 doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db);
 }
 if ($City8 > " ")
 {
 $City = $City8;
 doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db);
 }
 if ($City9 > " ")
 {
 $City = $City9;
 doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db);
 }
 if ($City10 > " ")
 {
 $City = $City10;
 doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db);
 }
 if ($City11 > " ")
 {
 $City = $City11;
 doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db);
 }
 if ($City12 > " ")
 {
 $City = $City12;
 doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db);
 }
 if ($City13 > " ")
 {
 $City = $City13;
 doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db);
 }
 if ($City14 > " ")
 {
 $City = $City14;
 doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db);
 }
 if ($City15 > " ")
 {
 $City = $City15;
 doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db);
 }

	  
$MyIndex++;
}
function doit($State,$City,$Company,$Listingno,$Fname,$Lname,$Country,$Main,$db)
{
  
	     $link = "test";
//	print "<Br>Country=". $Country . " State=" . $State . " city=" . $City  . " last=" . $Lname;   
	     mysqli_new_query("insert into citiestab values 
      ('$State',\"$City\",\"$Company\",'$Listingno','$link','$Fname','$Lname','$Country','$Main');",$db) 
    ;   
}

printf ("The end of db maint");
?>
<p>


   
     
      </TD>
      </TR>
      </TBODY>
      </TABLE>
      </DIV>
      </BODY>
      </HTML>