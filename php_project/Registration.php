<?php
//error_reporting(0);
include('db/connection.php');
if(isset($_POST['submit'])){
    $email=$_POST['u1'];
    $pass1=($_POST['p1']);
    
   $sql="insert into `user` (email,password) values('$email','$pass1')";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "data inserted successfully";
      header("location:Login.php");
    }
    else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
   
    <script>  
    function validateForm() {  
    //collect form data in JavaScript variables  
    var password = document.getElementById("pass1").value;  
    var c_password = document.getElementById("pass2").value;  
    var emal = document.getElementById("user").value;   
      
    //check empty first name field  
    if(emal == "") {  
      alert("Fill the first name");
      //document.getElementById("blankMsg").innerHTML = "**Fill the first name";  
      return false;  
    }  
      
    //character data validation  
    if(!isNaN(emal)){ 
      alert ("Only characters are allowed") ;
     // document.getElementById("blankMsg").innerHTML = "**Only characters are allowed";  
      return false;  
    }  
    
    //check empty password field  
    if(password == "") {  
      alert("Fill the password please!");
      //document.getElementById("message1").innerHTML = "**Fill the password please!";  
      return false;  
    }  
    
    //check empty confirm password field  
    if(c_password == "") {  
      alert ("Enter the password please!");
      //document.getElementById("message2").innerHTML = "**Enter the password please!";  
      return false;  
    }   
     
    //minimum password length validation  
    if(password.length < 4) { 
      alert("Password length must be atleast 4 characters"); 
     // document.getElementById("message1").innerHTML = "**Password length must be atleast 4 characters";  
      return false;  
    }  
  
    //maximum length of password validation  
    if(password.length > 6) { 
      alert("Password length must not exceed 6 characters"); 
     // document.getElementById("message1").innerHTML = "**Password length must not exceed 6 characters";  
      return false;  
    }  
    
    if(password != c_password) {  
      alert("Passwords are not same");
     
      //document.getElementById("message2").innerHTML = "**Passwords are not same";  
      return false;  
    } else {  
      alert ("Your password created successfully");  
      header('location:Login.php');
     // document.write("JavaScript form has been submitted successfully");  
    }  
 }  
</script>  

    <title>Register user</title>
  </head>
  <body>
    <div class="container">
        <div class="form-center">
            <h2>Register user</h2>
    <form onsubmit ="return validateForm()" method="post">
  <div class="mb-3">
    <label>user id</label>
    <input type="email" class="form-control" id="user" name="u1" placeholder="Enter your Email" >
    <span id = "blankMsg" style="color:red"> </span>
    </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" class="form-control" id="pass1" name="p1" placeholder="Enter your Password">
    <span id = "message1" style="color:red"> </span>
  </div>
  <div class="mb-3">
    <label>Confirm Password</label>
    <input type="password" class="form-control" id="pass2" name="p2" placeholder="Enter your C_Password">
    <span id = "message2" style="color:red"> </span> 
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <button type="reset" class="btn btn-primary">claer</button>
   
 </form> 
 </div>
  </div>
    
</html>





