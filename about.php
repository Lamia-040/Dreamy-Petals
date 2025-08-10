<?php
@include 'config.php';
session_start();

// Get user_id if logged in, but don't force login
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">
        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>
        <div class="content">
            <h3>why choose us?</h3>
            <p>We ensure fresh, elegant flowers with reliable service to make every occasion memorable.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>
    </div>

    <div class="flex">
        <div class="content">
            <h3>what we provide?</h3>
            <p>Premium bouquets, custom floral designs, and timely delivery for all your special moments.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>
        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>
    </div>

    <div class="flex">
        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>
        <div class="content">
            <h3>who we are?</h3>
            <p>A passionate floral team crafting beauty and emotions into every petal.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>
    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">
        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>The pink rose symbolizes grace and admiration. It's the perfect bloom to express gentle affection and love.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Cottage roses bring a vintage charm with their lush petals and romantic essence—timeless and elegant.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mona</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Lavender is known for its calming scent and soft beauty, symbolizing serenity and devotion.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Asta</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>Bright and cheerful, the yellow tulip represents sunshine, hope, and happy thoughts.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Selena Lisa</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>The red tulip is a bold expression of true love and passion—simple, elegant, and heartfelt.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Leomord Hylos</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>A charming mix of soft pink flowers, this bouquet radiates love, sweetness, and warmth.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Lily Kagura</h3>
        </div>
    </div>

</section>

<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>
</body>
</html>
