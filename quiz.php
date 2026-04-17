<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!DOCTYPE html>
<html>
<head>
<title>Quiz</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
  background: linear-gradient(135deg, #9b59b6, #6f42c1);
  font-family: Arial;
  font-style: Italic;
}

/* CARD */
.quiz-card{
  background:#111;
  color:white;
  border-radius:15px;
  padding:30px;
  max-width:600px;
  margin:auto;
  box-shadow:0px 10px 30px rgba(0,0,0,0.3);
  transition:0.3s;
}

.quiz-card:hover{
  transform:scale(1.03);
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

.btn-custom:hover{
  transform:scale(1.05);
}

/* RESULT */
.result{
  margin-top:20px;
  font-weight:bold;
}
</style>

</head>

<body>

<div class="container mt-5">

<h2 class="text-white text-center mb-5">QUIZ</h2>

<div class="quiz-card">

<!-- Q1 -->
<p>1. What is HTML?</p>
<input type="radio" name="q1" value="0"> Programming Language<br>
<input type="radio" name="q1" value="1"> Markup Language<br><br>

<!-- Q2 -->
<p>2. Which language is used for styling web pages?</p>
<input type="radio" name="q2" value="1"> CSS<br>
<input type="radio" name="q2" value="0"> PHP<br><br>

<!-- Q3 -->
<p>3. Which one is a database?</p>
<input type="radio" name="q3" value="1"> MySQL<br>
<input type="radio" name="q3" value="0"> HTML<br><br>

<button class="btn-custom" onclick="checkQuiz()">SUBMIT QUIZ</button>

<p class="result" id="result"></p>

</div>

</div>

<script>
function checkQuiz(){
  let score = 0;

  let q1 = document.querySelector('input[name="q1"]:checked');
  let q2 = document.querySelector('input[name="q2"]:checked');
  let q3 = document.querySelector('input[name="q3"]:checked');

  if(q1) score += parseInt(q1.value);
  if(q2) score += parseInt(q2.value);
  if(q3) score += parseInt(q3.value);

  document.getElementById("result").innerHTML = "Your Score: " + score + "/3";
}
</script>

</body>
</html>