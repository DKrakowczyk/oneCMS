<?php
   //pobieranie navbara
$header = 'navbar.php';
if (file_exists($header)) {
   require $header;
} else {
   die('Nie udało się pobrać pliku nagłówka');
}
$functions = 'functions.php';
if (file_exists($functions)) {
   require $functions;
   $fil = new files();
} else {
   die('błąd krytyczny');
}
?>
<div class="content-wrapper">
    <div class="container-fluid" id="contents">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" style="text-align:center !important;margin:auto;">
                <a href="cpanel.php">Witaj w panelu administracyjnym</a>
            </li>
        </ol>
        <hr>
        <h5> Media i wiadomości </h5>
        <div class="row">
            <div class="col-md-6">
                <div class="card text-center bg-dark text-white">
                    <div class="card-header">
                        <i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp Media
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Biblioteka mediów</h5>
                        <p class="card-text">Dodawaj i usuwaj pliki, które można zamieszczać na stronie głównej. Udostępniane są również adresy url plików</p>
                        <a href="addmedia.php" class="btn btn-outline-danger">Dodaj plik</a>
                        <a href="listmedia.php" class="btn btn-outline-danger">Zarządzaj biblioteką</a>
                    </div>
                    <div class="card-footer text-muted">
                        Liczba plików: <?php $fil->countFiles(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center bg-dark text-white">
                    <div class="card-header">
                        <i class="fa fa-fw fa-envelope"></i>&nbsp Wiadomości
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Skrzynka odbiorcza</h5>
                        <p class="card-text">Tutaj sprawdzisz wiadomości, które zostały wysłane za pomocą formularza kontaktowego</p>
                        <a href="mails.php" class="btn btn-outline-danger">Sprawdź pocztę</a>
                    </div>
                    <div class="card-footer text-muted">
                        Liczba wiadomości: <?php $one->count_mails($db) ?>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h5> Edycja sekcji </h5>
        <div class="row">
            <div class="col-md-3">
                <div class="card text-center bg-dark text-white">
                    <div class="card-header">
                        <i class="fa fa-laptop" aria-hidden="true"></i>&nbsp; Sekcja "Hero"
                    </div>
                    <div class="card-body">
                        <a href="hero.php" class="btn btn-outline-danger">Edytuj</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center bg-dark text-white">
                    <div class="card-header">
                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp; Sekcja "About"
                    </div>
                    <div class="card-body">
                        <a href="about.php" class="btn btn-outline-danger">Edytuj</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center bg-dark text-white">
                    <div class="card-header">
                        <i class="fa fa-bug" aria-hidden="true"></i>&nbsp; Sekcja "Skills"
                    </div>
                    <div class="card-body">
                        <a href="skills.php" class="btn btn-outline-danger">Edytuj</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center bg-dark text-white">
                    <div class="card-header">
                        <i class="fa fa-tasks" aria-hidden="true"></i>&nbsp; Sekcja "Work"
                    </div>
                    <div class="card-body">
                        <a href="work.php" class="btn btn-outline-danger">Edytuj</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center bg-dark text-white">
                    <div class="card-header">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp; Sekcja "Schools"
                    </div>
                    <div class="card-body">
                        <a href="schools.php" class="btn btn-outline-danger">Edytuj</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center bg-dark text-white">
                    <div class="card-header">
                        <i class="fa fa-code" aria-hidden="true"></i>&nbsp; Sekcja "Portfolio"
                    </div>
                    <div class="card-body">
                        <a href="portfolio.php" class="btn btn-outline-danger">Edytuj</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center bg-dark text-white">
                    <div class="card-header">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp; Sekcja "Kontakt"
                    </div>
                    <div class="card-body">
                        <a href="skills.php" class="btn btn-outline-danger">Edytuj</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h5> Edycja </h5>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center bg-dark text-white">
                    <div class="card-header">
                        <i class="fab fa-css3-alt"></i>&nbsp; CSS
                    </div>
                    <div class="card-body">
                        <p class="card-text">Edytuj style CSS strony głównej</p>
                        <a href="css.php" class="btn btn-outline-danger">Edytuj</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h5> Social </h5>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center bg-dark text-white">
                    <div class="card-header">
                        <i class="fab fa-facebook-messenger"></i>&nbsp; Social
                    </div>
                    <div class="card-body">
                        <p class="card-text">Edycja sekcji social strony głównej</p>
                        <a href="social.php" class="btn btn-outline-danger">Edytuj</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$footer = 'footer.php';
if (file_exists($footer)) {
   require $footer;
} else {
   die('Nie udało się pobrać pliku stopki');
}
?> 