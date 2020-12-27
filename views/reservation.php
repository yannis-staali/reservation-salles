<!DOCTYPE HTML>
<!-- Ici le base href sert à changer la base de l'url relative pour pouvoir afficher le css et le js -->
<!-- Après avoir réecrit l'url la source devient /reservation-salles/-->
<base href="/reservation-salles/">
<html>
	<head>
		<title>Reservation</title>
		<?php include_once 'views/includes/head.php'?>
    </head>
    
	<body class="body_home">

        <!-- Header -->
        <?php include_once 'views/includes/header.php'?>
        
            <!-- Main -->
            <section class="resa_display">;
                <h1 class="title_resa_display">RESERVATION DETAILS</h1>
                    <?php
                        echo "<table class='resa_id_table'>";

                        foreach ($resa as $value) 
                        {
                        echo "<tr>" ."<td>" . "Login" . "</td>" . "<td>" . $value['login'] . "</td>" . "</tr>";
                        echo "<tr>" ."<td>" . "Title" . "</td>" . "<td>" . $value['titre'] . "</td>" . "</tr>";
                        echo "<tr>" ."<td>" . "Description" . "</td>" . "<td>" . $value['description'] . "</td>" . "</tr>";
                        echo "<tr>" ."<td>" . "Begin" . "</td>" . "<td>" . $value['debut'] . "</td>" . "</tr>";
                        echo "<tr>" ."<td>" . "End" . "</td>" . "<td>" . $value['fin'] . "</td>" . "</tr>";
                        }

                        echo "</table>";

                    ?>
            </section>"

        <!-- Footer -->
        <?php include_once 'views/includes/footer.php'?>

		<!-- Scripts -->
		<?php include_once 'views/includes/scripts.php'?>
    </body>
    
</html>

