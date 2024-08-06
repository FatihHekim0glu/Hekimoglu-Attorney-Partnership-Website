<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name ="author" content="Fatih Hekimoglu">
    <title>Hekimoglu Attorney Partnership</title>
    <link rel="stylesheet" href="../stylesheet1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="page-header" style="background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url('<?php echo $headerImage; ?>');">
        <nav>
            <a href="index.php"><img src="../Pictures/logo.png" alt="Hekimoglu Attorney Partnership Logo"></a>
            <div class="nav-container">
                <div class="nav-links" id="navLinks">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#">Practice Areas</a>
                            <div class="dropdown-content">
                            <a href="../Practice-Areas-Nav-Pages-TR/global-trade-TR.php">Global Trade</a>
                            <a href="../Practice-Areas-Nav-Pages-TR/real-estate-TR.php">Real Estate</a>
                            <a href="../Practice-Areas-Nav-Pages-TR/banking-finance-TR.php">Banking and Finance</a>
                            <a href="../Practice-Areas-Nav-Pages-TR/corporate-support-TR.php">Corporate Support</a>
                            <a href="../Practice-Areas-Nav-Pages-TR/competition-antitrust-TR.php">Competition and Antitrust</a>
                            <a href="../Practice-Areas-Nav-Pages-TR/capital-markets-TR.php">Capital Markets</a>
                            <a href="../Practice-Areas-Nav-Pages-TR/intellectual-property-TR.php">Intellectual Property</a>
                            <a href="../Practice-Areas-Nav-Pages-TR/wealth-management-TR.php">Wealth Management</a>
                            </div>
                        </li>
                        <li><a href="about.php">Who We Are</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="language-switcher">
                    <a href="<?php echo str_replace('-TR', '', $_SERVER['PHP_SELF']); ?>" class="language-button <?php echo (strpos($_SERVER['PHP_SELF'], '-TR') === false) ? 'active' : ''; ?>">EN</a>
                    <a href="<?php echo str_replace('.php', '-TR.php', $_SERVER['PHP_SELF']); ?>" class="language-button <?php echo (strpos($_SERVER['PHP_SELF'], '-TR') !== false) ? 'active' : ''; ?>">TR</a>
                </div>
            </div>
        </nav>
        <div class="title-container">
        <h1><?php echo $pageTitle; ?></h1>
        </div>
    </header>