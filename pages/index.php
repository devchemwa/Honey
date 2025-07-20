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
                border-radius: 50px;
            }

            .text {
                margin-top: 40px;
            }
        </style>
        <div class="navbar">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PRODUCTS</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">PROFILE</a>
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
                    <div class="card-body">
                        <h4>Welcome TO Esambo3 Honey!</h4>
                        <p>We bring you pure honey from the all-natural beehives of our farm</p>
                    </div>
                </div>
            </div>
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