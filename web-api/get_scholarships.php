<?php

$response = array();

if(isset($_POST['type']))
{
    $type = $_POST['type'];
    
    require_once 'db_connection.php';

    $db = new DB_CONNECT();

    $query = "SELECT * FROM obavestenje WHERE tip = $type ORDER BY datum_objave DESC";
	
    $result = mysql_query($query);

    $response['news'] = array();

    if(mysql_num_rows($result) > 0)
    {    
        while($row = mysql_fetch_array($result)){

            $news = array();
            $news['id'] = $row['id'];
            $news['naslov'] = $row['naslov'];
            $news['sadrzaj'] = $row['sadrzaj'];
            $news['tip'] = $row['tip'];
            $news['datum_objave'] = $row['datum_objave'];
            $news['link'] = $row['link'];

            array_push($response['news'], $requests);
        }
    }

    $response['success'] = 1;
}
else 
{
    $response['news'] = array();
    $response['success'] = 0;
}
echo json_encode($response);

