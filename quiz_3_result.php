<!DOCTYPE html>

<html>
 
<head>
	<meta charset="UTF-8" />
	
	<title>result</title>
	
	
</head>
<?php include("nav.php"); ?> 
<body>
 
	<div id="page-wrap">
 
    <div class="container">
        
        <img src="res.jpg" alt="Snow" style="width:100%;">
        <div class="centered">
        Result 
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            
        ?>
	  For next quiz
        <a href="index.php"_blank>Next Quiz</a><br>
  </div>
</body>
<style>
        .container {
        
        background-repeat: no-repeat;
        position: relative;
        text-align: center;
        color: maroon;
        font-size:50px;
        }
        .centered   {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
        }
 </style>
</html> 
 