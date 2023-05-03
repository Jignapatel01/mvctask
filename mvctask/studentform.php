   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-5 " data-bs-toggle="modal" data-bs-target="#exampleModal" >
    Add data
  </button>
  
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

<form method="post">

    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
            <label>First Name</label>
            <input type="text"  name="fnm" class="form-control" required>
        </div>
        
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Last Name</label>
            <input type="text" name="lnm" class="form-control" required>
        </div>
    </div>
           
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Phone Number</label>
            <input type="tel" name="phn" class="form-control" required>
        </div>
    </div>
    <div class=" my-md-2 my-3">
        <label>Course</label>

        <select name="course">
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
    <input type="submit" name="submit" class="btn btn-primary mt-3 " value="Submit">



</form>
        </div>
        
      </div>
    </div>
  </div>


  <!-- student data table -->


  <div class="col-lg-12 grid-margin stretch-card " style="margin-top:2%;">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Manage All student</h4>
      
        </p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width:5%;"> S_Id </th>
              <th style="width:15%;"> FirstName </th>
              <th style="width:15%;"> LastName </th>
              <th style="width:20%;"> Email </th>
              <th style="width:5%;"> Phone </th>
              <th style="width:20%;"> Course </th>
              
            </tr>
          </thead>
          <tbody>
            <?php
           foreach($join1 as $row)
            {
                ?>
            <tr>
              <td> <?php echo $row["s_id"];?> </td>
              <td> <?php echo $row["Firstname"];?></td>
              <td> <?php echo $row["Lastname"];?> </td>
              <td> <?php echo $row["Email"];?> </td>
              <td> <?php echo $row["Phone"];?> </td>
              <td> <?php echo $row["coursename"];?> </td>
              <td><a href="" class="btn btn-sm btn-info"><i class="bi bi-pencil"></a></td>
              <td><a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash"></a></td>

                  </tr>
           <?php
            }
            ?>       
          </tbody>
        </table>
      </div>
    </div>
  </div>
    </body>
</html>