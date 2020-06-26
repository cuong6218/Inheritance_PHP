<?php
    include_once('Pointer2D.php');
    class Pointer3D extends Pointer2D{
        private $z;
        public function __construct($x, $y, $z)
        {
            parent::__construct($x,$y);
            $this->z = $z;
        }
        public function setZ($value){
            $this->z = $value;
        }
        public function getZ(){
            return $this->z;
        }
        public function setXYZ($x, $y, $z){
            parent::setX($x);
            parent::setY($y);
            $this->setZ($z);
        }
        public function getXYZ(){
            $arr = [];
            array_push($arr, parent::getX(), parent::getY(), $this->getZ());
            return $arr;
        }
        public function __toString()
        {
            return '('.parent::getX().','.parent::getY().','.$this->getZ().')';
        }
    }