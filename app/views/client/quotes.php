<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Devis</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<h1>Mes devis</h1>
<ul>
<?php if (!empty($quotes)) : ?>
    <?php foreach ($quotes as $q) : ?>
        <li>Devis #<?php echo $q['id']; ?> - <?php echo $q['status']; ?></li>
    <?php endforeach; ?>
<?php else : ?>
    <li>Aucun devis.</li>
<?php endif; ?>
</ul>
<a href="index.php">Retour</a>
</body>
</html>
