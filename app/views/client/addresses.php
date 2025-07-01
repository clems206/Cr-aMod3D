<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Adresses</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<h1>Mes adresses</h1>
<ul>
<?php if (!empty($addresses)) : ?>
    <?php foreach ($addresses as $a) : ?>
        <li><?php echo htmlspecialchars($a['street']); ?>, <?php echo htmlspecialchars($a['city']); ?></li>
    <?php endforeach; ?>
<?php else : ?>
    <li>Aucune adresse enregistrée.</li>
<?php endif; ?>
</ul>
<a href="index.php">Retour</a>
</body>
</html>
