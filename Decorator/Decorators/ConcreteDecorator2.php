<?php 

namespace Decorator\Decorators;

use Decorator\Decorator;
use Decorator\Component;

class ConcreteDecorator2 extends Decorator{
    public function __construct(Component $component){
        $this->value = 800;
        $this->data = $component;
    }

    public function getData(){
        return $this->data->getData() . "Concrete Decorator 2 Value : {$this->value}\n";
    }

    public function getValue(){
        return $this->value + $this->data->getValue();
    }
}