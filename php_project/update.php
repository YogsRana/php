<?php
include 'db/connection.php';
$id=$_GET['updateid'];
$sql="select * from `employee` where emp_id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$dob=$row['dob'];
$salary=$row['salary'];
$mobile=$row['mobile'];
$email=$row['email'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $salary=$_POST['salary'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];

    $sql="update `employee` set emp_id=$id,name='$name',dob='$dob', salary='$salary', mobile='$mobile', email='$email' where emp_id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "data inserted successfully";
       header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Employee_update</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
        <h2>Employee_update</h2>
  <div class="form-group">
  <label >Name</label>
    <input type="text" class="form-control"  placeholder="Enter your name" name="name" autocomplete="off" value="<?php echo $name ?>" required>
</div>
<div class="form-group">
    <label >dob</label>
    <input type="date" class="form-control"  placeholder="Enter your mobile" name="dob" autocomplete="off" value="<?php echo $dob ?>" required>
</div>
<div class="form-group">
    <label >salary</label>
    <input type="number" class="form-control"  placeholder="Enter your mobile" name="salary" autocomplete="off" value="<?php echo $salary ?>" required>
</div>
<div class="form-group">
    <label>Mobile</label>
    <input type="tel" class="form-control" pattern="[1-9]{1}[0-9]{9}" placeholder="Enter your password" name="mobile" autocomplete="off" value="<?php echo $mobile ?>" required>
</div>
<div class="form-group">
    <label >email</label>
    <input type="email" class="form-control"  placeholder="Enter your email" name="email" autocomplete="off" value="<?php echo $email ?>" required>
</div>
  <button type="submit" class="btn btn-primary" name="submit">update</button>
</form>

    </div>
  </body>
</html>