function switchLanguage(lang) {
    if (lang === 'en') {
        window.location.href = 'index.php';
    } else if (lang === 'tr') {
        window.location.href = 'index_tr.php';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('header-background');
    const currentPage = window.location.pathname.split("/").pop();
    
    if (currentPage === 'index.php' || currentPage === '') {
        header.style.backgroundImage = "linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('canary-warf.jpg')";
    } else if (currentPage === 'index_tr.php') {
        header.style.backgroundImage = "linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('buyuk-dere.png')";
    }
});