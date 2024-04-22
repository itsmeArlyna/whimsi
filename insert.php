<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<?php
include_once('connection.php');

if(isset($_POST['buy_now'])){
    $itemName = $_POST["item_name"]; 
    $itemPrice = $_POST["item_price"];

    echo "<script>
            function showSuccessAlert() {
                Swal.fire({
                    icon: 'success',
                    title: 'Order Placed Successfully!',
                    showConfirmButton: false,
                    timer: 1500
                });
                setTimeout(function(){
                    window.location.href = 'index.php'; 
                }, 2000);
            }
            
            function showConfirmation() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You are about to place an order.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, place order!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        showSuccessAlert();
                    } else {
                        window.location.href = 'index.php';
                    }
                });
            }

            window.onload = showConfirmation;
          </script>";

    $sql = "INSERT INTO orders (name, price) VALUES ('$itemName', '$itemPrice')";
    if ($db->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

    $db->close();
}

?>

</body>
</html>
