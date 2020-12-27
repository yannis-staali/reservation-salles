<!DOCTYPE HTML>

<html>
	<head>
		<title>Accueil</title>
		<?php include_once 'views/includes/head.php'?>
    </head>
    
	<body class="body_home">

        <!-- Header -->
        <?php include_once 'views/includes/header.php'?>
        
            <!-- Main -->
        <main class="welcome_main"> 
            <section class="welcome_blank">
                <h1>Hello <br/><span class="blinking2"><?= $_SESSION['welcome'] ?></span> <br/>Good to see you :)</h1>
            </section>
        </main>    

        <!-- Footer -->
        <?php include_once 'views/includes/footer.php'?>

		<!-- Scripts -->
		<?php include_once 'views/includes/scripts.php'?>
    </body>
    
</html>

