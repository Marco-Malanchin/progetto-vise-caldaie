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
    <!--
    <div class="container mt-5">
        <div class="row">
            <h3>Ciao, Benvenuto!</h3>
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
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
-->

    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 g-2" style="height: auto">
            <div class="col">
                <div>
                    <span>
                        Benvenuti nel nostro sito di il SegugioDelleBollette! Siamo qui per semplificare la tua vita
                        quando si tratta di risparmiare sulle bollette. Che tu sia un privato o un'azienda, il
                        nostro strumento ti aiuterà a capire quale metodo di riscaldamento fa al caso vostro.
                    </span>
                </div>
                <button class="btn btn-primary mt-3 mb-3">Prova ora!</button>
            </div>
            <div class="col d-flex justify-content-center">
                <img
                    src="data:image/jpeg;base64,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">

            </div>
        </div>
        <hr class="mt-3">
        <div>
            <span>
                Scopri la tua convenienza e contatta subito una delle aziende che troverai qui sotto, approfitta
                della nostra collaborazione e ricevere degli sconti sulle offerte che ti faranno!
            </span>

            <div class="mt-4 d-flex justify-content-between">
                <a
                    href="https://www.enel.it/?ecid=paidsearch-google-alwayson_top_keyword-brand-enel_exact&gclid=CjwKCAjwjMiiBhA4EiwAZe6jQ2H-wWbkl6mCTveS3z62HzbBN1zY40fStEoKaBFUnqlLdIWtlMkaHhoCwnoQAvD_BwE&gclsrc=aw.ds">
                    <button class="btn btn-danger">ENEL Energia</button>
                </a>
                <a
                    href="https://www.enel.it/?ecid=paidsearch-google-alwayson_top_keyword-brand-enel_exact&gclid=CjwKCAjwjMiiBhA4EiwAZe6jQ2H-wWbkl6mCTveS3z62HzbBN1zY40fStEoKaBFUnqlLdIWtlMkaHhoCwnoQAvD_BwE&gclsrc=aw.ds">
                    <button class="btn btn-primary">A2A Energia</button>
                </a>
                <a
                    href="https://www.enel.it/?ecid=paidsearch-google-alwayson_top_keyword-brand-enel_exact&gclid=CjwKCAjwjMiiBhA4EiwAZe6jQ2H-wWbkl6mCTveS3z62HzbBN1zY40fStEoKaBFUnqlLdIWtlMkaHhoCwnoQAvD_BwE&gclsrc=aw.ds">
                    <button class="btn btn-warning">ACEA Energia</button>
                </a> <a
                    href="https://www.enel.it/?ecid=paidsearch-google-alwayson_top_keyword-brand-enel_exact&gclid=CjwKCAjwjMiiBhA4EiwAZe6jQ2H-wWbkl6mCTveS3z62HzbBN1zY40fStEoKaBFUnqlLdIWtlMkaHhoCwnoQAvD_BwE&gclsrc=aw.ds">
                    <button class="btn btn-success">PLENITUDE Energia</button>
                </a>
            </div>
        </div>
        <hr>
        <div>
            <img class="img-fluid"
                src="https://img-prod.tgcom24.mediaset.it/images/2022/09/13/200903627-613cd832-3064-47b1-bc56-a91a74453eeb.jpg">
        </div>
    </div>

    <footer class="footer mt-5 bg-primary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-4">
                    <ul class="list-unstyled">
                        <li>
                            <i class="bi bi-envelope-fill">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                                    class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg>
                            </i>
                            <span>info@ilsegugiodellebollette.it</span>
                        </li>
                        <li class="mt-1">
                            <i class="fas fa-envelope"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="black" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg></i>
                            <span>+39 123 456 789</span>
                        </li>
                        <li class="mt-1">
                            <i class="bi bi-map-fill">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                                    class="bi bi-map-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.502.502 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5V.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.498.498 0 0 0-.196 0L5 14.09zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1-.5-.1z" />
                                </svg>
                            </i><span>Roma, Via Roma 2500</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 mt-4">
                    <h2 class="fw-bold">Il segugio delle bollette</h2>
                    <p>Grazie per aver visitato Il Segugio delle Bollette. <br>Siamo qui per aiutarti a gestire al
                        meglio le
                        tue spese energetiche.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>