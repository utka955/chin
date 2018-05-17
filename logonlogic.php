<?php
session_start();
$goto=$_REQUEST['goto'];
$userid=$_REQUEST['userid'];
$password=$_REQUEST['password'];
 //Username Stored for logging 
define("USER1", "berger"); 

// Password Stored 
define("PASS1", "gary789"); 

 //Username Stored for logging 
define("USER2", "gary"); 

// Password Stored 
define("PASS2", "gary456"); 

include("chinesedbconnect.html");  

$auth = "";
  

 
 


 
 

    
                // Section for logging process ----------- 
             
                if($userid == USER1 && $password == PASS1) 
                    { 
                        // Successful login ------------------ 
                       
                        // Setting Session 
                        $_SESSION['user'] = $userid; 
                       
                        $auth = "A";
                        $_SESSION["auth"] = $auth;
                        $_SESSION['message'] = "You are now logged on as " .  $userid; 
                        // Redirecting to the logged page. 
                        header("Location: admin1.php"); 
                        exit();
                    } 

               if($userid == USER2 && $password == PASS2) 
                    { 
                        // Successful login ------------------ 
                        
                        // Setting Session 
                          $_SESSION['user'] = $userid; 
                       
                        $auth = "G";
                        $_SESSION["auth"] = $auth;
                        $_SESSION['message'] = "You are now logged on as " .  $userid; 
                        // Redirecting to the logged page. 
                     header("Location: admin1.php"); 
                        exit();
                    } 


                
      
 

 
$_SESSION["auth"] = $auth;
 
 
$_SESSION['message'] = "Logon attemp failed"; 
header("Location: loginpc.php"); 
exit();
 
 
 
 

?>