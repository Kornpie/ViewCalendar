<?php
include "Calendar.php";
    $month = $_POST["Month"];
    $day = $_POST["Day"];

   $calendar =new Calender();
   $result = $calendar->showDay($month,$day);
  
?> <h1><?php echo $result ?></h1>