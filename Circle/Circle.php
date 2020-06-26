<?php
namespace CircleK;
    class Circle{
        public $radius;
        public $color;

        public function __construct($radius, $color)
        {
            $this->radius = $radius;
            $this->color = $color;
        }
        public function setRadius($radius){
            $this->radius = $radius;
        }
        public function getRadius(){
            return $this->radius;
        }

        public function setColor($color){
            $this->color = $color;
        }
        public function getColor(){
            return $this->color;
        }
        public function calcArea(){
            return pi()*pow($this->getRadius(),2);
        }
        public function __toString()
        {
            return 'Circle with radius '.$this->getRadius().' and color '.$this->getColor().'<br/>Area of circle: '.$this->calcArea();
        }
    }
