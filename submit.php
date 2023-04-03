<?php
include('config.php');

$db = $conn;  

 $name     = legal_input($_POST['inputName']);
 $password = legal_input($_POST['inputPassword']);
 $userName = legal_input($_POST['inputUserName']);
 $surname  = legal_input($_POST['inputSurname']);
 $date     = legal_input($_POST['inputDate']);
 $group    = legal_input($_POST['inputGroup']);
   
if(!empty($name) && !empty($password) && !empty($userName) && !empty($surname) && !empty($date) && !empty($group)){
    Insert_data($name, $password, $userName, $surname, $date, $group);
}else{
 echo "All fields are required";
}

function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

 function insert_data($name, $password, $userName, $surname, $date, $group){
 
     global $db;
      $query="INSERT INTO user( name, password, u_name, u_surname, date, FK_group_list) VALUES( '$name', '$password', '$userName', '$surname', '$date', '$group')";
     $execute=mysqli_query($db,$query);
     if($execute==true)
     {
       echo "User data was inserted successfully";
     }
     else{
      echo  "Error: " . "<br>" . mysqli_error($db);
     }
 }
?>