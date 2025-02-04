<?php 

require_once "config.php";

$msgErreur = "";
$msgValidation = "";

$nom = $prenom = $nomUtilisateur = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $nomUtilisateur = $_POST["nom_utilisateur"];
    $mdp = $_POST["mdp"];
    $confirmerMdp = $_POST["confirmer_mdp"];

    if (empty($nom) || empty($prenom) || empty($nomUtilisateur) || empty($mdp) || empty($confirmerMdp)) 
    {
        $msgErreur = "*** Tous les champs doivent êtres remplis ***";
    }

    else if ($mdp !== $confirmerMdp) 
    {
        $msgErreur = "*** Les deux mots de passe doivent êtres identiques ***";

    }

    else if (strlen($mdp) < 8) 
    {
        $msgErreur = "*** Le mot de passe doit être composé de 8 caractères au minimum ***";
    }

    else 
    {
        $stmt = $pdo->prepare("SELECT id FROM users WHERE username = :username");
        $stmt->execute(['username' => $nomUtilisateur]);
        
        if ($stmt->fetch()) 
        {
            $msgErreur = "*** Ce nom d'utilisateur est déjà utilisé ***";
        } 
        
        else 
        {
            $mdpCrypte = password_hash($mdp, PASSWORD_BCRYPT);
            
            $stmt = $pdo->prepare("INSERT INTO users (username, first_name, last_name, password) VALUES (:username, :firstname, :lastname, :password)");
            
            $stmt->execute([
                'username' => $nomUtilisateur,
                'firstname' => $prenom,
                'lastname' => $nom,
                'password' => $mdpCrypte,
            ]);
            
            $msgValidation = "Votre compte a été créer avec succès ! Vous serez rediriger vers la page de connexion.";
            header("refresh:3;url=login.php");
            exit();
        }

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="/styleRegister.css">
</head>
<body>
    <h1>Créer un compte</h1>

    <?php if ($msgErreur): ?>
        <p id="msgErreur"><?php echo $msgErreur; ?></p>
    <?php endif; ?>
    <?php if ($msgValidation): ?>
        <p id="msgValidation"><?php echo $msgValidation; ?></p>
    <?php endif; ?>

    <form method="POST" action="register.php">
    <label for="nom_utilisateur">Nom d'utilisateur :</label>
        <input type="text" name="nom_utilisateur" id="nom_utilisateur" value="<?php echo htmlspecialchars($nomUtilisateur ?? ''); ?>">

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" value="<?php echo htmlspecialchars($prenom ?? ''); ?>">

        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?php echo htmlspecialchars($nom ?? ''); ?>">

        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp" id="mdp">

        <label for="confirmer_mdp">Confirmer le mot de passe :</label>
        <input type="password" name="confirmer_mdp" id="confirmer_mdp">

        <button type="submit">Créer un compte</button>
    </form>

    <p>Vous êtes déja inscrit parmis nous ? <a href="login.php">Connectez-vous ici</a>.</p>
</body>
</html>