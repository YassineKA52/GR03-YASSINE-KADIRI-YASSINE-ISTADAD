<?php
require_once 'config.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoveETS</title>
    <link rel="stylesheet" href="/normalize.css">
    <link rel="stylesheet" href="/styleFormulaire.css">
    <script type="module" src="/data.js"></script>
</head>

<body>
    <header>
        <a href="/index.php"><img src="/Images/logo.PNG" alt="Logo" id="imgHeader"></a>
        <nav>
            <ul class="navBar">
                <li><a href="/PageActivite.php">ACTIVITÉS</a></li>
                <li><a href="/PageFormulaire.php" class="active">FORMULAIRE</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="form-Container">
            <h2> MODIFICATION DE L'ACTIVITÉ </h2>
            <form action="">
                <label for="nom_activite">Nom de l'activité : </label> <br>
                <input type="text" name="nom_activite" id="nom_activite" placeholder="Yoga"> <br>

                <label for="description">Description :</label> <br>
                <textarea name="description" id="description" rows="6" cols="40"
                    placeholder="Détendez votre esprit et améliorez votre flexibilié avec nos cours de yoga."></textarea>
                <br>

                <label for="lien_image">Image (URL) : </label> <br>
                <input type="url" name="lien_image" id="lien_image" placeholder="image/yoga.jpeg"> <br>

                <label for="niveau">Niveau : </label> <br>
                <select name="niveau" id="niveau">
                    <option value=""></option>
                    <option value="debutant">Débutant</option>
                    <option value="intermediaire">Intermédiaire</option>
                    <option value="expert">Expert</option>
                </select> <br>

                <label for="coach">Coach : </label> <br>
                <input type="text" name="coach" id="coach" placeholder="Walid Regragui"> <br>

                <label for="horaire">Horaire :</label> <br>
                <input type="time" name="horaire" id="horaire" placeholder="Vendredi 18h-19h"> <br>

                <label for="lieu">Lieu : </label> <br>
                <select name="lieu" id="lieu">
                    <option value=""></option>
                    <option value="interieur">Intérieur</option>
                    <option value="exterieur">Extérieur</option>
                </select> <br>

                <button type="submit"> Appliquer </button>

            </form>
        </div>

    </main>

    <footer>
        <div class="containerFooter">
            <div id="boite1">
                <p><Strong>NOUS CONTACTER </Strong></p>

                <p>Email: moveETS@business.com </p>

                <p> Tel: 1-500-024-6810 </p>
            </div>

            <div id="boite2">
                <p><Strong>PROPOSEZ UN COURS CHEZ NOUS </Strong></p>
                <p>Si vous pensez avoir les compétences, joignez-vous à nous pour partager votre passion.</p>
            </div>
            <div id="boite3">
                <p><Strong>SUIVEZ-NOUS</Strong></p>

                <a href="https://x.com/?lang=en-ca&mx=2" target="_blank"><img src="/Images/x-logo.webp" alt="x"
                        width="35" height="35"></a>
                <a href="https://www.facebook.com/" target="_blank"><img src="/Images/facebook-logo.png" alt="facebook"
                        width="35" height="35"></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="/Images/insta-logo.png" alt="instagram"
                        width="35" height="35"></a>
            </div>
        </div>
    </footer>
</body>

</html>