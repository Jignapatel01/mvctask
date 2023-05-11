<?php
    if(!isset($_SESSION["s_id"]))
    {
        echo "<script>
            window.location='/login';
        </script>";
    }

?>
<div class="container-fluid mt-5">
  
<div class="row">
    <div class="col-md-4 mt-5 ms-5 mgside">
    <ul>
        <li><a href="" class="text-success">Welcome: <?php echo $_SESSION["fnm"];?></a></li>
        <li><a href="">Manage Profile</a></li>
        <li><a href="">Manage Notification</a></li>
        <li><a href="">Manage Orders</a></li>        
        <li><a href="">Delete Account</a></li>
        <li><a href="">Change Password</a></li>
        <li><a href="<?php echo $mainurl;?>?logout-here">Logout</a></li><ul>
        

</div>
<div class="col-md-7">
<div class="h3 mt-5" align="center">Change Password</div>
<form method="post" enctype="multipart/form-data">

 
    <div class="row">
        <div class="col-md-10 mt-md-2 mt-3 mx-auto">
            <label >Old Password</label>
            <input type="password" name="opass" placeholder="Enter Old Password" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10 mt-md-2 mt-3 mx-auto">
            <label >New Password</label>
            <input type="password" name="npass" placeholder="Enter New Password" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10 mt-md-2 mt-3 mx-auto">
            <label >Confirm Password</label>
            <input type="password" name="cpass" placeholder="Enter Confirm Password"class="form-control" required>
        </div>
      </div>

    <input type="submit" name="chngpass" class="btn btn-primary mt-3 " value="Submit" style="width:20%;margin-left: 40%;">
   <br>   

   </div>
</form>
        </div>
</div>
       