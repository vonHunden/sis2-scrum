<html>
    <h3>EDITAR PRODUCTO</h3>
    <form>
        <p>Nombre de Producto</p>
        <input type="string" value=<?php echo $data['product']->name; ?>>
        <p>Precio</p>
        <input type="int" value=<?php echo $data['product']->price; ?>>
        <p>Cantidad disponible</p>
        <input type="int" value=<?php echo $data['product']->stock; ?>><br>
        <br>
        <input type="submit" value="Guardar">
        <input type="submit" value="Cancelar">
    </form>
</html>