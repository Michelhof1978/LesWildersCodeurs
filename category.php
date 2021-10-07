<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categorie</title>
    <!-- Line below : link to use Google Fonts Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <header>
        <?php include 'banner1.php'; ?>
        <nav class="banner2">
            <a href="index.php">ACCUEIL </a>
            >
            <a>Langage PHP</a>
        </nav>
    </header>

    <div class="mainContainer">
        <div class="introductionBox">
            <img class="logo" src="assets/PHP_logo.png" alt="php">
            <p class="entete"> Le PHP, pour Hypertext Preprocessor,
                désigne un langage informatique, ou un langage de script,
                utilisé principalement pour la conception de sites web dynamiques.
                Il s'agit d'un langage de programmation sous licence libre qui
                peut donc être utilisé par n'importe qui de façon totalement gratuite.
                <br>
                <a href="https://fr.wikipedia.org/wiki/PHP">Documentation PHP</a>
            </p>
        </div>
        <!--
        <form>
            <div class="searchBar">
                <label for="site-search"><img class="magnifyingGlass" src="assets/magnifyer_icon.png" alt=""></label>
                <input class="searchField" type="search" placeholder="Entrez votre recherche" id="search" name="search"
                    aria-label="Search through site content">
                <button class="send">Envoyer</button>

            </div>
        </form>
-->
        <!-- Link Boxes-->
        <div class="subcategoryBox">
            <h2>DÉCOUVRIR</h2>
            <div class="subcatContent">
                <a href="">Titre de la ressource</a>
                <p>Texte description de la ressource...</p>
            </div>

            <div class="subcatContent">
                <a href="">Titre de la ressource</a>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>


        <div class="subcategoryBox">
            <h2>APPRENDRE</h2>
            <div class="subcatContent">
                <a href="">Titre de la ressource</a>
                <p>Texte description de la ressource...</p>
            </div>

            <div class="subcatContent">
                <a href="">Titre de la ressource</a>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <div class="subcategoryBox">
            <h2>S'EXERCER</h2>
            <div class="subcatContent">
                <a href="">Titre de la ressource</a>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>


    </div>
</body>

</html>