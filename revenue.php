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
        .dashboard {
            width: 80%;
            max-width: 800px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
            padding: 20px;
            border-radius: 8px;
        }
        .revenue {
            font-size: 24px;
            font-weight: bold;
            color: darkblue;
        }
        .revenue-label {
            font-size: 18px;
            color: lightpink;
            margin-top: 10px;
        }
        .revenue-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <?php
        $revenue = 13500.50; // Example revenue amount

        echo "<div class='revenue-container'>";
        echo "<div class='revenue'>\$" . number_format($revenue, 2) . "</div>";
        echo "<div class='revenue-label'>Total Revenue</div>";
        echo "</div>";
        ?>
    </div>
</body>
</html> -->
<?php
include 'navigationbar.php';
?>
<div class="main">
<br>
    <h3>Revenue</h3>
  </header>
  <br>
    <div class="dashboard">
        <?php
        $revenue = 13500.50; // Example revenue amount

        echo "<div class='revenue-container'>";
        echo "<div class='revenue'>\$" . number_format($revenue, 2) . "</div>";
        echo "<div class='revenue-label'>Total Revenue</div>";
        echo "</div>";
        ?>
    </div></div>