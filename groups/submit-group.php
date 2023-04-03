<?php
include('../config.php');

$db = $conn;

 $name     = legal_input($_POST['inputName']);
   
if(!empty($name)){
    Insert_data($name);
}else{
 echo "All fields are required";
}

function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

 function insert_data($name){
 
    global $db;

    $query="INSERT INTO user_group( group_name) VALUES( '$name')";
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