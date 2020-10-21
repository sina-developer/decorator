<?php

namespace Decorator;

abstract class Component{
    protected $value;
    protected $data;

    abstract public function getValue();
    abstract public function getData();
    
}