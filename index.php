<?php
require_once 'config.php';

pasConnecter();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/normalize.css">
    <link rel="stylesheet" href="/styleAcceuil.css">
    <title> MoveETS </title>
    <script type="module" src="/data.js"></script>

</head>

<body>
    <header>
        <a href="/index.php"><img src="/Images/logo.PNG" alt="Logo" id="imgHeader"></a>
        <nav>
            <ul class="navBar">
                <li><a href="/PageActivite.php">ACTIVITÉS</a></li>
                <li><a href="/PageFormulaire.php">FORMULAIRE</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1 id="test"> Bienvenue sur notre site, chers sportifs et sportives ! </h1>
        <p>
            Saviez-vous que l'activité physique aide à prévenir les maladies chroniques comme le cancer et qu'elle
            améliore certaines fonctions du cerveau <br> comme la concentration en plus d'améliorer le sommeil et de
            réduire le stress ? Prenez votre santé en main dès maintenant et n'attendez pas pour <br> venir découvrir
            nos nombreuses activités qui sauront satisfaire vos objectifs quel que soit votre niveau ou vos besoins.
        </p>
        <div id="activite-Container">
            <h2> Voici quelques activités parmis celles que nous proposons </h2>

            <div id="container">

                <div id="activite-populaire-Container">
                   
                </div>

                <a href="/PageActivite.php"> <button>Voir toutes les activités</button></a>
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