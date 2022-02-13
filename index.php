<?php

include 'ISport.php';
include 'Comparable.php';
include 'Club.php';
include 'Sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
echo "<h1>Projet Heritage et Interface</h1>";

$listClub[1] = new Club(1,"PSG",152);
$listClub[2] = new Club(2,"Lyon",47);
$listClub[3] = new Club(3,"Saint Etienne",345);


$listClub[1]->AjouterSport(new Sport("Football",11));
$listClub[2]->AjouterSport(new SportRelais(nomSport: "4x100",nbJoueurs: 1,distance: 400));
$listClub[2]->AjouterSport(new SportBallon("Basketball",5,50,100));
$listClub[2]->AjouterSport(new SportBallon("Voleyball",4,200,100));

$listClub[3]->AjouterSport(new SportBallon("Basketball",5,50,100));
$listClub[3]->AjouterSport(new SportBallon("Basketball",5,50,100));
$listClub[3]->AjouterSport(new Sport("Tennis",2));



foreach ($listClub as $key => $item)
{
    echo '<br><br><a href='."?test=".$item->getNomClub().'>'.$key.")".$item->getNomClub().'</a>';

}

if($_GET['test'] == 'PSG'){

        echo $listClub[1]->getLesSports()->getNomSport();
}

if($_GET['test'] == 'Lyon'){
    foreach($listClub[2] as $value){
        echo $value;
    }

}
if($_GET['test'] == 'Saint'){
    echo $listClub[3]->getLesSports()->getNomSport();
}

?>