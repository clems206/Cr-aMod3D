<!-- AUCUNE IMAGE/BINAIRE GÉNÉRÉE -->
<h1>Devis</h1>
<table>
<?php foreach($quotes as $q): ?>
<tr><td>#<?php echo $q['id']; ?></td><td><?php echo $q['status']; ?></td></tr>
<?php endforeach; ?>
</table>
