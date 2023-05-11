<?php
 $mainurl="http://localhost/phpmwf_1pm/Module5-%20MVC-App/mvctask/";
 $baseurl="http://localhost/phpmwf_1pm/Module5-%20MVC-App/mvctask/assets/";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Jay Gayatri Surgical for selling all Surgical products </title>
    <meta name='viewport' content='width=device-width,initial-scale=1'>
    <!-- css file -->

<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/style.css'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- js file -->
<script src='main.js'></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">About us</a>
        <a class="nav-link" href="#">Contact us</a>
        <?php
         if(!isset($_SESSION["s_id"]))
          {
          ?>

                    <a class="nav-link" href="<?php echo $mainurl;?>login">Login</a>
           <?php
          }
          else
          {
          ?>
        <li class="navbar-nav dropdown">
          <a href="<?php echo $mainurl;?>?logout-here" class=" nav-link text-success dropdown-toggle" data-bs-toggle="dropdown">Welcome: <?php echo $_SESSION["fnm"];?></a>
      
          <ul class="dropdown-menu p-4" style="width:200px;">
        <!-- <li><a href="" class="text-success">Welcome: <?php echo $_SESSION["fnm"];?></a></li> -->
        <li><a href="">Manage Profile</a></li>
        <li><a href="">Manage Notification</a></li>
        <li><a href="">Manage Orders</a></li>        
        <li><a href="<?php echo $mainurl;?>change-password">Chanage Password</a></li>
        <li><a href="">Delete Account</a></li>
        <li><a href="<?php echo $mainurl;?>?logout-here">Logout</a></li>
        <ul>
          </li>        


            <?php
          }
          ?>

                 
     </div>
    </div>
  </div>
</nav>
</body>
</html>