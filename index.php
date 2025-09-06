<?php include('header.php')?>
<?php include('dbcon.php')?>
<div class="box1">
<h2>ALL STUDENTS</h2>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Student</button>
</div>
    <table class= "table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $query="select * from `students`";

    $result=mysqli_query($connection,$query);//to execute the query


    if(!$result){
        die("Error".mysqli_error());
    }
    else{
        while($row=mysqli_fetch_assoc($result)){
           ?> 
            <tr>
            <td><?php echo$row['id']?></td>
            <td><?php echo$row['first_name']?></td>
            <td><?php echo$row['last_name']?></td>
            <td><?php echo$row['age']?></td>
        </tr>

            <?php
        }

            

    }
    
    ?> 
    </tbody>
    </table>

    <?php
    if(isset($_GET["message"])){
      echo "<h6>".$_GET["message"]."</h6>";
    }
    ?>

      <?php
    if(isset($_GET["insert_msg"])){
      echo "<h6>".$_GET["insert_msg"]."</h6>";
    }
    ?>

<!-- Modal -->
  <form action="insert.php" method="POST">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
            <div class="form-group">
                <label for="f_name">First name</label>
                <input type="text" name="f_name" class="form-control">
            </div>

            <div class="form-group">
                <label for="l_name">Last name</label>
                <input type="text" name="l_name" class="form-control">
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control">
            </div>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="Add_students">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
    <?php include('footer.php')?>
  