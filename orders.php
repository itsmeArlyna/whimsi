<?php
include_once('connection.php');

$query = "SELECT * FROM orders";
$result = $db->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .shop-name {
            font-family: "Poppins", sans-serif;
            font-size: 36px;
            font-weight: bold;
            color: #333;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .container {
            margin-top: 50px;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6;
        }

        .table-bordered {
            border: 2px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 2px solid #dee2e6;
        }
    </style>
</head>
<body>
<nav class="navbar bg-success mb-3">
        <div class="container-fluid ">
            <span class="navbar-brand  mb-0 h1  text-light shop-name">WHIMSI SHAKE</span>
        </div>
    </nav>
    <div class="container">
        <h1 class="text-center mb-4">Orders</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-success">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>"; 
                        echo "<td>".$row['name']."</td>"; 
                        echo "<td>$".$row['price']."</td>"; 
                        echo "<td>".$row['timestamp']."</td>"; 
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
