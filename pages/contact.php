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
    <div class="contact-page">
        <style>
            body {
                background-color: goldenrod;
            }

            .contact-page {
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
        <div class="contact-form">
            <style>
                .contact-form {
                    display: flex;
                    width: 100%;
                    margin: 0 auto;
                }

                form {
                    float: right;
                    margin: 0 auto;
                    width: 50%;
                }
            </style>
            <form action="contact.php" method="post">
                <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="John Doe">
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="Message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Send Message">
                </div>
            </form>
        </div>
        <div class="footer">
            <style>
                .footer {
                    display: flex;
                    width: 100%;
                    margin-top: 500px;
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