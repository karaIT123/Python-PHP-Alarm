<?php

class Alarm {
    private $id;
    private $status;
    private $z1;
    private $z2;
    private $z3;
    private $z4;

    public function __construct($id,$status,$z1,$z2,$z3,$z4){
        $this->id = $id;
        $this->status = $status;
        $this->z1 = $z1;
        $this->z2 = $z2;
        $this->z3 = $z3;
        $this->z4 = $z4;
    }

    public function getStatus(){
        return $this->status;
    }
    public function getZ1(){
        return $this->z1;
    }
    public function getZ2(){
        return $this->z2;
    }
    public function getZ3(){
        return $this->z3;
    }
    public function getZ4(){
        return $this->z4;
    }
}
