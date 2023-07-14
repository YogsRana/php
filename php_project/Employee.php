<?php
include 'db/connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $dept=$_POST['department'];
    $posi=$_POST['posi'];
    $salary=$_POST['salary'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $dep=$_POST['dep'];
   
    $sql="insert into `employee` (name,dob,salary,mobile,email,dep_id) values('$name','$age','$salary','$mobile','$email','$dep')";
    $query=mysqli_query($con,$sql);
    if($query){
      $sql1="insert into `department`(dep_id,dept,position) values('$dep','$dept','$posi')";
      $result=mysqli_query($con,$sql1);
      header('location:display.php');
     // echo "data inserted successfully";
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
    <title>employee</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
        <h2> employee registration</h2>
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"  placeholder="Enter your name" name="name" autocomplete="off" required>
</div>
<div class="form-group">
    <label >dob</label>
    <input type="date" class="form-control"  placeholder="Enter your dob" name="age" autocomplete="off" required>
</div>

<div class="form-group">
<label for="department">department</label><br>
 <select name="department" id="department">
 <option value="select">select</option>
  <option value="IT">IT</option>
  <option value="ME">ME</option>
  <option value="civil">civil</option>
 </select>
  </div>

  <div class="form-group">
<label for="pos">position</label><br>
<select name="posi" id="posi" >
<option value="select">select</option>
  <option value="java developar">java developar</option>
  <option value="php developar">php developar</option>
  <option value="Administrator">Administrator</option>
  <option value="Desin eng">Desin eng</option>
  <option value="quality eng">quality eng</option>
  <option value="safty eng">safty eng</option>
  <option value="side eng">side eng</option>
  <option value="quality eng">quality eng</option>
</select>
  </div>

  <div class="form-group">
    <label >salary</label>
    <input type="number" class="form-control"  placeholder="Enter your salary" name="salary" autocomplete="off" required>
</div>
   
<div class="form-group">
    <label>Mobile</label>
    <input type="tel" class="form-control" pattern="[1-9]{1}[0-9]{9}" placeholder="Enter your mobile" name="mobile" autocomplete="off" required>
</div>
<div class="form-group">
    <label >email</label>
    <input type="email" class="form-control"  placeholder="Enter your email" name="email" autocomplete="off" required>
</div>
<div class="form-group">
    <label >dep_id</label>
    <input type="text" class="form-control"  placeholder="Enter your dep_id" name="dep" autocomplete="off" required>
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

    </div>
  </body>
</html>