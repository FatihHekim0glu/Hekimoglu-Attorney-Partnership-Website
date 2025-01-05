<?php
$pageTitle = "Gayrimenkul"; 
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
                Gayrimenkul Hukuku, insanlık tarihi boyunca en önemli hukuk alanlarından biri olmuştur. Toprak mülkiyeti, 
                geliştirme ve kullanımın düzenlenmesi; ekonomik büyüme ve toplumsal kalkınma açısından büyük öneme sahiptir. 
                Ancak günümüz hukuk piyasalarında, gayrimenkul konusunun karmaşık yapısını derinlemesine anlayacak uzman 
                profesyonellerin sayısında ciddi bir azalma söz konusudur.
            </p>

            <p>
                Hekimoğlu Avukatlık Ortaklığı olarak, stratejik ve titiz bir yaklaşımla gayrimenkul odaklı davaları ve işlemleri 
                ele alan, deneyimli ve yüksek donanımlı bir ekiple bu boşluğu dolduruyoruz. İnşaat projelerinin başlangıcından 
                mülkiyet devri ve uyuşmazlıkların çözümüne kadar tüm aşamalarda sunduğumuz hizmetlerle, müvekkillerimizin menfaatlerini 
                her adımda güvence altına alıyoruz.
            </p>

            <!-- Ana Hizmetler Başlığı -->
            <h3>Gayrimenkul Hukuku Kapsamındaki Uzmanlık Alanlarımız</h3>
            <p><em>Hizmetlerimiz, ancak bunlarla sınırlı kalmamak kaydıyla şu başlıkları içerir:</em></p>

            <!-- İşlemsel Faaliyetler -->
            <h4>1. İşlemsel Faaliyetler</h4>

            <!-- Kat Karşılığı İnşaat Sözleşmeleri -->
            <h5>Kat Karşılığı İnşaat Sözleşmeleri</h5>
            <p>
                Projelerin yapılandırılması, sözleşmenin hazırlanması ve müzakeresi aşamalarında uçtan uca hukuki rehberlik sağlıyoruz. 
                Bu sayede proje paydaşlarının hakları koruma altına alınırken, inşaat sürecinin de sorunsuz ilerlemesi hedeflenir.
            </p>

            <!-- İnşaat Danışmanlığı -->
            <h5>İnşaat Danışmanlığı</h5>
            <p>
                İnşaat firmalarına, mevzuata uyum ve proje yönetimi dahil olmak üzere geniş bir yelpazede danışmanlık hizmetleri 
                sunuyoruz. Ruhsat, yapı denetimi, sözleşme yönetimi gibi konularda karmaşık yasal süreçleri kolaylaştırarak 
                projenin etkin ve düzenli bir şekilde yürütülmesini sağlıyoruz.
            </p>

            <!-- Toprak Kiralama & Kullanım Hakkı Sözleşmeleri -->
            <h5>Toprak Kiralama &amp; Kullanım Hakkı Sözleşmeleri</h5>
            <p>
                Arazi ve taşınmazların uzun vadede kârlı ve sürdürülebilir şekilde değerlendirilmesi amacıyla sözleşmeleri 
                oluşturuyor, gözden geçiriyor ve müzakere ediyoruz. Bu yaklaşım, müvekkillerimizin arazileri üzerinde azami 
                faydayı elde etmelerini sağlarken, hukuki güvence de temin eder.
            </p>

            <!-- Taşınmaz Kiralama Sözleşmeleri -->
            <h5>Taşınmaz Kiralama Sözleşmeleri</h5>
            <p>
                Kira bedeli, süre, sorumluluklar ve benzeri kritik şartları net biçimde belirleyen kapsamlı sözleşmeler hazırlıyoruz. 
                Hem kiralayanın hem de kiracının haklarını gözeten bu düzenlemeler, olası uyuşmazlıkları en aza indirir.
            </p>

            <!-- Taşınmaz Satış Sözleşmeleri -->
            <h5>Taşınmaz Satış Sözleşmeleri</h5>
            <p>
                Due diligence sürecinden nihai satış aşamasına kadar satış işlemlerini hukuki açıdan yapılandırıyor, gerekli 
                tüm prosedürlerin mevzuata uygun şekilde ilerlemesini sağlıyoruz. Böylece müvekkillerimizin mülkiyet hakları 
                ve finansal menfaatleri koruma altında tutulur.
            </p>

            <!-- İşlemsel Olmayan Faaliyetler -->
            <h4>2. İşlemsel Olmayan Faaliyetler</h4>

            <!-- Uyuşmazlık Takibi ve Dava Süreçleri -->
            <h5>Uyuşmazlık Takibi &amp; Dava Süreçleri</h5>
            <p>
                Mülkiyet, kullanım veya geliştirme haklarından kaynaklanan anlaşmazlıklarda etkin temsil ve dava stratejileri 
                sunuyoruz. Arabuluculuk veya dava yoluyla çözüme giderek, müvekkillerimizin hakkını en iyi şekilde savunmayı 
                hedefliyoruz.
            </p>

            <!-- Kamulaştırma İşlemleri -->
            <h5>Kamulaştırma İşlemleri</h5>
            <p>
                Zorunlu alım süreçlerinde takipçi ve kararlı bir yaklaşım benimsiyoruz. Müvekkillerimizin adil tazminat almasını 
                sağlamak ve mülkiyet haklarını savunmak amacıyla, ilgili kurumlar nezdinde yürütülen müzakerelerden yargı 
                süreçlerine kadar her aşamada etkin hukuki destek veriyoruz.
            </p>
        </div>
    </div>

    <footer class="footer">
        <h4><a href="index.php">Hekimoglu Attorney Partnership</a></h4>
        <p>Your trusted legal partner in navigating the complexities of modern business and law.</p>
        <ul>
            <li><a href="../Main-Nav-Pages/accessibility-TR.php">Accessibility</a></li>
            <li><a href="../Main-Nav-Pages/legal-TR.php">Legal and Security</a></li>
            <li><a href="../Main-Nav-Pages/privacy-TR.php">Privacy Policy</a></li>
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
        
        if (currentPage === '../index_tr.php' || currentPage === '') {
            header.style.backgroundImage = "linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('Pictures/canary-warf.jpg')";
        } else if (currentPage === 'index_tr.php') {
            header.style.backgroundImage = "linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('Pictures/buyuk-dere.png')";
        }
    });
    </script>
</body>
</html>