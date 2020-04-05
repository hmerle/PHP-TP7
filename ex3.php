<?php

trait UN{
    public function small($text){
        echo "<small>$text</small>";
    }
    public function big($text){
        echo "<h4>$text</h4>";
    }
}

trait DEUX{
    public function small($text){
        echo "<i>$text</i>";
    }
    public function big($text){
        echo "<h2>$text</h2>";
    }
}

class Texte{
    private $text;
    public function __construct($text){
        $this->text = $text;
    }

    use UN, DEUX {
        DEUX::small insteadof UN;
        DEUX::small as petit;
        UN::big insteadof DEUX;
        UN::big as gros;
    }
}

$text = new Texte("Ceci est le texte");
$text->petit($text);
$text->gros($text);