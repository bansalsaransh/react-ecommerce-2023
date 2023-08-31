<?php

$server="localhost";
$user="root";
$password="";
$db="db55";

$conn =mysqli_connect($server,$user,$password,$db);
if($conn){
    ?>
    <script>
        alert(" db connnected successfull");
    </script>
    <?php
   
}
else{
    ?>
    <script>
        alert("failed");
    </script>
    <?php
}
  

?>