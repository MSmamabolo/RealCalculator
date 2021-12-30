<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width",initial-scale=1.0>
    <title>calculator</title>

    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h3>basic calculator Made By Maredi.</h3>
    <div class="outside-box"><br><br>
     <section class="all-buttuns">
         <form class="calc-buttuns" action="include/calculation.php" method="get">
           <input style="width : 100%;" type="number" name="numberOne" placeholder="please input number"><br><br><br>
           <select style="width : 100%;" name = "maths">
                <option value="none">none</option>
                <option value="+">add</option>
                <option value="-">minus</option>
                <option value="*">multiply</option>
                <option value="/">divide</option>
           </select>
           <br><br><br>
           <input  style="width : 100%;" type="number" name="numbertwo" placeholder="please input number"><br><br><br><br>
         <p>Click = to see calculation result</p>
          <button  class="top" style="width :100%;"type="submit"  name="eqaulTo">=</button>
         </form><br><br>
          <p>Answer :</p>
         <div class="display">
           <?php
           if (isset($_GET['result']))
           {
            if ($_GET['result'] == "noneonly")
            {
               echo "please fill in operators to calculate";
            }
            elseif ($_GET['result'] == "emptyfieldone")
            {
              echo "you forgot to fill in first input ";
            }
            elseif ($_GET['result'] == "emptyfield2")
            {
              echo "you forgot to fill in second input";
            }
            elseif ($_GET['result'] == "Bothemptyfield") {
              echo "you didnt fill in both first and second input";
            }
            elseif ($_GET['result'] == "Empty1AnsNone") {
              echo "you didnt fill first input and you selected none ,please re do calculation";
            }
            elseif ($_GET['result'] == "Empty2AnsNone") {
              echo "you didnt fill second input and you selected none ,please re do calculation";
            }
            elseif ($_GET['result'] == "EmptyBothAnsNone") {
              echo "you didnt fill both input and you selected none ,please re do calculation";
            }
             else
             {
               $ans =$_GET['result'];
               echo "$ans";
             }
           }
            ?>
       </section>
       </div>
    </div>
  </body>
</html>
