<?php
$pageTitle = "İş ve İstihdam Hukuku"; 
$headerImage = "../Pictures/labor-employment.jpg"; 
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
            <a href="index.php"><img src="../Pictures/logo.png" alt="Hekimoglu Attorney Partnership Logo"></a>
            <div class="nav-container">
                <div class="nav-links" id="navLinks">
                    <ul>
                        <li><a href="index.php">Ana Sayfa</a></li>
                        <li class="dropdown">
                            <a href="#">Hizmet Alanlarımız</a>
                            <div class="dropdown-content">
                                <a href="../Practice-Areas-Nav-Pages/real-estate-TR.php">Gayrimenkul</a>
                                <a href="../Practice-Areas-Nav-Pages/banking-finance-TR.php">Bankacılık ve Finans</a>
                                <a href="../Practice-Areas-Nav-Pages/corporate-support-TR.php">Kurumsal Destek</a>
                                <a href="../Practice-Areas-Nav-Pages/competition-antitrust-TR.php">Rekabet Hukuku</a>
                                <a href="../Practice-Areas-Nav-Pages/capital-markets-TR.php">Sermaye Piyasaları</a>
                                <a href="../Practice-Areas-Nav-Pages/intellectual-property-TR.php">Fikri Mülkiyet</a>
                                <a href="../Practice-Areas-Nav-Pages/wealth-management-TR.php">Varlık Yönetimi</a>
                            </div>
                        </li>
                        <li><a href="about.php">Hakkımızda</a></li>
                        <li><a href="contact.php">İletişim</a></li>
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
                Sürekli değişen iş piyasası ve kapsamlı yasal düzenlemeler, şirketlerin ve çalışanların iş ilişkilerini doğru
                yönetmesini daha da önemli hale getirmiştir. Hekimoğlu Avukatlık Ortaklığı, bu alanda uzun yıllara dayanan
                tecrübesiyle, müvekkillerine stratejik ve proaktif çözümler sunmayı ilke edinmiştir. Yasal düzenlemelerin takibini,
                değişen iş modellerine uyum sağlamayı ve uyuşmazlıkların ortaya çıkmadan önlenmesini hedefleyen kapsamlı bir
                yaklaşım benimsiyoruz.
            </p>

            <p>
                İş ve İstihdam Hukuku kapsamında sunduğumuz hizmetler; hem işçilerin hem de işverenlerin çıkarlarını yasal
                çerçevede korumayı ve ortaya çıkabilecek ihtilafları en hızlı ve etkin şekilde çözmeyi amaçlar. Kurumsal yapıya
                sahip şirketlerden KOBİ'lere kadar geniş bir müşteri portföyüyle çalışarak, uzman ve güncel bilgiler ışığında
                çözümler geliştiriyoruz.
            </p>

            <!-- Hizmet Başlığı -->
            <h3>İş ve İstihdam Hukuku Kapsamındaki Uzmanlık Alanlarımız</h3>
            <p><em>Hizmetlerimiz, ancak bunlarla sınırlı kalmamak kaydıyla aşağıdaki başlıklarda yoğunlaşır:</em></p>

            <!-- 1) İş Sözleşmeleri ve Politikalar -->
            <h4>1. İş Sözleşmeleri ve Politikalar</h4>
            <p>
                Kurumsal yapıya ve sektörel ihtiyaçlara uygun iş sözleşmeleri, çalışan el kitapları ve iç yönetmelikler hazırlarız.
                Bu kapsamda, çalışma koşullarından ücretlendirmeye, performans kriterlerinden disiplin kurallarına kadar
                pek çok konuda net ve anlaşılır düzenlemeler yapılmasını sağlayarak, hem işverenin hem de çalışanın haklarını
                koruruz.
            </p>

            <!-- 2) Mevzuata Uyum Danışmanlığı -->
            <h4>2. Mevzuata Uyum Danışmanlığı</h4>
            <p>
                Hızla değişen iş mevzuatı, iş sağlığı ve güvenliği, fazla mesai ve ücretlendirme gibi konularda detaylı
                danışmanlık sunarız. Firmaların yasal gelişmelerden haberdar olmasını ve potansiyel riskleri en aza
                indirecek şekilde hareket etmesini sağlarız.
            </p>

            <!-- 3) Uyuşmazlık Çözümü ve Dava Takibi -->
            <h4>3. Uyuşmazlık Çözümü &amp; Dava Takibi</h4>
            <p>
                Haksız fesih, ayrımcılık, mobbing, iş kazaları ve ücret uyuşmazlıkları gibi birçok farklı konuda, etkin
                temsil ve dava stratejileri geliştiririz. Arabuluculuk, uzlaşma ve dava süreçlerinde müvekkillerimizin
                haklarını kararlı bir şekilde savunarak, en hızlı ve adil sonuca ulaşmalarını amaçlarız.
            </p>

            <!-- 4) Stratejik İnsan Kaynakları Yönetimi -->
            <h4>4. Stratejik İnsan Kaynakları Yönetimi</h4>
            <p>
                Yeniden yapılanma, iş gücü planlaması, kıdem tazminatları ve diğer kurumsal değişiklik süreçlerinde hukuki destek
                ve danışmanlık sunarız. Bu hizmet, özellikle şirketlerin büyüme, birleşme veya bölünme dönemlerinde ortaya
                çıkan insan kaynakları sorunlarını en etkili şekilde yönetmek açısından kritik önem taşır.
            </p>
        </div>
    </div>

    <footer class="footer">
        <h4><a href="index.php">Hekimoglu Attorney Partnership</a></h4>
        <p>Modern iş dünyasının ve hukukun karmaşıklığında, güvenilir bir rehberiniz.</p>
        <ul>
            <li><a href="accessibility.php">Erişilebilirlik</a></li>
            <li><a href="legal.php">Hukuki Bilgiler ve Güvenlik</a></li>
            <li><a href="privacy.php">Gizlilik Politikası</a></li>
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
        
        if (currentPage === 'index.php' || currentPage === '') {
            header.style.backgroundImage = "linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('Pictures/canary-warf.jpg')";
        } else if (currentPage === 'index_tr.php') {
            header.style.backgroundImage = "linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('Pictures/buyuk-dere.png')";
        }
    });
    </script>
</body>
</html>