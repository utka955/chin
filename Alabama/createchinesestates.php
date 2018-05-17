 

<?php
include("chinesedbconnect.html"); 


$MyIndex1 = 0; 
$result1 = mysql_query("SELECT * FROM  practicetab
 
order by pseq",$db) or die("cant read it");

 $number1 = mysql_numrows($result1);
  
 



$states = array(
'Alabama',
'Alaska',
'Arizona',
'Arkansas',
'California',
'Colorado',
'Connecticut',
'Delaware',
'Florida',
'Georgia',
'Hawaii',
'Idaho',
'Illinois',
'Indian',
'Iowa',
'Kansas',
'Kentucky',
'Louisiana',
'Maine',
'Maryland',
'Massachusetts',
'Michigan',
'Minnesota',
'Mississippi',
'Missouri',
'Montana',
'Nebraska',
'Nevada',
'New Hampshire',
'New Jersey',
'New Mexico',
'New York',
'North Carolina',
'North Dakota',
'Ohio',
'Oklahoma',
'Oregon',
'Pennsylvania',
'Rhode Island',
'South Carolina',
'South Dakota',
'Tennessee',
'Texas',
'Utah',
'Vermont',
'Virginia',
'Washington',
'West Virginia',
'Wisconsin',
'Wyoming'
);

$go = 0;
while ($go < 50)
{
print "<Br>st=" . $states[$go];


$dir =  $_SERVER['DOCUMENT_ROOT'];  
$thestate =  $states[$go];

$dirpath =  $dir . "/$thestate";
print "<Br>path=" . $dirpath;

mkdir("$dirpath", 0775);

$MyIndex1 = 0;
while ($MyIndex1 < $number1)
      
{
  $Shortname = (mysql_result($result1,$MyIndex1,"pshortname"));
  $Desc = (mysql_result($result1,$MyIndex1,"pdesc"));
  $Pagename = (mysql_result($result1,$MyIndex1,"ppagename"));
    $Capsname = (mysql_result($result1,$MyIndex1,"pcapsname"));
   $Spanish = (mysql_result($result1,$MyIndex1,"pchinese"));
print "<Br>pagename=" . $Pagename;
$MyFile = "$thestate/$Pagename";

 
$file = fopen("$MyFile","w"); 


$stringData = "<?php\n";
fwrite($file, $stringData);

 
 


$stringData = "include(\"../chinesedbconnect.html\");\n";
fwrite($file, $stringData);

$stringData = "include(\"../chinesebasic.php\");\n";
fwrite($file, $stringData);

//$stringData = "include(\"chinesetopr.html\");\n";
//fwrite($file, $stringData);

 

 
$stringData = "?>\n";
fwrite($file, $stringData);

 
 
fclose($file);

$MyIndex1++;
}




$go++;
}


 






 
 

///test only

$MyFile = "California/chinesechinausabusinesslawyer.htm";

//$fh = fopen($myFile, 'w') or die("can't open file");
$file = fopen("$MyFile","w"); 
$stringData = "<?php\n";
fwrite($file, $stringData);

 
 


$stringData = "include(\"../chinesedbconnect.html\");\n";
fwrite($file, $stringData);

$stringData = "include(\"../chinesebasic.php\");\n";
fwrite($file, $stringData);

//$stringData = "include(\"chinesetopr.html\");\n";
//fwrite($file, $stringData);

 

 
$stringData = "?>\n";
fwrite($file, $stringData);

 
 
fclose($file);
//}

//     $MyIndex++;

//}

print "<Br>end";
?>

 