<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
include "db.php";

if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn,$query);

  if(mysqli_num_rows($result) > 0){
    header("Location: dashboard.php");
  } else {
    echo "<script>alert('Invalid Login')</script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>LMS Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
  margin:0;
  height:100vh;
  background: linear-gradient(135deg, #9b59b6, #6f42c1);
  display:flex;
  justify-content:center;
  align-items:center;
  font-family: Arial;
  font-style: Italic;
}

/* CARD */
.main-card{
  width:800px;
  height:450px;
  display:flex;
  border-radius:15px;
  overflow:hidden;
  box-shadow:0px 10px 30px rgba(0,0,0,0.3);
}

/* LEFT */
.left{
  width:50%;
  background:#111;
  color:white;
  padding:40px;
  display:flex;
  flex-direction:column;
  justify-content:center;
}

/* RIGHT */
.right{
  width:50%;
  background: linear-gradient(135deg, #9b59b6, #6f42c1);
  color:white;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  text-align:center;
}

/* INPUT */
.input-box{
  margin-bottom:20px;
}

.input-box input{
  width:100%;
  background:transparent;
  border:none;
  border-bottom:1px solid #aaa;
  padding:10px;
  color:white;
  transition:0.3s;
  Font-style: Italic;
  border-radius:20px;
}

.input-box input::placeholder{
  color:#bbb;
}

.input-box input:hover{
  border-bottom:1px solid #9b59b6;
}

.input-box input:focus{
  outline:none;
  border-bottom:1px solid #6f42c1;
}



/* BUTTON */
.login-btn{
  width:100%;
  padding:10px;
  border:none;
  border-radius:20px;
  color:white;
  background: linear-gradient(135deg, #9b59b6, #6f42c1);
  transition:0.3s;
  font-style: Italic;

}

.login-btn:hover{
  transform:scale(1.05);
}

.main-card:hover{
  transform:scale(1.05);
}
</style>

</head>

<body>

<div class="main-card">

<!-- LEFT LOGIN -->
<div class="left">

<h3>Login</h3>
<p>Enter your account details</p>

<form method="POST">

<div class="input-box">
<input type="email" name="email" placeholder="Username" required>
</div>

<div class="input-box">
<input type="password" name="password" placeholder="Password" required>
</div>

<button class="login-btn" name="login">Login</button>

</form>

</div>

<!-- RIGHT DESIGN -->
<div class="right">

<h2>Welcome to</h2>
<h3>Student Portal</h3>
<p>Login to access your account</p>

<img src="image.png" width="150" style="border-radius:50%;">

</div>

</div>

</body>
</html>