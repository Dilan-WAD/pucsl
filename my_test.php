<?php
   class Calculator
   {
       public static function average($a, $b)
       {
           return ($a + $b) / 2;
       }
   }
   
   echo Calculator::average(2, 1);
?>