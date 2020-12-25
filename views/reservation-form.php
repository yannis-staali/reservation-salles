<!DOCTYPE HTML>

<html>
	<head>
		<title>Planing</title>
		<?php include_once 'views/includes/head.php'?>
    </head>
    
	<body class="body_home">

        <!-- Header -->
        <?php include_once 'views/includes/header.php'?>
        
            <!-- Main -->
        <main class="main_form_resa">
            <section class="box_form">
                <form action="#" method="post">
                    <label for="titre">Titre:</label><br />
                    <input type="text" name="titre"><br />
                    <label for="description">Description:</label><br />
                    <textarea id="description" name="description"></textarea><br />
                    <label for="debut">Début:</label><br />
                    <input type="date" name="date-debut"><br />
                    <label for="fin">Fin:</label><br />
                    <input type="date" name="date-fin"><br /><br />
                    <label for="heure">Heure:</label><br />
                    <input type="time" name="heure-debut"><br /><br />
                    <label for="heure">Heure:</label><br />
                    <input type="time" name="heure-fin"><br /><br />
                    <input type="submit" name="submit" value="Réserver">
                </form>
            </section>
        </main>    

        <!-- Footer -->
        <?php include_once 'views/includes/footer.php'?>

		<!-- Scripts -->
		<?php include_once 'views/includes/scripts.php'?>
    </body>
    
</html>

<style>
.main_form_resa{
    display:flex;
    justify-content:center;
    height: 85vh;
   align-items: center;
}
.box_form{
    background-color:  black;
    padding: 10vh;
    color: white;
}

</style>