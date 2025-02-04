<?php
require_once 'config.php';

$error    = '';
$username = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    $sql  = "SELECT * FROM users WHERE username = :username LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id']  = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: index.php');
        exit;
    } else {
        $error = 'Identifiants invalides, veuillez réessayer.';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>Connexion</title>
    <link rel="stylesheet" href="/styleFormulaire.css">
</head>
<body>
<div class="container-login">
    <h2>Connexion</h2>
    <br>
    <?php if ($error): ?>
        <p class="erreur"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <br>
    <div class="form-Container">
        <form method="POST">
            <label for="username">Nom d'utilisateur :</label>
            <input 
                type="text" 
                id="username" 
                name="username" 
                value="<?= htmlspecialchars($username) ?>" 
            />
            <br><br>

            <label for="password">Mot de passe :</label>
            <input 
                type="password" 
                id="password" 
                name="password" 
            />
            <br><br>

            <button type="submit">Se connecter</button>
        </form>

        <p>
            Pas de compte ? 
            <a href="register.php">S'inscrire</a>
        </p>
    </div>
</div>
</body>
</html>
