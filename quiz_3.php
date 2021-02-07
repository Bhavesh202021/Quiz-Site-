<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	
	<title>Quiz </title>
	
	
</head>
 
<body>
 
	<div id="page-wrap">
 
		<h1>Quiz On Embedded system Domain</h1>
		
		<form action="quiz_3_result.php" method="post" id="quiz">
		
            <ol>
            
                <li>
               <h3> 8085 microprocessor has how many pins -
</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A)40  </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) 30 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) 14 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) 60 </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>The ROM programmed during manufacturing process itself is called -</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A)EPROM</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B)PROM</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C)EEPROM</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D)MROM</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>What is/are the configuration status of control unit inRISC processor</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A value="A" />
                        <label for="question-3-answers-A">A) hardwired</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Microprogramed</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Both a and b</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D)none of the above</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>For addressing in real mode, which segment plays a significant role in the storage of destination operands during the string operation? </h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) code segment</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Data segment</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) stack segment</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Extra segment</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3> Which stage associated with pipelining mechanism recognizes the instruction that is to be executed?</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Fetch</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) Decode</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Execute</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D)  None of the above </label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
	
	</div>
 
 
</body>
 
</html>
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
 </style>
 
</body>
 
</html>