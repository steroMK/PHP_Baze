<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$pavyko = rand(0, 1);
$katasuniai = 0;

for ($C_I = 1; $C_I <= $kates; $C_I++) {
    for ($D_I = 1; $D_I <=$sunys; $D_I++) {
        if($pavyko) {
            $katasuniai++;
        }
    }
}
$h1 = 'Katašunių Išeiga';
$h2 = "Dalyvavo $kates katės ir $sunys šunys";
$h3 = "Katašunių išeiga: $katasuniai";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>

        </style>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
    </body>
</html>