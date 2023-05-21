<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="catalog.css">
</head>

<body>
    <header>
        <a href="#" class="logo">
            <img src="img/icon.png" alt="icon">
        </a>
        <!-- menu icon -->
        <i class='bx bx-menu' id="menu-icon"></i>
        <!-- links -->
        <ul class="navbar">
            <li><a href="../item2/item2.php">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#product">Product</a></li>
            <li><a href="#customer">customer</a></li>
        </ul>
        <!-- icon -->
        <div class="header-icon">
            <i class='bx bx-search' id="search-icon"></i>
            <i class='bx bx-cart'></i>
            <a href="../login1/Login1.php"><i class='bx bx-user'></a></i>
        </div>
        <!-- search box -->
        <div class="search-box">
            <input type="search" name="" id="" placeholder="Search here...">
        </div>
    </header>
    <section class="home" id="home">
        <div class="home-text">
        </div>
        <div class="home-img">
            <img src="" alt="">
        </div>
    </section>

    <!-- product -->
    <section class="product" id="product">
        <div class="heading">
            <h2>Our product</h2>
        </div>
        <br><br>
        <!-- container -->
        <div class="product-container">
            <div class="box">
                <img src="img/ip12.png" alt="iphone">
                <h3> Iphone 12 </h3>
                <div class="content">
                    <span>Rp. 11.999.000</span>
                    <a href="#">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/ip13.png" alt="iphone">
                <h3> Iphone 13 </h3>
                <div class="content">
                    <span>Rp.15.199.000</span>
                    <a href="#">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/ip14.png" alt="iphone">
                <h3> Iphone 14 </h3>
                <div class="content">
                    <span>Rp.15.999.000</span>
                    <a href="#">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/samsungs23.png" alt="samsung">
                <h3> Samsung s23 Ultra</h3>
                <div class="content">
                    <span>Rp.21.999.000</span>
                    <a href="#">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/zfold.png" alt="samsung">
                <h3> Samsung Galaxy Z fold 4</h3>
                <div class="content">
                    <span>Rp.24.999.000</span>
                    <a href="#">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/minot12.png" alt="xiamo">
                <h3> Xiaomi Redmi note 12 </h3>
                <div class="content">
                    <span>Rp.4.599.000</span>
                    <a href="#">add to cart</a>
                </div>
            </div>
        </div>
    </section>



    <script src="main1.js"></script>

</body>

</html>