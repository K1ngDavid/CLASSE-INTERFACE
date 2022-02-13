<?php

include 'ISport.php';
include 'Comparable.php';
include 'Sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'Club.php';
echo "<h1>Projet Heritage et Interface</h1>";

$listClub[1] = new Club(1,"PSG",152);
$listClub[2] = new Club(2,"Lyon",47);
$listClub[3] = new Club(3,"Saint Etienne",345);


$listClub[1]->AjouterSport(new Sport("Football",11));
$listClub[2]->AjouterSport(new SportRelais(nomSport: "4x100",nbJoueurs: 1,distance: 400));
$listClub[2]->AjouterSport(new SportBallon("Basketball",5,50,100));
$listClub[2]->AjouterSport(new SportBallon("Volleyball",4,200,100));

$listClub[3]->AjouterSport(new SportBallon("Basketball",5,50,100));
$listClub[3]->AjouterSport(new SportBallon("Basketball",5,50,100));
$listClub[3]->AjouterSport(new Sport("Tennis",2));



/*
foreach ($listClub as $key => $item)
{
    echo '<br><br><a href='."?id={$key}>{$key} - {$item->getNomClub()} {$item->getNbPoints()}</a><br>";

}

if (isset($_GET['id'])) {
    echo '<h2>Liste des sports de '.$listClub[$_GET['id']]->getNomClub().'</h2>';
    $sp1 = $listClub[$_GET['id']]->getLesSports();
    foreach ($sp1 as $keySp1 => $valueSp1){
        echo $valueSp1->getDescription();
    }
}
*/

foreach ($listClub as $key => $item)
{
    echo '<br><br><a href='."?test=".$item->getNomClub().'>'.$key.")".$item->getNomClub().'</a>';

}

if($_GET['test'] == 'PSG'){

    $sport = $listClub[1]->getLesSports();
    echo "<br><br>Les sports du groupe :";
    foreach($sport as $value){
        echo "<br>{$value->getNomSport()}";
    }
}

if($_GET['test'] == 'Lyon'){
   $sport = $listClub[2]->getLesSports();
    echo "<br><br>Les sports du groupe :";
   foreach($sport as $value){
       echo "<br>{$value->getNomSport()}";
   }

}
if($_GET['test'] == 'Saint'){
    $sport = $listClub[3]->getLesSports();
    echo "<br><br>Les sports du groupe :";
    foreach($sport as $value){
        echo "<br>{$value->getNomSport()}";
    }
}

?>