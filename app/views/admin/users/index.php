<!-- AUCUNE IMAGE/BINAIRE GÉNÉRÉE -->
<h1>Utilisateurs</h1>
<table>
<?php foreach($users as $u): ?>
<tr><td><?php echo $u['name']; ?></td><td><?php echo $u['email']; ?></td></tr>
<?php endforeach; ?>
</table>
