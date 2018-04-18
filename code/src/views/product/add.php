<html>
    <h3>CREAR PRODUCTO</h3>
    <form method="POST" action=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>>
        <p>id_categoria de Producto</p>
        <input type="int" name="category">
        <p>Nombre de Producto</p>
        <input type="string" name="name">
        <p>Precio</p>
        <input type="int" name="price">
        <p>Cantidad disponible</p>
        <input type="int" name="stock">
        <br>
        <input type="submit" value="Crear">
        <input type="submit" value="Cancelar">
    </form>
</html>