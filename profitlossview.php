<?php
$months = ['January', 'February', 'March', 'April', 'May'];
$profit = [500, 800, 600, 900, 1200];
$loss = [-300, -400, -200, -500, -800];
 include 'navigationbar.php';
?>
<link rel="stylesheet" href="style.css">

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profit and Loss</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  align-items: center; /* Center content horizontally */
  background-color: #f0f0f0;
}

header {
  background-color: #333;
  color: white;
  text-align: left;
  padding: 1rem;
  width: 800px%;
}

.chart-section {
  background-color: white;
  padding: 2rem;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  margin: 2rem auto;
  max-width: 1200px;
}

    </style>
</head>
<body>
  <header>
    <h1>Profit and Loss</h1>
  </header>
  <section class="chart-section">
    <canvas id="profitLossChart"></canvas>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const profitLossChart = new Chart(document.getElementById('profitLossChart'), {
      type: 'bar',
      data: {
        labels: <?php echo json_encode($months); ?>,
        datasets: [
          {
            label: 'Profit',
            data: <?php echo json_encode($profit); ?>,
            backgroundColor: 'rgba(75, 192, 192, 0.6)',
          },
          {
            label: 'Loss',
            data: <?php echo json_encode($loss); ?>,
            backgroundColor: 'rgba(255, 99, 132, 0.6)',
          },
        ],
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
    });
  </script>
 
</body>

</html> -->
<div class="main">

<header>
<br>
    <h3>Profit and Loss</h3>
  </header>
  <br>
  <section class="chart-section">
    <canvas id="profitLossChart"></canvas>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const profitLossChart = new Chart(document.getElementById('profitLossChart'), {
      type: 'bar',
      data: {
        labels: <?php echo json_encode($months); ?>,
        datasets: [
          {
            label: 'Profit',
            data: <?php echo json_encode($profit); ?>,
            backgroundColor: 'rgba(75, 192, 192, 0.6)',
          },
          {
            label: 'Loss',
            data: <?php echo json_encode($loss); ?>,
            backgroundColor: 'rgba(255, 99, 132, 0.6)',
          },
        ],
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
    });
  </script>
</div>
