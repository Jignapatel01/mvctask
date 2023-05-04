   
   <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Student entry form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
<div class="h3">Student Form</div>

<form method="post" enctype="multipart/form-data">

     <div class="row">
        <div class="mt-md-2 mt-3 mx-auto">
            <label>First Name</label>
            <input type="text"  name="fnm" class="form-control" required>
        </div>
        <div class="row">   
        <div class="mt-md-2 mt-3 mx-auto">
            <label>Last Name</label>
            <input type="text" name="lnm" class="form-control" required>
        </div>
    </div>
           
    <div class="row">
        <div class="mt-md-2 mt-3 mx-auto">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
      </div>
        <div class="row">
        <div class="mt-md-2 mt-3 mx-auto">
            <label>Password</label>
            <input type="password" name="pass" class="form-control" required>
        </div>
      </div>
        <div class="row">
        <div class=" mt-md-2 mt-3 mx-auto">
            <label>Photo</label>
            <input type="file" name="img" class="form-control" >
        </div>
      </div>
        <div class="row">
        <div class="mt-md-2 mt-3 mx-auto">
            <label>Male : </label>
            <input type="radio" name="gender" value="male">
            <label>Female : </label>
            <input type="radio" name="gender" value="female" >
        </div>
      </div>

      <div class="row">
        <div class="mt-md-2 mt-3 mx-auto">
            <label>Reading : </label>
            <input type="checkbox" name="chk[]" value="reading">
            <label>playing : </label>
            <input type="checkbox" name="chk[]" value="playing" >
            <label>Dancing : </label>
            <input type="checkbox" name="chk[]" value="dancing">
            <label>surffing : </label>
            <input type="checkbox" name="chk[]" value="surffing" >
        </div>

      <div class="row">
        <div class="mt-md-2 mt-3 mx-auto">
            <label>Phone Number</label>
            <input type="text" name="phn" class="form-control" required>
        </div>
    </div>

    <div class=" my-md-2 my-3">
        <label>Course</label>

        <select name="course" class="form-control">
          <option value=""> --select course--</option>
        <?php
      
        foreach($shwdata as $shwdata1)
            { 
            ?>
             <option value="<?php echo $shwdata1["course_id"];?>"> <?php echo $shwdata1["coursename"]; ?> </option> 
            <?php 
            }
            ?> 
        </select>

    </div>

    <div class=" my-md-2 my-3">
      <label>State</label>

      <select name="state" class="form-control">
        <option value=""> --select State--</option>
      <?php
    
      foreach($shwstate as $shwstate1)
          { 
          ?>
           <option value="<?php echo $shwstate1["state_id"];?>"> <?php echo $shwstate1["statename"]; ?> </option> 
          <?php 
          }
          ?> 
      </select>

  </div>
  <div class=" my-md-2 my-3">
    <label>City</label>

    <select name="city" class="form-control">
      <option value="" > --select City--</option>
    <?php
  
    foreach($shwcity as $shwcity1)
        { 
        ?>
         <option value="<?php echo $shwcity1["city_id"];?>"> <?php echo $shwcity1["cityname"]; ?> </option> 
        <?php 
        }
        ?> 
    </select>

</div>


    <input type="submit" name="submit" class="btn btn-primary mt-3 " value="Submit" style="width:20%;margin-left: 40%;">



</form>
        </div>
        
      </div>
    </div>
  </div>


  
    </body>
</html>