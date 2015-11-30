set of common function 
==================


~~~php
$data = array(
            array('min'=>0,'max'=>50,'data'=>'range - 1'),
            array('min'=>50,'max'=>100,'data'=>'range - 2'),
            array('min'=>100,'max'=>500,'data'=>'range - 3'),
            array('min'=>500,'max'=>1000,'data'=>'range - 4'),
        );

$rangeData = new PhpUtils\RangedData($data);
$rangeData->get(0);     //range - 1
$rangeData->get(10);     //range - 1
$rangeData->get(49);     //range - 1
$rangeData->get(50);     //range - 2
$rangeData->get(55);     //range - 2
$rangeData->get(99);     //range - 2
$rangeData->get(100);     //range - 3
$rangeData->get(150);     //range - 3
$rangeData->get(499);     //range - 3
$rangeData->get(500);     //range - 4
$rangeData->get(600);     //range - 4
$rangeData->get(999);     //range - 4
~~~
