<?php

echo '<a href="main.php">Actualiser</a><br><br><br>';

include 'formulaire.php';
include 'form2.php';

$form = new form2("post", "main.php");
$form->ajouterZoneDeTexte("Nom");
$form->ajouterZoneDeTexte("Code");
$form->ajouterBouton();
$form->addRadioButton('Homme', "id");
$form->addRadioButton('Femme', "id");
$form->addCheckBox('Tennis');
$form->addCheckBox('Archerie');
$form->getForm();

if(isset($_POST["Nom"]) && isset($_POST["Code"])) {
    echo $_POST['Nom']."<br>";
    echo $_POST['Code']."<br>";
}

if(isset($_POST["Homme"]) || isset($_POST["Femme"])) {
    if(isset($_POST["Homme"])) {
        echo "C'est un homme.<br>";
    }
    if(isset($_POST["Femme"])) {
        echo "C'est une femme.<br>";
    }
}

if (isset($_POST['Tennis'])){
    echo "Il/Elle fait du tennis.<br>";
}
if (isset($_POST['Archerie'])){
    echo "Il/Elle fait de l'archerie.<br>";
}