<?php
$pageTitle = "Company Consultancy"; 
$headerImage = "../Pictures/company-consultancy.jpg"; 
?>
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
    <header class="page-header" id="header-background"
            style="background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url('<?php echo $headerImage; ?>');">
        <nav>
            <a href="../index.php"><img src="../Pictures/logo.png" alt="Hekimoglu Attorney Partnership Logo"></a>
            <div class="nav-container">
                <div class="nav-links" id="navLinks">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#">Practice Areas</a>
                            <div class="dropdown-content">
                                <a href="../Practice-Areas-Nav-Pages/real-estate.php">Real Estate</a>
                                <a href="../Practice-Areas-Nav-Pages/company-consultancy.php">Company Consultancy</a>
                                <a href="../Practice-Areas-Nav-Pages/labor-employment.php">Labor and Employment</a>
                                <a href="../Practice-Areas-Nav-Pages/expropriation.php">Expropriation</a>
                            </div>
                        </li>
                        <li><a href="../Main-Nav-Pages/about.php">Who We Are</a></li>
                        <li><a href="../Main-Nav-Pages/contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="language-switcher">
                    <!-- Switch to EN -->
                    <a href="javascript:void(0);" 
                    onclick="switchLanguage('en')" 
                    class="language-button">
                    EN
                    </a>
                    <!-- Switch to TR -->
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

    <div class="content-area">
        <div class="content-box">
            <h2>Welcome to Company Consultancy</h2>

            <!-- Introductory Paragraphs -->
            <p>
                In an era of rapid globalization and intense competition, businesses must navigate a complex web of legal
                and operational challenges to sustain growth. Particularly in evolving commercial environments like Turkey,
                maintaining compliance with ever-changing regulations while pursuing strategic objectives can be daunting.
            </p>

            <p>
                At Hekimoğlu Attorney Partnership, we offer a holistic suite of services designed to support companies
                throughout all stages of their corporate journey—from formation and restructuring to dissolution and beyond.
                Our team draws upon deep legal expertise and industry awareness to provide solutions that protect your
                interests and empower your vision for the future.
            </p>

            <!-- Main Services Heading -->
            <h3>Our Core Company Consultancy Services</h3>
            <p><em>We assist in, but are not limited to, the following areas:</em></p>

            <!-- 1) Company Formation & Structural Changes -->
            <h4>1. Company Formation &amp; Structural Changes</h4>
            <p>
                Whether establishing a new entity or navigating acquisitions, mergers, demergers, and liquidations,
                we guide you through the entire lifecycle of corporate development. We ensure compliance with local regulations,
                prepare requisite documentation, and mitigate risks at every step.
            </p>

            <!-- 2) Internal Governance Agreements -->
            <h4>2. Internal Governance Agreements</h4>
            <p>
                From shareholder agreements to board protocols, we structure internal frameworks that align with both
                regulatory mandates and best practices. This proactive approach helps prevent conflicts and fosters a
                transparent, collaborative management culture.
            </p>

            <!-- 3) Service Contracts -->
            <h4>3. Service Contracts</h4>
            <p>
                We draft robust service agreements between employers and employees or with external vendors, clearly defining
                all rights and responsibilities. This clarity prevents disputes, enhances operational efficiency, and
                minimizes legal exposure for all parties involved.
            </p>

            <!-- 4) Corporate Disputes & Judicial Activities -->
            <h4>4. Corporate Disputes &amp; Judicial Activities</h4>
            <p>
                When internal governance issues arise or service contract breaches occur, our litigation and negotiation
                teams step in to resolve conflicts swiftly. We combine mediation, arbitration, and, if necessary, litigation
                strategies to safeguard our clients’ legal and financial interests.
            </p>
        </div>
    </div>

    <footer class="footer">
        <h4><a href="../index.php">Hekimoglu Attorney Partnership</a></h4>
        <p>Your trusted legal partner in navigating the complexities of modern business and law.</p>
        <ul>
            <li><a href="../Main-Nav-Pages/accessibility.php">Accessibility</a></li>
            <li><a href="../Main-Nav-Pages/legal.php">Legal and Security</a></li>
            <li><a href="../Main-Nav-Pages/privacy.php">Privacy Policy</a></li>
        </ul>
        <p>&copy; 2024 Hekimoglu Attorney Partnership. All rights reserved.</p>
    </footer>

    <script>
    function switchLanguage(lang) {
        let currentPath = window.location.pathname;          
        let pathParts = currentPath.split('/');              
        let currentFile = pathParts.pop();                   

        let baseName = currentFile.replace('-TR', '').replace('.php', '');
        let newFile = (lang === 'en') ? baseName + '.php' : baseName + '-TR.php';

        pathParts.push(newFile);                             
        let finalPath = pathParts.join('/');                 

        window.location.href = finalPath;                    
    }

    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('header-background');
        const currentPage = window.location.pathname.split("/").pop();
        
        if (currentPage === 'index.php' || currentPage === '') {
            header.style.backgroundImage = "linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('Pictures/canary-warf.jpg')";
        } else if (currentPage === 'index_tr.php') {
            header.style.backgroundImage = "linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('Pictures/buyuk-dere.png')";
        }
    });
    </script>
</body>
</html>