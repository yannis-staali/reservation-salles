<header>
    <div class="menu-toggle" id="hamburger">
        <i class="fas fa-bars"></i>
    </div>
    <div class="overlay"></div>
    <div class="container">
        <nav>
            <h1 class="brand"><a href="accueil">H<span>a</span>zbin</a></h1>
            <ul>
                <li><a href="accueil">HOME</a></li>
                <!-- Modification de la navbar si l'utilisateur est connecté -------->
                <?php if(isset($_SESSION['user'])) 
                {
                echo    "<li><a href='profil'>PROFILE</a></li>
                        <li><a href='planning'>PLANNING</a></li>
                        <li><a href='reservation-form'>BOOK</a></li>
                        <li><a href='deconnexion'>LOG OUT</a></li>";
                }
                else echo "<li><a href='inscription'>REGISTER</a></li>
                            <li><a href='connexion'>LOG IN</a></li>";

                // <li><a href="#">Services</a></li>
                // <li><a href="#">About</a></li>
                // <li><a href="#">Contact</a></li>
                // <li><a href="#">About</a></li>
                // <li><a href="#">Contact</a></li>
                ?>
            </ul>
        </nav>
    </div>
</header>