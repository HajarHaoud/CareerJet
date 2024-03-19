<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dashboard.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      
</head>
<body>


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
            <li><a href="logout.php">
              <span class="nav-item"  >Log out</span>
            </a></li>
          </ul>
        </nav>
    
        <section class="main">
          <div class="main-top">
            <h1>Lunch New Offer</h1>
            <i class="fas fa-user-cog"></i>
          </div>
          <form style="align-items: center;display : flex;justify-content:center;flex-direction: column;padding-top: 11rem;" method="post" action="creating.php">

            <input class="quocd" name="title"  type="text" placeholder="Write a title...">
            <br>
            <input class="quocd" name="description" type="text" placeholder="Write a description...">
            <br>
            <input name="company" class="quocd" type="text" placeholder="Write a the name of your company...">
            <br>
            <input name="ville" class="quocd" type="text" placeholder="Enter the city...">
            <br>
            <button class="quocdquocd"  name="submit" type="submit" >Create Offer</button>

            </form>
    
           
        </section>
      </div>
    
</body>
</html>