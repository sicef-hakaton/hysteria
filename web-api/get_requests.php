<?php

$response = array();

if(isset($_POST['username']))
{
    $username = $_POST['username'];
    
    require_once 'db_connection.php';

    $db = new DB_CONNECT();

    $query = "SELECT * FROM zahtev WHERE korisnicko_ime_fk = $username ORDER BY datum_zahtevanja DESC";
	
    $result = mysql_query($query);

    $response['requests'] = array();

    if(mysql_num_rows($result) > 0)
    {    
        while($row = mysql_fetch_array($result)){

            $requests = array();
            $requests['id'] = $row['id'];
            $requests['tip'] = $row['tip'];
            $requests['datum_zahtevanja'] = $row['datum_zahtevanja'];
            $requests['datum_izdavanja'] = $row['datum_izdavanja'];
            $requests['status_f'] = $row['status_f'];
            $requests['komentar'] = $row['komentar'];

            array_push($response['requests'], $requests);
        }
    }

    $response['success'] = 1;
}
else 
{
    $response['requests'] = array();
    $response['success'] = 0;
}
echo json_encode($response);

