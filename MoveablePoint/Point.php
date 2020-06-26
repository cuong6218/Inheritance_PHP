<?php
    class Point{
        protected $x;
        protected $y;
        public function __construct($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
        }

        public function setX($x){
            $this->x = $x;
        }
        public function getX(){
            return $this->x;
        }

        public function setY($y){
            $this->y = $y;
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
            array_push($arr, $this->x, $this->y);
            print_r($arr);
        }
        public function __toString()
        {
            return '('.$this->x.','.$this->y.')';
        }
    }