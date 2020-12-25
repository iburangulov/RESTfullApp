<?php
require ROOT . 'views/templates/header.php';
require ROOT . 'views/templates/navbar.php';
?>

<h1>Error <?php echo $errno; ?></h1>
    <hr>
<h1>Status: <?php echo $status; ?></h1>

<?php

require ROOT . 'views/templates/footer.php';
