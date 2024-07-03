<?php 



class PremiumUser extends User{
    private $membership;

    public function __construct($username, $password, $membership){
        parent:: __construct($username, $password);
        $this->membership = $membership;
    }

    public function getMembership() {
        return $this->membership;
    }

    public function setMembership($membership) {
        $this->membership = $membership;
    }
}