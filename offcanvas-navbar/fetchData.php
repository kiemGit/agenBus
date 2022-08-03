<?php 

include "config.php";

if(isset($_POST['search'])){
    $search = mysqli_real_escape_string($con,$_POST['search']);

    $query = "SELECT * FROM villages WHERE label like'%".$search."%' LIMIT 10";
    $result = mysqli_query($con,$query);
    
    while($row = mysqli_fetch_array($result) ){
        $response[] = array("value"=>$row['value'],"label"=>$row['label']);
    }

    echo json_encode($response);
}

exit;


