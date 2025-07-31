<!DOCTYPE HTML>
<html lang="en-uk">

<head>
    <title>Support</title>
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

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <img class="img-fluid rounded-5 shadow-4-strong" width="100%" src="Images/supporticons/customerservice.jpg" alt="Customer Service">
                    </div>
                    <div class="col-12 col-lg-6">

                        <h1>Who Are We?</h1>
                        <br>
                        <p1>
                            We are a UK-based Video Game Console selling company, providing outstanding services which includes services like selling referbished and new modern and retro consoles at affordable prices!
                            <br /><br /> We can also ship products worldwide at an extra price including shipping costs. We guarantee that our customers
                            will be satisfied with our products, services and communication. We look forward to seeing you soon! Join the ConsoleVerse Family!
                            <br /><br />
                        </p1>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="d-flex">
                                    <div class="me-2 text-primary">
                                        <img src="Images/supporticons/gear.png" width="32" height="32" alt="Gear icon" />
                                    </div>
                                    <div>
                                        <h4>Innovative Company</h4>
                                        <p>We are passionate about including more retro consoles and new powerful consoles in the future!</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="d-flex">
                                    <div class="me-2 text-primary">
                                        <img src="Images/supporticons/fire.png" width="32" height="32" alt="Fire icon" />
                                    </div>
                                    <div>
                                        <h4>Rapidly Growing</h4>
                                        <p>We have been massively increasing our supply and stock of modern and retro consoles to sell at affordable prices!</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="d-flex">
                                    <div class="me-2 text-primary">
                                        <img src="Images/supporticons/happy.png" width="32" height="32" alt="Happy icon" />
                                    </div>
                                    <div>
                                        <h4>Console Passionate</h4>
                                        <p>We have been hard at work to continuously increase our customer satisfaction through affordable prices and excellent customer service!</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="d-flex">
                                    <div class="me-2 text-primary">
                                        <img src="Images/supporticons/save.png" width="32" height="32" alt="Sustainable icon" />
                                    </div>
                                    <div>
                                        <h4>Sustainable Future</h4>
                                        <p>We need a sustainable future by making our processing, refurbishment and delivery services more efficient to help save our planet!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container mt-3">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="w-100 rounded-5 shadow-4-strong">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d623540.2458745023!2d-1.2753114168008093!3d52.375785489136945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon!3m2!1d51.5072178!2d-0.12758619999999998!4m5!1s0x487832d2390779cd%3A0x108063201919db15!2sNottingham!3m2!1d52.9540223!2d-1.1549892!5e0!3m2!1sen!2suk!4v1699449272411!5m2!1sen!2suk" width="600" height="450" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <br /><br />
                </div>
                <div class="col-12 col-lg-6">
                    <div class="text-primary mb-3">
                        <i class="fas fa-map-marker-alt me-2"></i> Visit Our Office:
                    </div>
                    <h2 class="mb-3" style="font-size: 24px;">Meet Us</h2>

                    <p style="font-size: 18px;"><i class="fas fa-phone me-2"></i> Call Us: +44 01 234 567 89</p>
                    <p style="font-size: 18px;"><i class="fas fa-envelope me-2"></i> Email Us: info@consoleverse.co.uk</p>
                    <p style="font-size: 18px;"><i class="fas fa-map-marker-alt me-2"></i> Visit Our Office: Nottingham, United Kingdom</p>
                    <p style="font-size: 18px;"><i class="far fa-clock me-2"></i> Office Hours: Monday-Friday 9am-5pm, Saturday 9am-1pm</p>

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