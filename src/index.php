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

    <title>Online Store</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="/index.php">Home</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="/shop.php">Shop</a></li>
            <li><a href="#sponsors">Sponsors</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <section class="intro-banner">
        <div class="col2">
            <h1>Find your perfect shoe.</h1>
            <p>Every shoe is designed to fit your preferences perfectly. Every shoe is handchecked by our proffesionals
                to ensure the best quality. Our team of proffesional designers is the best.</p>
            <button class="btn-primary">Explore</button>
        </div>
        <div class="col2">
            <img src="assets/general-images/nike-shoes.png"></img>
        </div>
    </section>
    <section class="favorite-products">
        <h2>Favorite products</h2>
        <div class='row1'>
        
        <!-- generates favorite products -->

        <?php
            while ($shoe = mysqli_fetch_array($top_shoes)):
        ?>
            <div class='col3'>
                <div class='product-card'>
                    <img src='assets/product-images/<?= $shoe['image_name'];?>.jpg'></img>
                    <div class='description'>
                        <h3><?= $shoe['name'];?></h3>
                        <p><?= $shoe['price'];?>$</p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

        <!-- generates favorite products -->
        
        </div>

    </section>

    <!-- generates new product section -->

    <?php
        while ($shoe = mysqli_fetch_assoc($newest_shoe)):
    ?>

    <section class="new-product">
        <div class="col2">
            <h1>Hot Release</h1>
            <p><?= $shoe['description'];?></p>
            <button class="btn-primary">Shop</button>
        </div>
        <div class="col2">
            <img src="assets/general-images/<?= $shoe['image_name'];?>.png"></img>
        </div>
    </section>

    <?php endwhile; ?>

    <!-- generates new product section -->

    <section class="reviews" id="sponsors">
        <div class="row1">
            <div class="col3">
                <div class="review-card">
                    <div class="background"></div>
                    <img src="assets/people-images/person1.jpg"></img>
                    <h3>Person Name</h3>
                    <p>" Totally would recommend "</p>
                </div>
            </div>
            <div class="col3">
                <div class="review-card">
                    <div class="background"></div>
                    <img src="assets/people-images/person2.jpg"></img>
                    <h3>Person Name</h3>
                    <p>" Best store ever "</p>
                </div>
            </div>
            <div class="col3">
                <div class="review-card">
                    <div class="background"></div>
                    <img src="assets/people-images/person3.jpg"></img>
                    <h3>Person Name</h3>
                    <p>" Only using this store "</p>
                </div>
            </div>
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

</body>

</html>