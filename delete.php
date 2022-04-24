<?php

//delete.php

if(isset($_POST["id"]))
{
$connect = new PDO('mysql:host=	sql211.epizy.com;dbname=epiz_28514576_algo', 'epiz_28514576', 'CfvP2FRcOb6mX
');
 $query = "
 DELETE from events WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>