<?php
require_once "bdd.php";



$data=$_POST;
//var_dump($data);
echo json_encode($data);
header('Content-Type: application/json');


$requete = "
    INSERT INTO chat(
        pseudo
        , message
    )
    VALUES(
        :pseudo, :message
    )
";
$sql = $bdd->prepare($requete);
$sql->execute(array(
    ':pseudo'=>$_POST['pseudo'],
    ':message'=>$_POST['message']
));


die();


