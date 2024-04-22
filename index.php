<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WHIMSI SHAKE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

        * {
            padding: 0;
            margin: 0;
            font-family: "Poppins", sans-serif;
        }

        .shop-name {
            font-family: "Poppins", sans-serif;
            font-size: 36px;
            font-weight: bold;
            color: #333;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        img {
            width: 15rem;
            height: 15rem;
        }

        .card {
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
            transition: calc(0.2s);
        }

        .card:hover {
            transform: scale(1.05);
        }

        .main-card {
            box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
            border-radius: 1%;
        }

        .col-6 {
            justify-content: center;
            text-align: center;
        }

        input {
            opacity: 0;
            cursor: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-success mb-3">
        <div class="container-fluid ">
            <span class="navbar-brand  mb-0 h1  text-light shop-name">WHIMSI SHAKE</span>
        </div>
    </nav>
    <div class="row  text-center pt-2">
        <div class="col-6 main-card">
            <div class="row col-12">
                <h1>Shakes</h1>
            </div>
            <div class="row p-5">
                <div class="col-6 justify-content-center">
                    <div class="card mb-3 justify-content-center">
                        <div class="row col-12 justify-content-center">
                            <img src="img/mango.webp" alt="">
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Cozy Mango</h5>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center d-flex">
                                    <div class="col-6">
                                        <h6>$ 70.00</h6>
                                    </div>
                                    <div class="col-6">
                                        <form method="post" action="insert.php">
                                            <input type="hidden" name="item_name" value="Cozy Mango">
                                            <input type="hidden" name="item_price" value="70.00">
                                            <button type="submit" class="btn btn-success" name="buy_now">Buy
                                                now</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3">
                        <div class="row col-12 justify-content-center">
                            <img src="img/strawberry.png" alt="">
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Sunlit Strawberry Sip</h5>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center d-flex">
                                    <div class="col-6">
                                        <h6>$ 75.00</h6>
                                    </div>
                                    <div class="col-6">
                                        <form method="post" action="insert.php">
                                            <input type="hidden" name="item_name" value="Sunlit Strawberry Sip">
                                            <input type="hidden" name="item_price" value="75.00">
                                            <button type="submit" class="btn btn-success" name="buy_now">Buy
                                                now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3">
                        <div class="row col-12 justify-content-center">
                            <img src="img/chocolate.png" alt="">
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Rustic Chocolate</h5>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center d-flex">
                                    <div class="col-6">
                                        <h6>$ 80.00</h6>
                                    </div>
                                    <div class="col-6">
                                        <form method="post" action="insert.php">
                                            <input type="hidden" name="item_name" value="Rustic Chocolate">
                                            <input type="hidden" name="item_price" value="80.00">
                                            <button type="submit" class="btn btn-success" name="buy_now">Buy
                                                now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3">
                        <div class="row col-12 justify-content-center">
                            <img src="img/avocado.webp" alt="">
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Meawdow Marvel Avocado</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center d-flex">
                                <div class="col-6">
                                    <h6>$ 85.00</h6>
                                </div>
                                <div class="col-6">
                                    <form method="post" action="insert.php">
                                        <input type="hidden" name="item_name" value="Meawdow Marvel Avocado">
                                        <input type="hidden" name="item_price" value="85.00">
                                        <button type="submit" class="btn btn-success" name="buy_now">Buy
                                            now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 main-card">
            <div class="row col-12">
                <h1>Snacks</h1>
            </div>
            <div class="row p-5">
                <div class="col-6 justify-content-center">
                    <div class="card mb-3 justify-content-center">
                        <div class="row col-12 justify-content-center">
                            <img src="img/burger.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Bersek Burger</h5>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center d-flex">
                                    <div class="col-6">
                                        <h6>$ 90.00</h6>
                                    </div>
                                    <div class="col-6">
                                        <form method="post" action="insert.php">
                                            <input type="hidden" name="item_name" value="Bersek Burger">
                                            <input type="hidden" name="item_price" value="90.00">
                                            <button type="submit" class="btn btn-success" name="buy_now">Buy
                                                now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3">
                        <div class="row col-12 justify-content-center">
                            <img src="img/sandwich.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Sandwich</h5>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center d-flex">
                                    <div class="col-6">
                                        <h6>$ 85.00</h6>
                                    </div>
                                    <div class="col-6">
                                        <form method="post" action="insert.php">
                                            <input type="hidden" name="item_name" value="Sandwich">
                                            <input type="hidden" name="item_price" value="85.00">
                                            <button type="submit" class="btn btn-success" name="buy_now">Buy
                                                now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3">
                        <div class="row col-12 justify-content-center">
                            <img src="img/nachos.webp" alt="">
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Nachos</h5>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center d-flex">
                                    <div class="col-6">
                                        <h6>$ 75.00</h6>
                                    </div>
                                    <div class="col-6">
                                        <form method="post" action="insert.php">
                                            <input type="hidden" name="item_name" value="Nachos">
                                            <input type="hidden" name="item_price" value="75.00">
                                            <button type="submit" class="btn btn-success" name="buy_now">Buy
                                                now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3">
                        <img src="img/pancake.avif" alt="">
                        <div class="card-body">
                            <div class="card-title">
                                <h5>Pancake</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center d-flex">
                                <div class="col-6">
                                    <h6>$ 70.00</h6>
                                </div>
                                <div class="col-6">
                                    <form method="post" action="insert.php">
                                        <input type="hidden" name="item_name" value="Pancake">
                                        <input type="hidden" name="item_price" value="75.00">
                                        <button type="submit" class="btn btn-success" name="buy_now">Buy
                                            now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>