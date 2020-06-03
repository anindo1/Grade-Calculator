<head>
<title>Grades Calculator</title>
</head>

<?php
	function calculateWeight($grade, $weight) {
		return $grade * $weight/100;
	}

	function calculateFinalGrade($weight1, $weight2, $weight3, $weight4, $weight5, $weight6, $weight7, $weight8, $weight9, $weight10) {
		return $weight1 + $weight2 + $weight3 + $weight4 + $weight5 + $weight6 + $weight7 + $weight8 + $weight9 + $weight10;
	}
	
	function endUpWithOverallGrade($desired_grade, $current_grade, $current_weight) {
		$weight_remaining = 100 - $current_weight;
		$grade_needed1 = $desired_grade - $current_grade;
		$grade_needed2 = $grade_needed1 / $weight_remaining;
		$grade_needed = $grade_needed2 * 100;
		$grade_needed_rounded = round($grade_needed, 2);
		if (0 > $grade_needed) {
			return "You will end up with the desired grade or above no matter what";
		} elseif (100 < $grade_needed) {
			return "It is impossible to get the desired grade anymore";
		} else {
			return "You need to get " . $grade_needed_rounded . "% in the remaining " . $weight_remaining . "% of the class."; 
		}
	}
	
	function finalGradeWithRemainingGrade($remaining_grade, $current_grade, $current_weight) { 
		$weight_remaining = 100 - $current_weight;
		$remaining_true_grade = calculateWeight($remaining_grade, $weight_remaining);
		$final_grade = round($current_grade + $remaining_true_grade,2);
		return "Your final grade will be " . $final_grade . "%";
	}
?>

<style>
body {
	margin-bottom: 0px;
	margin-left: 0px;
	margin-right: 0px;
	margin-top: 0px;
	font-family: “Arial”, Helvetica, sans-serif;
	padding-right: 50px;
	padding-left: 50px;
	padding-top: 20px;
	border-left: 150px solid grey;
	border-right: 150px solid grey;
}

h1 {
	margin-top: 20px;
	color: black;
	text-align: center;
	font-size: 30px;
}

section1 {
	color: blue;
	margin-top: 20px;
	margin-bottom: 5px;
	line-height: 10px;
}

table, th, td {
	text-align: center;
	margin-left:auto;
	margin-right:auto;
	width: 25px;
	padding: 10px;
	border-bottom: 1px solid #ddd;
}

#footer {
	
}

</style>

<body>
<section1>
<p>Anindya De - <a href="https://ca.linkedin.com/in/amogh-joshi-766195165" target=”_blank”;> Amogh Joshi </a> </p>
<p>University of British Columbia</p>
</section1>
<h1> Grade Calculator </h1>
<table>
<form method="GET" name="form" action = "/">
  <tr>
    <th>Assignment</th>
    <th>Grade Achieved(%)</th>
    <th>Weight of Assignment(%)</th>
  </tr>
  <tr>
  	<form method="GET" action = "/">
    <td>1</td>
    <td>
	<input id = "g1" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['grade1']); ?>" name = "grade1"></input>
	</td>
    <td>
	<input id = "w1" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['weight1']); ?>" name = "weight1"></input>
	</td>
  </tr>
  <tr>
    <td>2</td>
    <td>
	<input id = "g2" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['grade2']); ?>" name = "grade2"></input>
	</td>
    <td>
	<input id = "w2" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['weight2']); ?>" name = "weight2"></input>
	</td>
  </tr>
  <tr>
    <td>3</td>
    <td>
	<input id = "g3" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['grade3']); ?>" name = "grade3"></input>
	</td>
    <td>
	<input id = "w3" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['weight3']); ?>" name = "weight3"></input>
	</td>
  </tr>
  <tr>
    <td>4</td>
    <td>
	<input id = "g4" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['grade4']); ?>" name = "grade4"></input>
	</td>
    <td>
	<input id = "w4" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['weight4']); ?>" name = "weight4"></input>
	</td>
  </tr>
  <tr>
    <td>5</td>
    <td>
	<input id = "g5" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['grade5']); ?>" name = "grade5"></input>
	</td>
    <td>
	<input id = "w5" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['weight5']); ?>" name = "weight5"></input>
	</td>
  </tr>
   <tr>
    <td>6</td>
    <td>
	<input id = "g6" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['grade6']); ?>" name = "grade6"></input>
	</td>
    <td>
	<input id = "w6" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['weight6']); ?>" name = "weight6"></input>
	</td>
  </tr>
  <tr>
    <td>7</td>
    <td>
	<input id = "g7" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['grade7']); ?>" name = "grade7"></input>
	</td>
    <td>
	<input id = "w7" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['weight7']); ?>" name = "weight7"></input>
	</td>
  </tr>
  <tr>
    <td>8</td>
    <td>
	<input id = "g8" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['grade8']); ?>" name = "grade8"></input>
	</td>
    <td>
	<input id = "w8" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['weight8']); ?>" name = "weight8"></input>
	</td>
  </tr>
  <tr>
    <td>9</td>
    <td>
	<input id = "g9" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['grade9']); ?>" name = "grade9"></input>
	</td>
    <td>
	<input id = "w9" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['weight9']); ?>" name = "weight9"></input>
	</td>
  </tr>
  <tr>
    <td>10</td>
    <td>
	<input id = "g10" size = "5" type = "text" value="<?php echo htmlspecialchars($_GET['grade10']); ?>" name = "grade10"></input>
	</td>
    <td>
	<input id = "w10" size = "5" type = "text"value="<?php echo htmlspecialchars($_GET['weight10']); ?>" name = "weight10"></input>
	</td>
  </tr>
</table>
	<input type="submit" name="submit" value = "Calculate Current Grade">
	<a href="http://php.stuffbyliang.com/">
		<input type="button" value="Clear Inputs" />
	</a>
	<br>
	What average grade do I need on the remaining assignments in order to end up with an overall average of: <input size = "4" type = "text" name = "desired_grade"></input>
	<input type="submit" name="submit2" value = "Calculate">
	<br>
	What will my overall average be if on the remaining assignments, I get an average of: <input size = "4" type = "text" name = "remaining_grade"></input>
	<input type="submit" name="submit3" value = "Calculate">
</form>
<p>
<?php
if(array_key_exists('submit', $_GET)) { 
	submit(); 
} else if(array_key_exists('submit2', $_GET)) { 
	submit2(); 
} else if(array_key_exists('submit3', $_GET)) { 
	submit3(); 
} 

function submit() {
	$grade1 = $_GET['grade1'];
	$grade2 = $_GET['grade2'];
	$grade3 = $_GET['grade3'];
	$grade4 = $_GET['grade4'];
	$grade5 = $_GET['grade5'];
	$grade6 = $_GET['grade6'];
	$grade7 = $_GET['grade7'];
	$grade8 = $_GET['grade8'];
	$grade9 = $_GET['grade9'];
	$grade10 = $_GET['grade10'];

	$weight1 = $_GET['weight1'];
	$weight2 = $_GET['weight2'];
	$weight3 = $_GET['weight3'];
	$weight4 = $_GET['weight4'];
	$weight5 = $_GET['weight5'];
	$weight6 = $_GET['weight6'];
	$weight7 = $_GET['weight7'];
	$weight8 = $_GET['weight8'];
	$weight9 = $_GET['weight9'];
	$weight10 = $_GET['weight10'];

	$desired_grade = $_GET['desired_grade'];
	$remaining_grade = $_GET['remaining_grade'];

	$trueGrade1 = calculateWeight($grade1, $weight1);
	$trueGrade2 = calculateWeight($grade2, $weight2);
	$trueGrade3 = calculateWeight($grade3, $weight3);
	$trueGrade4 = calculateWeight($grade4, $weight4);
	$trueGrade5 = calculateWeight($grade5, $weight5);
	$trueGrade6 = calculateWeight($grade6, $weight6);
	$trueGrade7 = calculateWeight($grade7, $weight7);
	$trueGrade8 = calculateWeight($grade8, $weight8);
	$trueGrade9 = calculateWeight($grade9, $weight9);
	$trueGrade10 = calculateWeight($grade10, $weight10);

	$final_grade = calculateFinalGrade($trueGrade1, $trueGrade2, $trueGrade3, $trueGrade4, $trueGrade5, $trueGrade6, $trueGrade7, $trueGrade8, $trueGrade9, $trueGrade10); 
	$final_weight = $weight1 + $weight2 + $weight3 + $weight4 + $weight5 + $weight6 + $weight7 + $weight8 + $weight9 + $weight10;
	echo "Your current overall grade for the class is: " . $final_grade . "% for a weight of: " . $final_weight . "%";
}

function submit2() {
	$grade1 = $_GET['grade1'];
	$grade2 = $_GET['grade2'];
	$grade3 = $_GET['grade3'];
	$grade4 = $_GET['grade4'];
	$grade5 = $_GET['grade5'];
	$grade6 = $_GET['grade6'];
	$grade7 = $_GET['grade7'];
	$grade8 = $_GET['grade8'];
	$grade9 = $_GET['grade9'];
	$grade10 = $_GET['grade10'];

	$weight1 = $_GET['weight1'];
	$weight2 = $_GET['weight2'];
	$weight3 = $_GET['weight3'];
	$weight4 = $_GET['weight4'];
	$weight5 = $_GET['weight5'];
	$weight6 = $_GET['weight6'];
	$weight7 = $_GET['weight7'];
	$weight8 = $_GET['weight8'];
	$weight9 = $_GET['weight9'];
	$weight10 = $_GET['weight10'];

	$desired_grade = $_GET['desired_grade'];
	$remaining_grade = $_GET['remaining_grade'];

	$trueGrade1 = calculateWeight($grade1, $weight1);
	$trueGrade2 = calculateWeight($grade2, $weight2);
	$trueGrade3 = calculateWeight($grade3, $weight3);
	$trueGrade4 = calculateWeight($grade4, $weight4);
	$trueGrade5 = calculateWeight($grade5, $weight5);
	$trueGrade6 = calculateWeight($grade6, $weight6);
	$trueGrade7 = calculateWeight($grade7, $weight7);
	$trueGrade8 = calculateWeight($grade8, $weight8);
	$trueGrade9 = calculateWeight($grade9, $weight9);
	$trueGrade10 = calculateWeight($grade10, $weight10);

	$final_grade = calculateFinalGrade($trueGrade1, $trueGrade2, $trueGrade3, $trueGrade4, $trueGrade5, $trueGrade6, $trueGrade7, $trueGrade8, $trueGrade9, $trueGrade10); 
	$final_weight = $weight1 + $weight2 + $weight3 + $weight4 + $weight5 + $weight6 + $weight7 + $weight8 + $weight9 + $weight10;
	echo endUpWithOverallGrade($desired_grade, $final_grade, $final_weight);
}

function submit3() {
	$grade1 = $_GET['grade1'];
	$grade2 = $_GET['grade2'];
	$grade3 = $_GET['grade3'];
	$grade4 = $_GET['grade4'];
	$grade5 = $_GET['grade5'];
	$grade6 = $_GET['grade6'];
	$grade7 = $_GET['grade7'];
	$grade8 = $_GET['grade8'];
	$grade9 = $_GET['grade9'];
	$grade10 = $_GET['grade10'];

	$weight1 = $_GET['weight1'];
	$weight2 = $_GET['weight2'];
	$weight3 = $_GET['weight3'];
	$weight4 = $_GET['weight4'];
	$weight5 = $_GET['weight5'];
	$weight6 = $_GET['weight6'];
	$weight7 = $_GET['weight7'];
	$weight8 = $_GET['weight8'];
	$weight9 = $_GET['weight9'];
	$weight10 = $_GET['weight10'];

	$desired_grade = $_GET['desired_grade'];
	$remaining_grade = $_GET['remaining_grade'];

	$trueGrade1 = calculateWeight($grade1, $weight1);
	$trueGrade2 = calculateWeight($grade2, $weight2);
	$trueGrade3 = calculateWeight($grade3, $weight3);
	$trueGrade4 = calculateWeight($grade4, $weight4);
	$trueGrade5 = calculateWeight($grade5, $weight5);
	$trueGrade6 = calculateWeight($grade6, $weight6);
	$trueGrade7 = calculateWeight($grade7, $weight7);
	$trueGrade8 = calculateWeight($grade8, $weight8);
	$trueGrade9 = calculateWeight($grade9, $weight9);
	$trueGrade10 = calculateWeight($grade10, $weight10);

	$final_grade = calculateFinalGrade($trueGrade1, $trueGrade2, $trueGrade3, $trueGrade4, $trueGrade5, $trueGrade6, $trueGrade7, $trueGrade8, $trueGrade9, $trueGrade10); 
	$final_weight = $weight1 + $weight2 + $weight3 + $weight4 + $weight5 + $weight6 + $weight7 + $weight8 + $weight9 + $weight10;
	echo finalGradeWithRemainingGrade($remaining_grade, $final_grade, $final_weight);
}
?>
</p>
<section id="footer">
	.
</section>
</body>