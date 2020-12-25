<!DOCTYPE HTML>

<html>
	<head>
		<title>Profil</title>
		<?php include_once 'views/includes/head.php'?>
    </head>
    
	<body class="body_home">

        <!-- Header -->
        <?php include_once 'views/includes/header.php'?>
        
            <!-- Main -->
        <main class="connexion_main"> 
            <section class="connexion_box_form box_profil">
				<h1 class="title_profile">Modify your profile</h1>
				<form action="" method="POST">
					
					<div class="log_form">
					<label><b>login</b></label>
					<input type="text"  name="login">
					</div>

					<div class="pass_form">
					<label><b>Password</b></label>
					<input type="password" name="password">
					</div>
                    
                    <div class="pass_form2">
					<label><b>Confirm</b></label>
					<input type="password" name="password2">
                    </div>
                    
					<div class="submit">
					<input type="submit" id='submit' name="submit" value="GO">
					</div>

					<?php if($check_fields==true) { echo $check_fields; exit(); } //affichage des messages d'erreur
						if($checkinlog==true) { echo $checkinlog; }
						if($checkinpass==true) { echo $checkinpass; }
    				?>

				</form>
			</section>
        </main>    

        <!-- Footer -->
        <?php include_once 'views/includes/footer.php'?>

		<!-- Scripts -->
		<?php include_once 'views/includes/scripts.php'?>
    </body>
    
</html>