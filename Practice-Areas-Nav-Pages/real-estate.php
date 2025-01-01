<?php
$pageTitle = "Real Estate"; 
$headerImage = "../Pictures/realestate.jpg"; 
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

    <div class="content-box">
        <h2>Welcome to Real Estate</h2>

        <!-- Introductory Paragraphs -->
        <p>
            Real Estate Law has served as a cornerstone of legal systems worldwide, dating back to the earliest civilizations.
            Its significance lies in the governance of land ownership, development, and use—factors that profoundly influence
            economic growth and societal development. Nevertheless, modern legal markets face a shortage of expert professionals
            who possess a deep understanding of the complexities inherent in real estate matters.
        </p>

        <p>
            At Hekimoğlu Attorney Partnership, we bridge this gap with a dedicated, highly skilled team that approaches
            property-related cases both strategically and meticulously. Our comprehensive services encompass everything from
            the inception of construction projects to the final stages of property transfer and dispute resolution. By combining
            legal acumen with pragmatic solutions, we ensure that our clients’ interests are protected across every facet of
            real estate transactions.
        </p>

        <!-- Main Services Heading -->
        <h3>Our Specialized Real Estate Law Services</h3>
        <p><em>We offer, but are not limited to, the following practices:</em></p>

        <!-- Transactional Activities -->
        <h4>1. Transactional Activities</h4>

        <!-- Flat-for-Floor Construction Contracts -->
        <h5>Flat-for-Floor Construction Contracts</h5>
        <p>
            We provide end-to-end legal guidance on project structuring, contractual drafting, and negotiation. By carefully
            reviewing contract terms, we ensure that all stakeholders’ interests are safeguarded and that development processes
            proceed smoothly and efficiently.
        </p>

        <!-- Construction Consultancy -->
        <h5>Construction Consultancy</h5>
        <p>
            Our team offers ongoing advisory services for construction firms to ensure regulatory compliance and smooth project
            execution. This includes analyzing construction permits, building codes, partnership agreements, and risk management
            strategies so that projects meet their objectives without legal complications.
        </p>

        <!-- Land Lease & Right of Use Agreements -->
        <h5>Land Lease &amp; Right of Use Agreements</h5>
        <p>
            We create, review, and negotiate sustainable, mutually beneficial contracts for land utilization. By addressing
            financial, environmental, and regulatory factors, we help clients maximize the value and potential of their land
            while maintaining clear legal protections.
        </p>

        <!-- Immovable Lease Agreements -->
        <h5>Immovable Lease Agreements</h5>
        <p>
            We thoroughly prepare lease contracts for a wide range of properties, ensuring critical terms such as rent, duration,
            and liabilities are clearly defined. Our approach reduces the risk of misunderstandings or disputes between landlords
            and tenants, ultimately safeguarding both parties’ interests.
        </p>

        <!-- Immovable Sale Agreements -->
        <h5>Immovable Sale Agreements</h5>
        <p>
            From due diligence to closing, our team meticulously structures sale transactions in ways that protect our clients’
            legal rights and mitigate financial risks. We oversee the entire process, ensuring compliance with relevant regulations
            and the smooth transfer of ownership.
        </p>

        <!-- Non-Transactional Activities -->
        <h4>2. Non-Transactional Activities</h4>

        <!-- Dispute Resolution & Litigation -->
        <h5>Dispute Resolution &amp; Litigation</h5>
        <p>
            We provide effective representation and litigation strategies for conflicts arising from property ownership, use,
            or development. With a focus on efficient resolution, we aim to preserve our clients’ resources and protect their
            rights through negotiation, mediation, or court proceedings.
        </p>

        <!-- Expropriation Proceedings -->
        <h5>Expropriation Proceedings</h5>
        <p>
            Our attorneys remain vigilant and assertive when following up on compulsory acquisition processes, working to secure
            just compensation and protect clients’ interests. This includes assessing the legal grounds for expropriation, guiding
            negotiations with government entities, and advocating strongly on behalf of property owners.
        </p>
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