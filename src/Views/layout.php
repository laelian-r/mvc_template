<?php
$a=1;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="/" class="hidden">Home</a>
                </li>

                <li>
                    <a href="/lien">Lien</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <?= $content; ?>
    </main>

    <footer>
        <p>Gestion ProjetName</p>
    </footer>
</body>
</html>
<?php
unset($_SESSION['error']);
unset($_SESSION['old']);