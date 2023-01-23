<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>portfolio</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="/sample project/style.css">

    </head>
    <body>
        <div class="container">
            <?php @include 'header.php'; ?>
            <section class="portfolio">
                <h1 class="heading">our portfolio </h1>
                <div class="portfolio-container">
                    <a href="sample project/images/port-img-1.jpg" class="box">
                        <div class="image">
                            <image src="images/port-img-1.jpg" alt="">
                        </div>
                        <h3>Wedding Ceremony</h3>
                    </a>
                    <a href="images/port-img-2.jpg" class="box">
                        <div class="image">
                            <image src="images/port-img-2.jpg" alt="">
                        </div>
                        <h3>Wedding Ceremony</h3>
                    </a>
                    <a href="images/port-img-3.jpg" class="box">
                        <div class="image">
                            <image src="images/port-img-3.jpg" alt="">
                        </div>
                        <h3>Wedding Ceremony</h3>
                    </a>
                    <a href="images/port-img-4.jpg" class="box">
                        <div class="image">
                            <image src="images/port-img-4.jpg" alt="">
                        </div>
                        <h3>Wedding Ceremony</h3>
                    </a>
                    
                    <a href="images/port-img-5.jpg" class="box">
                        <div class="image">
                            <image src="images/port-img-5.jpg" alt="">
                        </div>
                        <h3>Wedding Ceremony</h3>
                    </a>
                    <a href="images/port-img-6.jpg" class="box">
                        <div class="image">
                            <image src="images/port-img-6.jpg" alt="">
                        </div>
                        <h3>Wedding Ceremony</h3>
                    </a>
                    </div>
            </section>
            <?php @include 'footer.php';?>
        </div>
    </body>
</html>