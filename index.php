<?php

$date = new DateTime; 

$presentTime = (new DateTime);

$destinationTime = clone $date;
$destinationTime = $destinationTime->modify('+2 years');


$timeUntilToday = $presentTime->diff($destinationTime);
$minutes = $timeUntilToday->days * 24 * 60;
$minutes += $timeUntilToday->h * 60;
$minutes += $timeUntilToday->i;

$fuelRequirement = $minutes / 10000;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Present Time</h1>
    <?php echo $presentTime->format('M dS Y a g:i') .'</br>'; ?>

    <h1>Destination Time</h1>
    <?php echo $destinationTime->format('M dS Y a g:i') .'</br>'; ?>

    <h1>Duration</h1>
    <?php echo $timeUntilToday->format('%y years %m months %d days %h hours %m minutes') .'</br>'; ?>

    <h1>Duration in minutes</h1>
    <?php echo $minutes .' minutes' .'</br>'; ?>

    <h1>Fuel requirement</h1>
    <?php echo $fuelRequirement . ' liters'; ?>
    
</body>
</html>




