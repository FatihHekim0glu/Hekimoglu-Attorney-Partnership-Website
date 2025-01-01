function switchLanguage(lang) {
    // Always stay on current page, just reload
    window.location.reload();
}

document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('header-background');
    const currentPage = window.location.pathname.split("/").pop();
    
    // Set header image based on page
    const headerImages = {
        'index.php': 'Pictures/canary-warf.jpg',
        'capital-markets.php': 'Pictures/capital-markets.jpg',
        'banking-finance.php': 'Pictures/banking.jpg',
        'competition-antitrust.php': 'Pictures/competition.jpg',
        'corporate-support.php': 'Pictures/corporate.jpg',
        'global-trade.php': 'Pictures/trade.jpg',
        'intellectual-property.php': 'Pictures/ip.jpg',
        'real-estate.php': 'Pictures/real-estate.jpg',
        'wealth-management.php': 'Pictures/wealth.jpg'
    };

    if (headerImages[currentPage]) {
        header.style.backgroundImage = `linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('${headerImages[currentPage]}')`;
    }
});