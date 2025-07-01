<!-- AUCUNE IMAGE/BINAIRE GÉNÉRÉE -->
<h1>Edit Product</h1>
<form method="post">
    <label>Name <input type="text" name="name" value="<?php echo htmlspecialchars($product['name'] ?? ''); ?>"></label><br>
    <label>Price <input type="text" name="price" value="<?php echo $product['price'] ?? ''; ?>"></label><br>
    <label>Image path <input type="text" name="image" value="<?php echo $product['image'] ?? ''; ?>"></label><br>
    <button type="submit">Save</button>
</form>
