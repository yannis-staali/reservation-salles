<!DOCTYPE HTML>
<?php

// $value = 8;
// $choose = 8;
// for($value = 8; $value < 20; $value++)
// {
//     echo $value.':00:00';
// }
?>

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
        <h1>Make a new reservation</h1>
            <section class="resa_box_form">
                <form action="#" method="post">
                    <label for="titre">Title:</label><br />
                    <input type="text" name="titre"><br />

                    <label for="description">Description:</label><br />
                    <textarea id="description" name="description"></textarea><br />

                    <!-- <label for="debut">Begin:</label><br />
                    <input type="date" name="date-debut"><br /> -->

                    <label for="fin">Date:</label><br />
                    <input type="date" name="date"><br /><br />

                    <label for="heure">Hour start:</label><br />
                    <!-- <input type="time" name="heure-debut"><br /><br /> -->
                    <select name="heure-debut">
                        <?php for($value = 8; $value < 19; $value++)
                        { 
                            echo "<option value=" . $value . ':00:00' . '>' . $value . 'H'. "</option>" ;
                            // echo "<option value=" . $value . ':00:00' . "</option>";
                        } ?>
                    </select>
                    
                    <label for="heure">Hour end:</label><br />
                    <select name="heure-fin">
                        <?php for($value = 8; $value < 19; $value++)
                        { 
                            echo "<option value=" . $value . ':00:00' . '>' . $value . 'H'. "</option>" ;
                            // echo "<option value=" . $value . ':00:00' . "</option>";
                        } ?>
                    </select>

                    
                    <!-- <input type="time" name="heure-fin"><br /><br /> -->
                    
                    <input type="submit" id="submit_resa" name="submit" value="Book">
                </form>
            </section>
        </main>    

        <!-- Footer -->
        <?php include_once 'views/includes/footer.php'?>

		<!-- Scripts -->
		<?php include_once 'views/includes/scripts.php'?>
    </body>
    
</html>

