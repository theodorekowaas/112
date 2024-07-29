<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <h2>GRAFIK DATA FAKULTAS MAHASISWA</h2>
    <div style="width: 500px; height: 500px;">
            <canvas id="grafik"></canvas>
    </div>
    <script>
        var ctx = document.getElementById("grafik").getContext('2d');
        var myChart = new Chart(ctx, {
            type:'bar',
            data: {
                labels : ["Police","Medical", "Firefighter", "Basarnas"],
                datasets :[{
                    label:'Data',
                    data:[
                        <?php
                        $koneksi = mysqli_connect("localhost","root","","oneonetwo");

                        $ekonomi = mysqli_query($koneksi, "select * from advisories where categories='Police'");
                        echo mysqli_num_rows($Police);
                        ?>,

                        <?php
                        $koneksi = mysqli_connect("localhost","root","","oneonetwo");

                        $it = mysqli_query($koneksi, "select * from advisories where categories='Medical'");
                        echo mysqli_num_rows($Medical);
                        ?>,
                        <?php
                        $koneksi = mysqli_connect("localhost","root","","oneonetwo");

                        $sipil = mysqli_query($koneksi, "select * from advisories where categories='Firefighter'");
                        echo mysqli_num_rows($Firefighter);
                        ?>,
                        <?php
                        $koneksi = mysqli_connect("localhost","root","","oneonetwo");

                        $sosiologi = mysqli_query($koneksi, "select * from advisories where categories='Basarnas'");
                        echo mysqli_num_rows($Basarnas);
                        ?>,
                    ],
                    backgroundColor: [
                        'rgba(225, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor:[
                        'rgba(225, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth:1
                }]
            } 
        })
    </script>
</body>
</html>