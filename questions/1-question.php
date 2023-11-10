<?php
include("../src/Model/Tools.php");
include('../src/Controller/HomeController.php');

$homeController = new HomeController();
$initialData = (new Tools())->data; 
$homeController->printFormatedKeyValue($initialData);
