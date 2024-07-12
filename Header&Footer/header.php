<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name ="author" content="Fatih Hekimoglu">
    <title>Hekimoglu Attorney Partnership</title>
    <link rel="stylesheet" href="stylesheet1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="page-header" style="background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url('<?php echo $headerImage; ?>');">
        <nav>
            <a href="index.php"><img src="logo.png" alt="Hekimoglu Attorney Partnership Logo"></a>
            <div class="nav-container">
                <div class="nav-links" id="navLinks">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#">Practice Areas</a>
                            <div class="dropdown-content">
                                <a href="global-trade.php">Global Trade</a>
                                <a href="real-estate.php">Real Estate</a>
                                <a href="banking-finance.php">Banking and Finance</a>
                                <a href="corporate-support.php">Corporate Support</a>
                                <a href="competition-antitrust.php">Competition and Antitrust</a>
                                <a href="capital-markets.php">Capital Markets</a>
                                <a href="intellectual-property.php">Intellectual Property</a>
                                <a href="wealth-management.php">Wealth Management</a>
                            </div>
                        </li>
                        <li><a href="about.php">Who We Are</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="language-switcher">
                    <a href="#" class="language-button active" onclick="switchLanguage('en')">EN</a>
                    <a href="#" class="language-button" onclick="switchLanguage('tr')">TR</a>
                </div>
            </div>
        </nav>
        <div class="title-container">
        <h1><?php echo $pageTitle; ?></h1>
        </div>
    </header>