<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      
  <div class="container-fluid">
    <div class="row"> <!-- Logo --->
      <div class="col"> <!--1 of 1 -->
        <span class="circle"></span>
        <img src="img/flames.png" class="home__flame">
        <img src="img/keepsafe.svg" class="home__logo">
        <p class="slogan">in touch with tomorrow</p>
        <p class="slogan__2">Since 1999</p>
        <img src="img/undraw_Vault.svg" class="home__vault">

      </div>
    </div>
    <div class="row" style="margin-top: 525px"> <!-- Text -->
      <div class="col"> <!--1 of 1 -->
        <p class="text-center home_text">CHOOSE AN ACTION</p>
        <br><br>
      </div>
    </div>
    <div class="row"> <!-- Buttons -->
      <div class="col"> <!--1 of 2 -->
      <div class="column activity text-center">
        <div class="col-md act">
          <a href="transactionhistory.php">
            <button>Transfer History</button>
          </a>
        </div>
      </div>
      </div>
      <div class="col"> <!--2 of 2 -->
      <div class="column activity text-center">
        <div class="col-md act">
          <a href="transfermoney.php">
            <button>Transfer Money</button>
          </a>
        </div>
      </div>
    </div>
    </div>
  </div>
       
  <br><br><br>

<footer class="page-footer">
  <div class="text-center p-3 text-lg-start" style="background-color: rgba(0, 0, 0, 0.2);">
  A Project by 
    <span class="text-dark"><b>Karandeep Singh Padam</b></span>
  </div>
</footer>
  
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>