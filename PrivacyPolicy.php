<!DOCTYPE HTML>
<html lang="en-uk">

<head>
    <title>Privacy Policy</title>
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
            <h1 class="mb-0"><b>PRIVACY POLICY</b></h1>
        </div>
        <br>
        <section>
            <div class="container">
              <div class="section-content">
                <p>1. General provisions

                    1.1. This privacy policy regulates the principles of collection, processing, and storage of personal data. Personal data is processed and stored by MERCHANT NAME, who is the controller of the personal data (hereinafter the controller).
                    <br>
                    1.2. For the purposes of this privacy policy, a data subject means the customer or another natural person whose personal data is processed by the controller.
                    <br>
                    1.3. For the purposes of this privacy policy, a customer means anyone who purchases goods or services on the controller’s website.
                    <br>
                    1.4. The controller observes the principles relating to personal data processing provided by legislation and, among other things, processes personal data in a lawful, fair, and secure manner. The controller is able to declare that personal data has been processed in accordance with the provisions of the legislation.
                    <br>
                    2. Collection, processing, and storage of personal data
                    <br>
                    2.1. The personal data collected, processed, and stored by the controller has been collected electronically, mainly via the website and e-mail. (NB! PLEASE MODIFY IF DATA ARE ALSO COLLECTED ON PAPER.)
                    <br>
                    2.2. By sharing their personal data, the data subject grants the controller the right to collect, arrange, use and administer, for the purpose defined in the privacy policy, the personal data that the data subject shares with the controller either directly or indirectly when purchasing goods or services on the website.
                    <br>
                    2.3. The data subject is liable for the accuracy, correctness, and integrity of the data submitted by them. The submission of knowingly false data is regarded as a breach of the privacy policy. The data subject is required to immediately notify the controller of any changes in the data submitted.
                    <br>
                    2.4. The controller is not liable for any damage or loss caused to the data subject or a third party as a result of the submission of false data by the data subject.
                    <br>
                    3. Processing of personal data of customers
                    <br>
                    3.1. The controller may process the following personal data of the data subject:
                    <br>
                    3.1.1. Given name and surname;
                    <br>
                    3.1.2. Date of birth;
                    <br>
                    3.1.3. Telephone number;
                    <br>
                    3.1.4. E-mail address;
                    <br>
                    3.1.5. Delivery address;
                    <br>
                    3.1.6. Bank account number;
                    <br>
                    3.1.7. Payment card details;
                    (NB! PLEASE MODIFY THE LIST ACCORDING TO THE TYPES OF DATA SUBJECT TO PROCESSING. PLEASE REMOVE IF ANY DATA INCLUDED IN THE LIST ARE NOT COLLECTED.)
                    <br>
                    3.2. In addition to the foregoing, the controller has the right to collect data about the customer that are available in public registers.
                    <br>
                    3.3. The legal basis for the processing of personal data points (a), (b), (c) and (f) of Article 6(1) of the General Data Protection Regulation:
                    <br>
                    (a) the data subject has given consent to the processing of his or her personal data for one or more specific purposes;
                    <br>
                    (b) processing is necessary for the performance of a contract to which the data subject is a party or in order to take steps at the request of the data subject prior to entering into a contract;
                    <br>
                    (c) processing is necessary for compliance with a legal obligation to which the controller is subject;
                    <br>
                    (f) processing is necessary for the purposes of the legitimate interests pursued by the controller or by a third party, except where such interests are overridden by the interests or fundamental rights and freedoms of the data subject which require protection of personal data, in particular where the data subject is a child.
                    <br>
                    3.4. Processing of personal data according to the purpose of processing:
                    <br>
                    3.4.1. Purpose of processing – security and safety
                    The maximum period of storage of personal data – according to the terms specified by law
                    <br>
                    3.4.2. Purpose of processing – the processing of orders
                    Maximum period of storage of personal data – (SPECIFY HOW LONG IS THE DATA STORED?)
                    <br>
                    3.4.3. Purpose of processing – ensuring the functioning of online store services
                    Maximum period of storage of personal data – (SPECIFY HOW LONG IS THE DATA STORED?)
                    <br>
                    3.4.4. Purpose of processing – customer management
                    Maximum period of storage of personal data – (SPECIFY HOW LONG IS THE DATA STORED?)
                    <br>
                    3.4.5. Purpose of processing – financial activities, accounting
                    Maximum period of storage of personal data – according to the terms specified by law
                    <br>
                    3.4.6. Purpose of processing – marketingMaximum period of storage of personal data – (SPECIFY HOW LONG IS THE DATA STORED?)
                    (NB! DEPENDING ON THE CONTROLLER, IT MAY PROVE TO BE NECESSARY TO MODIFY THE FOREGOING LIST)
                    <br>
                    3.5. The controller has the right to share personal data of customers with third parties such as processors, accountants, transport and courier companies, companies providing transfer services. The controller is in charge of the processing of personal data. The controller transmits the personal data necessary for making payments to the processor, Maksekeskus AS.
                    <br>
                    3.6. The controller processes and stores personal data of the data subject implementing the organizational and technical measures to ensure that the personal data is protected against any accidental or unlawful destruction, alteration, disclosure, and any other unlawful processing.
                    <br>
                    3.7. The controller stores the data of the data subjects depending on the purpose of processing, but no longer than for (SPECIFY) years.
                    <br>
                    4. Rights of the data subject
                    <br>
                    4.1. The data subject has the right to gain access to and examine their personal data.
                    <br>
                    4.2. The data subject has the right to obtain information on the processing of their personal data.
                    <br>
                    4.3. The data subject has the right to modify or rectify inaccurate data.
                    <br>
                    4.4. If the controller processes personal data of the data subject based on the consent granted by the latter, the data subject has the right to withdraw their consent at any time.
                    <br>
                    4.5. To exercise their rights, the data subject can contact the customer support of the online store at (ADD SUPPORT E-MAIL ADDRESS).
                    <br>
                    4.6. To protect their rights, the data subject can file a complaint with the Data Protection Inspectorate.
                    <br>
                    5. Final provisions
                    <br>
                    5.1. These data protection terms and conditions have been prepared in compliance with Regulation (EU) 2016/679 of the European Parliament and of the Council on the protection of natural persons with regard to the processing of personal data and on the free movement of such data, and repealing Directive 95/46/EC (General Data Protection Regulation), the Personal Data Protection Act of the Republic of Estonia and legislation of the Republic of Estonia and the European Union.
                    <br>
                    5.2. The controller has the right to amend the data protection terms and conditions in part or in full, notifying the data subjects of the amendments via (ADD SHOP URL).</p>
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