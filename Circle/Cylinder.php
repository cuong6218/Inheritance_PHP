<?php
namespace CylinderK;
    use CircleK\Circle;
    include_once('Circle.php');
    class Cylinder extends Circle{
        public $height;
        public function __construct($radius, $color, $height)
        {
            parent::__construct($radius, $color);
            $this->height = $height;
        }
        public function setHeight($height){
            $this->height = $height;
        }
        public function getHeight(){
            return $this->height;
        }
        public function calcVolume(){
            return parent::getRadius()*pi()*$this->getHeight();
        }
        public function __toString()
        {
            return 'Cylinder with radius: '.$this->getRadius().' and color '.$this->getColor().' and height: '.$this->getHeight().'<br/>Volume of cylinder: '.$this->calcVolume();
        }
    }