<?php
ob_start();
?>

<h1>Lien</h1>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';