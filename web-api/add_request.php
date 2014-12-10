<?php

$response = array();

if(isset($_POST['username']) && isset($_POST['category']))
{
    $username = $_POST['username'];
    $category = $_POST['category'];
     
    require_once 'db_connection.php';
    $db = new DB_CONNECT();
        
    $sql = "INSERT INTO zahtev (tip,datum_zahtevanja,status_f,korisnicko_ime_fk)
		VALUES ('$category',now(),'na_cekanju','$username')";

	$result = mysql_query($sql);
       
    if($result)
    {
        $response['success'] = 1;
        $response['message'] = "Insert is OK!";
    }
    else
    {
        $response['success'] = 0;
        $response['message'] = "Insert is bad!";
    }
}
else
{
    $response['success'] = 0;
    $response['message'] = "Username and request required"; 
}

echo json_encode($response);
