<?php include('header.php')?>
<?php include('dbcon.php')?>
<h2>ALL STUDENTS</h2>
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
    <?php include('footer.php')?>
  