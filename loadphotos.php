<?php
session_start();
$level = "all";
include("chinesedbconnect.html");  
$Listingno =  $_REQUEST['Listingno'];
 
$whatphoto =  mysql_real_escape_string($_REQUEST['whatphoto']);
$realid =  mysql_real_escape_string($_REQUEST['realid']);
 
//$REQUEST_METHOD =  mysql_real_escape_string($_REQUEST['$REQUEST_METHOD']);
$imgfile = $_REQUEST['imgfile']; 
$imgfile_name = $_FILES["imgfile"]["name"]; 
$imgfile_type = $_FILES["imgfile"]["type"]; 
$imgfile_size = $_FILES["imgfile"]["size"]; 



?>

<html>

<HEAD>
<TITLE>Chinese Lawyers Network - Photos</TITLE>
<META 
content="Chinese Lawyers Network" 
name=DESCRIPTION>
<META 
content="Chinese Lawyers Network" 
name=KEYWORDS>
<meta http-equiv="imagetoolbar" content="no">
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<link href="css/chinese.css" type="text/css" rel="stylesheet">
</head>
<body>
 

<?php include("admintop.html");  ?>
 
 <table cellpadding=0  cellspacing=0 border="0" bgcolor=white width="800px" height="283px"  bgcolor=white align=center bgcolor=beige>
<tr> 
<td colspan="2" width="800px" bgcolor="beige" valign="top" style="padding: 0 20px 0 20px" align="left">
<table cellpadding="0" cellspacing="0" border="0" class="box" bordercolor="red"><tr><Td valign="top">
  <?php 


 

?>

<Center>
<td width=100% align=center valign=top> 
<TABLE cellSpacing="0" cellPadding="0" width="100%" border="0" align="center" class="box">
 <?php include("checklogon.php");  ?>
<td align="left"  style="padding: 10 10 10 10"><Br><B><Font color="darkblue">ADD YOUR PHOTO</Font></B><br><Br>
Please resize your photos to a width of 600 pixals or less prior to upload.
<Br><Br>When a thumbmail of your  photo appears on the  page it means your photo has been uploaded.
<br><Br>Please wait until the upload completes.
<!--<br><br><a href=success.php>NO PHOTO - COMPLETE MY LISTING</a>-->
<tr><td>
<?php
//************************c o d e   S t a r t s   h e r e*****************

echo "<Tr> <td align=left valign=top style=\"padding-left: 30px\">";
echo "<br><b>Upload and Manage Your Photos</b><br> ";

 
$realid = $Listingno;
 
$dir =  $_SERVER['DOCUMENT_ROOT'];  
 
 
$dirpath =  $dir . "/listingphotos/$Listingno";
 
 

$mytally = 0;
 
 
$maxphotos = 99;
 
if ($whatphoto != "") 
{ 
 
if ($mytally > $maxphotos)
{
echo "Error - too many photos";
}
else
{



 
    /* SUBMITTED INFORMATION - use what you need
     * temporary filename (pointer): $imgfile
     * original filename           : $imgfile_name
     * size of uploaded file       : $imgfile_size
     * mime-type of uploaded file  : $imgfile_type
     */

     /*== upload directory where the file will be stored 
          relative to where script is run ==*/

//******************************u p l o a d   a d d r e s s 
    $uploaddir =$dirpath;

 

    /*== get file extension (fn at bottom of script) ==*/
    /*== checks to see if image file, if not do not allow upload ==*/
    $pext = getFileExtension($imgfile_name);
    $pext = strtolower($pext);

//echo "<Br>PEXT=" . $pext;
//////verify extension  
    if (($pext != "jpg")  && ($pext != "jpeg")    && ($pext != "gif") && ($pext != "bmp"))
    {
	if ($imgfile_name == "")
{
     
	{
	        echo "<h2>ERROR1</h2>You must click on browse and select a photo prior to upload. <br>";
        echo "<a href=loadphotos.php?Listingno=$Listingno>Click here to continue</a></p>\n";

        /*== delete uploaded file ==*/
//just took this out
  //      unlink($imgfile);
        exit();

	}
}
	else
	{
        echo "<h2>ERROR2</h2>Image Extension Unknown.<br>";
        echo "<p>Please upload only a JPEG image with the extension .jpg or .jpeg ONLY<br><br>";
        echo "The file you uploaded had the following extension: $pext</p>\n";
        echo "<a href=loadphotos.php?Listingno=$Listingno>Click here to continue</a></p>\n";

        /*== delete uploaded file ==*/
//just took this out
       // unlink($imgfile);
        exit();
    }
}

    //-- RE-SIZING UPLOADED IMAGE
 
    /*== only resize if the image is larger than 250 x 200 ==*/
//    $imgsize = GetImageSize($imgfile);

    /*== check size  0=width, 1=height ==*/

$typephoto = "v";
$mywidth = "420";
$myheight = "630";
If ($imgsize[0] > $imgsize[1] )
{
$typephoto = "h";
$mywidth = "630";
$myheight = "420";
}
//echo  "Width: " . $imgsize[0] . " Height: " . $imgsize[1] . "<br>";
if ($imgsize[0] > 600)
{
echo "<font color=red>Your photo is too big <br>please resize to a width less than 600 and try again<Br>
<a href=loadphotos.php?Listingno=$Listingno>Click here to try again with a smaller photo</a></font><Br><Br><Br>";
//just took this out
//  unlink($imgfile);
        exit();
}
        /*== temp image file -- use "tempnam()" to generate the temp
             file name. This is done so if multiple people access the 
            script at once they won't ruin each other's temp file ==*/
 

        $tmpimg = tempnam("/tmp", "MKUP");
 
        /*== RESIZE PROCESS
             1. decompress jpeg image to pnm file (a raw image type) 
             2. scale pnm image
             3. compress pnm file to jpeg image
        ==*/
       
        /*== Step 1: djpeg decompresses jpeg to pnm ==*/
   //   system("djpeg $imgfile >$tmpimg");
        

        /*== Steps 2&3: scale image using pnmscale and then
             pipe into cjpeg to output jpeg file ==*/
			 
 // system("pnmscale -xy $mywidth $myheight $tmpimg | cjpeg -smoo 10 -qual 50 >$imgfile");

        /*== remove temp image ==*/
  //  unlink($tmpimg);



    /*== setup final file location and name ==*/
    /*== change spaces to underscores in filename  ==*/



 



    $final_filename = str_replace(" ", "_", $imgfile_name);

 
 
  $newfile = $uploaddir . "/$final_filename";

    

    /*== do extra security check to prevent malicious abuse==*/
 $photos_uploaded = $_FILES['imgfile']; 



 
$counter = 0; 


copy($photos_uploaded['tmp_name'], $dirpath."/".$final_filename ); 


    /*== delete the temporary uploaded file ==*/
//just took this out
  //  unlink($imgfile);


$mysource = "realphotos" . "/"  . $realid . "/" . $final_filename;


 
$mysource = "/listingphotos/$realid/$final_filename";
list($width, $height, $type, $attr) = getimagesize("$mysource");
  
   echo("<img src=$mysource width=100px>") . " <Br> Your image has been uploaded to  " . $whatphoto . " photoname=" . $final_filename;;
echo "<br>";
 
  //  unlink($imgfile);


    /*== DO WHATEVER ELSE YOU WANT
         SUCH AS INSERT DATA INTO A DATABASE  ==*/
 

if ($final_filename != "")
{
    if ($whatphoto == "mainphoto")
    {
       mysql_query("update  listingstab SET 
           tphoto=\"$final_filename\" 
           where tlistingno=\"$Listingno\";") or die("Update 1 failed" . mysql_error());   
    }	 
    else
        if ($whatphoto == "logo")
        {
           mysql_query("update  listingstab SET 
               tlogo=\"$final_filename\" 
               where tlistingno=\"$Listingno\";") or die("Update 2 failed" . mysql_error());   
        }
       
} 

     
 
$mysourcex = "http://www.chineselawyersnetwork.com//listingphotos/$realid/$final_filename";
 
   
  
}

}
?>
<?php
if ($handle = opendir($dirpath))
{
   //reading directory here
   while (false !== ($file = readdir($handle)))
{
$myfile = $file;
     if ($myfile[0] == ".")
        {
        $count = 0;
        }
    else
        {
  //       echo " " . $file . "<Br>";
       $mytally++;

           }
}
closedir($handle);
if ($Memplan == "1")
{
Print "You have " . $mytally . " photos loaded"; 
}
}
?>
<!---- *********************************f o r m********************************* -->
    <form action="<?=$SCRIPT_NAME; ?>" method="POST" enctype="multipart/form-data" >
 
    <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
 
 <br>Personal Photo  <input  type=radio checked name=whatphoto <?php echo $selphoto1 ?> value=mainphoto>
 <br>Logo  <input  type=radio name=whatphoto <?php echo $selphoto2 ?>< value=logo>
  
 <br>  <br> 
 
Browse to select photo then click on upload.<br>

<font size="2"></font>
    <p><input type="file" name="imgfile" size="30" style="height: 24px"> 
      <input type="hidden" name="userid" value="<?php echo $userid ?>"> 
        <input type="hidden" name="Listingno" value="<?php echo $Listingno ?>"> 

    <input type="hidden" name="realid" value="<?php echo $realid ?>"> 

    <input type="submit" value="Upload" name="function">
    </form><Br><Br>
 

<a href="selectchinese.php?Listingno=<?php echo $Listingno ?>"><b>View my Listing</b></a>

 
<Br><Br>
<?php
    /*== FUNCTIONS ==*/

    function getFileExtension($str) {

        $i = strrpos($str,".");
        if (!$i) { return ""; }

        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);

        return $ext;

    }
?>

<Br>
</Td>
</tr></table>
</Td>
</tr></table>
</Td>
</tr></table>

</center>
<body>
</body>
</html>
