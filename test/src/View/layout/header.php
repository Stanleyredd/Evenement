<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?= $title ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?controller=home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=evenement">Evenement</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=account">Accounts</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=functie">Functie</a>
            </li>

            <?php
            if (isset($_SESSION['account'])) {
                ?>
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=account&action=uitloggen">Uitloggen</a>

            </li>
                <?php } else { ?>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=account&action=login">Inloggen</a>
                </li>
                <?php } ?>
        </ul>
            <span class="navbar-text">
            <?php echo isset($_SESSION['account'])?$_SESSION['account']:"";      ?>
            </span>

    </div>
</nav>
<div class="container">





</body>
</html>