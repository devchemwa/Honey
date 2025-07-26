<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esambo3 Honey</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        /* General Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: darkgoldenrod;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Login Container */
        .login-container {
            width: 100%;
            max-width: 400px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border 0.3s ease;
        }

        .form-group input:focus {
            border-color: #4a90e2;
            outline: none;
            box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.2);
        }

        /* Button */
        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #3a7bc8;
        }

        /* Additional Options */
        .additional-options {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
        }

        .additional-options a {
            color: #4a90e2;
            text-decoration: none;
        }

        .additional-options a:hover {
            text-decoration: underline;
        }

        /* Responsive Adjustments */
        @media (max-width: 480px) {
            .login-container {
                padding: 20px;
            }

            .form-group input {
                padding: 10px 12px;
            }

            .login-btn {
                padding: 10px;
            }
        }

        @media (max-width: 350px) {
            .login-container {
                padding: 15px;
            }

            .login-container h2 {
                font-size: 20px;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="register-page">
        <div class="navbar">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    ESAMBO3 HONEY
                </li>
            </ul>
        </div>
        <div class="register-form">
            <div class="login-container">
                <h2>Register</h2>
                <form method = "post" action="register.php">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="login-btn" name="register" id="register">Register</button>
                    <div class="additional-options">
                        <a href="login.php">Already Registered?</a>
                        <span> • </span>
                        <a href="#">Create account</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div id="customAlert" style="display:none; position:fixed; top:20px; left:50%; transform:translateX(-50%); 
    background:darkyellow; color:black; padding:15px; border-radius:5px; z-index:1000;">

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


$pdo = new PDO("mysql:host=$server;dbname=$database;charset=utf8mb4", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['register'])) {
    $username = htmlspecialchars($_POST["username"]);
    $_SESSION["username"] = $username;
    $email = htmlspecialchars($_POST["email"]);
    $_SESSION["email"] = $email;
    $password = password_hash(htmlspecialchars($_POST["password"]), PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("insert into users(username,email,password) values(:username,:email,:password);");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    echo "    <script>
        function showTemporaryAlert(message, duration = 3000) {
            const alertBox = document.getElementById('customAlert');
            alertBox.textContent = message;
            alertBox.style.display = 'block';

            setTimeout(() => {
                alertBox.style.display = 'none';
            }, duration);
        }

        // Usage:
        showTemporaryAlert('Registation successful! Redirecting...', 2000);
        window.location.href = 'http://127.0.0.1/Honey/pages/index.php'; 
    </script>";

}


?>