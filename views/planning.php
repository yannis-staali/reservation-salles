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
                        $monthcheck = date('F');
                        $year = date("Y");
                        $weekcheck = date('W');
                        $week = date('W');
                        if($week < 10) 
                        {
                            $week = '0'. $week;
                        }
                        
                        echo "<tr>";
                        echo "<th></th>";
                        for($day= 1; $day <= 5; $day++)
                        {
                            $stamp = strtotime($year ."W". $week . $day);
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

                            for($day= 1; $day <= 5; $day++)
                            { 
                                $stamp2 = strtotime($year ."W". $week . $day);
                                $jourtest = date('d', $stamp2);
                                echo "<td>";

                                    foreach ($result as $value) 
                                    {
                                        $jour = date("d", strtotime($value['debut']));
                                        $heure = date("H", strtotime($value['debut']));
                                        $month = date("F", strtotime($value['debut']));
                                        $weekit = date("W", strtotime($value['debut']));
                                        $yearit = date("Y", strtotime($value['debut']));

                                            if ($heure == $row && $jour == $jourtest && $month == $monthcheck && $weekit == $weekcheck && $yearit == $year) 
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

