<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!DOCTYPE html>
<html>
<head>
<title>Assignment</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
  background: linear-gradient(135deg, #9b59b6, #6f42c1);
  font-family: Arial;
  font-style: Italic;
}

/* CARD */
.assignment-card{
  background:#111;
  color:white;
  border-radius:15px;
  padding:40px;
  max-width:500px;
  margin:auto;
  box-shadow:0px 10px 30px rgba(0,0,0,0.3);
  transition:0.3s;
}

/* CARD HOVER */
.assignment-card:hover{
  transform:scale(1.05);
}

/* INPUT */
input[type="file"]{
  background:#222;
  color:white;
  border:none;
  font-style: Italic;
}

/* BUTTON */
.btn-custom{
  width:100%;
  padding:12px;
  border:none;
  border-radius:20px;
  color:white;
  background: linear-gradient(135deg, #9b59b6, #6f42c1);
  transition:0.3s;
  font-style: Italic;
}

/* BUTTON HOVER */
.btn-custom:hover{
  transform:scale(1.05);
  background: linear-gradient(135deg, #6f42c1, #9b59b6);
}
</style>

</head>

<body>

<div class="container mt-5">

<h2 class="text-white text-center mb-5">SUBMIT ASSIGNMENT</h2>

<div class="assignment-card text-center">

<p>Select Your File And Submit</p>

<input type="file" class="form-control mb-4">

<button class="btn-custom" onclick="alert('Assignment Submitted Successfully')">
  SUBMIT ASSIGNMENT
</button>

</div>

</div>

</body>
</html>