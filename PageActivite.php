<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoveETS</title>
    <link rel="stylesheet" href="/normalize.css">
    <link rel="stylesheet" href="/styleActivite.css">
    <script type="module" src="/data.js"></script>
</head>

<body>
    <header>
        <a href="/index.php"><img src="/Images/logo.PNG" alt="Logo" id="imgHeader"></a>
        <nav>
            <ul class="navBar">
                <li><a href="/PageActivite.php" class="active">ACTIVITÉS</a></li>
                <li><a href="/PageFormulaire.php">FORMULAIRE</a></li>
            </ul>
        </nav>
    </header>
    <br>
    <main>
        <form action="">
            <label for="niveau">Niveau:</label>
            <select name="niveau" id="niveau">
            </select>


            <label for="lieu">Lieu:</label>
            <select name="lieu" id="lieu">
            </select>

            <label for="entraineur">Entraîneur:</label>
            <select name="entraineur" id="entraineur">
            </select>

            <label for="horaire">Jour:</label>
            <select name="jour" id="jour">
            </select>

            <label for="heure">Heure:</label>
            <input type="time" name="heure" id="heure" placeholder="12:00">

            <label for="duree">Durée:</label>
            <input type="text" name="duree" id="duree" placeholder="ex: 30 minutes">

            <input type="submit" value="Appliquer">
        </form>

        <div id="activite">
            <figure class="boiteActivite">
                <ul>
                    <li><img src="/Images/soccer.webp" alt="" width="500" height="500" class="image"></li>
                    <li><a href="PageFormulaire.html"><button>Modifier l'activité</button></a></li>
                </ul>

                <div class="description">
                </div>


            </figure>

            <figure class="boiteActivite">
                <ul>
                    <li><img src="/Images/basketball.webp" alt="" width="500" height="500" class="image"></li>
                    <li><a href="PageFormulaire.html"><button>Modifier l'activité</button></a></li>
                </ul>

                <div class="description">

                </div>

            </figure>

            <figure class="boiteActivite">
                <ul>
                    <li><img src="/Images/course_a_pied.webp" alt="" width="500" height="500" class="image"></li>
                    <li><a href="PageFormulaire.html"><button>Modifier l'activité</button></a></li>
                </ul>

                <div class="description">
                </div>

            </figure>

            <figure class="boiteActivite">
                <ul>
                    <li><img src="/Images/musculation.webp" alt="" width="500" height="500" class="image"></li>
                    <li><a href="PageFormulaire.html"><button>Modifier l'activité</button></a></li>
                </ul>

                <div class="description">
                </div>


            </figure>

            <figure class="boiteActivite">
                <ul>
                    <li><img src="/Images/zumba.webp" alt="" width="500" height="500" class="image"></li>
                    <li><a href="PageFormulaire.html"><button>Modifier l'activité</button></a></li>
                </ul>

                <div class="description">
                </div>


            </figure>
            <div class="ajouter">
                <a href="/Html/PageFormulaire.html"><button>Ajouter une activité</button></a>
            </div>

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