<html>
<head>
	<title>Login Page</title>
	<style>
		.start{
			width:400px;
			height:390px;
			text-align:center;
			background-color:blue;
			opacity:0.6;
			margin:0 auto;
			margin-top:100px;
		}
		.bg{
			background-image:url("https://ingapan.es/wp-content/uploads/2019/06/por_que_se_celebra_el_dia_mundial_del_medio_ambiente_1775_600.jpg");
			height: 100%; 
	  background-position: center;
			background-size:cover;
		}
		.txtbox{
			margin-top: 15px;
			background: white;
			text-align:start;
			font-size:15px;
			font-family:sans-serif;
			height:30px;
			width:300px;
			padding:15px;
			border: none;
			border-radius:15px;
		}
		.btn{
			width:300px;
			height:40px;
			border-radius:10px;
			font-size:20px;
			background-color: lightgreen;
		}
		.img{
			width:100px;
			height:100px;
			border:none;
			border-radius:50%;
		}
	</style>
</head>
<body class="bg">
	<div class="start">
		<form action="" method="POST">
			<center>
			<h1>Login Page</h1>
			<img src="https://th.bing.com/th/id/OIP.2jNZXrqJhXUBTl0I0m2ctwHaHa?w=177&h=180&c=7&o=5&dpr=1.25&pid=1.7" class="img"/></center>
			<input type="email" name="email" class="txtbox" placeholder="Enter Email Id"/><br/><br/>
			<input type="password" name="password" class="txtbox" placeholder="Enter Password"/><br/><br/>
			<input type="submit" name="login" class="btn" value="Login"/><br/><br/>
			<input type="submit" name="login" class="btn" value="Back"/><br/>
		</form>
	</div>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","reuse");
if(isset($_POST['login'])){
	$email1=$_POST['email'];
    $password1=$_POST['password'];
    $query = "select * from users1 WHERE email='$email1' AND password='$password1'";
    $query_run = mysqli_query($conn,$query);
    if(mysqli_fetch_array($query_run)>0){
    	echo '<script type="text/javascript">alert("Logged In Successfully") </script>';
    	header("location:source.html");
    }
    else{
    	echo '<script type="text/javascript">alert("Logged In Failed") </script>';
    	header("location:signup.html");
    }
}
?>