<?php
include("../config.php");

$db=$conn;

function fetch_data(){
 global $db;
  $query="SELECT * FROM user_group";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
  }else{
    return $row=[];
  }
}

$fetchData= fetch_data();
show_data($fetchData);


function show_data($fetchData){
 echo '<table class="table">
        <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nazwa</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
        </thead>';
 if(count($fetchData) > 0){
      foreach($fetchData as $data){ 
        
  echo "<tbody>
            <tr>
                <td>".$data['id_group']."</td>
                <td>".$data['group_name']."</td>
                <td><button type='button' class='btn btn-success'>Edycja</button></td>
                <td><a href='javascript:void(0)' onclick='deleteData(".$data['id_group'].")'><button type='button' class='btn btn-danger'>Usuń</button></a></td>
             </tr>
        </tbody>";
     }
}else{
  echo "<tr>
            <td colspan='7'>Brak danych w bazie</td>
        </tr>"; 
}
  echo "</table>";
}