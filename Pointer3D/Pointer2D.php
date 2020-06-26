<?php
    class Pointer2D{
        protected $x;
        protected $y;

        public function __construct($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
        }
        public function setX($value){
            $this->x = $value;
        }
        public function getX(){
            return $this->x;
        }
        public function setY($value){
            $this->y = $value;
        }
        public function getY(){
            return $this->y;
        }
        public function setXY($x, $y){
            $this->x = $x;
            $this->y = $y;
        }
        public function getXY(){
            $arr = [];
            array_push($arr, $this->getX(), $this->getY());
            return $arr;
        }
        public function __toString()
        {
            return '('.$this->getX().','.$this->getY().')';
        }
    }