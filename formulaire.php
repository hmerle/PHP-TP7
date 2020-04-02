<?php

class formulaire{
    public function __construct($methode, $fichierCible){
        echo "<form action='".$fichierCible."' method='".$methode."'>";
    }
    public function ajouterZoneDeTexte($text){
        echo "$text"."<input type='text' name='".$text."'/><br>";
    }
    function ajouterBouton(){
        echo "<input type='submit' value='Envoi'/><br>";
    }
    function getForm(){
        echo "</form>";
    }
}