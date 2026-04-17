<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Courses</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
  background: linear-gradient(135deg, #9b59b6, #6f42c1);
  font-family: Arial;
  Font-style: Italic;
}

/* CARD */
.course-card{
  background:#111;
  color:white;
  border-radius:15px;
  padding:25px;
  text-align:center;
  transition:0.3s;
  box-shadow:0px 5px 15px rgba(0,0,0,0.3);
}

/* HOVER */
.course-card:hover{
  transform:scale(1.08);
  background: linear-gradient(135deg, #000000);
}
</style>

</head>

<body>

<div class="container mt-5">

<h2 class="text-white mb-5 text-center">AVAILABLE COURSES</h2>

<div class="row">

<?php
$result = mysqli_query($conn,"SELECT * FROM courses");

while($row = mysqli_fetch_assoc($result)){
?>

<div class="col-md-4 mb-4">
  <div class="course-card">
    <h5><?php echo $row['name']; ?></h5>
  </div>
</div>

<?php } ?>

</div>

</div>

</body>
</html>