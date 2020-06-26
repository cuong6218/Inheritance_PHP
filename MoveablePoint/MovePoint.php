<?php
    include_once('Point.php');
    class MovePoint extends Point{
        private $xSpeed;
        private $ySpeed;
        public function __construct($x, $y, $xSpeed, $ySpeed)
        {
            parent::__construct($x, $y);
            $this->xSpeed = $xSpeed;
            $this->ySpeed = $ySpeed;
        }

        public function setXSPeed($xSpeed){
            $this->xSpeed = $xSpeed;
        }
        public function getXSpeed(){
            return $this->xSpeed;
        }

        public function setYSPeed($ySpeed){
            $this->ySpeed = $ySpeed;
        }
        public function getYSpeed(){
            return $this->ySpeed;
        }
        public function setSpeed($xSpeed, $ySpeed){
            $this->xSpeed = $xSpeed;
            $this->ySpeed = $ySpeed;
        }
        public function getSpeed(){
            $arr = [];
            array_push($arr, $this->xSpeed, $this->ySpeed);
            return $arr;
        }
        public function __toString()
        {
            return parent::__toString().', speed = ('.$this->getXSpeed().','.$this->getYSpeed().')';
        }
        public function move(){
            $x = parent::getX() + $this->getXSpeed();
            $y = parent::getY() + $this->getYSpeed();
            parent::setXY($x, $y);
            return $this;
        }

    }