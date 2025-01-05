<?php
$pageTitle = "Hekimoglu Attorney Partnership";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Fatih Hekimoglu">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="stylesheet1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="header" id="header-background">
        <nav>
            <a href="index.php">
                <img src="Pictures/logo.png" alt="Hekimoglu Attorney Partnership Logo">
            </a>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#">Practice Areas</a>
                        <div class="dropdown-content">
                            <a href="Practice-Areas-Nav-Pages/real-estate.php">Real Estate</a>
                            <a href="Practice-Areas-Nav-Pages/company-consultancy.php">Company Consultancy</a>
                            <a href="Practice-Areas-Nav-Pages/labor-employment.php">Labor & Employment</a>
                            <a href="Practice-Areas-Nav-Pages/expropriation.php">Expropriation</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="Main-Nav-Pages/about.php">Who We Are</a>
                        <div class="dropdown-content">
                            <a href="Main-Nav-Pages/">What We Do</a>
                            <a href="Main-Nav-Pages/members.php">Our Team</a>
                        </div>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <!-- Language Switcher -->
            <div class="language-switcher">
                <a href="javascript:void(0);" 
                   class="language-button active"
                   onclick="switchLanguage('en')">
                   EN
                </a>
                <a href="javascript:void(0);"
                   class="language-button"
                   onclick="switchLanguage('tr')">
                   TR
                </a>
            </div>
        </nav>

        <div class="textbox">
            <h1>"Navigating Complexity, Delivering Excellence"</h1>
            <p>
                At Hekimoglu Attorney Partnership, we understand that in today's interconnected world, 
                legal challenges know no borders. Our team of dedicated professionals brings together 
                decades of experience across a spectrum of practice areas, from global trade to wealth 
                management. We don't just solve problems; we anticipate them, providing innovative solutions 
                that propel your business forward. With a commitment to excellence and a global perspective, 
                we stand ready to guide you through the complexities of modern business and law.
            </p>
            <a href="Main-Nav-Pages/about.php" class="frontpagebutton">Discover Our Expertise</a>
        </div>
    </section>

    <script>
    function switchLanguage(lang) {
        // Get the current path, e.g. "/index.php"
        let currentPath = window.location.pathname;
        let pathParts = currentPath.split('/');
        let currentFile = pathParts.pop(); // "index.php"

        // Remove the file extension and potential "_tr" or "-TR"
        let baseName = currentFile.replace('_tr', '').replace('-TR', '').replace('.php', '');
        // If user selects EN, we go to baseName.php
        // If user selects TR, we go to baseName_tr.php (or baseName-TR.php, your preference)
        let newFile = (lang === 'en') ? baseName + '.php' : baseName + '_tr.php';

        // Reassemble the path
        pathParts.push(newFile);
        let finalPath = pathParts.join('/');

        window.location.href = finalPath;
    }

    // Optional background image logic if you want it for the index pages
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('header-background');
        const currentPage = window.location.pathname.split("/").pop();

        // Basic example: if on index.php or empty, set a specific image
        if (currentPage === 'index.php' || currentPage === '') {
            header.style.backgroundImage = 
              "linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url('Pictures/canary-warf.jpg')";
        }
        // You can add more else if checks for other pages if desired
    });
    </script>
</body>
</html>