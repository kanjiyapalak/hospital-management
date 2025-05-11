


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}


input[type=text], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 8%;
}


button:hover {
  opacity: 0.8;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  padding-top:120px;
}
.container {
  padding: 16px;
  text-align: center;
}

</style>
</head>
<body>
<form action="login_page.php" method="post">
  <div class="imgcontainer">
    <img src="https://cdn.atriumhealth.org/-/media/wakeforest/clinical/images/logos-and-signatures/lch-400x100px-tv6.png?rev=7d9aa007410c429fad1924c6cb63aebf">
  </div>


  <div class="container">
    <label for="uname"><b>Username:</b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required><br><br>


    <label for="psw"><b>Password:</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br><br>
       
    <button type="submit" name="login">Login</button>
   
  </div>


 
</form>


</body>
</html>
