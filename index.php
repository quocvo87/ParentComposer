<?php
require __DIR__.'/vendor/autoload.php';

echo 'This is ParentComposer page </br>';

use ChildComposer\Child;
Child::process();
echo '<br>';
Child::callMapping();
echo '<br>';

use TrueMe\MapArr;
$mapArr = new MapArr;
$fee = 1111;
$tax = 2222;

$newProduct1 = 'pro 1';
$newProduct2 = 'pro 2';
$revenueProduct = [$newProduct1, $newProduct2];

var_dump($mapArr->snake()->build([$fee, $tax, $revenueProduct])->get());


echo '<br>';
use ParentComposer\ParentClass;
ParentClass::process();
