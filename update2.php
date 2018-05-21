<?php 
include("chinesedbconnect.html");  
//$_SESSION["Bio"] = $Bio; 
//$_SESSION["Spanishbio"] = $Spanishbio; 
$Listingno=mysqli_real_escape_string($db,$_REQUEST['Listingno']);
$Title=mysqli_real_escape_string($db,$_REQUEST['Title']);
$Orientation=mysqli_real_escape_string($db,$_REQUEST['Orientation']);
$Bio=$_REQUEST['Bio']; 
$Chinesebio=$_REQUEST['Chinesebio']; 
$personalinjury=mysqli_real_escape_string($db,$_REQUEST['personalinjury']);
$accident=mysqli_real_escape_string($db,$_REQUEST['accident']);
$criminal=mysqli_real_escape_string($db,$_REQUEST['criminal']);
$federal=mysqli_real_escape_string($db,$_REQUEST['federal']);
$divorce=mysqli_real_escape_string($db,$_REQUEST['divorce']);
$family=mysqli_real_escape_string($db,$_REQUEST['family']);
$immigration=mysqli_real_escape_string($db,$_REQUEST['immigration']);
$dui=mysqli_real_escape_string($db,$_REQUEST['dui']);
$traffic=mysqli_real_escape_string($db,$_REQUEST['traffic']);
$socsec=mysqli_real_escape_string($db,$_REQUEST['socsec']);
$realestate=mysqli_real_escape_string($db,$_REQUEST['realestate']);
$foreclosure=mysqli_real_escape_string($db,$_REQUEST['foreclosure']);
$business=mysqli_real_escape_string($db,$_REQUEST['business']);
$international=mysqli_real_escape_string($db,$_REQUEST['international']);
$bankruptcy=mysqli_real_escape_string($db,$_REQUEST['bankruptcy']);
$landlord=mysqli_real_escape_string($db,$_REQUEST['landlord']);
$estate=mysqli_real_escape_string($db,$_REQUEST['estate']);
$employment=mysqli_real_escape_string($db,$_REQUEST['employment']);
$civilrightslabor=mysqli_real_escape_string($db,$_REQUEST['civilrightslabor']);
$civilrights=mysqli_real_escape_string($db,$_REQUEST['civilrights']);
$medical=mysqli_real_escape_string($db,$_REQUEST['medical']);
$wrongfuldeath=mysqli_real_escape_string($db,$_REQUEST['wrongfuldeath']);
$tax=mysqli_real_escape_string($db,$_REQUEST['tax']);
$insurance=mysqli_real_escape_string($db,$_REQUEST['insurance']);
$patents=mysqli_real_escape_string($db,$_REQUEST['patents']);
$entertainment=mysqli_real_escape_string($db,$_REQUEST['entertainment']);
$military=mysqli_real_escape_string($db,$_REQUEST['military']);
$workerscomp=mysqli_real_escape_string($db,$_REQUEST['workerscomp']);
$catastrophic=mysqli_real_escape_string($db,$_REQUEST['catastrophic']);  
$civillitigation=mysqli_real_escape_string($db,$_REQUEST['civillitigation']);  
$disability=mysqli_real_escape_string($db,$_REQUEST['disability']);  
$domestic=mysqli_real_escape_string($db,$_REQUEST['domestic']);  
$insuranceclaim=mysqli_real_escape_string($db,$_REQUEST['insuranceclaim']);  
$nursing=mysqli_real_escape_string($db,$_REQUEST['nursing']);  
$product=mysqli_real_escape_string($db,$_REQUEST['product']);  
$mediation=mysqli_real_escape_string($db,$_REQUEST['mediation']);  
$juvenile=mysqli_real_escape_string($db,$_REQUEST['juvenile']);  
$classaction=mysqli_real_escape_string($db,$_REQUEST['classaction']);  
$paternity=mysqli_real_escape_string($db,$_REQUEST['paternity']);  
$shortsales=mysqli_real_escape_string($db,$_REQUEST['shortsales']); 
$childcustody=mysqli_real_escape_string($db,$_REQUEST['childcustody']); 
$loanmodifications=mysqli_real_escape_string($db,$_REQUEST['loanmodifications']); 
$domesticrelations=mysqli_real_escape_string($db,$_REQUEST['domesticrelations']); 
$mexican=mysqli_real_escape_string($db,$_REQUEST['mexican']); 
$childsupport=mysqli_real_escape_string($db,$_REQUEST['childsupport']); 
 $businesstransactions=mysqli_real_escape_string($db,$_REQUEST['businesstransactions']); 
 $businessformation=mysqli_real_escape_string($db,$_REQUEST['businessformation']); 
   $construction=mysqli_real_escape_string($db,$_REQUEST['construction']); 
  $irs=mysqli_real_escape_string($db,$_REQUEST['irs']); 
 $brain=mysqli_real_escape_string($db,$_REQUEST['brain']); 
 $dog=mysqli_real_escape_string($db,$_REQUEST['dog']); 
 $veterans=mysqli_real_escape_string($db,$_REQUEST['veterans']); 
$healthcare=mysqli_real_escape_string($db,$_REQUEST['healthcare']); 
$maritime=mysqli_real_escape_string($db,$_REQUEST['maritime']); 
$managementdefense=mysqli_real_escape_string($db,$_REQUEST['managementdefense']); 
$gayrights=mysqli_real_escape_string($db,$_REQUEST['gayrights']); 
$harassment=mysqli_real_escape_string($db,$_REQUEST['harassment']); 
$lemonlaw=mysqli_real_escape_string($db,$_REQUEST['lemonlaw']); 
$fairdebt=mysqli_real_escape_string($db,$_REQUEST['fairdebt']); 
 $breach=mysqli_real_escape_string($db,$_REQUEST['breach']); 
$contracts=mysqli_real_escape_string($db,$_REQUEST['contracts']); 
$homeowners=mysqli_real_escape_string($db,$_REQUEST['homeowners']); 
$animal=mysqli_real_escape_string($db,$_REQUEST['animal']); 
$legal=mysqli_real_escape_string($db,$_REQUEST['legal']); 
$slip=mysqli_real_escape_string($db,$_REQUEST['slip']); 
$elderlaw=mysqli_real_escape_string($db,$_REQUEST['elderlaw']); 
$conaccidents=mysqli_real_escape_string($db,$_REQUEST['conaccidents']); 
$civilappeals=mysqli_real_escape_string($db,$_REQUEST['civilappeals']); 
$criminalappeals=mysqli_real_escape_string($db,$_REQUEST['criminalappeals']); 

$EB5=mysqli_real_escape_string($db,$_REQUEST['EB5']); 
$chinausa=mysqli_real_escape_string($db,$_REQUEST['chinausa']); 
$chneselaws=mysqli_real_escape_string($db,$_REQUEST['chineselaws']); 
$intbustrans=mysqli_real_escape_string($db,$_REQUEST['intbustrans']); 
  
    
$mysessid = $PHPSESSID;
  


$printmess = " <b>  Enter your data here.</b> ";

$printmess2 = "";
 
$sure = "n";
$isitvalid = "y";




$nodata =  "";

 mysqli_new_query("update listingstab 
      SET 
  tpersonalinjury = \"$personalinjury\",
  taccident = \"$accident\",
  tcriminal = \"$criminal\",
  tfederal = \"$federal\",
  tdivorce = \"$divorce\",
  tfamily = \"$family\",
  timmigration = \"$immigration\",
  tdui = \"$dui\",
  ttraffic = \"$traffic\",
  tsocsec = \"$socsec\",
  trealestate = \"$realestate\",
  tforeclosure = \"$foreclosure\",
  tbusiness = \"$business\",
  tlandlord = \"$landlord\",
  tinternational = \"$international\",
  tbankruptcy = \"$bankruptcy\",
  tlandlord = \"$landlord\",
  testate = \"$estate\",
  temployment = \"$employment\",
  tcivilrightslabor = \"$civilrightslabor\",
  tcivilrights = \"$civilrights\",
  tmedical = \"$medical\",
  twrongfuldeath = \"$wrongfuldeath\",
  ttax = \"$tax\",
  tinsurance = \"$insurance\",
  tpatents = \"$patents\",
  tentertainment = \"$entertainment\",
  tmilitary = \"$military\",
tbrain = \"$brain\",
tdog = \"$dog\",
tbrain = \"$brain\",
tveterans = \"$veterans\",
tworkerscomp = \"$workerscomp\",
tcatastrophic = \"$catastrophic\",
tcivillitigation = \"$civillitigation\",
tdisability = \"$disability\",
tdomestic = \"$domestic\",
tinsuranceclaim = \"$insuranceclaim\",
tnursing = \"$nursing\",
tproduct = \"$product\",
tmediation = \"$mediation\",
tjuvenile = \"$juvenile\",
tclassaction = \"$classaction\",
tpaternity = \"$paternity\",
tshortsales = \"$shortsales\",
tchildcustody = \"$childcustody\",
tloanmodification = \"$loanmodification\",
tdomesticrelations = \"$domesticrelations\",
tmexican = \"$mexican\",
tirs = \"$irs\",
tchildsupport = \"$childsupport\",
tbusinesstransactions = \"$businesstransactions\",
tbusinessformation = \"$businessformation\",
tconstruction = \"$construction\",
thealthcare = \"$healthcare\",
tmaritime = \"$maritime\",
tmanagementdefense = \"$managementdefense\",
tgayrights = \"$gayrights\",
tharassment = \"$harassment\",
tintellectual = \"$intellectual\",
tlemonlaw = \"$lemonlaw\",
tfairdebt = \"$fairdebt\",
tbreach = \"$breach\",
thomeowners = \"$homeowners\",
tanimal = \"$animal\",
tslip = \"$slip\",
telderlaw = \"$elderlaw\",
tcriminalappeals = \"$criminalappeals\",
tcivilappeals = \"$civilappeals\",
tconaccidents = \"$conaccidents\",
tlegal = \"$legal\",
tEB5 = \"$EB5\",
tchinausa = \"$chinausa\",
tchineselaws  = \"$chineselaws\",
tintbustrans  = \"$intbustrans\",
tcontracts = \"$contracts\",
  tchinesebio = \"$Chinesebio\",
  tbio = \"$Bio\"

         where tlistingno = \"$Listingno\";",$db) or die("Update 1 failed" . mysql_error()); 

$realid = $Listingno;
 
$dir =  $_SERVER['DOCUMENT_ROOT'];  
  
 
$dirpath =  $dir . "/listingphotos/$realid";

   print 
	 "<META http-equiv=\"refresh\"content=\"0;url=selectchinese.php?Listingno=$Listingno\">";
 

 ?>    
