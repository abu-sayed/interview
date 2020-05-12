<?php
namespace App;

require_once __DIR__."./../vendor/autoload.php";

use Numbers\PapowNumber;

$papowNumber = new PapowNumber();
$numbers = $papowNumber->processNumbers(1, 20);
$papowNumber->print($numbers, ' ');