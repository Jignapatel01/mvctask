
<div class="container-fluid mt-5">
  
<div class="row">
    <div class="col-md-4 mt-5">
    <img src="<?php echo $baseurl;?>images/user.jpg">    
</div>
<div class="col-md-7">
<div class="h3 mt-5" align="center">Login</div>
<form method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-10 mt-md-2 mt-3 mx-auto">
            <label >Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
      </div>
        <div class="row">
        <div class="col-md-10 mt-md-2 mt-3 mx-auto">
            <label>Password</label>
            <input type="password" name="pass" class="form-control" required>
        </div>
      </div>
      
      
   <input type="submit" name="log" class="btn btn-primary mt-3 " value="Login" style="width:20%;margin-left: 40%;">
   <br>   
   <div class=" col-md-10 mt-md-2 mt-3 mx-auto">
   <a href="">Forgot Password</a><br>
    Don't have an account<a href="">Registered</a>
</div>
   </div>
</form>
        </div>
</div>
       