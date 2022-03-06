<?php
// Write a PHP program to calculate electricity bill.

/*
Conditions:
For first 50 units – 3.50/unit
For next 100 units – 4.00/unit
For units above 150 – 6.50/unit
You can use conditional statements.
*/

$units_num=100 ;
if($units_num <= 50){echo "electricity bill = ",($units_num/3.50)," For first 50 units";}
elseif($units_num <= 150 && $units_num > 50){echo "electricity bill = ",($units_num/4.00)," For next 100 units";}
elseif($units_num > 150){echo "electricity bill = ",($units_num/6.50)," For above 150 units";}
else {echo "Error....";}
 ?>
