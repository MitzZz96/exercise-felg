<?php
include("config.php");

$db=$conn;

function fetch_data(){
 global $db;
  $query="SELECT * FROM User INNER JOIN user_group ON User.FK_group_list = user_group.id_group;";
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
                    <th scope="col">Hasło</th>
                    <th scope="col">Imię</th>
                    <th scope="col">Nazwisko</th>
                    <th scope="col">Data urodzenia</th>
                    <th scope="col">Grupa</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
        </thead>';
 if(count($fetchData) > 0){
      foreach($fetchData as $data){ 
        
  echo "<tbody>
            <tr>
                <td>".$data['id_user']."</td>
                <td>".$data['name']."</td>
                <td>".$data['password']."</td>
                <td>".$data['u_name']."</td>
                <td>".$data['u_surname']."</td>
                <td>".$data['date']."</td>
                <td>".$data['group_name']."</td>
                <td><a href='javascript:void(0)' onclick='editData(".$data['id_user'].")'><button type='button' class='btn btn-success'>Edycja</button></a></td>
                <td><a href='javascript:void(0)' onclick='deleteData(".$data['id_user'].")'><button type='button' class='btn btn-danger'>Usuń</button></a></td>
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