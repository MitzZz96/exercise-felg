<?php
include('backend.php');


if(isset($_GET['editId'])){
   $id= $_GET['editId'];
    edit_data($conn, $id);
}


if(isset($_POST['updateId'])){
   $id= $_POST['updateId'];
   update_data($conn,$id);
}


function edit_data($conn, $id){
    
    $query = "SELECT * FROM `user` WHERE `id_user`=`$id`";
    $exec = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($exec);
    echo json_encode($row);          
    
}


function update_data($conn, $id){

    $name     = legal_input($_POST['inputName']);
    $password = legal_input($_POST['inputPassword']);
    $userName = legal_input($_POST['inputUserName']);
    $surname  = legal_input($_POST['inputSurname']);
    $date     = legal_input($_POST['inputDate']);
    $group    = legal_input($_POST['inputGroup']);

      $query="UPDATE `user` SET `name`=`$name`,`password`=`$password`,`u_name`= `$userName`,`u_surname`=`$surname`,`date`=`$date`,`FK_group_list`=`$group` WHERE `id_user`='$id'";

      $exec= mysqli_query($conn,$query);
  
      if($exec){
        
         echo "data was updated"; 
        
      }else{
         $msg= "Error: " . $query . "<br>" . mysqli_error($conn);
         echo $msg; 
      }
}
   

function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>