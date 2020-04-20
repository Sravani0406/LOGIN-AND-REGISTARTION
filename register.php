<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>Registration </title>
<style>
* {box-sizing: border-box
   
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}



 
.btn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


@media screen and (max-width: 300px) {
   .btn {
    width: 100%;
  }
}
</style>
</head>
<body>
<center>
<table width="600">
<td>
<form method="post" action="register.php" style="border:1px solid #ccc">

  <div class="container">
    <h1><center>REGISTER HERE<center></h1>
	<?php echo display_error(); ?>
    <b>PLEASE FILL IN THIS FORM TO CREATE AN ACCOUNT.</b>
    <hr>
     <label for="username"><b>USERNAME</b></label>
    <input type="text" placeholder="Enter username" name="username" required><?php echo $username; ?>

    <label for="email"><b>EMAIL</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><?php echo $email; ?>

    <label for="psw"><b>PASSWORD</b></label>
    <input type="password" placeholder="Enter Password" name="password_1" required>

    <label for="psw-repeat"><b>CONFIRM PASSWORD</b></label>
    <input type="password" placeholder="Repeat Password" name="password_2" required>

     <div class="clearfix">
     
      <button type="submit" class="btn" name="register_btn">Sign Up</button>
 
    </div>
<p>
Already a member? <a href="login.php">Sign in</a>
</p>
  </div>
</form>
</center>
</table>
</body>
</html>

