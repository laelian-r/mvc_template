<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>— Template —</title>
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <main>
        <?php echo $content; ?>
    </main>
</body>
</html>
<?php
unset($_SESSION['error']);
unset($_SESSION['old']);