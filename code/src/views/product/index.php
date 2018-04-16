 <?php print_r($data['user']);?>
 <html>
    <table>
        <tr>
            <td>NOMBRE</td>
            <td>APELLI</td>
        </tr>
        <tr>
            <td><?php echo $data['user']->name; ?></td>
            <td><?php echo $data['user']->lastname; ?></td>
            <td><?php echo $data['user']->username; ?></td>
        </tr>
    </table>
 </html>