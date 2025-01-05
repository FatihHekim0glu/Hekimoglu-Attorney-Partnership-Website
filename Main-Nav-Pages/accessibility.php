<?php
$pageTitle = "Accessibility";
$headerImage = "placeholder-image.jpg"; // Replace with your actual image or keep as placeholder
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name ="author" content="Fatih Hekimoglu">
    <title>Hekimoglu Attorney Partnership | <?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="../stylesheet1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- HEADER SECTION -->
    <header class="page-header" id="header-background"
        style="background-image: linear-gradient(
            rgba(4,9,30,0.7),
            rgba(4,9,30,0.7)
        ), url('<?php echo $headerImage; ?>');">
        <nav>
            <a href="../index.php">
                <img src="../Pictures/logo.png" alt="Hekimoglu Attorney Partnership Logo">
            </a>
            <div class="nav-container">
                <div class="nav-links" id="navLinks">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#">Practice Areas</a>
                            <div class="dropdown-content">
                                <a href="../Practice-Areas-Nav-Pages/real-estate.php">Real Estate</a>
                                <a href="../Practice-Areas-Nav-Pages/company-consultancy.php">Company Consultancy</a>
                                <a href="../Practice-Areas-Nav-Pages/labor-employment.php">Labor & Employment</a>
                                <a href="../Practice-Areas-Nav-Pages/expropriation.php">Expropriation</a>
                            </div>
                        </li>
                        <li><a href="../Main-Nav-Pages/about.php">Who We Are</a></li>
                        <li><a href="../contact.php">Contact</a></li>
                    </ul>
                </div>
                <!-- Language Switcher -->
                <div class="language-switcher">
                    <a href="javascript:void(0);" 
                       onclick="switchLanguage('en')" 
                       class="language-button">
                       EN
                    </a>
                    <a href="javascript:void(0);" 
                       onclick="switchLanguage('tr')" 
                       class="language-button">
                       TR
                    </a>
                </div>
            </div>
        </nav>
        <div class="title-container">
            <h1><?php echo $pageTitle; ?></h1>
        </div>
    </header>

    <!-- MAIN CONTENT SECTION -->
    <div class="content-area">
        <div class="content-box">
            <h2>Welcome to <?php echo $pageTitle; ?></h2>
            <p>
                At Hekimoglu Attorney Partnership, we are committed to ensuring our website is accessible
                to all users, regardless of ability or technology. We continually strive to improve the user experience
                by applying relevant accessibility standards and best practices throughout our site.
            </p>

            <p>
                This Accessibility page outlines the measures we have taken to enhance your browsing experience,
                along with resources for additional assistance. If you experience any accessibility barriers or
                have suggestions to improve accessibility on our website, please let us know.
            </p>

            <h3>Our Accessibility Measures</h3>
            <ul>
                <li>Adherence to WCAG (Web Content Accessibility Guidelines) 2.1 standards where feasible</li>
                <li>Use of clear, consistent navigation and descriptive link text</li>
                <li>Support for keyboard-only navigation</li>
                <li>Efforts to ensure color contrast meets recommended guidelines</li>
                <li>Continuous site audits and improvements to enhance usability</li>
            </ul>

            <h3>Contact for Accessibility Support</h3>
            <p>
                We value your feedback and appreciate your input in making our site more accessible. If you have
                any difficulty using our website or have specific questions or concerns, please contact us at:
            </p>
            <ul>
                <li>Email: <a href="mailto:info@hekimogluattorney.com">info@hekimogluattorney.com</a></li>
                <li>Phone: +00 123 456 789</li>
                <li>Address: 123 Main Street, Istanbul, Turkey</li>
            </ul>

            <p>
                <em>We are committed to responding to your inquiries and working to address any issues as quickly
                as possible.</em>
            </p>
        </div>
    </div>

    <!-- FOOTER SECTION -->
    <footer class="footer">
        <h4><a href="../index.php">Hekimoglu Attorney Partnership</a></h4>
        <p>Your trusted legal partner in navigating the complexities of modern business and law.</p>
        <ul>
            <li><a href="accessibility.php">Accessibility</a></li>
            <li><a href="../legal.php">Legal and Security</a></li>
            <li><a href="../privacy.php">Privacy Policy</a></li>
        </ul>
        <p>&copy; 2024 Hekimoglu Attorney Partnership. All rights reserved.</p>
    </footer>

    <!-- LANGUAGE SWITCH SCRIPT -->
    <script>
    function switchLanguage(lang) {
        let currentPath = window.location.pathname;
        let pathParts = currentPath.split('/');
        let currentFile = pathParts.pop();  // e.g. "accessibility.php"

        // Remove '-TR' or any other pattern you use, plus ".php"
        let baseName = currentFile.replace('-TR', '').replace('.php', '');
        // If user selects EN, direct them to baseName + ".php"
        // If user selects TR, direct them to baseName + "-TR.php"
        let newFile = (lang === 'en') ? baseName + '.php' : baseName + '-TR.php';

        pathParts.push(newFile);
        let finalPath = pathParts.join('/');

        window.location.href = finalPath;
    }
    </script>
</body>
</html>