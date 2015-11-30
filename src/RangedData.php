<?php

namespace PhpUtils;
class RangedData{
    private $_data;
    public function __construct($data){
        $this->_data = $data;
    }

    public function get($value,$default=null){
        foreach($this->_data as $item){
            if($value>=$item['min'] && $value<$item['max']){
                return $item['data'];
            }
        }
        return $default;
    }
}