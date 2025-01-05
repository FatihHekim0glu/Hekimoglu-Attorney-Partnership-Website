<?php
$pageTitle = "Expropriation"; 
$headerImage = "../Pictures/expropriation.jpg"; 
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
            <a href="index.php"><img src="../Pictures/logo.png" alt="Hekimoglu Attorney Partnership Logo"></a>
            <div class="nav-container">
                <div class="nav-links" id="navLinks">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#">Practice Areas</a>
                            <div class="dropdown-content">
                                <a href="../Practice-Areas-Nav-Pages/global-trade.php">Global Trade</a>
                                <a href="../Practice-Areas-Nav-Pages/real-estate.php">Real Estate</a>
                                <a href="../Practice-Areas-Nav-Pages/banking-finance.php">Banking and Finance</a>
                                <a href="../Practice-Areas-Nav-Pages/corporate-support.php">Corporate Support</a>
                                <a href="../Practice-Areas-Nav-Pages/competition-antitrust.php">Competition and Antitrust</a>
                                <a href="../Practice-Areas-Nav-Pages/capital-markets.php">Capital Markets</a>
                                <a href="../Practice-Areas-Nav-Pages/intellectual-property.php">Intellectual Property</a>
                                <a href="../Practice-Areas-Nav-Pages/wealth-management.php">Wealth Management</a>
                            </div>
                        </li>
                        <li><a href="about.php">Who We Are</a></li>
                        <li><a href="contact.php">Contact</a></li>
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
            <h2>Welcome to Expropriation</h2>

            <!-- Introductory Paragraphs -->
            <p>
                Expropriation has become a familiar process in rapidly growing economies, where large-scale infrastructure
                projects and public investments frequently require the compulsory acquisition of private land. For property
                owners, the stakes are high: preserving their rights and securing fair compensation is essential for both
                individual justice and broader societal balance.
            </p>

            <p>
                At Hekimoğlu Attorney Partnership, our team’s deep understanding of expropriation legislation allows us to
                guide clients through each step of this challenging procedure. From preliminary evaluation to court proceedings,
                we focus on developing effective strategies that protect our clients’ interests and help them obtain fair
                valuations for their property.
            </p>

            <!-- Main Services Heading -->
            <h3>Our Expertise in Expropriation</h3>
            <p><em>Our services focus on, but are not limited to, the following areas:</em></p>

            <!-- 1) Legal Assessment & Strategy Formation -->
            <h4>1. Legal Assessment &amp; Strategy Formation</h4>
            <p>
                We thoroughly review the legal basis for the proposed expropriation, ensuring that all procedures conform
                to statutory requirements. Based on our findings, we craft tailored strategies to contest or negotiate
                expropriation decisions, defending our clients’ rights at every stage.
            </p>

            <!-- 2) Property Valuation & Compensation Claims -->
            <h4>2. Property Valuation &amp; Compensation Claims</h4>
            <p>
                Collaborating with independent experts, we gather accurate valuations of the property in question, laying
                a solid foundation for claiming fair compensation. This process bolsters our negotiating position and ensures
                the final settlement reflects the true market value of our clients’ land.
            </p>

            <!-- 3) Administrative & Judicial Representation -->
            <h4>3. Administrative &amp; Judicial Representation</h4>
            <p>
                Whether dealing with administrative formalities or litigating in court, we handle the intricate paperwork,
                submit appeals, and present compelling arguments on behalf of our clients. Our goal is to ensure all official
                steps are properly executed and our clients’ interests remain at the forefront.
            </p>

            <!-- 4) Negotiation & Settlement -->
            <h4>4. Negotiation &amp; Settlement</h4>
            <p>
                We recognize the potential benefits of a timely resolution, both financially and logistically. Through
                informed negotiation and careful advocacy, we seek amicable agreements that fulfill our clients’ objectives
                without unnecessary delays or prolonged disputes.
            </p>
        </div>
    </div>

    <footer class="footer">
        <h4><a href="index.php">Hekimoglu Attorney Partnership</a></h4>
        <p>Your trusted legal partner in navigating the complexities of modern business and law.</p>
        <ul>
            <li><a href="accessibility.php">Accessibility</a></li>
            <li><a href="legal.php">Legal and Security</a></li>
            <li><a href="privacy.php">Privacy Policy</a></li>
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