<?php

$response = array();

if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    require_once 'db_connection.php';
    $db = new DB_CONNECT();
        
    $check = "SELECT korisnicko_ime FROM korisnik WHERE korisnicko_ime = '$username' AND lozinka = '$password'";
    $contains_username = mysql_query($check);
       
    if(mysql_num_rows($contains_username) > 0)
    {
        $response['success'] = 1;
        $response['message'] = "Welcome " . $username . " !";
    }
    else
    {
        $response['success'] = 0;
        $response['message'] = "Incorrect username or password";
    }
}
else
{
    $response['success'] = 0;
    $response['message'] = "Username and password required"; 
}

echo json_encode($response);
