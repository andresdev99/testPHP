<?php
include("../src/Model/Tools.php");
include('../src/Controller/OrderController.php');

$initialData = (new Tools())->data; 

$orderController = new OrderController();
$orderController->sortByKey($initialData, "account_id");
Tools::print($initialData);

