<?php
include('fonction.php');

// if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age'])){
//     $nom = $_POST['nom'];
//     $prenom = $_POST['prenom'];
//     $age = $_POST['age'];

//     echo "Salut ".$nom." ".$prenom." vous êtes ".isMajor($age);
// }
// else{
//     $nom = "";
//     $prenom = "";
//     $age = "";
// }

$nom = $_POST['nom'] ?? '' ;
$prenom = $_POST['prenom'] ?? '';
$age = $_POST['age'] ?? '';
if(!empty($nom)){
    echo sprintf("Salut %s %s vous êtes %s ", $nom, $prenom, isMajor($age));
    // echo "Salut ".$nom." ".$prenom." vous êtes ".isMajor($age);    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <form method="POST">
        Nom : <input type="text" name="nom" id="">
        Prenom : <input type="text" name="prenom" id="">
        Age <input type="text" name="age" id="">

        <input type="submit" value="Evaluer">
    </form>
</body>
</html>
