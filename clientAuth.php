#!/usr/bin/php
<?php
 require_once("clientDB.php.inc");
 
 $command = $argv[1];

 
 $db = new clientDB();
 
 switch($command){
 
  case 'register';
     $name = $argv[2];
     $password = $argv[3];
     $db = new clientDB();
     $db->addNewClient($name,$password);
     break;
  case 'login'
     $name = $argv[2];
     $password = $argv[3];
     $db = new clientDB();
     if($db->validateClients($name,$password) == 0)
     {
     
     echo "invalid Login!".PHP_EOL;
     
     }
     else{
     
	echo "login succesfull".PHP_EOL;
     
     }
     break;
     
  default:
    echo "usage: \n".$argv[0]." [register|login] <username> <password>".PHP_EOl;
    break;
  
 
 }

?>