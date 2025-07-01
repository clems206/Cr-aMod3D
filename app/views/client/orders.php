<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Commandes</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<h1>Mes commandes</h1>
<ul>
<?php if (!empty($orders)) : ?>
    <?php foreach ($orders as $o) : ?>
        <li><a href="index.php?action=orderDetail&id=<?php echo $o['id']; ?>">Commande #<?php echo $o['id']; ?></a> - <?php echo $o['status']; ?></li>
    <?php endforeach; ?>
<?php else : ?>
    <li>Aucune commande.</li>
<?php endif; ?>
</ul>
<a href="index.php">Retour</a>
</body>
</html>
