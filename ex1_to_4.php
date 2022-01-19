<?php
    /*Exercise 2 */
    echo "Hello World <br>";

    ##Exercise 3
    $monNom="Esseddyq";
    $monPrenom="Ibrahim";
    $monAge=18;
    echo "Mon prenom $monPrenom , Mon nom $monNom , Mon age $monAge" .'<br>';
    echo 'Mon prenom .$monPrenom., Mon nom .$monPrenom.,Mon age .$monAge.<br>';
    echo "<br>Using Heredoc :<br>";
    $text1=<<<TEXT
    Mon prenom $monPrenom , Mon nom $monNom , Mon age $monAge
    TEXT;
    echo "<br>Using Nowdoc :<br>";
    $text1=<<<'TEXT'
    Mon prenom $monPrenom , Mon nom $monNom , Mon age $monAge<br>
    TEXT;
    ## Exercise 4
    $list= array();
    $int=1432;
    echo gettype($int) . " : " . $int;
    while((int)$int != 0 )
    {
        $last_digit= (int)$int % 10;
        $ldconverted= chr($last_digit + 48);
        array_unshift($list,$ldconverted);
        (int)$int=(int)$int/10;
    }
    $string= join($list);

    echo " => ";
    echo gettype($string) . " : ";
    echo $string;
?>
