


    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Dashboard | By Code Info</title>
      <link rel="stylesheet" href="css/dashboard.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      
    </head>
    <body>

    <?php


session_start();
include('connection.php');


if(isset($_SESSION["id"])){

  $id = $_SESSION['id'];
  $sql = "select * from offres where idrecruteur='$id'";
  $res = mysqli_query($conn, $sql);

  $typ1 = 0;
  $typ2 = 1;

  $sql2 = "select * from users where type='$typ1'";
  $resCanidats = mysqli_query($conn, $sql2);

  $sql3 = "select * from users where type='$typ2'";
  $resRecruiters = mysqli_query($conn, $sql3);

  $myOffres =[];
  $allCandidats =[];
  $allRecruiters =[];

  if (mysqli_num_rows($res) >= 1) {
    $myOffres = mysqli_fetch_all($res);
  } 
  else{
    $myOffres = [];
  }


  if(mysqli_num_rows($resCanidats) >= 1) {
    $allCandidats = mysqli_fetch_all($resCanidats); 
  }
  else{
    $allCandidats = [];
  }



  if(mysqli_num_rows($resRecruiters) >= 1) {
    $allRecruiters = mysqli_fetch_all($resRecruiters);
  }
  else{
    $allRecruiters = [];
  }


}
?>

      <div class="container">
        <nav>
          <ul>
          <li><a href="dashboard.php" class="logo">
              <!-- <img src="/logo.jpg" alt=""> -->
              <span class="nav-item">DashBoard</span>
            </a></li>
            <li><a href="dashboard.php">
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
            <li><a href="index.php">
              <span class="nav-item"  >Log out</span>
            </a></li>
          </ul>
        </nav>
    
        <section class="main">
          <div class="main-top">
            <h1>My Offers</h1>
            <i class="fas fa-user-cog"></i>
          </div>
          <div class="main-skills">
            <?php

            if(sizeof($myOffres)> 0){
              for($i=0;$i<sizeof($myOffres);$i++){
            ?>
            <div class="card">
              <br>
              <h3><?php echo $myOffres[$i][1] ;?></h3>
              <p><?php echo $myOffres[$i][2] ;?></p>
              <a href="offreSinglePage.php?id=<?php echo $myOffres[$i][0]; ?>">Check Who Applied</a>
            </div>
            <?php
            }
            }
            else{
              echo "Create an offer to see here the list of your offers...";
            }
          ?>
          </div>
          <section class="main-course">
    <h1>All Candidats</h1>
    <div class="course-box">
        <table border='1px' cellpadding='5px'>
            <th>id</th><th>civilite</th><th>prenom</th><th>Nom</th>
            <th>email</th><th>password</th><th>Titreduposteactuel</th><th>Fonctionactuel</th>
            <th>secteuractuel</th><th>Expérience</th><th>current_salary</th><th>education_level</th>
            <th>training_type</th><th>job_search_country</th><th>telephone</th><th>residence_city</th>
            <th>residence_country</th><th>region</th><th>cv_attachment</th><th>linkedin_profile_url</th>
            
            <?php
            include 'connection.php';
            $r = $conn->prepare("SELECT * FROM forms");
            $r->execute();
            $resultat = $r->get_result(); // Obtenez un objet mysqli_result
            $rows = $resultat->fetch_all(MYSQLI_ASSOC);

            foreach ($rows as $row) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['civilite']) . "</td>";
                echo "<td>" . htmlspecialchars($row['prenom']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Nom']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "<td>" . htmlspecialchars($row['password']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Titreduposteactuel']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Fonctionactuel']) . "</td>";
                echo "<td>" . htmlspecialchars($row['secteuractuel']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Expérience']) . "</td>";
                echo "<td>" . htmlspecialchars($row['current_salary']) . "</td>";
                echo "<td>" . htmlspecialchars($row['education_level']) . "</td>";
                echo "<td>" . htmlspecialchars($row['training_type']) . "</td>";
                echo "<td>" . htmlspecialchars($row['job_search_country']) . "</td>";
                echo "<td>" . htmlspecialchars($row['telephone']) . "</td>";
                echo "<td>" . htmlspecialchars($row['residence_city']) . "</td>";
                echo "<td>" . htmlspecialchars($row['residence_country']) . "</td>";
                echo "<td>" . htmlspecialchars($row['region']) . "</td>";
                echo "<td>";
                $cv = $row['cv_attachment'];
                if ($cv != "" && $cv != null) {
                    echo "<a href='data:application/pdf;base64," . base64_encode($cv) . "' download>Download CV</a>";
                } else {
                    echo "No CV available";
                }
                echo "</td>";
                echo "<td>" . htmlspecialchars($row['linkedin_profile_url']) . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</section>




          <section class="main-course">
            <h1>All Recruiters</h1>
            
            <div class="course-box">

            <?php

                if(sizeof($allRecruiters)> 0){
                  for($i=0;$i<sizeof($allRecruiters);$i++){
                ?>
                  <div class="course">
                    <div class="box">
                      <h3><?php echo $allRecruiters[$i][1];?></h3>
                      <p><?php echo $allRecruiters[$i][2];?></p>
                    </div>
                  </div>
                <?php
                }
                }
                ?>
            </div>
              
            


          </section>
        </section>
      </div>
    </body>
    </html>