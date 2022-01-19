<html>
    <head>
        <style>
            pre{
                display:inline;
            }
        </style>
    </head>
</html>
<?php


    #######################################################################
    ##                           Exercise 6                              ##
    ######################################################################
    
    $techs=array(
        "HTML",
        "CSS",
        "JS",
        "PHP",
        "BOOTSTRAP",
        "CMS"
    )?>
    
    <table>
        <tr>
            <th>Technologies</th>
        </tr>
    <?php
    foreach($techs as $tech){
    ?>
        <tr>
            <td><?php echo $tech."<br>";?></td>
        </tr>
    <?php
    }
    ?>


    </table>
    
    <?php
        

    #######################################################################
    ##                           Exercise 7                              ##
    ######################################################################
    
    
        $mesInfos=array("nom" => "Esseddyq",
                        "prenom" => "Ibrahim",
                        "age" => 18,
                        "sexe" => "Male",
                        "ville" => "Beni Mellal",
                        "origin" => "Oujda");
        $jamal=array("nom" => "squad",
                    "prenom" => "Jamal",
                    "age" => 21,
                    "sexe" => "Male",
                    "ville" => "Marrackesh",
                    "origin" => "bzou-azilal");
        $infos= array($mesInfos,$jamal);
    ?>
    <ul>
        <?php
            foreach($infos as $info){
                ?>
                <?php
                    $info= $info + ["formation" => "web dev"];
                ?>
                <li><?php echo "nom : ".$info['nom']; ?></li>
                <li><?php echo "prenom : ".$info['prenom']; ?></li>
                <li><?php echo "age : ".$info['age']; ?></li>
                <li><?php echo "sexe : ".$info['sexe']; ?></li>
                <li><?php echo "ville : ".$info['ville']; ?></li>
                <li><?php echo "origin : ".$info['origin']; ?></li>
                <li><?php echo "formation : ".$info['formation']; ?></li>
                <br>
                <?php
            
        }
        ?>
    </ul>

    <?php 
        

    #######################################################################
    ##                        Exercise 8 Part 1                          ##
    #######################################################################
    
    
        
        $i=1;
        $j=4;
        while($i<=10){
            if($i%$j !=0){
                echo $i;
                
            }
            else{
                $j=($j*2)+1;
            }
            $i++;
        }
    ?>

    <?php 
            

    #######################################################################
    ##                        Exercise 8 Part 2                          ##
    #######################################################################
    
    
        $a=1;
        echo "<br>"."<strong>Using While loop :</strong> ";
        while($a<60){
            if($a % 6 == 0){
                echo $a ." ";
            }
            $a++;
        }
        echo "<br>"."<strong>Using For loop :</strong> ";
        for($b=1;$b<60;$b++){
            if($b % 6 == 0){
                echo $b ." ";
            }
        }
        echo "<br><br>";
        

    #######################################################################
    ##                        Exercise 8 Part 3                          ##
    #######################################################################
    
    
        echo "<strong> Fizz Buzz Challenge :</strong> <br> <br> ";
        $fizzbuzz=0;
        for($x=0;$x<100;$x++){
            if($x % 3 == 0 && $x % 5 == 0){
                echo "FizzBuzz ";
                echo "<pre>  </pre>";
                $fizzbuzz++;
            }
            else if($x % 3 == 0){
                echo "Fizz  ";
                echo "<pre>  </pre>";
                $fizzbuzz++;
            }else if($x % 5 == 0){
                echo "Buzz  ";
                echo "<pre>  </pre>";
                $fizzbuzz++;
            }
            if($fizzbuzz % 5 == 0){
                echo "<br>";
            }
            $x++;
        }
            

    #######################################################################
    ##                           Exercise 9                              ##
    ######################################################################
    
    
            $tache1=array(
                "title" => "tache1",
                "due" => date("d/m -- m h",strtotime("+3 weeks")),
                "assigned_to" => "ibrahim",
                "done" => false
            );
            $tache2=array(
                "title" => "tache2",
                "due" => date("d/m -- m h ",strtotime("+2 weeks")),
                "assigned_to" => "jamal",
                "done" => true
            );
            $tache3=array(
                "title" => "tache3",
                "due" => date("d/m -- m h ",strtotime("+2 weeks")),
                "assigned_to" => "simo",
                "done" => false
            );
            $taches=array($tache1,$tache2,$tache3);
                echo "<br><br><strong>Conditions and Booleans +++ Main Answer :</strong> <br>";
                ?>
                <li><?php echo $tache1['title'];?> </li>
                <li><?php echo $tache1['due'];?> </li>
                <li><?php echo $tache1['assigned_to'];?> </li>
   <?php
                if($tache1['done']){
                echo "<li>Done</li>";
                }
                else{
                    echo "<li>Doing</li>";
                }
                echo "<br><br><strong>Conditions and Booleans +++ Challenge Answer :</strong> <br> Doing taches : <br>";
                foreach($taches as $tache){
                    if(!$tache['done']){
                        echo $tache['title']."<br>";
                        echo $tache['due']."<br>";
                        echo $tache['assigned_to']."<br>";
                        echo "<br><br>";
                    }
                    
                }


    #######################################################################
    ##                           Exercise 12                             ##
    ######################################################################
    
    function facto($num,$arg){ 
                    $factorial = 1;  
                    for ($x=$num; $x>=1; $x--)   
                    {  
                      $factorial = $factorial * $x;  
                    }  
                    echo $factorial;
                }
                function add($num1,$num2){
                    echo $num1 + $num2;
                }
                function sub($num1,$num2){
                    echo $num1 - $num2;
                }
                function mul($num1,$num2){
                    echo $num1 * $num2;
                }
                function div($num1,$num2){
                    try{
                        @$result=$num1/$num2;
                        if($num2 == 0){
                            throw new Exception("Cant divide by zero");
                        }else{
                            echo $result;
                        }
                    }catch(Exception $e){
                        echo $e->getMessage();
                    }
                }
                function nbPremier($num,$arg){
                    $premier=1;
                    $i=2;
                    while($i<$num){
                        if($num % $i == 0){
                            $premier=0;
                        }
                        $i++;
                    }
                    if($premier==1){
                        echo "est un nombre  premier";
                    }else{
                        echo "n est pas un nb premier";
                    }
                }
                function calc($function,$num1,$num2){
                    call_user_func($function,$num1,$num2);
                }
                echo "4 + 4 = ";
                echo calc("add",4,4)."<br>";
                echo "14 - 4 = ";
                echo calc("sub",14,4)."<br>";
                echo "5 * 5 = ";
                echo calc("mul",5,5)."<br>";
                echo "7 + 2 = ";
                echo calc("div",7,2)."<br>";
                echo "!5 = ";
                echo calc("facto",5,4)."<br>";
                echo "5 ";
                calc("nbPremier",5,4)."<br>"



?>
