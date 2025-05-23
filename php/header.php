<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $page_title ?? "Titre par défaut" ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/background.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header class="nav">
    <div class="menu-toggle" id="menu-toggle">
        <div class="bar"></div>
    </div>

    <div class="navbar-title">ARTHUR DELACOUR</div> <!-- 👈 Ajouté ici -->


    <div class="menu-overlay" id="menu-overlay">
        <nav class="menu">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="pdf/ArthurDelacour.pdf" target="_blank">CV</a></li>
                <li><a href="background.php">Background</a></li>
                <li><a href="project.php">Projets</a></li>
                <li><a href="stack.php">Stack Tech</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
