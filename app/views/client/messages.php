<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Messages</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<h1>Mes messages</h1>
<ul>
<?php if (!empty($messages)) : ?>
    <?php foreach ($messages as $m) : ?>
        <li><?php echo htmlspecialchars($m['subject']); ?> - <?php echo $m['status']; ?></li>
    <?php endforeach; ?>
<?php else : ?>
    <li>Aucun message.</li>
<?php endif; ?>
</ul>
<a href="index.php">Retour</a>
</body>
</html>
