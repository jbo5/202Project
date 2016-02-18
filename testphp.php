#!/usr/bin/php
<?php 

# this is a comment, yo

echo "begin script ".$argv[0].PHP_EOL;


class Student
{
  private $name ;
  private $address;
  private $gpa;
  private $year;
  private $major;
  
  public function __construct($name)
  {
    $this->name = $name;
  }
  
  public function printName()
  {
    echo "name: ".$this->name.PHP_EOL;
  }
  
  public function setGPA($gpa)
  {
    $this->gpa = $gpa;
  }
  
  public function printGPA()
  {
    echo "GPA: " . $this->gpa.PHP_EOL;
  }
  
  
  

  
}

  $myStudent = new Student("Joshua");
  $myStudent->setGPA(3.43);
  $myStudent->printName();
  $myStudent->printGPA();
  $myStudent->major = "Computing and Business";


$var = "some value";
$number =2223243;
$realNumber = 1233223.233323;
$arr = array();
$arr [] = 5;
$arr [] = "words";
$arr [] = 3453434.3443;
$arr [] =array("food", "water", "shelter", "heart");




//print_r($arr);

//gives information about type of variable
//var_dump($arr);


echo "end script ".$argv[0].PHP_EOL;


?>