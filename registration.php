<html>
<head>
  <title>SignUp Page</title>
  <link rel="stylesheet" href="style1.css">
  <style>
    
body {
  margin-top:15%;
  background-position: center;
      background-repeat: no-repeat;
      background-size: cover;  
  font-family: Arial;
    padding: 20px;
    background-image: url("https://allgreenrecycling.com/wp-content/uploads/2016/11/recycling-environment-688x349-1280x720.png")
}
 
*{
    box-sizing: border-box;
}
 
form{
    max-width: 450px;
    margin: 0 auto;
}
 
form > div{
    margin-top: 5px;
    position: relative;
    background: white;
    border-bottom: 1px solid #ccc;
}
 
form > div > label{
    opacity: 0.3;
    font-weight: bold;
    position: absolute;
    top: 20px;
    left: 60px;
}
 
form > div > input[type="text"],
form > div > input[type="email"],
form > div > input[type="password"],
form > div > input[type="tel"]{
    width: 100%;
    border: 0;
    padding: 20px 20px 20px 60px;
    background: #F0ECEC;
}
 
form > div > input[type="text"]:focus,
form > div > input[type="email"]:focus,
form > div > input[type="password"]:focus,
form > div > input[type="tel"]:focus{
    outline: 0;
    background: white;
}
 
form > div > input[type="text"]:focus + label,
form > div > input[type="email"]:focus + label,
form > div > input[type="password"]:focus + label,
form > div > input[type="tel"]:focus + label{
    opacity: 0;
    background-color: white;
}
 
form > div > input[type="text"]:valid,
form > div > input[type="email"]:valid,
form > div > input[type="password"]:valid,
form > div > input[type="tel"]:valid{
    background: url('https://webdevtrick.com/wp-content/uploads/check-icon.svg');
    background-size: 20px;
    background-repeat: no-repeat;
    background-position: 415px 18px;
}
 
form > div > input[type="text"]:valid + label,
form > div > input[type="email"]:valid + label,
form > div > input[type="password"]:valid + label,
form > div > input[type="tel"]:valid + label{
    opacity: 0;
}
 
form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown),
form > div > input[type="email"]:invalid:not(:focus):not(:placeholder-shown),
form > div > input[type="password"]:invalid:not(:focus):not(:placeholder-shown),
form > div > input[type="tel"]:invalid:not(:focus):not(:placeholder-shown){
    background: url('https://webdevtrick.com/wp-content/uploads/xicon.svg');
    background-size: 20px;
    background-repeat: no-repeat;
    background-position: 415px 18px;
}
 
form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) + label,
form > div > input[type="email"]:invalid:not(:focus):not(:placeholder-shown) + label,
form > div > input[type="password"]:invalid:not(:focus):not(:placeholder-shown) + label,
form > div > input[type="tel"]:invalid:not(:focus):not(:placeholder-shown) + label{
    opacity: 0;
}
 
form > div > input[type="text"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements,
form > div > input[type="email"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements,
form > div > input[type="password"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements,
form > div > input[type="tel"]:invalid:not(:focus):not(:placeholder-shown) ~ .requirements{
    margin-top: 5px;
    max-height: 200px;
    padding: 5px 30px 5px 50px;
    border-top: 1px dashed #aaa;
    background-color: whitesmoke;
}
 
form > div .requirements {
    padding: 0 30px 0 50px;
    color: #C73030;
    max-height: 0;
    transition: 0.28s;
    overflow: hidden;
    font-style: italic;
    font-size: 0.8em;
}
.sign{
    display: block;
    width: 100%;
    margin: 20px 0;
    background: #41D873;
    color: white;
    border: 0;
    padding: 20px;
    font-size: 1.2rem;
}
.sign1{
    display: block;
    width: 100%;
    margin: 20px 0;
    background: #41D873;
    color: white;
    border: 0;
    padding: 20px;
    font-size: 1.2rem;
}
</style>
</head>
<body > 
  <form method="post" action="">
    <div>
    
    <input type="text" name="firstname" id="firstname" placeholder=" " required>
    <label for="firstname">First name</label>
    </div>
    <div>
    
    <input type="text" name="lastname" id="lastname" placeholder=" " required>
    <label for="lastname">Last name</label>
    </div>
    <div>
    
    <input type="tel" name="tel" id="tel" placeholder=" "
    pattern="^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$" required>
    <label for="tel">Phone No.</label>
    <div class="requirements"> Must be a valid Phone Number!</div>
    </div>
    <div>
    
    <input type="email" name="email" id="email" placeholder=" " required>
    <label for="email">Email</label>
    <div class="requirements"> Must be a valid email addres!</div>
    </div>
    <div>
    
    <input type="password" name="password" id="password" placeholder=" "
    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>
    <label for="password">Password</label>
    <div class="requirements"> Must be a valid password!</div>
    </div>
    <button name="sign_up" class="sign" onclick="location.href='login.php'">SignUp</button>
    <button name="sign_up" class="sign1" onclick="location.href='login.php'">Back</button>
  </form>
 <?php include("sign_up.php"); ?>
</body>
</html>