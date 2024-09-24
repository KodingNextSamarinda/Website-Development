<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COnditional STatemts in HTML</title>
    <style>
        body{
            background-color: Cornsilk;

        }

        .div1{
            background-color:DarkSeaGreen;
            padding = 50px;
        }

    </style>
</head>
<body>
    <center>
        <h1>Welcome to my Website</h1>
        <div class="div1">
            
            <p>Below is Conditional using PHP</p>

            <?php

                //kondisi : jika nilai metik > 80 -> lulus jika > 60 -> remedial ->ngulang 
            
                $nilai = 76;
                if($nilai >= 80){
                    echo "You Passed the Math Test";
                }
                elseif ($nilai >= 60){
                    echo "You can Take a Remedial";
                }
                else{
                    echo" You need take this class again";
                }

                
                echo"<br>";

                $bayar = 20000;
                $ongkir = 50000;

                if($bayar > $ongkir){
                    echo "You Get Free ONGKIR";
                }

                else{
                    echo "YOU need " . $ongkir - $bayar . " to get free ongkir";
                }

                echo"<br>";


                $harga = 20;
                $ongkir = 50;
                $isMeber = True;

                if($harga > $ongkir || $isMeber ){
                    echo "You get a discount";
                }

                else{
                    echo "you need " . $ongkir - $harga . " more to get a free shipping ora member card";
                }

                echo"<br>";

                $temp = 30;
                $weather = "sunny";

                if ($temp > 33 || $weather == "rainy" ){
                    echo "bring an umbrella";
                }
                else{
                    echo "enjoy outdoor";
                }


                echo "<br>";

                $harga = 23;
                $diskon = 10;
                $isMember1 = False;

                if ($harga > $diskon && $isMember1){
                    echo "You are eligible for a " .$diskon. "% DIscount for your product";
                }
                elseif($isMember1 == False){
                    echo "You Need to have a member";
                }
                else{
                    echo"Your price needs to be more than the discount";
                }

                echo "<br>";

                $people = 7;
                $table = True;

                if ($people < 6 && $table){
                    echo "reservation is sucsessfull";
                }
                elseif ($table == False){
                    echo "Sorry we are fully booked";
                }
                elseif($people>6){
                    echo "We are not available to sit more than 6 people at this moment";

                }
                else{
                    echo "Reservation is unsucsessfull";
                }

            
            ?>


        </div>
    </center>
</body>
</html>