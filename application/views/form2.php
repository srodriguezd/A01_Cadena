<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 13/10/15
 * Time: 17:13
 */

require 'application/layouts/header.php'; ?>

    <form method="post" action="/index.php?controller=cadena&accion=<?php echo $accion; ?>">
        <input type="text" name="op1"><br>
        <input type="submit" value="ok">
    </form>

<?php require 'application/layouts/footer.php'; ?>