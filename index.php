<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Shopping Zone</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage.php" method="POST">
                    <div class="card">
                        <img src="Images/samsung.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Samsung Curved LED(55inch)</h5>
                            <p class="card-text">Price: 284900</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Samsung Curved LED(55cm)">
                            <input type="hidden" name="Price" value="284900">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <form action="manage.php" method="POST">
                    <div class="card">
                        <img src="Images/sony_bravia.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sony Bravia LED(55inch)</h5>
                            <p class="card-text">Price: 69490</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Sony Bravia LED(55cm)">
                            <input type="hidden" name="Price" value="69490">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <form action="manage.php" method="POST">
                    <div class="card">
                        <img src="Images/mi_q1.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Mi Q1 LED(55inch)</h5>
                            <p class="card-text">Price: 54999</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Mi Q1 LED(55cm)">
                            <input type="hidden" name="Price" value="54999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage.php" method="POST">
                    <div class="card">
                        <img src="Images/vu.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Vu LED(55inch)</h5>
                            <p class="card-text">Price: 39999</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Vu LED(55cm)">
                            <input type="hidden" name="Price" value="39999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage.php" method="POST">
                    <div class="card">
                        <img src="Images/realme.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Realme LED(55inch)</h5>
                            <p class="card-text">Price: 49999</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Realme LED(55cm)">
                            <input type="hidden" name="Price" value="49999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage.php" method="POST">
                    <div class="card">
                        <img src="Images/panasonic.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Panasonic LCD(40inch)</h5>
                            <p class="card-text">Price: 17990</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Panasonic LCD(40inch)">
                            <input type="hidden" name="Price" value="17990">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage.php" method="POST">
                    <div class="card">
                        <img src="Images/sharp.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sharp LED(32inch)</h5>
                            <p class="card-text">Price: 10990</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Sharp LED(32inch)">
                            <input type="hidden" name="Price" value="10990">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage.php" method="POST">
                    <div class="card">
                        <img src="Images/lg.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">LG LED(43inch)</h5>
                            <p class="card-text">Price: 29999</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="LG LED(43inch)">
                            <input type="hidden" name="Price" value="29999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage.php" method="POST">
                    <div class="card">
                        <img src="Images/videocon.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Videocon LED(40inch)</h5>
                            <p class="card-text">Price: 24999</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Videocon LED(40inch)">
                            <input type="hidden" name="Price" value="24999">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage.php" method="POST">
                    <div class="card">
                        <img src="Images/Harier LED(32inch).jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Harier LED(32inch)</h5>
                            <p class="card-text">Price: 14990</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Harier LED(32inch)">
                            <input type="hidden" name="Price" value="14990">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>