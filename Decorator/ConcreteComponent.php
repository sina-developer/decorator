<?php

namespace Decorator;

use Decorator\Component;

class ConcreteComponent extends Component{
    public function __construct(){
        $this->value = 1000;
        $this->data = "Concrete Component Value : {$this->value}\n";
    }

    public function getData(){
        return $this->data;
    }

    public function getValue(){
        return $this->value;
    }
}