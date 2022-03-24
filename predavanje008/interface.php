<?php 

interface Player {

    // public $player_name:
    // interface nema property

    public function shoot();
}

class PlayerOne implements Player {
    public function shoot() {
        //code...
    }
}

class PlayerTwo implements Player {
    public function shoot() {
        //code...
    }
}



?>