
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


});


