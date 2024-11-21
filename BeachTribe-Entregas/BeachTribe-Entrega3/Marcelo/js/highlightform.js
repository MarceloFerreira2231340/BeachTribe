function highlightForm() {
    const target = document.getElementById('LandingForm');
    
    target.classList.add('highlightform');
    
    setTimeout(() => {
        target.classList.remove('highlightform');
    }, 1000);
}