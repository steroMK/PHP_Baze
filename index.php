<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP lydės ir <?php print date('y', strtotime('+' . rand(1, 10) . ' years'));?> ! </title>
    </head>
    <body>
        <h1><b>Tautvydas</b> - Galbūt turėsiu <?php print rand(1, 5);?> vaikų(us)!</h1> 
        <p>D. Trump'as nebebus prezidentu: <?php print date('y/m/d', strtotime('+' . rand(2, 10) . ' years'));?></p> 
    </body>
</html>