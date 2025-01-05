<?php
$pageTitle = "Hekimoğlu Hukuk Ortaklığı";
?>
<!DOCTYPE html>
<html lang="tr">
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
            <a href="index_tr.php">
                <img src="Pictures/logo.png" alt="Hekimoğlu Hukuk Ortaklığı Logo">
            </a>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="index_tr.php">Ana Sayfa</a></li>
                    <li class="dropdown">
                        <a href="#">Uzmanlık Alanları</a>
                        <div class="dropdown-content">
                            <a href="Practice-Areas-Nav-Pages/real-estate-TR.php">Gayrimenkul</a>
                            <a href="Practice-Areas-Nav-Pages/company-consultancy-TR.php">Şirket Danışmanlığı</a>
                            <a href="Practice-Areas-Nav-Pages/labor-employment-TR.php">İş ve İstihdam Hukuku</a>
                            <a href="Practice-Areas-Nav-Pages/expropriation-TR.php">Kamulaştırma</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="Main-Nav-Pages/about.php">Biz Kimiz</a>
                        <div class="dropdown-content">
                            <a href="Main-Nav-Pages/">Yaptıklarımız</a>
                            <a href="Main-Nav-Pages/members.php">Ekibimiz</a>
                        </div>
                    </li>
                    <li><a href="Main-Nav-Pages/contact.php">İletişim</a></li>
                </ul>
            </div>

            <!-- Language Switcher -->
            <div class="language-switcher">
                <a href="javascript:void(0);"
                   class="language-button"
                   onclick="switchLanguage('en')">
                   EN
                </a>
                <a href="javascript:void(0);"
                   class="language-button active"
                   onclick="switchLanguage('tr')">
                   TR
                </a>
            </div>
        </nav>

        <div class="textbox">
            <h1>"Karmaşıklığı Yönetiyoruz, Mükemmelliği Sunuyoruz"</h1>
            <p>
                Hekimoğlu Hukuk Ortaklığı olarak, günümüzün birbirine bağlı dünyasında hukuki zorlukların sınır tanımadığını anlıyoruz. 
                Deneyimli profesyonellerden oluşan ekibimiz, küresel ticaretten varlık yönetimine kadar uzanan geniş bir uzmanlık 
                yelpazesinde onlarca yıllık deneyimi bir araya getiriyor. Biz sadece sorunları çözmekle kalmıyor, aynı zamanda onları 
                öngörüyor ve işinizi ileriye taşıyan yenilikçi çözümler sunuyoruz. Mükemmelliğe olan bağlılığımız ve küresel bakış 
                açımızla, modern iş dünyası ve hukukun karmaşıklıkları arasında size rehberlik etmeye hazırız.
            </p>
            <a href="Main-Nav-Pages/about.php" class="frontpagebutton">Uzmanlığımızı Keşfedin</a>
        </div>
    </section>

    <script>
    function switchLanguage(lang) {
        let currentPath = window.location.pathname;
        let pathParts = currentPath.split('/');
        let currentFile = pathParts.pop(); // e.g. "index_tr.php"

        // Remove the file extension and possible "_tr" or "-TR"
        let baseName = currentFile.replace('_tr', '').replace('-TR', '').replace('.php', '');
        // If user selects EN, we go to baseName.php
        // If user selects TR, we go to baseName_tr.php
        let newFile = (lang === 'en') ? baseName + '.php' : baseName + '_tr.php';

        pathParts.push(newFile);
        let finalPath = pathParts.join('/');

        window.location.href = finalPath;
    }

    document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('header-background');
        const currentPage = window.location.pathname.split("/").pop();

        // If on index_tr.php, set a specific image or the same image
        if (currentPage === 'index_tr.php') {
            header.style.backgroundImage = 
              "linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url('Pictures/buyuk-dere.png')";
        }
    });
    </script>
</body>
</html>