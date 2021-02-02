<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?><!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="learningNames.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Learning Names</title>
</head>
<body>

<header class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="./DummyCategorie/bootstrap-solid.svg" style="width: 40px; height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Kategorien
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?site=category-view"
                           style="position: relative;">
                            Tiere
                        </a>
                        <a class="btn btn-outline-secondary btn-sm editCategorieButton"
                           href="?site=category-edit"
                           style="border-radius: 50%; position: absolute; right: 9px; top: 9px; background: #FFFFFF url('./DummyCategorie/edit.svg') no-repeat center;  width: 30px; height: 30px;">
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?site=category-create">
                            Neue Kategorie
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?site=user-login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?site=how-to">How to?</a>
                </li>
            </ul>
            <div class="nav-item mr-0">
                <a class="nav-link" href="?site=user-edit"
                   style="position:relative; padding-right: 45px;">
                    <span class="d-inline-block">M. Adams</span>
                    <img src="./DummyCategorie/account.svg"
                         style="width:30%; height:100%; position: absolute; right: 0; top: 0;">
                </a>
            </div>
        </div>
    </div>
</header>

<?php
if (isset($_GET['site']) && file_exists('./sites/' . $_GET['site'] . '.phtml')) {
    require './sites/' . $_GET['site'] . '.phtml';
} else {
    require './sites/main.phtml';
}
?>

<footer class="footer bg-light mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <h3>Kontakt</h3>
                Manuel Adams
                <br>
                <a href="mailto:manuel.adams@hs-weingarten.de" style="text-decoration: underline">manuel.adams@hs-weingarten.de</a>
                <br>
                Sonnenhalde. 4
                <br>
                88364 Wolfegg
                <br>
            </div>
            <div class="col-lg">
                <h3>Impressum</h3>
                <p>
                    © 2018-2018 Hochschule Ravensburg-Weingarten
                    <br>
                    Weingarten
                    <br>
                    Design: Manuel Adams
                    <br>
                    Implementierung: Manuel Adams
                    <br>
                </p>
                <a href="?site=privacy" style="text-decoration: underline">
                    Datenschutz
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<script src="./learningNames.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<!-- @see https://github.com/js-cookie/js-cookie -->
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>

</body>
</html>
