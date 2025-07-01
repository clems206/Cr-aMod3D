<!-- AUCUNE IMAGE/BINAIRE GÉNÉRÉE -->
<h1>Commandes</h1>
<table>
<?php foreach($orders as $o): ?>
<tr>
    <td>#<?php echo $o['id']; ?></td>
    <td><?php echo $o['status']; ?></td>
</tr>
<?php endforeach; ?>
</table>
