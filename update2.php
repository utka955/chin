<?php 
include("chinesedbconnect.html");  
//$_SESSION["Bio"] = $Bio; 
//$_SESSION["Spanishbio"] = $Spanishbio; 
$Listingno=mysql_real_escape_string($_REQUEST['Listingno']);
$Title=mysql_real_escape_string($_REQUEST['Title']);
$Orientation=mysql_real_escape_string($_REQUEST['Orientation']);
$Bio=$_REQUEST['Bio']; 
$Chinesebio=$_REQUEST['Chinesebio']; 
$personalinjury=mysql_real_escape_string($_REQUEST['personalinjury']);
$accident=mysql_real_escape_string($_REQUEST['accident']);
$criminal=mysql_real_escape_string($_REQUEST['criminal']);
$federal=mysql_real_escape_string($_REQUEST['federal']);
$divorce=mysql_real_escape_string($_REQUEST['divorce']);
$family=mysql_real_escape_string($_REQUEST['family']);
$immigration=mysql_real_escape_string($_REQUEST['immigration']);
$dui=mysql_real_escape_string($_REQUEST['dui']);
$traffic=mysql_real_escape_string($_REQUEST['traffic']);
$socsec=mysql_real_escape_string($_REQUEST['socsec']);
$realestate=mysql_real_escape_string($_REQUEST['realestate']);
$foreclosure=mysql_real_escape_string($_REQUEST['foreclosure']);
$business=mysql_real_escape_string($_REQUEST['business']);
$international=mysql_real_escape_string($_REQUEST['international']);
$bankruptcy=mysql_real_escape_string($_REQUEST['bankruptcy']);
$landlord=mysql_real_escape_string($_REQUEST['landlord']);
$estate=mysql_real_escape_string($_REQUEST['estate']);
$employment=mysql_real_escape_string($_REQUEST['employment']);
$civilrightslabor=mysql_real_escape_string($_REQUEST['civilrightslabor']);
$civilrights=mysql_real_escape_string($_REQUEST['civilrights']);
$medical=mysql_real_escape_string($_REQUEST['medical']);
$wrongfuldeath=mysql_real_escape_string($_REQUEST['wrongfuldeath']);
$tax=mysql_real_escape_string($_REQUEST['tax']);
$insurance=mysql_real_escape_string($_REQUEST['insurance']);
$patents=mysql_real_escape_string($_REQUEST['patents']);
$entertainment=mysql_real_escape_string($_REQUEST['entertainment']);
$military=mysql_real_escape_string($_REQUEST['military']);
$workerscomp=mysql_real_escape_string($_REQUEST['workerscomp']);
$catastrophic=mysql_real_escape_string($_REQUEST['catastrophic']);  
$civillitigation=mysql_real_escape_string($_REQUEST['civillitigation']);  
$disability=mysql_real_escape_string($_REQUEST['disability']);  
$domestic=mysql_real_escape_string($_REQUEST['domestic']);  
$insuranceclaim=mysql_real_escape_string($_REQUEST['insuranceclaim']);  
$nursing=mysql_real_escape_string($_REQUEST['nursing']);  
$product=mysql_real_escape_string($_REQUEST['product']);  
$mediation=mysql_real_escape_string($_REQUEST['mediation']);  
$juvenile=mysql_real_escape_string($_REQUEST['juvenile']);  
$classaction=mysql_real_escape_string($_REQUEST['classaction']);  
$paternity=mysql_real_escape_string($_REQUEST['paternity']);  
$shortsales=mysql_real_escape_string($_REQUEST['shortsales']); 
$childcustody=mysql_real_escape_string($_REQUEST['childcustody']); 
$loanmodifications=mysql_real_escape_string($_REQUEST['loanmodifications']); 
$domesticrelations=mysql_real_escape_string($_REQUEST['domesticrelations']); 
$mexican=mysql_real_escape_string($_REQUEST['mexican']); 
$childsupport=mysql_real_escape_string($_REQUEST['childsupport']); 
 $businesstransactions=mysql_real_escape_string($_REQUEST['businesstransactions']); 
 $businessformation=mysql_real_escape_string($_REQUEST['businessformation']); 
   $construction=mysql_real_escape_string($_REQUEST['construction']); 
  $irs=mysql_real_escape_string($_REQUEST['irs']); 
 $brain=mysql_real_escape_string($_REQUEST['brain']); 
 $dog=mysql_real_escape_string($_REQUEST['dog']); 
 $veterans=mysql_real_escape_string($_REQUEST['veterans']); 
$healthcare=mysql_real_escape_string($_REQUEST['healthcare']); 
$maritime=mysql_real_escape_string($_REQUEST['maritime']); 
$managementdefense=mysql_real_escape_string($_REQUEST['managementdefense']); 
$gayrights=mysql_real_escape_string($_REQUEST['gayrights']); 
$harassment=mysql_real_escape_string($_REQUEST['harassment']); 
$lemonlaw=mysql_real_escape_string($_REQUEST['lemonlaw']); 
$fairdebt=mysql_real_escape_string($_REQUEST['fairdebt']); 
 $breach=mysql_real_escape_string($_REQUEST['breach']); 
$contracts=mysql_real_escape_string($_REQUEST['contracts']); 
$homeowners=mysql_real_escape_string($_REQUEST['homeowners']); 
$animal=mysql_real_escape_string($_REQUEST['animal']); 
$legal=mysql_real_escape_string($_REQUEST['legal']); 
$slip=mysql_real_escape_string($_REQUEST['slip']); 
$elderlaw=mysql_real_escape_string($_REQUEST['elderlaw']); 
$conaccidents=mysql_real_escape_string($_REQUEST['conaccidents']); 
$civilappeals=mysql_real_escape_string($_REQUEST['civilappeals']); 
$criminalappeals=mysql_real_escape_string($_REQUEST['criminalappeals']); 

$EB5=mysql_real_escape_string($_REQUEST['EB5']); 
$chinausa=mysql_real_escape_string($_REQUEST['chinausa']); 
$chneselaws=mysql_real_escape_string($_REQUEST['chineselaws']); 
$intbustrans=mysql_real_escape_string($_REQUEST['intbustrans']); 
  
    
$mysessid = $PHPSESSID;
  


$printmess = " <b>  Enter your data here.</b> ";

$printmess2 = "";
 
$sure = "n";
$isitvalid = "y";




$nodata =  "";

 mysql_query("update listingstab 
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

         where tlistingno = \"$Listingno\";") or die("Update 1 failed" . mysql_error()); 

$realid = $Listingno;
 
$dir =  $_SERVER['DOCUMENT_ROOT'];  
  
 
$dirpath =  $dir . "/listingphotos/$realid";
 

   print 
	 "<META http-equiv=\"refresh\"content=\"0;url=selectchinese.php?Listingno=$Listingno\">";
 

 ?>    
