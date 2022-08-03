<?php 

include "config.php";


    $search = "a";

    $query = "SELECT * FROM barang WHERE nama_barang LIKE '%a%'";
    $result = mysqli_query($con,$query);
    
    while($row = mysqli_fetch_array($result) ){
        $response[] = array("value"=>$row['kode'],"label"=>$row['nama_barang']);
    }

    echo json_encode($response);


exit;


