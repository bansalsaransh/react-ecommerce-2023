<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);


include "../conn.php";


  if(isset($_POST['submit'])){

    $first_name = $_POST['firstname'];

    $last_name = $_POST['lastname'];

    $email = $_POST['uname'];

    $password = $_POST['pass'];

    $bdate =$_POST['birthday'];

    $plan =$_POST['selectplan'];

    $contact =$_POST['phone'];

    $addr =$_POST['Add'];
   echo $first_name;



    $sql = "INSERT INTO `table`(`firstname`, `lastname`, `email`, `password`,`bdate`,`contact`,`addr`,`plan`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $first_name, $last_name, $email, $password, $bdate, $contact, $addr, $plan);
    if ($stmt->execute()) {
      echo "New record created successfully.";
      echo "<br>";
      echo "SQL Query: " . $sql; // Display the SQL query
  } else {
      echo "Error: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();

  }

?>




<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Now-!</title>
    <link rel="stylesheet" href="../styles/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
<body>

<h2>Signup Form</h2>

<div class="register">
<div class="container">
             <form class="row g-3" action="" method="POST">

                 
                 <div class="col-md-6">
                    <label for="firstname">First name:</label>
                     <input type="text" class="form-control"   id="firstname" name="firstname" required>
                    </div>
                    <div class="col-md-6">
                        <label for="lastname">Last name:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname"  aria-label="Last name" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="uname" class="form-label">Username</label>
                        <input type="email" class="form-control" id="uname" name="uname" required>
                    </div>
                    <div class="col-md-6">
                        <label for="Pass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="Pass" name="pass" required>
                    </div>
                    <div class="col-md-6">
                        <label for="birthday" class="form-label">Birthday:</label>
                         <input type="date" class="form-control"id="birthday" name="birthday" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Enter your phone number:</label>
<input type="tel" id="phone" name="phone" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label for="Add" class="form-label">Address</label>
                        <input type="text" class="form-control" id="Add" name="Add"  required>
                    </div>
                 
                    <div class="col-12">
                        <label for="selectplan" class="form-label">Select Your Plan</label>
                        <select class="form-select" name="selectplan" id="selectplan" required>
                            <option selected></option>
                            <option value="1">Silver</option>
                            <option value="2">Gold</option>
                            <option value="3">Platinum</option>
                            <option value="4">Diamond</option>
                          </select>
                    </div>
              
          
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>
 
    


<!--     
    First name:<br>
    
    <input type="text" name="firstname">
    
    <br>
    
    Last name:<br>
    
    <input type="text" name="lastname">
    
    <br>
    
    Email:<br>
    
    <input type="email" name="email">
    
    <br>
    
    Password:<br>
    
    <input type="password" name="password">
    
    <br>
    
    Gender:<br>
    
    <input type="radio" name="gender" value="Male">Male
    
    <input type="radio" name="gender" value="Female">Female
    
    <br><br>
    
    <input type="submit" name="submit" value="submit">

    pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
     -->
  
  

</div>

</body>

</html>