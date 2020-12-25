<?php
// variables intermédiaires 

//$PDO = new PDO('mysql:host=localhost;dbname=reservationsalles', 'root', '');
//  $request = $PDO->prepare("SELECT *  FROM reservations INNER JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id");         
//  $request->execute();
//  $result = $request->fetchAll();

// $db = mysqli_connect("localhost", "root", "", "reservationsalles");
// $date = "SELECT * FROM reservations INNER JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id";
// $query = mysqli_query($db, $date);
// $result = mysqli_fetch_all($query);

//$reservation = new Reservation(connect());


// $query = $PDO->prepare("SELECT * FROM reservations ");
// $query->execute();
// $query->setFetchMode(PDO::FETCH_BOTH);
// $query->fetch();
// return $query;

// echo'<pre>';
// var_dump($result);
// echo'<pre>';
// echo'--------------------------------------';
// echo'<pre>';
// var_dump($result2);
// echo'<pre>';


?>

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
        <main class="connexion_planing"> 
        <table>
        <thead>
        <tr>
            <th></th>

            <th>Lundi</th>

            <th>Mardi</th>

            <th>Mercredi</th>

            <th>Jeudi</th>

            <th>Vendredi</th>
        </tr>
        </thead>
        <tbody>
        <?php
       
        for ($ligne = 8; $ligne <= 19; $ligne++) 
        {
                echo "<tr>";
                echo "<td>" . $ligne . ' h' . "</td>";

                for ($colonnes = 1; $colonnes <= 5; $colonnes++) 
                {
                        echo "<td>";
                        foreach ($result as $value) 
                        {
                                $jour = date("w", strtotime($value[3]));
                                $heure = date("H", strtotime($value[3]));
                                if ($heure == $ligne && $jour == $colonnes) 
                                {
                                    echo $value[7] . ' ' . $value[1];               //A REVOIR
                                     //echo "<br/><button><a href=reservation.php?id=".$value[0]. '> Voir</a></button>';
                                     //echo "<br/><button><a href=reservation/".$value[0]. '> Voir</a></button>';
                                   //echo "<br/><button><a href=?page=reservation?id=".$value[0].'> Voir</a></button>';
                                   echo "<br/><button><a href=reservation?id=".$value[0]."> Voir</a></button>";

                                    
                                }
                        }
                        echo "</td>";
                }
        }
    echo "</tr>";

        ?>
        </tbody>
    </table>
            
        </main>    

        <!-- Footer -->
        <?php include_once 'views/includes/footer.php'?>

		<!-- Scripts -->
		<?php include_once 'views/includes/scripts.php'?>
    </body>
    
</html>

<style>

table tr td{
    border: 1px solid white;
}
table th {
    border: 1px solid white;
}
table{
    border-collapse: collapse;
    width: 100%;
    height: 80vh;
    color: white;
    font-size: 2em;
}
</style>