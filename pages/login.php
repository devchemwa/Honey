<?php session_start(); ?>
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
    <div class="login-page">
        <style>
            body {
                background-color: goldenrod;
            }

            .login-page {
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
                    <a href="register.php" class="nav-link">REGISTER</a>
                </li>
            </ul>
        </div>
        <div class="login-form">
            <?php
            class User
            {
                protected $userID;
                protected $username;
                protected $password;
                protected $email;
                public function User($username, $password, $email)
                {
                    $this->username = $username;
                    $this->password = $password;
                    $this->email = $email;
                }
                public function UserSession()
                {
                    $_SESSION['username'] = $this->username;
                    $_SESSION['password'] = $this->password;
                    $_SESSION['email'] = $this->email;
                }
            }

            ?>
            <style>
                .login-form {
                    display: flex;
                    width: 100%;
                }

                form {
                    width: 50%;
                    margin: 0 auto;
                }
            </style>
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="John Doe">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Login" id="login" name="login">
                </div>
            </form>
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
<?php
include 'config.php';
$conn = new mysqli($server, $user, $pass, $database);
if ($conn->connect_error) {
    echo "<script>alert('connection error!);</script>";
} else {
    if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $email = htmlspecialchars($_POST['email']);
        $sql = "insert into users(username,password,email) values('$username','$password','$email')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo "<script>alert('Registered Successfully');</script>";
            mysqli_commit($conn);
        } else {
            echo "<script>alert('Error, Try Again!');</script>";
        }
    }
}

?>