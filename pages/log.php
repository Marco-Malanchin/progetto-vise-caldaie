<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}

$path = dirname(__FILE__) . "..\..\log\log.txt";
$data = file_get_contents($path);
$tmp = explode("\r", $data);
$arrayKw = array();
$arraySMC = array();


foreach ($tmp as $t) {
    $tmp1[] = explode(";", $t);
}

$nomeKW = $tmp1[0][0];
$nomeSMC = $tmp1[0][1];

//cancello l'elemento dell'array con l'indice passato alla funzione
unset($tmp1[0]);



foreach ($tmp1 as $t) {
    $arrayKw[] = $t[0];
    $arraySMC[] = $t[1];
}
$reverKw = array_reverse($arrayKw);
$reverSMC = array_reverse($arraySMC);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Il segugio delle bollette | Calcolo bollette</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../style/logo.jpg">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div id="pageloader">
        <div class="spinner-border text-primary" id="spinner" role="status">
            <span class="visually-hidden"></span>
        </div>
    </div>
    <?php require_once(__DIR__ . '../navbar.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="col">
        <div class="container">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    <?php
                    if (count($reverKw) < 10) {
                        foreach ($reverKw as $rev) {
                            echo $rev . ",";
                        }
                    } else {
                        for ($i = 0; $i < 10; $i++) {
                            echo $reverKw[$i];
                        }
                    } ?>
                ],
                datasets: [{
                    label: '#ultimi consumi di kw inseriti',
                    data: [
                        <?php
                        if (count($reverKw) < 10) {
                            foreach ($reverKw as $rev) {
                                echo $rev . ",";
                            }
                        } else {
                            for ($i = 0; $i < 10; $i++) {
                                echo $reverKw[$i];
                            }
                        } ?>
                    ],
                    backgroundColor: [
                        'rgba(15, 255, 15, 0.7)',
                        'rgba(75, 210, 30, 0.7)',
                        'rgba(135, 165, 45, 0.7)',
                        'rgba(195, 119, 59, 0.7)',
                        'rgba(255, 74, 74, 0.7)',
                    ],
                    borderColor: [
                        'rgb(15, 255, 15)',
                        'rgb(75, 210, 30)',
                        'rgb(135, 165, 45)',
                        'rgb(195, 119, 59)',
                        'rgb(255, 74, 74)',
                    ],
                    borderWidth: 2,
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
    </div>
    </div>
    </div>

    <div class="container mb-5">
        <div class="container">
            <canvas id="spesa"></canvas>
        </div>
        <script>
            const grafico = document.getElementById('spesa');

            new Chart(grafico, {
                type: 'bar',
                data: {
                    labels: [
                        <?php
                        if (count($reverSMC) < 10) {
                            foreach ($reverSMC as $rev) {
                                echo $rev . ",";
                            }
                        } else {
                            for ($i = 0; $i < 10; $i++) {
                                echo $reverSMC[$i];
                            }
                        } ?>
                    ],
                    datasets: [{
                        label: '#ultimi consumi di SMC inseriti',
                        data: [
                            <?php
                            if (count($reverSMC) < 10) {
                                foreach ($reverSMC as $rev) {
                                    echo $rev . ",";
                                }
                            } else {
                                for ($i = 0; $i < 10; $i++) {
                                    echo $reverSMC[$i];
                                }
                            } ?>
                        ],
                        backgroundColor: [
                            'rgba(15, 255, 15, 0.7)',
                            'rgba(75, 210, 30, 0.7)',
                            'rgba(135, 165, 45, 0.7)',
                            'rgba(195, 119, 59, 0.7)',
                            'rgba(255, 74, 74, 0.7)',
                        ],
                        borderColor: [
                            'rgb(15, 255, 15)',
                            'rgb(75, 210, 30)',
                            'rgb(135, 165, 45)',
                            'rgb(195, 119, 59)',
                            'rgb(255, 74, 74)',
                        ],
                        borderWidth: 2,
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
    </div>
    <div class="row">
        <div class="container-datatable  rounded col-6 offset-3">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>corrente</th>
                        <th>gas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($arrayKw); $i++) { ?>
                        <tr>
                            <td><?php $a = $i + 1;
                                echo $a; ?></td>
                            <td><?php echo $arrayKw[$i]; ?></td>
                            <td><?php echo $arraySMC[$i]; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>corrente</th>
                        <th>gas</th>
                    </tr>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

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

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

<style>
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

    .container-datatable {
        border-style: solid;
        border-color: black;
        border-width: 0.5px;
        padding-top:10px;
        padding-bottom: 10px;
    }
</style>

</html>