<!DOCTYPE html>
<html>
    <head>
        <meta>
        <title>DBZ Generator</title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>
        
        <?php
            echo "<div id=container>";   
                echo "<h1>Dragon Ball Z Generator </h1>";
                
                /*
                Must include at least two loops (e.g., for, while, do while)
                Must include at least two conditions  (e.g., if, switch, ternary)
                Must have at least 15 CSS rules in an external file
                Must use the rand() function at least once
                Uses at least two images
                Uses at least one array
                Uses at least three array functions
                All elements (loops, arrays, images, etc.) have a common goal 
                */
                
                $sayain = array("Goku","Vegeta","Gohan","Goten","Trunks","Napa","Raditz","Bardock", "Broly");
                $namekian = array("Piccolo", "Dende","Kami","Nail","Guru");
                $frieza = array("Frieza","Cooler","King_Cold","Zarbon","Dodoria");
                $human = array("Hercule","Videl","Yamcha", "Krillin", "Roshi","Bulma","ChiChi");
                
                $sum = 0;
                
                
                for($i = 0; $i < count($sayain); $i++) {
                    $sum++;
                }
                echo "Amount of possible Saiyans: ".$sum."<br>";
                $sum = 0;
                
                for($i = 0; $i < count($namekian); $i++) {
                    $sum++;
                }
                echo "Amount of possible Namekians: ".$sum."<br>";
                $sum=0;
                
                for($i = 0; $i < count($frieza); $i++) {
                    $sum++;
                }
                echo "Amount of possible Frieza Army: ".$sum."<br>";
                $sum = 0;
                
                for($i = 0; $i < count($human); $i++) {
                    $sum++;
                }
                echo "Amount of possible Humans: ".$sum."<br>";
                $sum = 0;
                
                // echo "Random sayain: ".array_rand($sayain) ."<br>";
                // echo "Random namekian: ".array_rand($namekian)."<br>";
                // echo "Random frieza: ".array_rand($frieza)."<br>";
                // echo "Random human: ".array_rand($human)."<br>";
                
                
                function displayCharacter($randomValue) {
                    
                $saiyan = array("Goku","Vegeta","Gohan","Goten","Trunks","Napa","Raditz","Bardock", "Broly");
                $namekian = array("Piccolo", "Dende","Kami","Nail","Guru");
                $frieza = array("Frieza","Cooler","King_Cold","Zarbon","Dodoria");
                $human = array("Hercule","Videl","Yamcha", "Krillin", "Roshi","Bulma","ChiChi");
                    
                    
                    switch ($randomValue) {
                        case 0:
                            $character = array_rand($saiyan);
                            //$character = $saiyan[mt_rand(0,count($saiyan) -1)];
                            $person = $saiyan[$character];
                            break;
                        case 1:
                            $character = array_rand($namekian);
                           // $character = $namekian[mt_rand(0,count($namekian) -1)];
                            $person = $namekian[$character];
                            break;
                        case 2:
                            $character = array_rand($frieza);
                            //$character = $frieza[mt_rand(0,count($frieza) -1)];
                            $person = $frieza[$character];
                            break;
                        case 3:
                            $character = array_rand($human);
                            $person = $human[$character];
                            //$character = $human[mt_rand(0,count($human) -1)];
                            break;
                    }
                     echo "Your character is: ".$person."<br>"; 
                     echo "<img src='./images/$person.jpg' alt='$person' title='".ucfirst($person)."'width='70'/>";
                     //echo "Your character is: ".$character."<br>";
                     
                }
                
                
                $randomValue = rand(0,3);
                
                displayCharacter($randomValue);
            
                
            echo "</div>";     
                
        ?>
        
        
    </body>
</html>