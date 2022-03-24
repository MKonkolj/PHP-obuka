<?php 


abstract class Human {
    abstract public function Speak($text);
}

class Women extends Human {
    public function Speak($text) {
        echo $text;
    }
}

class NiceWomen extends Women {
    public function Speak($text) {
        echo $text;
    }
}

class Men extends Human {
    public function Speak($text) {
        echo $text;
    }
}

$women = new Women();
$women->Speak("I speak loudly");

$Men = new Men();
$Men->Speak("I speak quietly");













?>