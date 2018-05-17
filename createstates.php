 

<?php
include("chinesedbconnect.html"); 
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
'Indiana',
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
 
 




 
	
//test
$number = 49; 
//$number = 2; 

$MyIndex = 0;

while ($MyIndex < $number)
      
    { 
       
    
print "<br>myindex=" . $MyIndex;
 
print "<Br>state=" . $states[$MyIndex];
 
$State = $states[$MyIndex];

$thestate = $State;



 



 
 


$myFile = $thestate . ".htm";
$myFile = str_replace(" ", "", $myFile);
print "<Br>myfile=" . $myFile;
///test only

//$MyFile = "teststate.html";

$fh = fopen($myFile, 'w') or die("can't open file");

$stringData = "<?php  include(\"statecopychin.html\"); ?>";
fwrite($fh, $stringData);

 
 
 
 
fclose($fh);
 

     $MyIndex++;

}

print "<Br>end";
?>

 