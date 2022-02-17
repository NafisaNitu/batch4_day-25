<?php

//session_start();
//
//echo session_id();

//$_SESSION['name'] = 'BITM';
//$_SESSION['city'] = 'Dhaka';
//$_SESSION['country'] = 'Bangladesh';
//$_SESSION['mobile'] = '012345678';


require_once 'vendor/autoload.php';

use App\Classes\Home;
use App\Classes\Student;

//$homeObj = new Home();
//$homeObj->index();

$student = new Student();
//$student->manage();
$student->one();
$student->two();
