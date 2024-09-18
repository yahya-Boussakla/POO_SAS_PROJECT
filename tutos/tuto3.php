<?php
class Animal {
    public $nom;
    public $age;

    public function manger() {
        echo "Je mange.";
    }
}

class Chat extends Animal {
    public function __construct($nom, $age, $race) {
        parent::__construct($nom, $age);
        $this->race = $race;
    }
}


class Chien extends Animal {
    public function faireDuBruit() {
        echo "Ouaf !";
    }
}
?>