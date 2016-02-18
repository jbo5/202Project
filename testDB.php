#!/usr/bin/php
<?php

$db = new mysqli("localhost", "root", "jman23", "it202");
/**/

if($db->connect_errno > 0)
{
  echo __FILE__.__LINE__." Error: ".$db->connect_error.PHP_EOL;
  exit(-1);
}
  
echo "We are connected to DATABASE".PHP_EOL;


$query = "select * from Student;";

$results = $db->query($query);

print_r($results);

while($row = $results->fetch_assoc())
{
  print_r($row);
}

$db->close();

?>