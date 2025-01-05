<?php
$pageTitle = "Labor & Employment Law"; 
$headerImage = "../Pictures/labor-employment.jpg"; 
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
                                <a href="../Practice-Areas-Nav-Pages/real-estate.php">Real Estate</a>
                                <a href="../Practice-Areas-Nav-Pages/banking-finance.php">Banking and Finance</a>
                                <a href="../Practice-Areas-Nav-Pages/corporate-support.php">Corporate Support</a>
                                <a href="../Practice-Areas-Nav-Pages/competition-antitrust.php">Competition and Antitrust</a>
                                <a href="../Practice-Areas-Nav-Pages/capital-markets.php">Capital Markets</a>
                                <a href="../Practice-Areas-Nav-Pages/intellectual-property.php">Intellectual Property</a>
                                <a href="../Practice-Areas-Nav-Pages/wealth-management.php">Wealth Management</a>
                                <a href="../Practice-Areas-Nav-Pages/labor-employment.php">Labor and Employment</a>
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
            <h2>Welcome to Labor & Employment Law</h2>

            <!-- Introductory Paragraphs -->
            <p>
                In today’s dynamic workforce, both employers and employees face complex legal requirements that govern their
                mutual rights and obligations. At Hekimoğlu Attorney Partnership, our extensive experience in Labor & Employment
                Law equips us to deliver strategic, proactive solutions for a wide range of workplace issues. We keep abreast
                of evolving regulations and employment trends, ensuring our clients can confidently navigate any challenge.
            </p>

            <p>
                Whether you’re an established corporation or a growing startup, we tailor our services to meet your specific
                needs, from drafting airtight employment contracts to resolving disputes swiftly and effectively. Our mission
                is to foster fair, compliant, and productive working environments that respect the interests of all parties involved.
            </p>

            <!-- Main Services Heading -->
            <h3>Our Core Offerings in Labor & Employment Law</h3>
            <p><em>We focus on, but are not limited to, the following areas:</em></p>

            <!-- 1) Employment Agreements & Policy Development -->
            <h4>1. Employment Agreements &amp; Policy Development</h4>
            <p>
                We craft legally sound, clear, and equitable terms of employment, along with comprehensive company handbooks
                and workplace policies. From compensation structures and performance metrics to disciplinary procedures and
                confidentiality provisions, our goal is to provide clarity and protect the interests of both employers and employees.
            </p>

            <!-- 2) Regulatory Compliance & Advisory -->
            <h4>2. Regulatory Compliance &amp; Advisory</h4>
            <p>
                Labor laws and regulations are constantly evolving, encompassing matters such as health and safety standards,
                overtime rules, and wage requirements. We regularly update our clients on upcoming legal changes, conduct risk
                assessments, and propose effective measures to maintain compliance and minimize legal exposure.
            </p>

            <!-- 3) Dispute Resolution & Litigation -->
            <h4>3. Dispute Resolution &amp; Litigation</h4>
            <p>
                From wrongful termination, harassment, and discrimination claims to wage disputes and breach of contract,
                our litigation team is equipped to handle complex cases efficiently. Through negotiation, mediation, or
                court proceedings, we prioritize outcomes that align with our clients’ strategic and financial objectives
                while safeguarding their legal rights.
            </p>

            <!-- 4) Strategic Workforce Management -->
            <h4>4. Strategic Workforce Management</h4>
            <p>
                Companies often face restructuring, downsizing, and other organizational changes that can significantly impact
                their workforce. We provide legal counsel on all aspects of these transitions—offering guidance on severance,
                collective redundancy, union negotiations, and employee benefit adjustments to help our clients manage
                change responsibly and effectively.
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