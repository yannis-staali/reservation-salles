<?php

 date_default_timezone_set('Europe/Paris');
 setlocale(LC_TIME, "fr_FR");

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Planning</title>
		<?php include_once 'views/includes/head.php'?>
    </head>
    
	<body class="body_home">

        <!-- Header ------------------->
        <?php include_once 'views/includes/header.php'?>
        
        <!-- Main ---------------------------->
        <main class="main_planning"> 

           <div class="block_title_h1"> <h1>CURRENT PLANNING</h1></div>
           <div class="block_title_h2"> <h2><?php echo date('F'); ?></h2></div>
            <table class="planning_table">
                <thead>
                    <?php
                        //  $monday = new DateTime('this monday');
                       
                        $monthcheck = date('m'); //date en version longue en anglais ex : January
                        $year = date("Y"); //année sur 4 chiffres ex 1990
                        $weekcheck = date('W'); //numéro de semaine ex 42
                        $week = date('W'); //numéro de semaine ex 42
                        $monthactual = date('m');
                        // if($week < 10) 
                        // {
                        //     $week = '0'. $week;
                        // }
                        
                        echo "<tr>";
                        echo "<th></th>";
                        for($day= date('d'); $day <= date('d')+6; $day++)
                        {
                            
                            $stamp = mktime(0, 0, 0, "$monthactual", "$day", "$year");
                            // echo $stamp;
                            // $stamp = strtotime($monday->format("Y/m/$day"));
                            // $stamp =  mktime(0, 0, 0, date('m'), 1, date('Y'));
                            $jourlettre = date('l', $stamp);
                            $jour2chiffres = date('d', $stamp);

                            echo "<th>" . $jourlettre . "<br/>" . $jour2chiffres . "</th>";   
                        }
                        echo " </tr>";               
                    ?>
                </thead>
                <tbody>
                <?php
                  //var_dump($monthcheck);  
                    for ($row = 8; $row <= 19; $row++) 
                    {
                        echo "<tr>";
                        echo "<td>" . $row . ' h' . "</td>";

                            // for($day= 1; $day <= 7; $day++)
                            for($day= date('d'); $day <= date('d')+6; $day++)
                            { 
                                // $stamp2 = strtotime($monday->format("Y/m/$day"));
                                $stamp2 = mktime(0, 0, 0, "$monthactual", "$day", "$year");
                                $jourtest = date('d', $stamp2);
                                echo "<td>";

                                    foreach ($result as $value) 
                                    {
                                        $jour = date("d", strtotime($value['debut']));
                                        $heure = date("H", strtotime($value['debut']));
                                        $month = date("m", strtotime($value['debut']));
                                        $weekit = date("W", strtotime($value['debut']));
                                        $yearit = date("Y", strtotime($value['debut']));

                                       
                                            if ($heure == $row && $jour == $jourtest && $month == $monthcheck && $yearit == $year) 
                                            // if ($heure == $row && $jour == $jourtest && $month == $monthcheck && $weekit == $weekcheck && $yearit == $year) 
                                            // if ($heure == $row && $jour == $jourtest) 
                                            {
                                                    echo "<div class='resa_plan' ";
                                                    echo "<p class='planning_name'> " . $value['login'] . "</p>" ;
                                                    echo "<p class='planning_title'>" . $value['titre'] . "</p>" ;           
                                                    //echo "<br/><button><a href=?page=reservation?id=".$value['id'].'> Voir</a></button>';
                                                    // echo "<a class=\"planning_button\"href=reservation?id=".$value['id'].">show</a>"; //derniere version avant réecriture url
                                                    echo "<a class=\"planning_button\"href=reservation/".$value['id'].">show</a>";
                                                    echo "</div>";                           
                                            } 
                                    }                
                                    echo "</td>";
                            }
                    }
                    echo "</tr>";
                ?>

                </tbody>
            </table>

            <a href="reservation-form" class="title_book">Book a room</a>
        </main>    

        <!-- Footer ------------------->
        <?php include_once 'views/includes/footer.php'?>

		<!-- Scripts -------------------->
		<?php include_once 'views/includes/scripts.php'?>
    </body>
    
</html>

