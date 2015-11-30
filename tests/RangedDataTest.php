<?php

namespace PhpUtils\Tests;
use PhpUtils\RangedData;
class RangedDataTest extends \PHPUnit_Framework_TestCase{



    public function testGet(){
        $data = array(
            array('min'=>0,'max'=>50,'data'=>'range - 1'),
            array('min'=>50,'max'=>100,'data'=>'range - 2'),
            array('min'=>100,'max'=>500,'data'=>'range - 3'),
            array('min'=>500,'max'=>1000,'data'=>'range - 4'),
        );

        $rangeData = new RangedData($data);

        $this->assertEquals($data[0]['data'],$rangeData->get(0));
        $this->assertEquals($data[0]['data'],$rangeData->get(10));
        $this->assertEquals($data[0]['data'],$rangeData->get(49));
        $this->assertEquals($data[1]['data'],$rangeData->get(50));
        $this->assertEquals($data[1]['data'],$rangeData->get(55));
        $this->assertEquals($data[1]['data'],$rangeData->get(99));
        $this->assertEquals($data[2]['data'],$rangeData->get(100));
        $this->assertEquals($data[2]['data'],$rangeData->get(150));
        $this->assertEquals($data[2]['data'],$rangeData->get(499));
        $this->assertEquals($data[3]['data'],$rangeData->get(500));
        $this->assertEquals($data[3]['data'],$rangeData->get(600));
        $this->assertEquals($data[3]['data'],$rangeData->get(999));
        $this->assertEquals(null,$rangeData->get(1000));
        $this->assertEquals('empty',$rangeData->get(1000,'empty'));
    }
}