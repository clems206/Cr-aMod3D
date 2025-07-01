<!-- AUCUNE IMAGE/BINAIRE GÉNÉRÉE -->
<h1>Produits</h1>
<table>
<?php foreach($products as $p): ?>
<tr>
    <td><?php echo htmlspecialchars($p['name']); ?></td>
    <td><a href="?action=editProduct&id=<?php echo $p['id']; ?>">Edit</a></td>
</tr>
<?php endforeach; ?>
</table>
