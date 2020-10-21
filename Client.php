<?php

use Decorator\ConcreteComponent;
use Decorator\Component;

use Decorator\Decorators\ConcreteDecorator1;
use Decorator\Decorators\ConcreteDecorator2;

class Client{
    private $component;

    public function __construct(){
        $this->component = new ConcreteComponent();
        $this->component = $this->wrapComponent($this->component);

        echo $this->component->getData();
        echo "Value : \n";
        echo $this->component->getValue();
    }

    private function wrapComponent(Component $component){

        $component = new ConcreteDecorator1($component);
        $component = new ConcreteDecorator2($component);
        return $component;
    }
}