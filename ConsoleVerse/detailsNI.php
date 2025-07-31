<!DOCTYPE HTML>
<html lang="en-uk">

<head>
    <title>Product Details</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- Makes social link icons appear-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> <!--Bootstrap Icons-->

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
    <?php
        $prod_id = $_GET["prod_id"];
        $sql = "SELECT * FROM products WHERE brand = 'Nintendo' AND prod_id='".$prod_id."'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class='row'>
                        <div class='col-md-6'>
                            <img src='".$row["img"]."' alt='".$row["brand"].$row["model"]."' class='img-fluid card-img'>
                        </div>
                        <div class='col-md-6'>
                            <div class='card'>
                                <div class='card-body'>
                                    <h1>".$row["brand"]." ".$row["model"]."</h1>
                                    <div class='d-flex justify-content-center small text-warning mb-2'>";
                                        $stars = 0;
                                        while ($stars < $row["rating"]) {
                                            echo "<div class='bi-star-fill'></div>";
                                            $stars++;
                                        }
                                    echo"</div>
                                    <h5>Price: £".$row["price"]."</h5>
                                    <p>".$row["short_desc"]."</p>
                                    <h5>About this item: <br></h5> <p>".$row["descrip"]."</p>
                                    <div class='d-flex justify-content-between align-items-center'>
                                        <div>
                                            <p style='font-weight: bold; color: green;'>Available: ".$row['stock']."</p>
                                        </div>
                                        <div>
                                            <a class='btn btn-success' href='AddtoBasket.php?prod_id=".$row["prod_id"]."'>Add to Basket</a>
                                            <a class='btn btn-danger' href='BuyNow.php?prod_id=".$row["prod_id"]."'>Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='row mt-4'>
                        <div class='col-sm-12'>
                            <h2 class='fw-bold'>Specifications:</h2>
                            <div class='table-responsive'>
                                <table class='table table-bordered'>
                                    <tbody>
                                        <tr>
                                            <th scope='row' class='w-25'>CPU</th>
                                            <td>".$row['cpu']."</td>
                                        </tr>
                                        <tr>
                                            <th scope='row' class='w-25'>GPU</th>
                                            <td>".$row['gpu']."</td>
                                        </tr>
                                        <tr>
                                            <th scope='row' class='w-25'>Memory</th>
                                            <td>".$row['memory']."</td>
                                        </tr>
                                        <tr>
                                            <th scope='row' class='w-25'>Storage</th>
                                            <td>".$row['storage']."</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br><br>";
            }
        }
        else {
            echo "No results found for your search!";
        }
        ?>
    </div>

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