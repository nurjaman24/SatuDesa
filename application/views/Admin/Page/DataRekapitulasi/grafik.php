<!DOCTYPE html>
<html>
<head>
    <title>Grafik Rekapitulasi</title>
    <!-- Load file plugin Chart.js -->
    <script src="<?= base_url("/asset/chart/Chart.js")?>"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<br>
<h4 class="text-center">Grafik Rekapitulasi</h4>

<div class="p-5">
<canvas id="myChart"></canvas>

    <!-- <?php
    $nama_jurusan= "";
    $jumlah=null;
    foreach ($hasil as $item)
    {
        $jur=$item->jurusan;
        $nama_jurusan .= "'$jur'". ", ";
        $jum=$item->total;
        $jumlah .= "$jum". ", ";
    }
    ?> -->
    
</div>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $nama_jurusan; ?>],
            datasets: [{
                label:'Jumlah ',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
</body>
</html>