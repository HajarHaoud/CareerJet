<?php



session_start();
include('connection.php');


if(isset($_GET['id'])){


    $idOffre = $_GET['id'];


    $sqlx = "select * from offres where id='$idOffre'";

    $offreInfos = [];

    $res2 = mysqli_query($conn, $sqlx);
    if (mysqli_num_rows($res2) > 0){
        $offreInfos = mysqli_fetch_assoc($res2);
    }


    $applications =[];

    $sql = "select * from applications where idoffre='$idOffre'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) >= 1) {
        $applications = mysqli_fetch_all($res);
      } 
      else{
        $applications = [];
      }
    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      
    <title>Document</title>
</head>
<body>
        


<div class="container">
        <nav>
          <ul>
            <li><a href="dashboard.php" class="logo">
              <!-- <img src="/logo.jpg" alt=""> -->
              <span class="nav-item">DashBoard</span>
            </a></li>
            <li><a href="createOffer.php">
              <i class="fas fa-home"></i>
              <span class="nav-item">Home</span>
            </a></li>
            <li><a href="createOffer.php">
              <i class="fas fa-home"></i>
              <span class="nav-item">Create new Offer</span>
            </a></li>
           
              <li><a href="">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Settings</span>
            </a></li>
            <li><a href="">
              <i class="fas fa-question-circle"></i>
              <span class="nav-item">Help</span>
            </a></li>
            <li><a href="logout.php">
              <span class="nav-item"  >Log out</span>
            </a></li>
          </ul>
        </nav>
    
        <section class="main">
          <div class="uozqd">
            <h1 class="quiosd">Offre Title :
            <?php  
                if(sizeof($offreInfos) != 0){
                    echo $offreInfos["titre"] ;
                }
            ?></h1>
            <br>
            <h3 class="uzeqf">Offre Description :
            <?php  
                if(sizeof($offreInfos) != 0){
                    echo $offreInfos["description"] ;
                }
            ?></h3>
          </div>
         
            <section class="main-course">
                <h4>All Candidats Who Applied ( <?php  echo sizeof($applications); ?> )</h4>
                <div class="course-box">
                <?php

                    if(sizeof($applications)> 0){
                    for($i=0;$i<sizeof($applications);$i++){
                    ?>
                    <div class="card">
                    <h3><?php echo "ID Candidat : ".$applications[$i][1] ;?></h3>
                    <br><hr><br>
                    </div>
                    <?php
                    }
                    }
                    else{
                    echo "No One Has Applied to this offer";
                    }
                ?>
                </div>
            </section>

          </section>
        </section>
      </div>

</body>
</html>