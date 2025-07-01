<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Connexion</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<h1>Connexion</h1>
<?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
<form method="post">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit">Se connecter</button>
</form>
<a href="index.php?action=register">Inscription</a> |
<a href="index.php?action=forgot">Mot de passe oublié</a>
</body>
</html>
