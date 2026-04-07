<?php
ob_start();


if (!isset($_SESSION['user'])) {
    header('Location: /auth/login/');
}

?>

<main>
    <p>Hello, World!</p>
</main>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';