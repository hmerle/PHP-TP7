<?php

class form2 extends formulaire{
    final public function addRadioButton($name = "", $id){
        echo "<input type='radio' id=".$id." name=".$id." value=".$name.">
              <label for=".$name.">$name</label><br>";
    }
    public function addCheckBox($text){
        echo "$text"."<input type='checkbox' name='".$text."'/><br>";
    }
}