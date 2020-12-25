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

            echo "<table>";

            echo "<tr>";
            echo "<th>" . "Login" . "</th>";
            echo "<th>" . "Titre" . "</th>";
            echo "<th>" . "Description" . "</th>";
            echo "<th>" . "Début" . "</th>";
            echo "<th>" . "Fin" . "</th>";

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

<style>
table{
    color: white;
    width:80%;
    height: 10vh;
    border: 1px solid white;
    border-collapse: collapse;
    margin-top:10vh;
    margin-bottom:65vh;
    font-size:2em;
    text-align:center;
    background-color:black;
   
}
table tr td{
    border: 1px solid white;
}
table th{
    border: 1px solid white;
}
.resa_display{
    display:flex;
    justify-content:center;
}
</style>