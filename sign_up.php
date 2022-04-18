<?php

$conn=mysqli_connect("localhost","root","","reuse"));
if(isset($_POST['sign_up'])){
$firstname1=mysqli_real_escape_string($conn,$_POST['firstname']); //real escape string to secure the data.
$lastname1=mysqli_real_escape_string($conn,$_POST['lastname']);
$phoneno1=mysqli_real_escape_string($conn,$_POST['tel']);
$email1=mysqli_real_escape_string($conn,$_POST['email']);
$password1=mysqli_real_escape_string($conn,$_POST['password']);
$check_mail="select * from users1 where email='$email1' ";
$run_mail=mysqli_query($conn,$check_mail);

$check=mysqli_num_rows($run_mail);
if($check==1){
echo "<script>alert('This email alredy exists!')</script>";
exit();
}
$insert="insert into users1 (firstname,lastname,phoneno,email,password) values ('$firstname1','$lastname1','$phoneno1','$email1','$password1')"; 

$query=mysqli_query($conn,$insert);

if($query){
echo "<script>alert('Congratulations $firstname,registration is complete.')</script>";
}
else{
echo "Resgistration failed,try again!";
}
}

?>
