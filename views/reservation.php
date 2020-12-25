<!DOCTYPE HTML>

<html>
	<head>
		<title>Planning</title>
		<?php include_once 'views/includes/head.php'?>
    </head>
    
	<body class="body_home">

        <!-- Header -->
        <?php include_once 'views/includes/header.php'?>
        
            <!-- Main -->
<?php
           
            echo "<section class=\"resa_display\">";

            echo "<table class='resa_id_table'>";

            echo "<tr>";
            echo "<th>" . "Login" . "</th>";
            echo "<th>" . "Title" . "</th>";
            echo "<th>" . "Description" . "</th>";
            echo "<th>" . "Begin" . "</th>";
            echo "<th>" . "End" . "</th>";

            foreach ($result as $value) {
                echo "<tr>";
                echo "<td>" . "$value[0]" . "</td>";
                echo "<td>" . "$value[1]" . "</td>";
                echo "<td>" . "$value[2]" . "</td>";
                echo "<td>" . "$value[3]" . "</td>";
                echo "<td>" . "$value[4]" . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</section>";
?>

        <!-- Footer -->
        <?php include_once 'views/includes/footer.php'?>

		<!-- Scripts -->
		<?php include_once 'views/includes/scripts.php'?>
    </body>
    
</html>

