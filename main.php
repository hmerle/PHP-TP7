<?php

$form = new form2("post", "testformulaire.php");
$form->ajouterZoneDeTexte("Nom");
$form->ajouterZoneDeTexte("Code");
$form->ajouterBouton();
$form->addRadioBouton('Homme');
$form->addRadioBouton('Femme');
$form->addCheckBox('Tennis');
$form->addCheckBox('Archerie');
$form->getForm();

if(isset($_POST["Nom"]) && isset($_POST["Code"])) {
    echo $_POST['Nom']."<br>";
    echo $_POST['Code'];
}

if(isset($_POST["Homme"]) || isset($_POST["Femme"])) {
    if(isset($_POST["Homme"])) {
        echo $_POST['Homme'] . "<br>";
    }
    if(isset($_POST["Femme"])) {
        echo $_POST['Femme'];
    }
}

echo $_POST['Tennis'];
echo $_POST['Archerie'];