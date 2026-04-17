<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
  margin:0;
  font-family: Arial;
  background: linear-gradient(135deg, #9b59b6, #6f42c1);
  font-style: Italic;
}

/* NAVBAR */
.navbar{
  background:#111;
}

/* CARDS */
.card-box{
  background:#111;
  color:white;
  border-radius:15px;
  padding:30px;
  text-align:center;
  transition:0.3s;
  box-shadow:0px 5px 15px rgba(0,0,0,0.3);
}

/* CARD HOVER */
.card-box:hover{
  transform:scale(1.08);
  background: linear-gradient(135deg, #171418);
}

/* BUTTON */
.btn-custom{
  background: linear-gradient(135deg, #784b89, #6f42c1);
  color:white;
  border:none;
  border-radius:20px;
  transition:0.3s;
}

/* BUTTON HOVER */
.btn-custom:hover{
  background: linear-gradient(135deg, #6e53a1, #542c64);
  transform:scale(1.05);
}

</style>

</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark">
  <div class="container">
    <span class="navbar-brand">LMS DASHBOARD</span>
  </div>
</nav>

<!-- MAIN -->
<div class="container mt-5">

<h2 class="text-white mb-5 text-center">WELCOME TO DASHBOARD</h2>

<div class="row">

<!-- COURSES -->
<div class="col-md-4 mb-4">
  <div class="card-box">
    <h4>COURSES</h4>
    <p>View Available Courses</p>
    <a href="courses.php" class="btn btn-custom mt-3 w-100 py-3">OPEN</a>
  </div>
</div>

<!-- ASSIGNMENT -->
<div class="col-md-4 mb-4">
  <div class="card-box">
    <h4>ASSIGNMENT</h4>
    <p>Submit Your Work</p>
    <a href="assignment.php" class="btn btn-custom mt-3 w-100 py-3">OPEN</a>
  </div>
</div>

<!-- QUIZ -->
<div class="col-md-4 mb-4">
  <div class="card-box">
    <h4>QUIZ</h4>
    <p>Attempt Quiz</p>
    <a href="quiz.php" class="btn btn-custom mt-3 w-100 py-3">START</a>
  </div>
</div>

</div>

</div>

</body>
</html>