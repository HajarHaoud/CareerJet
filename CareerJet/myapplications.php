

<?php


session_start();
include("connection.php");

$id = $_SESSION['id'];
  $sql = "select offres.* from applications, offres where  offres.id = applications.idoffre and idapplicant = '$id'";
  $res = mysqli_query($conn, $sql);

  
  $MyApplications =[];
  

  if (mysqli_num_rows($res) >= 1) {
    $MyApplications = mysqli_fetch_all($res);
  } 
  else{
    $MyApplications = [];
  }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    My Applications 
    <br><br><br>
    <div class="MyApplications">
    <?php
        if(sizeof($MyApplications)> 0){
                for($i=0;$i<sizeof($MyApplications);$i++){
                ?>
                    <div style="margin-left: 140px" class="container">
                        <ul class="annonces-wrapper">
                            
                        <li class="offer-wrapper">
                                <div class="wrapper">
                                    <div class="offer-details">
                                        <h2><a href="myapplications.php"><?php   echo $MyApplications[$i][1];  ?></a></h2>
                                        <div class="company-place-offer">
                                            <p class="companys-name"><?php   echo $MyApplications[$i][3];  ?></p>
                                            <div class="companys-place"><?php   echo $MyApplications[$i][5];  ?></div>
                                        </div>
                                    </div>
                                    <div class="offer-content">
                                        <?php   echo $MyApplications[$i][2];  ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                <?php
                }
                }
                else{
                echo "You have no application yet...";
                }
                ?>
    </div>
</body>
</html>