<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	
	<title>Quiz </title>
	
	
</head>
 
<body>
 
	<div id="page-wrap">
 
		<h1><b>Quiz on Electronics devices and circuits</b></h1>
		
		<form action="quiz_1_result.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>For a P-N diode, the number of minority carriers crossing the junction depends on</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Forward bias voltage </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Potentioal barrier</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Rate of thermal generation of electron hole pairs</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) none of the above</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>The forbidden energy gap between the valance band and conduction band will bw least in case of</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) Metals</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Semiconductors</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C)Insulators</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D)All of the above</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>For a NPN bipolar transistor, what is the main stream of current in the base region</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Drift of holes</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Diffusion of holes</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Drift of electrons</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Diffusion of electrons</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>In an ideal diode there is no breakdown,no____current, and no forward____drop</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Reverse,voltage</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B)Forward, current</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Forward, voltage</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Reverse, current</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Power diodes are generally </h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Silicon Diodes</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B)Germanium Diodes</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C)Both A and B</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D)None of the above</label>
                    </div>
                
                </li>
            
            </ol>
            <div class="button">
            <input type="submit" value="Submit"/>
            </div>
           
		    
		</form>
	
	</div>
 
    <style>
body{ font: 22px Georgia, serif; }
 
 #page-wrap { width: 1000%; margin: 0 auto;}
  
 h1  { margin: 10px 0 20 0; font: 22px Georgia, Serif; text-transform: uppercase; letter-spacing: 3px; text-align:center }
  
 /* #quiz input {
     vertical-align: middle;
 } */
  
 #quiz ol {
    margin: 0 0 10px 20px;
 }
  
 #quiz ol li {
    margin: 0 0 20px 0;
 }
  
 #quiz ol li div {
    padding: 4px 0;
   color:#0F618f;
   font-size: 16px
 }
 
  
 #quiz h3 {
    font-size: 19px; margin: 0 0 1px 0; color:#900C3F;
 }
  
 #results {
     font: 44px Georgia, Serif;

    
 }

 /* body {background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQiEUfB--jWyaTJYice3TuqP40ll9ncvbHy3g&usqp=CAU");
        background-repeat: no-repeat;
        background-size:  100%;} */
body{
    background-color: #ffd6d6;
    display: flex;
    justify-content: center;
    width: 100%;
}
.button {
  align:center;
  transition-duration: 0.3s;
  padding: 4px 0;
}
.button:hover {
  
  background-color: #4CAF50; /* Green */
  color: white;
}
 </style>
 
