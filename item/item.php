<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="item.css">
</head>

<body>

    <!-- //navbar// -->

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">GVerse</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../halamandepan/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../item/item.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../contact/contact.php">Contac us</a>
                    </li>
                </ul>
                <div class="button1">
                    <a class="btn btn-outline-secondary" href="../login/Login.php" role="button">Login</a>

                    <a class="btn btn-success" href="../signup/signup.php" role="button">SignUp</a>
                </div>

            </div>
        </div>
    </nav>


    <!-- carousel product list -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/AW.png" class="d-block w-100" alt="AW.png" width="150px" height="450px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/iphone.jpg" class="d-block w-100" alt="iphone.jpg" width="150px" height="450px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/laptop.jpg" class="d-block w-100" alt="laptop.jpg" width="150px" height="450px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- new product -->
    <div class="text1">
        <h2> New Product Must Buy! </h2>
        <hr>
    </div>



    <!-- list item -->
    <div class="cardbox">
        <div class="row row-cols-4">
            <div class="card" style="width: 18rem;">
                <img src="img/asusrog6.jpg" class="card-img-top" alt="asusrog6.jpg">
                <div class="card-body">
                    <h5 class="card-title">Asus Rog phone 6
                    </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="img/blackshark.jpg" class="card-img-top" alt="blackshark">
                <div class="card-body">
                    <h5 class="card-title">Black Shark 5 Pro</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="img/poco.jpg" class="card-img-top" alt="poco.jpg">
                <div class="card-body">
                    <h5 class="card-title">Poco X5 5G</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <div class="cardbox2">
        <div class="row row-cols-4">
            <div class="card" style="width: 18rem;">
                <img src="img/asusrogzg14.jpg" class="card-img-top" alt="asusrogg14">
                <div class="card-body">
                    <h5 class="card-title">Asus Rog Zephyrus G14</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="img/HP OMEN 15.png" class="card-img-top" alt="omen15">
                <div class="card-body">
                    <h5 class="card-title">HP Omen 15</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="img/msigl65.jpg" class="card-img-top" alt="msi">
                <div class="card-body">
                    <h5 class="card-title">MSI GL65</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>


    <div class="cardbox3">
        <div class="row row-cols-4">
            <div class="card" style="width: 18rem;">
                <img src="img/applewatch5.jpg" class="card-img-top" alt="aw5">
                <div class="card-body">
                    <h5 class="card-title">Apple Watch series 5</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="img/applewatc7.jpg" class="card-img-top" alt="aw7">
                <div class="card-body">
                    <h5 class="card-title">Apple Watch series 7</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="img/applewatch8.jpg" class="card-img-top" alt="aw8">
                <div class="card-body">
                    <h5 class="card-title">Apple Watch series 8</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>