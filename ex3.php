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
    use UN, DEUX {
        DEUX::small insteadof UN;
        UN::big insteadof DEUX;
        DEUX::big as gros;
        UN::small as petit;
    }
}

$texte = new Texte();
$texte->small("Bonjour");
$texte->petit(" à");
$texte->gros(" tous");
$texte->big(" !!!");