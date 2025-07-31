<!DOCTYPE HTML>
<html lang="en-uk">

<head>
    <title>Terms and Conditions</title>
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

    <br><br>

        <div class="container mt-2">
            <div class="row justify-content-between align-items-center">
                <h1 class="mb-0"><b>TERMS AND CONDITIONS</b></h1>
            </div>

            <section>
                <div class="container">
                  <div class="section-content">
                    <h2>1. Introduction</h2>
                    <p>Document governs website use; consent to website document: implied; consent to website terms and conditions: upon registration or purchase; website user minimum age.</p>
                  </div>
                </div>
              
                <div class="container">
                  <div class="section-content">
                    <h2>2. Copyright Notice</h2>
                    <p>UCC copyright notice; ownership of rights in website.</p>
                  </div>
                </div>
              
                <div class="container">
                    <div class="section-content">
                      <h2>3. Permission to use website</h2>
                      <p>Licence to use website; no downloading; website use: permitted purposes; no modification of website content; limitations on licence to use website; redistributable content; suspension or restriction of access to website.</p>
                    </div>
                  </div>
              
                <div class="container">
                  <div class="section-content">
                    <h2>4. Misuse of Website</h2>
                    <p>Acceptable use: Prohibitions; using contact details prohibited; veracity of Information supplied.</p>
                  </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>5. Products</h2>
                      <p1>Product Advertisement as invitation to treat; products may change; prices may be incorrect; sales of products governed by terms of sales; product reviews.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>6. Registration and Accounts</h2>
                      <p1>Account eligibility; account registration process; no other person permitted to use account; notify on misuse of account; use of another's account.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>7. User Login Details</h2>
                      <p1>Provision of login details; user ID rules and impersonation; password to be kept confidential; notify on disclosure of password; responsibility for password loss.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>8. Cancellation and Suspension of Account</h2>
                      <p1>Rights of operator over free website account; cancellation policy for unused accounts; cancellation of free website account by user.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>9. Our Rights To Use Your Content</h2>
                      <p1>Definition of user content; licence of user content; sub-licensing of user content; right to bring proceedings in respect of user content; waiver of moral rights in user content; user may edit own content; delete etc user content on breach.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>10. Rules About Your Content</h2>
                      <p1>User content warranty; no unlawful user content; user content rules.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>11. Report Abuse</h2>
                      <p1>Request to report abuse; how to report abuse.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>12. Limited Warranties</h2>
                      <p1>No warranties for information; right to discontinue website publication; no implied warranties or representations relating to website.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>13. Limitations and Exclusions of Liability</h2>
                      <p1>Caveats to limits of liability; interpretation of limits of liability; no liability for free information or services; no liability for force majeure; no liability for business losses; no liability for loss of data or software; no liability for consequential loss; no personal liability.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>14. Breaches of These Terms and Conditions</h2>
                      <p1>Consequences of breach; non circumvention of measures upon breach.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>15. Third Party Websites</h2>
                      <p1>Third party websites: hyperlinks not recommendations; third party websites: no control or liability.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>16. Trade Marks</h2>
                      <p1>Trade mark ownership; third party trade marks on website.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>17. Variation</h2>
                      <p1>Document may be revised; variation of website document: unregistered users; variation of website document: registered users.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>18. Assignment</h2>
                      <p1>Assignment by first party; assignment by second party.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>19. Assignment</h2>
                      <p1>Severability of whole; severability of parts.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>20. Third Party Right</h2>
                      <p1>Third party rights: benefit; third party rights: exercise of rights.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>21. Entire Agreement</h2>
                      <p1>Entire Agreement - Use of Website.</p1>
                    </div>
                </div>

                <div class="container">
                    <div class="section-content">
                      <h2>22. Law and Jurisdiction</h2>
                      <p1>Governing Law; Jurisdiction.</p1>
                    </div>
                </div>
            </section>
        </div>
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