<?php

//load.php
$connect = new PDO('mysql:host=	sql211.epizy.com;dbname=epiz_28514576_algo', 'epiz_28514576', 'CfvP2FRcOb6mX
');

$data = array();

$query = "SELECT * FROM events ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
}

echo json_encode($data);

?>