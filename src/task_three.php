<?php
namespace App;

require_once __DIR__."./../vendor/autoload.php";

use Numbers\JofftchoffNumber;

$jofftchoffNumber = new JofftchoffNumber();
$numbers = $jofftchoffNumber->processNumbers(1, 10);
$jofftchoffNumber->print($numbers, '-');