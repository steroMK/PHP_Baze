<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style>
            .dice_style {
                height: 69vh;
                width: 55vw;
            } 
            .dice_1 {
                background-image: url("https://cdn0.iconfinder.com/data/icons/universal-flat/614/1011_-_Dice_One-512.png"); 
            }
            .dice_2 {
                background-image: url("http://www.clipartpanda.com/clipart_images/red-dice-die-roll-two-square-47124751/download");
            }
            .dice_3 {
                background-image: url("http://images.clipartpanda.com/3-rolling-dice-red_dice_die_roll_three_square_seal_stickers-r5338225e0b3a4a2596886a073889fd17_v9wf3_8byvr_512.jpg"); 
            }
            .dice_4 {
                background-image: url("http://www.clipartpanda.com/clipart_images/red-dice-die-roll-four-square-47125719/download"); 
            }
            .dice_5 {
                background-image: url("https://cdn2.iconfinder.com/data/icons/dice-roll/100/dice_5-512.png");  
            }
            .dice_6 {
                background-image: url("https://rlv.zcache.com/red_dice_die_roll_six_square_seal-rde847a56866c495291424b11cf4a7ee4_0ugmc_8byvr_540.jpg");  
            }
        </style>
    </head>
    <body>
        <div class="dice_<?php print rand(1, 6); ?> dice_style">
        </div>
    </body>
</html>