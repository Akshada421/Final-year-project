<?php

//delete.php

if(isset($_POST["id"]))
{
 $conn=mysqli_connect("localhost","root","","reuse"));
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