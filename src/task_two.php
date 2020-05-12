<?php
namespace App;

require_once __DIR__."./../vendor/autoload.php";

use Numbers\HateehoNumber;

$hateehoNumber = new HateehoNumber();
$numbers = $hateehoNumber->processNumbers(1, 15);
$hateehoNumber->print($numbers, '-');