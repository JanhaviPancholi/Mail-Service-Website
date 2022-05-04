<html>
<body align="center">
<h1>LOGIN</h1>
<! –– CSS for Username, password and login button––> 
<style>
input[type=email], select {
  width: 40%;
  background-color: #64d1bb;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password] {
  width: 40%;
  background-color: #64d1bb;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type=submit] {
    padding:10px 20px; 
    background:#64d1bb;
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}

<! –– Form for the input of username and password ––> 
</style>
<h3><form action=# method="post" style="color:345B63">
Username:
<input type="email" name="username" required><br><br>
Password:
<input type="password" name="password" required><br><br>
<input type="submit" value="Login"></h3>
</form>
</body>
</html>


<?php
//set the username and password using isset. 
//if username password is correct it will redirect after 1 seconnd, if not correct it will show error.
//used the header function to redirect the first page to login page after login validation.

if(isset($_POST['username'])&& isset($_POST['password'])) {
	if($_POST['username']=='alex@sicsr.ac.in' && $_POST['password']=='alex!23') {
		echo '<span style="color:green;">Login successful! Redirecting..</span>';
		header('refresh:1;url=inbox033.php');
} else {
	echo '<span style="color:red;">Invalid Credentials! Try Again.</span>';
}
}
?>