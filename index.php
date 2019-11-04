<?php
$sunny = rand(0, 1);

if ($sunny) {
    $klase = 'Sauleta';
    $tekstas = 'Labai saulėta.';
} else {
    $klase = 'Debesuota';
    $tekstas = 'Labai debesuota.';
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Oru prognozė</title>
        <style>
            .Container {
                display:flex;
                justify-content: center;
                align-items: center;
                

            }
            .Sauleta {
                background-image: url(https://cdn1.iconfinder.com/data/icons/emoticon-14/512/emoticon_sun_glass-512.png);
                width: 200px;
                height: 200px;
                background-size: cover;

            }

            .Debesuota {
                background-image: url(data:image/jpeg;base64,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);
                width: 200px;
                height: 200px;
                background-size: cover;

            }
            .Labai Saulėta {
                
            }
        </style>
    </head>
    <body>
        <div class="Container"> 
            <div class="<?php print $klase ?>">
            </div>
            <div><b><?php print $tekstas ?></b></div>
        </div>    
    </body>
</html>