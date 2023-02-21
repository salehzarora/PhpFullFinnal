<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/workers.css">
    <link rel="stylesheet" href="css/adminaddworker.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <title>Add product</title>
</head>
<body>
<?php
    $a=7;

include 'workerSideBar.php'; 


                          if(isset($_SESSION["isManager"])){
        ?>

<div class="testbox" >





  <form  role="form" action="includes/adminaddworker.inc.php" method="post">
      
        <br/>
        <p>Shift 1 => 8:00 AM - 16:00 PM  &nbsp;  &nbsp; \\ &nbsp;  &nbsp;   Shift 2 => 15:30 PM - 22:00 PM .</p>
        <br/>
        <div class="colums">
          <div class="item">
            <label for="name">Userid <span>*</span></label>
            <input id="name" type="text" name="userid" style="color:black" required/>
          </div>
          <div class="item">
            <label for="salary">Salary<span>*</span></label>
            <input id="salary" type="text"   name="salary" style="color:black" required/>
          </div>
          <div class="item">
            <label for="phone">Phone<span>*</span></label>
            <input id="phone" type="tel"   name="phone" style="color:black" required/>
          </div>
          
          
          
         
        </div>
        <br>
      
        <div class="week">
           &nbsp; &nbsp;
          <div class="question">
            <label>Sunday </label>
            <div class="question-answer">
              <div>
                <input type="radio" value="Shift 1" id="radio_3" name="day1" />
                <label for="radio_3" class="radio"><span>Shift 1</span></label>
              </div>
              <div>
                <input  type="radio" value="Shift 2" id="radio_4" name="day1"/>
                <label for="radio_4" class="radio"><span>Shift 2</span></label>
              </div>
              <div>
                <input  type="radio" value="break" id="radio_5" name="day1"/>
                <label for="radio_5" class="radio"><span>break</span></label>
              </div>
            </div>
          </div>

          &nbsp; &nbsp;
          <div class="question">
            <label>Monday </label>
            <div class="question-answer">
              <div>
                <input type="radio" value="Shift 1" id="radio_6" name="day2" />
                <label for="radio_6" class="radio"><span>Shift 1</span></label>
              </div>
              <div>
                <input  type="radio" value="Shift 2" id="radio_7" name="day2"/>
                <label for="radio_7" class="radio"><span>Shift 2</span></label>
              </div>
              <div>
                <input  type="radio" value="break" id="radio_8" name="day2"/>
                <label for="radio_8" class="radio"><span>break</span></label>
              </div>
            </div>
          </div>
          &nbsp; &nbsp;
          <div class="question">
            <label>Tuesday </label>
            <div class="question-answer">
              <div>
                <input type="radio" value="Shift 1" id="radio_9" name="day3" />
                <label for="radio_9" class="radio"><span>Shift 1</span></label>
              </div>
              <div>
                <input  type="radio" value="Shift 2" id="radio_10" name="day3"/>
                <label for="radio_10" class="radio"><span>Shift 2</span></label>
              </div>
              <div>
                <input  type="radio" value="break" id="radio_11" name="day3"/>
                <label for="radio_11" class="radio"><span>break</span></label>
              </div>
            </div>
          </div>
          &nbsp; &nbsp;
          <div class="question">
            <label>Wednesday </label>
            <div class="question-answer">
              <div>
                <input type="radio" value="Shift 1" id="radio_12" name="day4" />
                <label for="radio_12" class="radio"><span>Shift 1</span></label>
              </div>
              <div>
                <input  type="radio" value="Shift 2" id="radio_13" name="day4"/>
                <label for="radio_13" class="radio"><span>Shift 2</span></label>
              </div>
              <div>
                <input  type="radio" value="break" id="radio_14" name="day4"/>
                <label for="radio_14" class="radio"><span>break</span></label>
              </div>
            </div>
          </div>
          &nbsp; &nbsp;
          <div class="question">
            <label>Thursday </label>
            <div class="question-answer">
              <div>
                <input type="radio" value="Shift 1" id="radio_15" name="day5" />
                <label for="radio_15" class="radio"><span>Shift 1</span></label>
              </div>
              <div>
                <input  type="radio" value="Shift 2" id="radio_26" name="day5"/>
                <label for="radio_26" class="radio"><span>Shift 2</span></label>
              </div>
              <div>
                <input  type="radio" value="break" id="radio_27" name="day5"/>
                <label for="radio_27" class="radio"><span>break</span></label>
              </div>
            </div>
          </div>
          &nbsp; &nbsp;
          <div class="question">
            
            <label>Friday </label>
            <div class="question-answer">
              <div>
                <input type="radio" value="Shift 1" id="radio_16" name="day6" />
                <label for="radio_16" class="radio"><span>Shift 1</span></label>
              </div>
              <div>
                <input  type="radio" value="Shift 2" id="radio_17" name="day6"/>
                <label for="radio_17" class="radio"><span>Shift 2</span></label>
              </div>
              <div>
                <input  type="radio" value="break" id="radio_18" name="day6"/>
                <label for="radio_18" class="radio"><span>break</span></label>
              </div>
            </div>
          </div>
          &nbsp; &nbsp;
          <div class="question">
            
            <label>Saturday </label>
            <div class="question-answer">
              <div>
                <input type="radio" value="Shift 1" id="radio_19" name="day7" />
                <label for="radio_19" class="radio"><span>Shift 1</span></label>
              </div>
              <div>
                <input  type="radio" value="Shift 2" id="radio_20" name="day7"/>
                <label for="radio_20" class="radio"><span>Shift 2</span></label>
              </div>
              <div>
                <input  type="radio" value="break" id="radio_21" name="day7"/>
                <label for="radio_21" class="radio"><span>break</span></label>
              </div>
            </div>
          </div>
          </div>

          
        
            
        <div class="btn-block">
          <button  name="submit">Submit</button>
        </div>
      </form>
    </div>





<?php }else header("location: 404.php"); ?>




</body>
</html>