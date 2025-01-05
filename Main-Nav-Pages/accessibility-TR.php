<?php
$pageTitle = "Erişilebilirlik";
$headerImage = "placeholder-image.jpg"; // Kendi görselinizi ekleyin veya placeholder olarak bırakın
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name ="author" content="Fatih Hekimoglu">
    <title>Hekimoğlu Hukuk Ortaklığı | <?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="../stylesheet1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- ÜST KISIM (HEADER) -->
    <header class="page-header" id="header-background"
        style="background-image: linear-gradient(
            rgba(4,9,30,0.7),
            rgba(4,9,30,0.7)
        ), url('<?php echo $headerImage; ?>');">
        <nav>
            <a href="./index_tr.php">
                <img src="../Pictures/logo.png" alt="Hekimoğlu Hukuk Ortaklığı Logosu">
            </a>
            <div class="nav-container">
                <div class="nav-links" id="navLinks">
                    <ul>
                        <li><a href="../index_tr.php">Ana Sayfa</a></li>
                        <li class="dropdown">
                            <a href="#">Uzmanlık Alanları</a>
                            <div class="dropdown-content">
                                <a href="../Practice-Areas-Nav-Pages-TR/real-estate-TR.php">Gayrimenkul</a>
                                <a href="../Practice-Areas-Nav-Pages-TR/company-consultancy-TR.php">Şirket Danışmanlığı</a>
                                <a href="../Practice-Areas-Nav-Pages-TR/labor-employment-TR.php">İş ve İstihdam Hukuku</a>
                                <a href="../Practice-Areas-Nav-Pages-TR/expropriation-TR.php">Kamulaştırma</a>
                            </div>
                        </li>
                        <li><a href="../Main-Nav-Pages/about.php">Biz Kimiz</a></li>
                        <li><a href="../contact.php">İletişim</a></li>
                    </ul>
                </div>
                <!-- Dil Değiştirme Butonları -->
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

    <!-- ANA İÇERİK ALANI -->
    <div class="content-area">
        <div class="content-box">
            <h2><?php echo $pageTitle; ?> Sayfamıza Hoş Geldiniz</h2>
            <p>
                Hekimoğlu Hukuk Ortaklığı olarak, internet sitemizin tüm kullanıcılar için erişilebilir olmasını
                sağlamak adına kararlıyız. Web sitemizi geliştirirken, geçerli erişilebilirlik standartları ve
                en iyi uygulamaları uygulayarak kullanıcı deneyimini sürekli iyileştirmeyi hedefliyoruz.
            </p>

            <p>
                Bu Erişilebilirlik sayfası, sitemizde gezinmenize yardımcı olmak için aldığımız önlemleri ve
                ek destek kaynaklarını özetlemektedir. Sitemizin erişilebilirliği konusunda herhangi bir engel
                yaşıyorsanız veya geliştirilmesi için önerileriniz varsa, lütfen bize bildirin.
            </p>

            <h3>Erişilebilirlik Çalışmalarımız</h3>
            <ul>
                <li>Elimizden geldiğince WCAG (Web İçeriği Erişilebilirlik Rehberi) 2.1 standartlarına uyum</li>
                <li>Açık ve tutarlı gezinme menüsü ile açıklayıcı bağlantı metinlerinin kullanımı</li>
                <li>Sadece klavye ile gezinmeye destek</li>
                <li>Metin ve arka plan renkleri arasında önerilen kontrast oranlarını sağlamaya özen gösterme</li>
                <li>Kullanıcı deneyimini geliştirmek için sürekli site denetimleri ve iyileştirmeler</li>
            </ul>

            <h3>Erişilebilirlik Destek İletişimi</h3>
            <p>
                Sitemizin daha erişilebilir hale gelmesi için görüş ve önerilerinize değer veriyoruz. Web sitemizi
                kullanırken herhangi bir zorlukla karşılaşırsanız veya özel sorularınız ya da endişeleriniz varsa,
                lütfen bizimle iletişime geçin:
            </p>
            <ul>
                <li>E-posta: <a href="mailto:info@hekimogluattorney.com">info@hekimogluattorney.com</a></li>
                <li>Telefon: +00 123 456 789</li>
                <li>Adres: 123 Ana Cadde, İstanbul, Türkiye</li>
            </ul>

            <p>
                <em>Görüşlerinize en kısa sürede yanıt vermeye ve karşılaştığınız sorunları mümkün olan en hızlı şekilde
                gidermeye özen gösteriyoruz.</em>
            </p>
        </div>
    </div>

    <!-- ALT KISIM (FOOTER) -->
    <footer class="footer">
        <h4><a href="../index_tr.php">Hekimoğlu Hukuk Ortaklığı</a></h4>
        <p>Modern iş dünyası ve hukukun karmaşıklığında, güvenilir yol göstericiniz.</p>
        <ul>
            <li><a href="accessibility-TR.php">Erişilebilirlik</a></li>
            <li><a href="../legal-TR.php">Hukuki Bilgiler ve Güvenlik</a></li>
            <li><a href="../privacy-TR.php">Gizlilik Politikası</a></li>
        </ul>
        <p>&copy; 2024 Hekimoğlu Hukuk Ortaklığı. Tüm hakları saklıdır.</p>
    </footer>

    <!-- DİL DEĞİŞTİRME SCRIPT -->
    <script>
    function switchLanguage(lang) {
        let currentPath = window.location.pathname;
        let pathParts = currentPath.split('/');
        let currentFile = pathParts.pop();  // Örnek: "accessibility-TR.php"

        // Dosya adından "-TR" veya başka bir ek ifadeyi kaldırma
        let baseName = currentFile.replace('-TR', '').replace('.php', '');
        // EN seçilince baseName + ".php"
        // TR seçilince baseName + "-TR.php"
        let newFile = (lang === 'en') ? baseName + '.php' : baseName + '-TR.php';

        pathParts.push(newFile);
        let finalPath = pathParts.join('/');

        window.location.href = finalPath;
    }
    </script>
</body>
</html>