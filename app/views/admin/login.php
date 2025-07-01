<!-- AUCUNE IMAGE/BINAIRE GÉNÉRÉE -->
<h1>Admin Login</h1>
<?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
<form method="post">
    <label>Email <input type="email" name="email"></label><br>
    <label>Password <input type="password" name="password"></label><br>
    <button type="submit">Se connecter</button>
</form>
