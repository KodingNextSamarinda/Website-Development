<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Lesson 12</title>
</head>
<body>
    <center>
        <div>
            <h1>Welcome to Review Materials</h1>
            <p>Below is an PHP of IF- Elseif -Else</p>

            <?php
                $lamp = "yellow";

                if ($lamp == "red"){
                    echo "You need to stop the car because the light is red";
                    
                }
                elseif ($lamp == "yellow"){
                    echo "You need to slow down! ";

                }
                elseif ($lamp == "green"){
                    echo "YOu can move now! the light is green. <br>";

                }
                else{
                    echo "The lamp color is not detected!";

                }

                echo "<br>";

                $age = 15;
                $sim = "not yet";

                if ($age >= 17 && $sim == "yes"){
                    echo " you can rode the motorcyle";
                }
                elseif ($age >= 17 && $sim == "not yet"){
                    echo " You need to create SIM before riding the motorcycle";
                }
                elseif ($age < 17){
                    echo "You need to wait at least 17 years old";
                }
                else{
                    echo "The age and the sim is not readable";
                }

                echo "<br>";

                $book = 5;
                $status = "not available";

                if ($book > 1 && $status == "available"){
                    echo "Enjoy the book";
                }


            ?>

        </div>
    </center>
</body>
</html>