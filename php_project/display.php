<?php
include 'db/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee_ditails</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="Employee.php" class="text-light">Add user</a></button>
        <button class="btn btn-primary my-5 float-right" ><a href="logout.php" class="text-light" >Logout</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Emp_id</th>
                    <th scope="col">Emp_name</th>
                    <th scope="col">dob</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Email</th>
                    <th scope="col">Dept</th>
                    <th scope="col">position</th>
                    <th scope="col">dept_id</th>
                    <th scope="col">operation</th>
                </tr>
                <tbody>

                 <?php
                    $sql="select * from `employee` INNER JOIN `department` on employee.dep_id=department.dep_id";
                    $result=mysqli_query($con, $sql);
                    if($result){
                       while($row=mysqli_fetch_assoc($result)){
                       $id=$row['emp_id'];
                       $name=$row['name'];
                       $dob=$row['dob'];
                       $salary=$row['salary'];
                       $mobile=$row['mobile'];
                       $email=$row['email'];
                       $dept=$row['dept'];
                       $posi=$row['position'];
                       $dep_id=$row['dep_id'];
                       echo ' <tr>
                       <th scope="row">'.$id.'</th>
                       <td>'.$name.'</td>
                       <td>'.$dob.'</td>
                       <td>'.$salary.'</td>
                       <td>'.$mobile.'</td>
                       <td>'.$email.'</td>
                       <td>'.$dept.'</td>
                       <td>'.$posi.'</td>
                       <td>'.$dep_id.'</td>
                       <td>
                       <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">update</a></button>
                       <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">delete</a></button>
                       </td>
                       </tr>';
                       }
                    }
                 ?>
                    
                </tbody>
            </thead>
        </table>
    <div>    
</body>
</html>