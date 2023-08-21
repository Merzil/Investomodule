<!-- <!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .table-container {
            width: 80%;
            max-width: 800px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
            background-color: powderblue;
            padding: 20px;
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: white;
        }
        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <?php

        // Dummy investment data for the individual
        $investments = array(
            array("Company A", "Stocks", "$5000"),
            array("Company B", "Bonds", "$3000"),
            array("Company C", "Real Estate", "$8000"),
            array("Company D", "Mutual Funds", "$7000"),
        );

        echo "<h2>Investment Details</h2>";
        echo "<table>";
        echo "<tr><th>Company</th><th>Asset Type</th><th>Amount</th></tr>";
        foreach ($investments as $investment) {
            echo "<tr><td>{$investment[0]}</td><td>{$investment[1]}</td><td>{$investment[2]}</td></tr>";
        }
        echo "</table>";
        ?>
    </div>
</body>
</html> -->


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

</head>
<body>
<div class="header">
  <a href="#default" class="logo">Investo Investment</a>
  
</div>
    <div class="sidenav">
        <a href="investment.php">Investment</a>
        <a href="profitlossview.php">Profit and Loss</a>
        <a href="revenue.php">Revenue</a>
        <a href="logout.php">Logout</a>
      </div>

<div class="main">
    <br>
<div class="table-container">
        <?php

        // Dummy investment data for the individual
        $investments = array(
            array("Company A", "Stocks", "$5000"),
            array("Company B", "Bonds", "$3000"),
            array("Company C", "Real Estate", "$8000"),
            array("Company D", "Mutual Funds", "$7000"),
        );

        echo "<h2>Investment Details</h2>";
        echo "<table>";
        echo "<tr><th>Company</th><th>Asset Type</th><th>Amount</th></tr>";
        foreach ($investments as $investment) {
            echo "<tr><td>{$investment[0]}</td><td>{$investment[1]}</td><td>{$investment[2]}</td></tr>";
        }
        echo "</table>";
        ?>
    </div>
</div>
   
</body>
</html> 