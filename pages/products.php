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
    <div class="products-page">
        <style>
            body {
                background-color: goldenrod;
            }

            .products-page {
                width: 100%;
                height: 100%;
            }

            .navbar,
            .main{
                display: flex;
                margin: 0 auto;
            }

            .nav{
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

            .col {
                width: 18rem;
                float: right;
                margin: 0 auto;
            }

            .row {
                margin-top: 40px;
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
                    <a href="contact.php" class="nav-link">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="container text-center">
                <div class="row row-cols-4">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="Pure-Honey.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title <sup><span
                                            class="badge text-bg-secondary">New</span></sup> </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card’s content.
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="Pure-Honey.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card’s content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="Pure-Honey.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card’s content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <style>
                .footer{
                    display: flex;
                    width: 100%;
                    margin-top: 350px;
                }
                footer{
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