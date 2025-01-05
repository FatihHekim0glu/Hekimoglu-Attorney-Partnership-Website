<?php
$pageTitle = "Şirket Danışmanlığı"; 
$headerImage = "../Pictures/company-consultancy.jpg"; 
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
                                <a href="../Practice-Areas-Nav-Pages/corporate-support-TR.php">Kurumsal Destek</a>
                                <a href="../Practice-Areas-Nav-Pages/competition-antitrust-TR.php">Rekabet Hukuku</a>
                                <a href="../Practice-Areas-Nav-Pages/labor-employment-TR.php">İşveren-İşçi</a>
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
                Hızla küreselleşen ekonomi ve artan rekabet ortamında, şirketlerin yasal zeminde istikrarlı bir şekilde büyümesi
                ve faaliyetlerini sürdürebilmesi için kapsamlı bir danışmanlık hizmeti hayati önem taşır. Türkiye gibi dinamik
                ticari sistemlere sahip ülkelerde, değişen mevzuat ve piyasa koşullarıyla uyum sağlamak, şirketler için stratejik
                bir avantaj haline gelir.
            </p>

            <p>
                Hekimoğlu Avukatlık Ortaklığı olarak, şirketlerin her aşamada ihtiyaç duyduğu hukuki ve stratejik desteği
                sağlıyor, uzun vadeli vizyonlarını güçlendirecek çözümler sunuyoruz. Ekibimiz, şirket kuruluşlarından birleşme
                ve devralmalara, kapanma ve tasfiye süreçlerinden, kurumsal yönetim danışmanlığına kadar geniş bir yelpazede
                uzmanlık sahibidir.
            </p>

            <!-- Ana Hizmetler Başlığı -->
            <h3>Şirket Danışmanlığı Kapsamındaki Uzmanlık Alanlarımız</h3>
            <p><em>Hizmetlerimiz, ancak bunlarla sınırlı kalmamak kaydıyla şu alanlarda yoğunlaşır:</em></p>

            <!-- 1) Şirket Kuruluş & Yapısal Dönüşümler -->
            <h4>1. Şirket Kuruluş &amp; Yapısal Dönüşümler</h4>
            <p>
                Yeni şirketlerin kurulması, devralma, bölünme, birleşme ve tasfiye süreçlerinde uçtan uca danışmanlık veriyoruz.
                Yasal düzenlemelere tam uyum sağlayarak, gerekli belge ve prosedürleri eksiksiz hazırlıyor; böylece olası
                riskleri en aza indiriyoruz.
            </p>

            <!-- 2) İç Sözleşmelerin Düzenlenmesi -->
            <h4>2. İç Sözleşmelerin Düzenlenmesi</h4>
            <p>
                Hissedar sözleşmeleri, yönetim kurulu protokolleri ve diğer şirket içi düzenlemelerde, hem kurumsal ilkelerin
                hem de yasal gerekliliklerin karşılandığından emin oluruz. Bu yaklaşım, şirket içi anlaşmazlıkların
                önlenmesinde ve etkin yönetişimin sağlanmasında kritik rol oynar.
            </p>

            <!-- 3) Hizmet Sözleşmeleri -->
            <h4>3. Hizmet Sözleşmeleri</h4>
            <p>
                Şirketlerin çalışanlarla veya dış tedarikçilerle imzaladığı hizmet sözleşmelerini mevzuata uygun şekilde
                hazırlarız. Böylece tarafların hak ve sorumlulukları net biçimde belirlenir ve sözleşmeden kaynaklanabilecek
                uyuşmazlıklar en aza iner.
            </p>

            <!-- 4) Kurumsal Uyuşmazlıklar & Adli Faaliyetler -->
            <h4>4. Kurumsal Uyuşmazlıklar &amp; Adli Faaliyetler</h4>
            <p>
                Ortaklar arasındaki anlaşmazlıklar, şirket içi yönetişim sorunları veya hizmet sözleşmelerinden doğan
                itilaflar gibi konularda hukuki rehberlik sunuyor, müvekkillerimizin çıkarlarını korumak için dava ve
                arabuluculuk süreçlerini yürütüyoruz.
            </p>
        </div>
    </div>

    <footer class="footer">
        <h4><a href="index.php">Hekimoglu Attorney Partnership</a></h4>
        <p>Karmaşık ticari ve hukuki süreçlerde güvenilir rehberiniz.</p>
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