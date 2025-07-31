<!DOCTYPE HTML>
<html lang="en-uk">

<head>
    <title>My Account Details</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- Makes social link icons appear-->

    <script src="ConsoleVerse.js"></script>
    <link rel="stylesheet" type="text/css" href="ConsoleVerse.css" />

    <link rel="icon" type="image/x-icon" href="Favicon/Logo.png">
    <?php
        include "connection.php";
        session_start();
    ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <img class="navbar-brand" src="Logo/Logo.png" alt="Company Logo" width="3%" height="3%">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Support.php">Support</a>
                    </li>
                    <?php
                        if(!isset($_SESSION["fullname"])){
                            echo "<li class='nav-item'>";
                            echo "<a class='nav-link' href='SignIn.php'>Sign In</a>";
                            echo "</li>";
                        }
                        else {
                            echo "<li class='nav-item'>";
                            echo "<a class='nav-link' href='SignIn.php'>Account: " .$_SESSION["fullname"]."</a>";
                            echo "</li>";
                        }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="Register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link mx-5 consolelinks" href="PlayStation.php">PLAYSTATION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-5 consolelinks" href="Xbox.php">XBOX</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-5 consolelinks" href="Nintendo.php">NINTENDO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-5 consolelinks" href="Sega.php">SEGA</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-3">
        <div class="row justify-content-between align-items-center">
             <h1 class="mb-0"><b>My Account</b></h1>
        </div>
    </div>
    
    <br><br>

    <?php
        $acc_id = $_SESSION['acc_id'];
        $sql = "SELECT * FROM accounts WHERE acc_id = '$acc_id'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<div class='container-fluid'>";
            echo "<div class='row justify-content-center'>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='col-md-4'>";
                echo "<div class='card mb-3'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>".$row["fullname"]."</h5>";
                echo "<p class='card-text'>ID: ".$row["acc_id"]."<br>"."Access Level: ".$row["level"]."<br>"."Email: ".$row["email"]."<br>"."Phone Number: ".$row["phone_number"]."</p>";
                echo "<div class='card-buttons d-flex justify-content-end'>";
                echo "<a href='ModifyMyAccountFORM.php?acc_id=".$row["acc_id"]."' class='btn btn-warning mx-2'>Edit Account</a>";
                echo "<a href='DeleteAccount_Script.php?acc_id=".$row["acc_id"]."' class='btn btn-danger'>Delete Account</a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
            echo "</div>";
        }
        else {
            echo "<div class='container-fluid'>";
            echo "<div class='row justify-content-center'>";
            echo "<div class='col-md-6'>";
            echo "<div class='card text-center'>";
            echo "<div class='card-body'>";
            echo "<h4 class='card-title'>Your Account has gone missing!</h4>";
            echo "<p style='font-size: 5em;'>😢</p>";
            echo "<p class='card-text'>No Accounts Found, You May be Facing an Error, Please Register Again!<br>If not, Please Contact Support!</p>";
            echo "<a href='Register.php' class='btn btn-outline-primary mt-3'>Register</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    ?>

<br><br>

</body>

<footer class="text-center text-lg-start bg-dark text-white">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

        <div class="me-5 d-none d-lg-block">
            <span>Follow Us on our Social Medias!</span>
        </div>

        <div>
            <a href="https://www.facebook.com" class="me-4 link-secondary" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com" class="me-4 link-secondary" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com" class="me-4 link-secondary" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://plus.google.com" class="me-4 link-secondary" target="_blank">
                <i class="fab fa-google"></i>
            </a>
            <a href="https://www.linkedin.com" class="me-4 link-secondary" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://github.com" class="me-4 link-secondary" target="_blank">
                <i class="fab fa-github"></i>
            </a>
        </div>
    </section>

    <section class="p-3">
        <div class="container text-center text-md-start">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-3">
                        <i class="fas fa-gem me-2 text-secondary"></i>ConsoleVerse
                    </h6>
                    <p>
                        We're passionate about gaming and dedicated to bringing you the best in gaming experiences.
                        Explore our collection of modern and classic consoles, games, and accessories.
                        Level up your gaming journey with ConsoleVerse!
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-3">
                        Games
                    </h6>
                    <p>
                        <a href="https://www.playstation.com/en-gb/" class="text-reset">PlayStation</a>
                    </p>
                    <p>
                        <a href="https://www.xbox.com/en-GB/microsoft-store" class="text-reset">Xbox</a>
                    </p>
                    <p>
                        <a href="https://www.nintendo.co.uk/Nintendo-eShop/Nintendo-eShop-1806894.html" class="text-reset">Nintendo</a>
                    </p>
                    <p>
                        <a href="https://shop.sega.com" class="text-reset">Sega</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-3">
                        Useful links
                    </h6>
                    <p>
                        <a href="TermsandConditions.php" class="text-reset">Terms and Conditions</a>
                    </p>
                    <p>
                        <a href="PrivacyPolicy.php" class="text-reset">Privacy Policy</a>
                    </p>
                    <p>
                        <a href="Support.php" class="text-reset">Support</a>
                    </p>
                    <p>
                        <a href="FAQ.php" class="text-reset">FAQ</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-3">Contact Us</h6>
                    <p><i class="fas fa-home me-2 text-secondary"></i> Nottingham, UK</p>
                    <p>
                        <i class="fas fa-envelope me-2 text-secondary"></i>
                        info@consoleverse.co.uk
                    </p>
                    <p><i class="fas fa-phone me-2 text-secondary"></i> + 44 01 234 567 89</p>
                    <p><i class="fas fa-print me-2 text-secondary"></i> + 44 01 234 567 89</p>
                </div>
            </div>
        </div>
    </section>

    <div class="text-center p-3" bg-dark>
        © 2024 Copyright:
        <a class="text-reset fw-bold" href="index.php"> ConsoleVerse.</a>
        All Rights Reserved.
    </div>
</footer>

</html>