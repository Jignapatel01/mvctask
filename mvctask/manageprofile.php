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
        <li><a href="<?php echo $mainurl;?>/change-password">Chnage Password</a></li>        
        <li><a href="">Delete Account</a></li>
        <li><a href="<?php echo $mainurl;?>?logout-here">Logout</a></li><ul>
        

</div>
<div class="col-md-7">
<div class="h3 mt-5" align="center">Manage Profile</div>
<form method="post" enctype="multipart/form-data">

 <div class="row">
        <div class="col-md-10 mt-md-2 mt-3 mx-auto">
        <img src="<?php echo $prof[0]["Photo"];?>" class="img-fluid" style="width:400px; height:180px">
        <br><br>
      <input type="file" name="img" required class="form-control"> 
      </div>  
 </div>

    <div class="row">
        <div class="col-md-10 mt-md-2 mt-3 mx-auto">
            <label >Email</label>
            <input type="email" name="email" value="<?php echo $prof[0]["Email"];?>" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10 mt-md-2 mt-3 mx-auto">
            <label>Phone Number</label>
            <input type="text" name="phn" value="<?php echo $prof[0]["Phone"];?>" class="form-control" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 mt-md-2 mt-3 mx-auto">
            <label>Hobby :</label><br>
            <label>Reading : </label>
            <input type="checkbox" name="chk[]" value="reading" >
            <label>playing : </label>
            <input type="checkbox" name="chk[]" value="playing" >
            <label>Dancing : </label>
            <input type="checkbox" name="chk[]" value="dancing">
            <label>surffing : </label>
            <input type="checkbox" name="chk[]" value="surffing" >
        </div>
    </div>

        <div class="row">
        <div class="col-md-10 mt-md-2 mt-3 mx-auto">
        <label>Course</label>

        <select name="course" class="form-control">
          <option value=""> --select course--</option>
        <?php
      
        foreach($shwdata as $shwdata1)
            { 
                if($prof[0]["course_id"]==$shwdata1["course_id"])
                {
            ?>

             <option value="<?php echo $prof[0]["course_id"];?>" selected='select'> <?php echo $prof[0]["coursename"]; ?> </option> 
            <?php 
            }
            else
            {
            ?>
                 <option value="<?php echo $shwdata1["course_id"];?>" > <?php echo $shwdata1["coursename"]; ?> </option>  
         <?php
            }
        }
            ?>
        </select>

    </div>
        </div>

        <div class="row">
        <div class="col-md-10 mt-md-2 mt-3 mx-auto">
         <select name="state"  required class="form-control">
             <option value="">-select state-</option>
             <?php
             foreach($shwstate as $shwstate1)
             { 
                if($prof[0]["state_id"]==$shwstate1["state_id"])
                {
            ?>

            <option value="<?php echo $prof[0]["state_id"];?>" selected='selected'><?php echo $prof[0]["statename"];?></option>

            <?php 
                }
                else 
                {
                    ?>

            <option value="<?php echo $shwstate1["state_id"];?>"><?php echo $shwstate1["statename"];?></option>
            <?php 
            }
        }
            ?> 
         </select> 
         </div>
    </div>


    <div class="row">
        <div class="col-md-10 mt-md-2 mt-3 mx-auto">
         <select name="city"  required class="form-control">
             <option value="">-select city-</option>
             <?php
             foreach($shwcity as $shwcity1)
             { 
                if($prof[0]["city_id"]==$shwcity1["city_id"])
                {
            ?>

            <option value="<?php echo $prof[0]["city_id"];?>" selected='selected'><?php echo $prof[0]["cityname"];?></option>

            <?php 
                }
                else 
                {
                    ?>

            <option value="<?php echo $shwcity1["city_id"];?>"><?php echo $shwcity1["cityname"];?></option>
            <?php 
            }
        }
            ?> 
         </select> 
         </div>
    </div>
     
   <input type="submit" name="update" class="btn btn-primary mt-3 " value="Update Profile" style="width:20%;margin-left: 40%;">
   <br>   

   </div>
</form>
        </div>
</div>
       