<!DOCTYPE HTML>
<html lang="en-uk">

<head>
    <title>ConsoleVerse</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- Makes social link icons appear-->

    <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" /> <!--Cookies-->

    <script src="ConsoleVerse.js"></script>
    <link rel="stylesheet" type="text/css" href="ConsoleVerse.css" />

    <link rel="icon" type="image/x-icon" href="Favicon/Logo.png">

    <?php
        include "connection.php";
        session_start();
    ?>
</head>

<body>
    <div class="alert text-center cookiealert" id="Cookies" role="alert">
        <b>Do you like cookies?</b> &#x1F36A; ConsoleVerse uses cookies to ensure you get the best experience on our website
        <button type="button" class="btn btn-outline-light btn-sm" onclick="removeEntireElement('Cookies')">
            I agree
        </button>
    </div>
    
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

    <br>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <h1><b>WELCOME TO CONSOLEVERSE</b></h1>
                <br />
                <p>
                    Welcome to ConsoleVerse - Your Ultimate Destination for Modern and Retro Game Consoles. At ConsoleVerse, we're more than just a website! We're a haven for gaming enthusiasts. Our passion for gaming drives us to curate and provide you with the most exceptional gaming experiences.
                    <br /><br />
                    Explore our extensive collection of modern and classic game consoles, an extensive library of games, and a vast array of accessories to enhance your gaming journey. ConsoleVerse is more than a retailer; it's your gateway to leveling up your gaming adventures. Join us and elevate your gaming experience to the next level!
                </p>
            </div>
            <div class="col-md-6">
                <div id="ConsoleVerseCarousel1" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded-5 shadow-4-strong" style="width: 100%; margin: 0 auto;">
                        <div class="carousel-item active">
                            <img src="Images/Carousel/carousel1.jpg" class="d-block w-100" alt="Modern Controllers" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Modern Controllers</h5>
                                <p>Nintendo Switch, PS4, Xbox One Controllers </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="Images/Carousel/carousel2.jpg" class="d-block w-100" alt="Retro Controllers" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Retro Controllers</h5>
                                <p>PlayStation, Xbox, Sega, Nintendo</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="Images/Carousel/carousel3.jpg" class="d-block w-100" alt="Retro Consoles and Handhelds" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Retro Consoles and Handhelds</h5>
                                <p>PlayStation, Nintendo, Xbox</p>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#ConsoleVerseCarousel1" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#ConsoleVerseCarousel1" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <br />

    <div class="container mt-3">

        <h1><b>RECENT CONSOLE NEWS</b></h1>
        <br />
        <div class="row">

            <div class="col-md-6">
                <div class="side-container">

                    <div id="ConsoleVerseCarousel2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded-5 shadow-4-strong" style="width: 100%; margin: 0 auto;">
                            <div class="carousel-item active">
                                <img src="Images/Carousel/ps51.jpg" class="d-block w-100" alt="New PS5 Refresh Consoles" />
                            </div>
                            <div class="carousel-item">
                                <img src="Images/Carousel/ps52.jpg" class="d-block w-100" alt="PS5 Consoles" />
                            </div>
                            <div class="carousel-item">
                                <img src="Images/Carousel/ps53.jpg" class="d-block w-100" alt="PS5 Equipable Disc Drive" />
                            </div>
                            <div class="carousel-item">
                                <img src="Images/Carousel/ps54.jpg" class="d-block w-100" alt="PS5 Vertical Stand" />
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#ConsoleVerseCarousel2" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#ConsoleVerseCarousel2" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>

                    <br /><br /><br /><br />

                </div>
                <div class="side-container">
                    <h2>Xbox Series Mid-Generation Refresh Consoles Planned for 2024 Release</h2>
                    <h3>September 19, 2024</h3>
                    <p>
                        The upgraded Series X console is codenamed Brooklin and is digital-only, similar to the current Xbox Series S. Instead of a rectangular console, Brooklin is shaped like a cylinder. As for its specifications,
                        the documents lists that it boasts 12 teraflops with 4K resolution with 16GB of RAM.
                        <br /><br />
                        Additionally, it will have 2TB of storage, which is generous considering that the console is digital-only and is scheduled to launch at the end of August 2024 at the same prices as their current Series X and S Counterparts.
                    </p>
                    <ul>
                        <li>
                            All Digital Series X with 2TB storage
                        </li>
                        <li>
                            New Xbox controller with gyro and haptic feedback
                        </li>
                        <li>
                            Same price and power (not a Pro console)
                        </li>
                        <li>
                            Updated Technologies
                        </li>
                        <li>
                            Improved Efficiency
                        </li>
                        <li>
                            Targeting release in October 2024
                        </li>
                    </ul>
                    <div class="text p-3" bg-dark>
                        For more information visit:
                        <a class="text-reset fw-bold" href="https://www.ign.com/articles/xbox-series-mid-generation-refresh-consoles-planned-for-2024-release-according-to-court-docs">IGN Blog</a>
                    </div>
                </div>

            </div>


            <div class="col-md-6">

                <div class="side-container">
                    <h2>New look for PS5 console this holiday season!</h2>
                    <h3>October 10, 2024</h3>
                    <p>
                        Smaller PS5 design comes with 1TB storage for PS5 and PS5 Digital Edition; new model provides option to add an Ultra HD Blu-ray Disc Drive to PS5 Digital Edition.
                        <br /><br />
                        The new PS5 has been reduced in volume by more than 30%, and weight by 18% and 24% compared to the previous models.
                    </p>
                    <ul>
                        <li>
                            U.K.
                            <ul>
                                <li>PS5 with Ultra Blu-ray disc drive - 479.99 GBP</li>
                                <li>PS5 Digital Edition - 389.99 GBP</li>
                            </ul>
                        </li>
                        <li>
                            Ultra HD Blu-ray Disc Drive sold separately for 99.99 GBP.
                        </li>
                        <li>
                            Vertical Stand sold separately for 24.99 GBP.
                        </li>
                    </ul>
                    <div class="text p-3" bg-dark>
                        For more information visit:
                        <a class="text-reset fw-bold" href="https://blog.playstation.com/2024/10/10/new-look-for-ps5-console-this-holiday-season/">PlayStation Blog</a>

                        <br /><br /><br />

                    </div>
                </div>
                <div class="side-container">
                    <div id="ConsoleVerseCarousel3" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded-5 shadow-4-strong" style="width: 100%; margin: 0 auto;">
                            <div class="carousel-item active">
                                <img src="Images/Carousel/xbox1.jpg" class="d-block w-100" alt="New Xbox Series Consoles" />
                            </div>
                            <div class="carousel-item">
                                <img src="Images/Carousel/xbox2.jpg" class="d-block w-100" alt="New Xbox Series S Console" />
                            </div>
                            <div class="carousel-item">
                                <img src="Images/Carousel/xbox3.jpg" class="d-block w-100" alt="New Xbox Controller" />
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#ConsoleVerseCarousel3" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#ConsoleVerseCarousel3" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
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