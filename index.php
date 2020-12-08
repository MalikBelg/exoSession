<?php

session_start();

var_dump($_POST);

if (isset($_GET["page"])) {   

    switch($_GET["page"]){

        case "resultat" : $pageAInclure = "resultat.php";
        break;

        default : $pageAInclure = "index.php"; 

    } 

} else {
    $pageAInclure = "index.php"; 
}



function resultat(){

    $mystere = rand(0, 100);

        if(isset($_POST["number"])){
            $_SESSION["number"] = $_POST["number"];
            $_SESSION["mystere"] = $mystere;
        }

        if(isset($_POST["number"]) < ($_SESSION["mystere"])){
            return "index.php";
            echo "Le nombre mystère est plus petit !";
        } elseif(isset($_POST["number"]) > ($_SESSION["mystere"])) {
            return "index.php";
            echo "Le nombre mystère est plus grand !";
        } else {
            return "resultat.php";
            echo "Bravo !";
        }
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="resultat.php" method="POST">
    
        <input type="number" id="number" name="number">
        <button type="submit">Valider</button>
    
    </form>

    


</body>
</html>