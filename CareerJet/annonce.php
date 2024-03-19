<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/annonce.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link  href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
       
<?php


session_start();
include("connection.php");



if(isset($_SESSION["id"])){

  $id = $_SESSION['id'];
  $sql = "select * from offres";
  $res = mysqli_query($conn, $sql);

  
  $myOffres =[];
  

  if (mysqli_num_rows($res) >= 1) {
    $myOffres = mysqli_fetch_all($res);
  } 
  else{
    $myOffres = [];
  }

 



  
if(isset($_GET['id'])){
    
    $idUser = $_SESSION['id'];
    $idOffer = $_GET['id'];
    

    $sql = "SELECT * from applications WHERE idapplicant='$idUser' AND idoffre='$idOffer'";

    $res = mysqli_query($conn, $sql);


    if (mysqli_num_rows($res) > 0) {
    }
    else{
        $sqlx = "INSERT INTO applications(idapplicant, idoffre) VALUES ('$idUser','$idOffer')";
        $result = mysqli_query($conn, $sqlx);
        
    }
    header("location : myapplications.php"); 
    
}

}
?>
    <div style=" background: #2B547E;;">

    <a style="color: white;"  href="home.php">
        <h1 style="margin-top: 3rem;">Home</h1>
    </a>


    <div style="position:relative; left:80px;" class="filter">
        <ul class="filter-list">
            <!-- Filtre Date -->
            <li class="filter-item">
                <button class="filter-button" id="filter-date">
                    <span>Dates</span>
                    <span class="filter-icon">▼</span>
                </button>
                <ul class="filter-dropdown">
                    <li><a href="#">Dernières 24 heures</a></li>
                    <li><a href="#">3 jours</a></li>
                    <li><a href="#">7 derniers jours</a></li>
                    <li><a href="#">Plus de 7 jours</a></li>
                </ul>
            </li>
            <!-- Filtre Type de contrat -->
            <li class="filter-item">
                <button class="filter-button" id="filter-jobtype">
                    <span>Types de contrat</span>
                    <span class="filter-icon">▼</span>
                </button>
                <ul class="filter-dropdown">
                    <li><a href="#">CDI</a></li>
                    <li><a href="#">CDD</a></li>
                    <li><a href="#">Stage</a></li>
                    <li><a href="#">Interim</a></li>
                    <li><a href="#">Plein de temps</a></li>
                    <li><a href="#">Temps partiel</a></li>
                </ul>
            </li>
            <!-- Filtre Lieu -->
            <li class="filter-item">
                <button class="filter-button" id="filter-place">
                    <span>Lieu</span>
                    <span class="filter-icon">▼</span>
                </button>
                <ul class="filter-dropdown">
                    <li><a href="#">Casablanca</a></li>
                    <li><a href="#">Rabat</a></li>
                    <li><a href="#">Marrakech</a></li>
                    <li><a href="#">Tanger</a></li>
                    <li><a href="#">Agadir</a></li>
                    <li><a href="#">Région Casablanca-Settat</a></li>
                    <li><a href="#">Fez</a></li>
                    <li><a href="#">Kénitra</a></li>
                </ul>
            </li>
        </ul>
        <div class="clear-fix"></div>
    </div>
</div>
    <br>
    <br>
    
    

    <?php

            if(sizeof($myOffres)> 0){
              for($i=0;$i<sizeof($myOffres);$i++){
            ?>
                <div style="margin-left: 140px" class="container">
                    <ul class="annonces-wrapper">
                        
                    <li class="offer-wrapper">
                            <div class="wrapper">
                                <div class="offer-details">
                                    <h2><a href="#"><?php   echo $myOffres[$i][1];  ?></a></h2>
                                    <div class="company-place-offer">
                                        <p class="companys-name"><?php   echo $myOffres[$i][3];  ?></p>
                                        <div class="companys-place"><?php   echo $myOffres[$i][5];  ?></div>
                                    </div>
                                </div>
                                <div class="offer-content">
                                    <?php   echo $myOffres[$i][2];  ?>
                                </div>
                                <a class="zusdhquodc" href="service.php?id=<?php echo $myOffres[$i][0]; ?>" >Apply Now</a>
                            </div>
                        </li>
                    </ul>
                </div>
            <?php
            }
            }
            else{
              echo "Create an offer to see here the list of your offers...";
            }
          ?>


</body>
</html>