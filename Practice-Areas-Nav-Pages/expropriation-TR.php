<?php
$pageTitle = "Kamulaştırma"; 
$headerImage = "../Pictures/expropriation.jpg"; 
?>
<!DOCTYPE html>
<html lang="tr">
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
            <a href="../index_tr.php"><img src="../Pictures/logo.png" alt="Hekimoglu Attorney Partnership Logo"></a>
            <div class="nav-container">
                <div class="nav-links" id="navLinks">
                    <ul>
                        <li><a href="../index_tr.php">Ana Sayfa</a></li>
                        <li class="dropdown">
                            <a href="#">Hizmet Alanlarımız</a>
                            <div class="dropdown-content">
                                <a href="../Practice-Areas-Nav-Pages/real-estate-TR.php">Gayrimenkul</a>
                                <a href="../Practice-Areas-Nav-Pages/company-consultancy-TR.php">Şirket Danışmanlığı</a>
                                <a href="../Practice-Areas-Nav-Pages/labor-employment-TR.php">İş ve İstihdam Hukuku</a>
                                <a href="../Practice-Areas-Nav-Pages/expropriation-TR.php">Kamulaştırma</a>
                            </div>
                        </li>
                        <li><a href="about_tr.php">Hakkımızda</a></li>
                        <li><a href="contact_tr.php">İletişim</a></li>
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
            <h2><?php echo $pageTitle; ?> Sayfamıza Hoş Geldiniz</h2>

            <!-- Giriş Paragrafları -->
            <p>
                Hızlı kentleşme, büyük altyapı projeleri ve kamu yatırımları sonucunda kamulaştırma, ülkemizde sıklıkla
                rastlanan ve özellikle arazi veya mülk sahipleri için kritik önem taşıyan bir süreç haline gelmiştir.
                Bu süreçte, mülkiyet hakkının korunması ve adil tazminat alınması, yasal ve toplumsal açıdan büyük
                önem taşır.
            </p>

            <p>
                Hekimoğlu Avukatlık Ortaklığı olarak, kamulaştırma mevzuatını derinlemesine bilen, deneyimli bir ekip
                ile çalışıyoruz. İlk değerlendirmeden dava aşamalarına kadar, müvekkillerimizin haklarının en iyi
                şekilde savunulması ve makul tazminatın sağlanması için stratejik bir yol haritası oluşturuyoruz.
            </p>

            <!-- Ana Hizmetler Başlığı -->
            <h3>Kamulaştırma Alanındaki Uzmanlık Alanlarımız</h3>
            <p><em>Hizmetlerimiz, ancak bunlarla sınırlı kalmamak kaydıyla şu başlıkları kapsar:</em></p>

            <!-- 1) Ön Değerlendirme & Strateji Geliştirme -->
            <h4>1. Ön Değerlendirme &amp; Strateji Geliştirme</h4>
            <p>
                Kamulaştırma kararının yasal dayanaklarını inceleyerek sürecin hukuka uygunluğunu değerlendiririz.
                Ardından, itiraz yolları ve müvekkillerimizin haklarını en etkin şekilde koruma stratejilerini belirler,
                gerekli adımları planlarız.
            </p>

            <!-- 2) Ekspertiz & Değer Tespiti -->
            <h4>2. Ekspertiz &amp; Değer Tespiti</h4>
            <p>
                Bağımsız uzmanlarla iş birliği yaparak taşınmazların gerçek değerini tespit ederiz. Böylece tazminat
                miktarının adil olması için gerekli hukuki ve teknik altyapıyı oluşturur, kurumlarla yapılacak
                görüşmelerde güçlü bir pozisyon sağlarız.
            </p>

            <!-- 3) İdari & Yargısal Süreçler -->
            <h4>3. İdari &amp; Yargısal Süreçler</h4>
            <p>
                Gerek kurumlar arası yazışmalarda, gerekse dava açma veya itiraz dilekçeleri hazırlama aşamalarında
                müvekkillerimize tam kapsamlı hizmet sunarız. Böylece resmi makamlardaki işlemlerin eksiksiz ve
                doğru yürütülmesini amaçlarız.
            </p>

            <!-- 4) Uzlaşma & Müzakere -->
            <h4>4. Uzlaşma &amp; Müzakere</h4>
            <p>
                Zaman ve maliyet tasarrufu açısından, uzlaşma ve müzakere süreçlerine önem veririz. Taraflar arasında
                ortak bir payda sağlanması durumunda, müvekkillerimizin çıkarlarını koruyan ve kabul edilebilir bir
                çözüm üzerinde anlaşmayı hedefleriz.
            </p>
        </div>
    </div>

    <footer class="footer">
        <h4><a href="index.php">Hekimoglu Attorney Partnership</a></h4>
        <p>Çağdaş iş dünyasında ve hukuk sisteminde, güvenilir bir yol göstericiniz.</p>
        <ul>
            <li><a href="../Main-Nav-Pages/accessibility-TR.php">Erişilebilirlik</a></li>
            <li><a href="../Main-Nav-Pages/legal-TR.php">Hukuki Bilgiler ve Güvenlik</a></li>
            <li><a href="../Main-Nav-Pages/privacy-TR.php">Gizlilik Politikası</a></li>
        </ul>
        <p>&copy; 2024 Hekimoglu Attorney Partnership. Tüm hakları saklıdır.</p>
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
        
        if (currentPage === '../index_tr.php' || currentPage === '') {
            header.style.backgroundImage = "linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('Pictures/canary-warf.jpg')";
        } else if (currentPage === 'index_tr.php') {
            header.style.backgroundImage = "linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('Pictures/buyuk-dere.png')";
        }
    });
    </script>
</body>
</html>