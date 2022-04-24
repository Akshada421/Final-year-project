<?php

//insert.php

$connect = new PDO('mysql:host=	sql211.epizy.com;dbname=epiz_28514576_algo', 'epiz_28514576', 'CfvP2FRcOb6mX
');

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO events 
 (title, start_event, end_event) 
 VALUES (:title, :start_event, :end_event)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end']
  )
 );
}


?>