<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping in PHP</title>
</head>
<body>
    <center>
        <div>
            <h1>THis is Looping but in PHP</h1>

            <?php

                for ($i = 0; $i < 10 ; $i++){
                    echo $i + 1;
                    echo ") The light is red <br>";
                }

            ?>

        </div>
    </center>
</body>
</html>