
document.addEventListener('DOMContentLoaded', function() {
    const prevButton = document.querySelector('.prevButton');
    const nextButton = document.querySelector('.nextButton');
    const slider = document.querySelector('.slider');
    
    let slideIndex = 0;
    showSlide(slideIndex);
    
    function showSlide(n) {
        const slides = document.querySelectorAll('.slide');
        
        if (n >= slides.length) {
            slideIndex = 0;
        }
        
        if (n < 0) {
            slideIndex = slides.length - 1;
        }
        
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';
        }
        
        slides[slideIndex].style.display = 'block';
    }
    
    prevButton.addEventListener('click', () => {
        showSlide(slideIndex -= 1);
    });
    
    nextButton.addEventListener('click', () => {
        showSlide(slideIndex += 1);
    });
    
    document.getElementById('btnMostrarLogin').addEventListener('click', mostrarLogin);
});