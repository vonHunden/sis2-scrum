<html>
    <h2>LISTA DE PRODUCTOS</h2>
    <table border="2">
        <thread>
        <tr>
            <td>ID</td>
            <td>PRODUCTO</td>
            <td>ID CATEGORIA</td>
            <td>PRECIO</td>
            <td>EXISTENCIAS</td>
            <td> OPCIONES </td>
        </tr>
        </thread>
        <tbody>
            <?php

            foreach($data['product'] as $rows) {?>
        <tr>
            <td><?php echo $rows->id; ?></td>
            <td><?php echo $rows->name; ?></td>
            <td><?php echo $rows->id_category; ?></td>
            <td><?php echo $rows->price; ?></td>
            <td><?php echo $rows->stock; ?></td>
            <td><a href="edit/<?php echo $rows->id ?>" role="button">Editar</a>
            <input type="submit" value="Eliminar"></td>
        </tr>
            <?php }?>
            <td><a href="add" role="button">Crear</a>
    </tbody>
    </table>
</html>