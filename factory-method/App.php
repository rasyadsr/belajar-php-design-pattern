<?php 

require_once __DIR__ . '/EmployeeFactory.php';
require_once __DIR__ . '/AnimalFactory.php';

$managerOne = EmployeeFactory::createManager('siPalingManager');

$staffOne = EmployeeFactory::createStaff('siPalingStaff');

echo '<pre>'; var_dump([$managerOne, $staffOne]); echo '</pre>';

$dog = AnimalFactory::create('dog');
$cat = AnimalFactory::create('cat');
$tiger = AnimalFactory::create('tiger');
echo '<pre>'; var_dump([$dog, $cat, $tiger]); echo '</pre>';

