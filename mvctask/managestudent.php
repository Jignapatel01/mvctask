<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-5 " data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:90%;" >
    Add data
  </button>

<!-- student data table -->


<div class="col-lg-12 grid-margin stretch-card " style="margin-top:2%;">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Manage All student</h4>
      
        </p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width:15%;"> FirstName </th>
              <th style="width:15%;"> LastName </th>
              <th style="width:20%;"> Email </th>
              <th style="width:20%;"> Photo </th>
              <th style="width:20%;"> Gender </th>
              <th style="width:20%;"> Hobby </th>
               <th style="width:5%;"> Phone </th>
              <th style="width:20%;"> Course </th>
              <th style="width:20%;"> State </th>
              <th style="width:20%;"> City </th>
              <th style="width:20%;"> Registered Date </th>
              <th style="width:20%;"> Action </th>
              
            </tr>
          </thead>
          <tbody>
            <?php
           foreach($join1 as $row)
            {
                ?>
            <tr>
              
              <td> <?php echo $row["Firstname"];?></td>
              <td> <?php echo $row["Lastname"];?> </td>
              <td> <?php echo $row["Email"];?> </td>
              <td> <img src=" <?php echo $row["Photo"];?>" width="80px" height="100px"> </td>
              <td> <?php echo $row["Gender"];?> </td>
              <td> <?php echo $row["Hobby"];?> </td>
              <td> <?php echo $row["Phone"];?> </td>
              <td> <?php echo $row["coursename"];?> </td>
              <td> <?php echo $row["statename"];?> </td>
              <td> <?php echo $row["cityname"];?> </td>
           <td> <?php echo $row["Registered_date_time"];?> </td>
              <td><a href="<?php echo $row['course_id']?>" class="btn btn-sm btn-info"><i class="bi bi-pencil"></a></td>
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