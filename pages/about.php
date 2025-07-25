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
    <div class="about-page">
        <style>
            body {
                background-color: goldenrod;
            }

            .about-page {
                width: 100%;
                height: 100%;
            }

            .navbar {
                display: flex;
                margin: 0 auto;
            }

            .nav {
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
                    <a class="nav-link" href="about.php">ABOUT</a>
                </li>
            </ul>
        </div>
        <div class="about">
            <style>
                .about {
                    width: 100%;
                    margin: 0 auto;
                }

                .card {
                    width: 50%;
                    margin: 0 auto;
                    margin-top: 40px;
                }
            </style>
            <div class="card">
                <div class="card-header">
                    ABOUT
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet sequi vel dignissimos adipisci
                        autem accusantium. Commodi omnis ad asperiores velit accusamus. Ipsa placeat harum, eos
                        architecto dolor hic eveniet perspiciatis rerum quaerat expedita sint aspernatur vitae
                        voluptatem, molestiae ullam debitis quasi neque saepe, enim ratione ut maxime et. Sit, beatae?
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    MORE FROM ESAMBO3 HONEY
                </div>
                <div class="card-body">
                    <ul>
                        <li>BLOG</li>     | <a href="#">ASALI CHRONICLES</a>
                        <li>GALLERY</li>  | <a href="#">ESAMBO3 FARM GALLERY</a>
                    </ul>
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