<?php


class form2 extends formulaire{
    public function addRadioBouton($text){
        echo "$text"."<input type='radio' name='".$text."'/><br>";
    }
    public function addCheckBox($text){
        echo "$text"."<input type='checkbox' name='".$text."'/><br>";
    }
}