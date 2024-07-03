<?php 



class Membership {
    private $level;

    public function __construct($level){
        $this->level = $level;
    }

    public function getLevel(){
        return $this->level;
    }

    public function setLevel($level) {
        $this->level = $level;
    }
}