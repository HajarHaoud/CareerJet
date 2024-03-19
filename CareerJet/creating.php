<?php


session_start();
include("connection.php");


if(isset($_POST['submit'])){
    
    $idrecruteur = $_SESSION['id'];
    $titre = $_POST["title"];
    $description = $_POST["description"];
    $recruteur = $_POST["company"];
    $ville = $_POST['ville'];

    if($titre == "" || $titre == null) {
        header("Location: createOffer.php");
    }
    else{
        $sql = "insert into offres(titre,description,recruteur, idrecruteur, ville) values('$titre','$description','$recruteur', '$idrecruteur', '$ville')";

        $result = mysqli_query($conn, $sql);

       
        header("Location: dashboard.php");
    }

}




?>