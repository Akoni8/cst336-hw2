<!DOCTYPE html>
<html>
    <head>
        <meta>
        <title>DBZ Generator</title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>
        
        <?php
            echo "<div class=container>";   
                echo "<h1 id=heading>Dragon Ball Z</h1>";
                echo "<h2 id=generator>Generator </h2>";
                
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
                

                $randomValue = rand(0,3);
                
                generateCharacter($randomValue);
                
            echo "</div>";  

                function generateCharacter($randomValue) {

                    $saiyan = array("Goku","Vegeta","Gohan","Goten","Trunks","Napa","Raditz","Bardock", "Broly");
                    $namekian = array("Piccolo", "Dende","Kami","Nail","Guru");
                    $frieza = array("Frieza","Cooler","King_Cold","Zarbon","Dodoria");
                    $human = array("Hercule","Videl","Yamcha", "Krillin", "Roshi","Bulma","ChiChi");
                    $sum = 0;
                    
                    switch ($randomValue) {
                        case 0:
                            array_push($saiyan, "King_Vegeta");
                            for($i = 0; $i < count($saiyan); $i++) {
                                 $sum++;
                            }
                            echo "Amount of possible Saiyans: ".$sum."<br>";
                            $character = array_rand($saiyan);
                            $person = $saiyan[$character];
                            array_pop($saiyan);
                            break;
                        case 1:
                            for($i = 0; $i < count($namekian); $i++) {
                                $sum++;
                            }
                            echo "Amount of possible Namekians: ".$sum."<br>";
                            $character = array_rand($namekian);
                            $person = $namekian[$character];
                            break;
                        case 2:
                            for($i = 0; $i < count($frieza); $i++) {
                            $sum++;
                            }
                             echo "Amount of possible Frieza Army: ".$sum."<br>";
                            $character = array_rand($frieza);
                            $person = $frieza[$character];
                            break;
                        case 3:
                            for($i = 0; $i < count($human); $i++) {
                            $sum++;
                            }
                            echo "Amount of possible Humans: ".$sum."<br>";
                            $character = array_rand($human);
                            $person = $human[$character];
                            break;
                    }
                    
                    echo "<div id=powerlevel>";
                    if($randomValue == 0) {
                       echo "Your Power Level is <span>over 9000!!!</span>";
                    }
                    elseif ($randomValue == 2 ||$randomValue == 1) {
                        echo "Your Power Level is <span>... eh.</span>";
                    }
                    else {
                        echo "Your Power Level is <span>a joke!</span>";
                    }
                    echo "</div>";
                    
                    echo "<div id=character>";  
                    echo "Your character is: ".$person;
                    echo "</div>"; 
                    echo "<div id=pic>";
                    echo "<img src='./images/$person.jpg' alt='$person' title='".ucfirst($person)."'width='400'/>";
                    echo "</div>"; 
                }
                
        ?>
        
        
    </body>
</html>