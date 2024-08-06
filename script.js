function switchLanguage(lang) {
    var currentPath = window.location.pathname;
    var newPath;
    if (lang === 'en') {
        newPath = currentPath.replace('-TR.php', '.php');
    } else {
        newPath = currentPath.replace('.php', '-TR.php');
    }
    window.location.href = newPath;
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