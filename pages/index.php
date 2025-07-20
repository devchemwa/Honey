<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esambo3 Honey</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="home-page">
        <style>
            body {
                background-color: goldenrod;
            }

            .home-page {
                width: 100%;
                height: 100%;
            }

            .navbar,
            .main,
            .intro {
                display: flex;
                margin: 0 auto;
            }

            .nav,
            .carousel,
            .text {
                float: right;
                margin: 0 auto;
                width: 50%;
            }

            .nav-link {
                text-decoration: none;
                font-size: 2rem;
                color: black;
            }

            .nav-link:hover {
                color: yellow;
            }

            .carousel-item img {
                border-radius: 30px;
            }

            .text {
                margin-top: 40px;
            }

            .text .card {
                background-color: darkslateblue;
                color: #fff;
                border: 3px solid yellow;
                border-radius: 30px;
            }
        </style>
        <div class="navbar">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">PRODUCTS</a>
                </li>
                <li class="nav-item">
                    <a href="profile.php" class="nav-link">PROFILE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Pure-Honey.webp" class="d-block w-100" alt="Pure Honey">
                    </div>
                    <div class="carousel-item">
                        <img src="Honey.jpg" class="d-block w-100" alt="Pure Honey">
                    </div>
                    <div class="carousel-item">
                        <img src="Honey3.jpg" class="d-block w-100" alt="Pure Honey">
                    </div>
                </div>
            </div>
        </div>
        <div class="intro">
            <div class="text">
                <div class="card">
                    <div class="card-header">
                        Esambo3 Honey
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Honey Specialists</h5>
                        <p class="card-text">With 10+ years experience in bee farming</p>
                        <a href="products.php" class="btn btn-primary">Buy Honey</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <style>
                .footer {
                    display: flex;
                    width: 100%;
                    margin-top: 50px;
                }

                footer {
                    float: right;
                    margin: 0 auto;
                    width: 50%;
                }
            </style>
            <footer>
                <div class="card text-center">
                    <div class="card-header">
                        ESAMBO3 HONEY
                    </div>
                    <div class="card-body">
                        Quality, Affordable, Pure Honey
                    </div>
                    <div class="card-footer text-body-secondary">
                        2025
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK"
        crossorigin="anonymous"></script>
</body>

</html>