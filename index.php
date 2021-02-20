<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Signup</title>
  </head>
  <body>
    <br>
    <h1>Signup Form</h1>
<br>
     
     <div class="container">
      <div class="myform">
       <form class="" id="" name="" method="post" action="">
        <div class="row">
         <div class="form-group col-6">
            <label>First Name</label>
            <input type="text" name="fname" class="form-control" placeholder="First Name">
          </div>
         <div class="form-group col-6">
            <label>Last Name</label>
            <input type="text" name="lname" class="form-control" placeholder="Last Name">
          </div> 
         </div>
         <div class="row">
            <div class="form-group col-6">
            <label>Date of Birth</label>
            <input type="text" name="date" class="form-control" placeholder="Date of Birth">
          </div>
          <div class="form-group col-6">
            <label>Gender</label>
            <select class="form-control" name="gender">
              <option>Male</option>
              <option>Female</option>
              
            </select>
          </div>

           
         </div>

         <div class="row">
          <div class="form-group col-6">
            <label>Adress</label>
            <input type="text" name="adress" class="form-control" placeholder="Adress">
          </div>
           <div class="form-group col-6">
            <label>Telephone</label>
            <input type="number" name="telephone" class="form-control" placeholder="Telephone">
          </div>
         </div>

         <div class="row">
          <div class="form-group col-6">
          <input type="submit" class="btn btn-success" name="btn" value="Submit">
           </div>
         </div>

        </form>
       </div>
      </div>

  











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<?php

$con = mysqli_connect('localhost','root','','database1');  

if($con){
  echo "connect success";
}
else{
  echo "connect failed";
}

if(isset($_POST['btn'])){
   $firstname = $_POST['fname'];
   $lastname = $_POST['lname'];
   $date = $_POST['date'];
   $gender = $_POST['gender'];
   $adress = $_POST['adress'];
   $telephone = $_POST['telephone'];

   $sql = "INSERT INTO table1(firstname,lastname,date,gender,adress,telephone) 
   values('$firstname','$lastname','$date','$gender','$adress','$telephone')" or die();

   if ($con->query($sql)===TRUE) {
     echo('record added!');
   }
   else{
     echo "Error: " . $sql . "<br>" . $con->error;
   }
 }

 $con->close();
?>






















