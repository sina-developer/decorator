<?php 

namespace Decorator\Decorators;

use Decorator\Decorator;
use Decorator\Component;

class ConcreteDecorator1 extends Decorator{
    public function __construct(Component $component){
        $this->value = 500;
        $this->data = $component;
    }

    public function getData(){
        return $this->data->getData() . "Concrete Decorator 1 Value : {$this->value}\n";
    }

    public function getValue(){
        return $this->value + $this->data->getValue();
    }
}