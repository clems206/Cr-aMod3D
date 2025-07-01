<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Détail commande</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<h1>Détail de la commande</h1>
<?php if (!empty($order)) : ?>
    <p>Commande #<?php echo $order['id']; ?> - <?php echo $order['status']; ?></p>
<?php else : ?>
    <p>Commande introuvable.</p>
<?php endif; ?>
<a href="index.php?action=orders">Retour aux commandes</a>
</body>
</html>
