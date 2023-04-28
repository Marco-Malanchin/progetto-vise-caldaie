<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Segugio | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../style/logo.jpg">
</head>

<body>
    <?php require_once(__DIR__ . '../navbar.php'); ?>
    <div class="container mt-5">
        <div class="row">
            <h3>Ciao, <b>User</b>.</h3>
            <h3>Benvenuto! </h3>
        </div>

    </div>
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="col-md-4">
                <div id="carouselExample" class="carousel carousel-dark">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a class="navbar-brand fw-bold" href="calcoloBollette.php">
                                <img src="../style/segugio-logo.png" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a class="navbar-brand fw-bold" href="calcoloBollette.php">
                                <img src="../style/segugio.jpg" class="d-block w-100" alt="...">
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-6 offset-md-3">
            <h5>Il nostro sito è un'utile risorsa per coloro che stanno cercando il modo più efficiente ed economico per
                riscaldare la propria casa. Utilizzando i dati del consumo di corrente e gas, il sito offre una
                panoramica completa dei vari metodi di riscaldamento disponibili e confronta i loro costi e benefici.
                Attraverso un'interfaccia facile da usare, gli utenti possono inserire i loro consumi mensili di
                corrente e gas, è verra mostrato agli utenti quali metodi di riscaldamento sono più economici a seconda
                dei loro consumi
            </h5>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>