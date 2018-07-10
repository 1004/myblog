<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2018/2/27 0027
 * Time: 15:15
 */
require_once './bean/Teacher.php';

use day09\bean\Teacher as T;

$student = new T();

$student->name = "xky";
$student->age = "12";

echo $student->name;

