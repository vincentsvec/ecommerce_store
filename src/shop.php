<?php
    include("database.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="static/css/style.css">

    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a class="active" href="home()">Home</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="/shop.php">Shop</a></li>
            <li><a href="home()">Sponsors</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <section class="shoes-section">
        <div class="banner center">
            <h1>Shoes</h1>
        </div>
        <div class="row1 center">

            <!-- generates list of shoes -->

            <?php
            while ($shoe = mysqli_fetch_array($all_shoes)):
            ?>
                <div class="col4">
                    <div class='product-card'>
                        <img src='assets/product-images/<?= $shoe['image_name'];?>.jpg'></img>
                        <div class='description'>
                            <h3><?= $shoe['name'];?></h3>
                            <p><?= $shoe['price'];?>$</p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
             <!-- generates list of shoes -->
            
        </div>
    </section>
    <section class="accessories-section">
        <div class="banner center">
            <h1>Accessories</h1>
        </div>
        <div class="row1 center">
                
            <!-- generates list of accessories -->
                
            <?php
            while ($accessory = mysqli_fetch_array($all_accessories)):
            ?>
            <div class="col2 center">
                <div class='product-card'>
                    <img src='assets/product-images/<?= $accessory['image_name'];?>.jpg'></img>
                    <div class='description'>
                        <h3><?= $accessory['name'];?></h3>
                        <p><?= $accessory['price'];?>$</p>
                    </div>
                </div>
            </div>
            
            <?php endwhile; ?>

            <!-- generates list of accessories -->

        </div>
    </section>
    <section class="contact" id="contact">
        <div class="contact-container">
            <div class="col2 center">
                <h2>Contact Info</h2>
                <p>Address Avenue 234</p>
                <p>City Location</p>
                <p>State Location</p>
            </div>
            <div class="col2 center">
                <p><a href="/">Write Us</a></p>
                <p>Phone: 0900 987 123</p>
                <p>Mail: store.mail@gmail.com</p>
            </div>
        </div>
        <p id="created-by">Created By: <a href="https://github.com/vincentsvec">Vincent Svec</a></p>
    </section>

    <script type="text/javascript">
        function home() {
            window.location.href("/index.php");
            alert("Home")
        }
    </script>

</body>
</html>