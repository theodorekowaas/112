<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report Form</title>
  <style>
    body {
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin-right: 50px;
    }

    h2, h3 {
      text-align: center;
      color: #333;
      font-family: Arial Black, sans-serif;
      font-weight: bold;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-size: 18px;
      font-weight: bold;
      font-family: Arial Black, sans-serif;
      color: #333;
    }

    input[type="text"], select {
      width: calc(100% - 20px);
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      margin-bottom: 20px;
      box-sizing: border-box; /* Include padding and border in width calculation */
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      font-size: 20px;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    /* Flexbox layout for positioning elements */
    .report {
      display: flex;
      justify-content: space-around;
      align-items: flex-start; /* Align items at the top */
      margin-top: 50px;
    }

    .chart {
      flex: 1; /* Allow chart to expand to fill available space */
      margin-top:50px;
      margin-left: 30px;
    }

    /* Adjustments for smaller screens */
    @media (max-width: 768px) {
      .report {
        flex-direction: column; /* Stack elements vertically on smaller screens */
        align-items: center; /* Center align items */
      }
    }
  </style>
</head>
<body>
  <div class="report">
    <div class="chart">
      <h2 >WE KEEP YOU SAVED</h2>
      <div style="width: 700px; height: 700px;">
        <canvas id="grafik"></canvas>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

                $Police = mysqli_query($koneksi, "select * from advisories where categories='Police'");
                echo mysqli_num_rows($Police);
                ?>,

                <?php
                $koneksi = mysqli_connect("localhost","root","","oneonetwo");

                $Medical = mysqli_query($koneksi, "select * from advisories where categories='Medical'");
                echo mysqli_num_rows($Medical);
                ?>,
                <?php
                $koneksi = mysqli_connect("localhost","root","","oneonetwo");

                $Firefighter = mysqli_query($koneksi, "select * from advisories where categories='Firefighter'");
                echo mysqli_num_rows($Firefighter);
                ?>,
                <?php
                $koneksi = mysqli_connect("localhost","root","","oneonetwo");

                $Basarnas = mysqli_query($koneksi, "select * from advisories where categories='Basarnas'");
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
              borderWidth: 1
            }]
          } 
        })
      </script>
    </div>
    <div class="container">
      <h2>❗️❗️REPORT FORM❗️❗️</h2>
      <h3>THIS REPORT WILL BE SUBMITTED TO THE AUTHORITIES</h3>
      <form action="/report/oneonetwo" method="POST">
        @csrf
        <label for="description">EMERGENCY:</label>
        <input type="text" id="description" name="description" placeholder="What's the emergency?">
        
        <label for="location">LOCATION:</label>
        <input type="text" id="location" name="location" placeholder="Location of the Emergency?">

        <label for="categories">CATEGORIES:</label>
        <select id="categories" name="categories">
          <option value="Police">Police</option>
          <option value="Medical">Medical</option>
          <option value="Firefighter">Firefighter</option>
          <option value="Basarnas">Basarnas</option>
          <!-- Add more options as needed -->
        </select>

        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</body>
</html>
        