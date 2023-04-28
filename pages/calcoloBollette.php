<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Il segugio delle bollette | Calcolo bollette</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../style/logo.jpg">
</head>

<body>
    <div id="pageloader">
        <div class="spinner-border text-primary" id="spinner" role="status">
            <span class="visually-hidden"></span>
        </div>
    </div>

    <?php require_once(__DIR__ . '../navbar.php'); ?>
    <div class="container mt-5 mb-3">
        <form method="post" class="text-center" id="myform">
            <div class="information-container text-center">
                <h2>Benvenuto Utente sul calcolo bollette</h2>
                <h2></h2>
                <br>

                <div class="row mb-3">
                    <label class="form-label">consumo corrente:</label>
                    <input class="col-6 offset-3" type="text" onkeypress="return isNumber(event)" placeholder="Kw" name="corrente">
                </div>

                <div class="row mb-3">
                    <label for="">consumo gas</label>
                    <input class="col-6 offset-3" type="text" onkeypress="return isNumber(event)" placeholder="SMC" name="gas">
                </div>

                <button class="btn btn-primary mb-5" onclick="Loading()">Calcola</button>
        </form>
    </div>
    <?php
    require_once dirname(__FILE__) . "\calcolaBollette.php";
    error_reporting(0);
    ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['corrente'] == 0 && intval($_POST['gas']) == 0) {
    ?>
            <div class="alert alert-danger" role="alert">
                <?php
                echo '<p class="pt-3 pb-3 text-center fw-bold">!!! non puoi inserire entrambi i consumi pari a zero !!!'; ?>
            </div>
    <?php
        } else {
            $data = calcolaBollette(intval($_POST['corrente']), intval($_POST['gas']));
        }
    }
    ?>
    <br>
    <div class="container mb-5">
        <?php if (isset($data)) : ?>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <?php
                            $nome = $data[0]->intGetMetodoRiscaldamento();
                            echo ($nome->ToString());
                            ?>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <?php echo $data[0]->intToString();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            <?php
                            $nome = $data[1]->intGetMetodoRiscaldamento();
                            echo ($nome->ToString());
                            ?>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <?php echo $data[1]->intToString();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            <?php
                            $nome = $data[2]->intGetMetodoRiscaldamento();
                            echo ($nome->ToString());
                            ?> </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <?php echo $data[2]->intToString();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                            <?php
                            $nome = $data[3]->intGetMetodoRiscaldamento();
                            echo ($nome->ToString());
                            ?> </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <?php echo $data[3]->intToString();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                            <?php
                            $nome = $data[4]->intGetMetodoRiscaldamento();
                            echo ($nome->ToString());
                            ?> </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <?php echo $data[4]->intToString();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="container mt-3">
        <canvas id="myChart"></canvas>
    </div>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['<?php $nome = $data[0]->intGetMetodoRiscaldamento();
                            echo ($nome->ToString()) ?>',
                    '<?php $nome = $data[1]->intGetMetodoRiscaldamento();
                        echo ($nome->ToString()); ?>',
                    '<?php $nome = $data[2]->intGetMetodoRiscaldamento();
                        echo ($nome->ToString()); ?>',
                    '<?php $nome = $data[3]->intGetMetodoRiscaldamento();
                        echo ($nome->ToString()); ?>',
                    '<?php $nome = $data[4]->intGetMetodoRiscaldamento();
                        echo ($nome->ToString()); ?>',
                ],
                datasets: [{
                    label: '#Costo per dati forniti',
                    data: [51, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
<?php endif ?>
</div>

<script>
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

    $(window).on('load', function() {
        $("#pageloader").show();
        setTimeout(function() {
            $("#pageloader").hide();
        }, 1000 * 0.5);
    });

    function Loading() {
        $("#pageloader").show();
        setTimeout(function() {
            $("#pageloader").hide();
        }, 1000 * 1);
        $("#myform").submit();
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>

<style>
    .error {
        border-radius: 5px;
        background-color: #FE0000;
        font-weight: bold;
        color: white;
    }


    input {
        border-color: grey;
        border: auto;
        border-radius: 5px;
    }

    #pageloader {
        background: rgba(255, 255, 255, 0.8);
        height: 100%;
        position: fixed;
        width: 100%;
        z-index: 9999;
    }

    #spinner {
        left: 50%;
        margin-left: -32px;
        margin-top: -32px;
        position: absolute;
        top: 50%;
    }
</style>

</html>