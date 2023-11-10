
// Define la función mostrarLogin
function mostrarLogin() {
    var loginDiv = document.getElementById('login');
    loginDiv.classList.remove('hidden');
}

document.addEventListener('DOMContentLoaded', function() {
    var cerrar_login = document.getElementById('cerrar-login');
    var loginDiv = document.getElementById('login');


    // Asigna la función al evento click del botón
    document.getElementById('btnMostrarLogin').addEventListener('click', mostrarLogin);


    cerrar_login.addEventListener('click', function() {
        loginDiv.classList.add('hidden');
    });


    //javascrip para login register

    var registrarse = document.getElementById('registrate-button');
    var registerDiv = document.getElementById('login-register');
    var cerrar_register = document.getElementById('cerrar-login-register');

    registrarse.addEventListener('click', function() {
        loginDiv.classList.add('hidden');
        registerDiv.classList.remove('hidden');
    });

    cerrar_register.addEventListener('click', function() {
        registerDiv.classList.add('hidden');
        loginDiv.classList.remove('hidden');
    });

    document.getElementById('btnMostrarLogin').addEventListener('click', mostrarLogin);

    //javascrip para el slider
    const prevButton = document.querySelector('.prevButton');
    const nextButton = document.querySelector('.nextButton');
    const slider = document.querySelector('.slider');
    let slideIndex = 0;
    let autoSlider;

    // Ocultar todas las imágenes al inicio
    document.querySelectorAll('.slide').forEach(slide => {
        slide.style.display = 'none';
    });

    // Mostrar la primera imagen
    document.querySelector('.slide').style.display = 'block';

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

    function startAutoSlider() {
        autoSlider = setInterval(() => {
            showSlide(slideIndex += 1);
        }, 5000); // Cambia la imagen cada 5 segundos (5000 milisegundos)
    }

    startAutoSlider(); // Comienza el slider automático

    prevButton.addEventListener('click', () => {
        clearInterval(autoSlider); // Detiene el slider automático al hacer clic
        showSlide(slideIndex -= 1);
        startAutoSlider(); // Reinicia el slider automático
    });

    nextButton.addEventListener('click', () => {
        clearInterval(autoSlider); // Detiene el slider automático al hacer clic
        showSlide(slideIndex += 1);
        startAutoSlider(); // Reinicia el slider automático
    });




    //javascript para navbar

    var MenuButton = document.getElementById('MenuButton');
    var NavMenu = document.getElementById('NavBar');
    var cerrarNavBar = document.getElementById('cerrar-navBar');

    MenuButton.addEventListener('click', function() {
        NavMenu.classList.remove('hidden');
    });

    cerrarNavBar.addEventListener('click', function() {
        NavMenu.classList.add('hidden');
    });

});


