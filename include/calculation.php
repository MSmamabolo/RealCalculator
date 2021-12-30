<?php
  include "../class/domaths.php";
   if (isset($_GET['eqaulTo']))
   {
     $num1 = $_GET['numberOne'];
     $num2 = $_GET['numbertwo'];
     $maths = $_GET['maths'];


     if ($maths == "none")
       {
       header("location: ../index.php?result=noneonly");
       }
      elseif (empty($num1))
      {
        header("location: ../index.php?result=emptyfieldone");
      }

      elseif ( empty($num2))
      {
        header("location: ../index.php?result=emptyfield2");
      }

      elseif (empty($num1) && empty($num2))
      {
        header("location: ../index.php?result=Bothemptyfield");
      }
      elseif (empty($num1) &&  $maths == "none")
      {
        header("location: ../index.php?result=Empty1AnsNone");
      }
      elseif (empty($num2) &&  $maths == "none")
      {
        header("location: ../index.php?result=Empty2AnsNone");
      }
      elseif (empty($num1) && empty($num2) && $maths == "none")
      {
        header("location: ../index.php?result=EmptyBothAnsNone");
      }

      else
      {
        $calc = new maths( (int)$num1,(int)$num2, $maths);
        $answer = $calc->domaths();
        header("location: ../index.php?result=$answer");
      }
   }else {
    echo "error";
   }
