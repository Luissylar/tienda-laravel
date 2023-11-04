
// Define la función mostrarLogin
function mostrarLogin() {
    var loginDiv = document.getElementById('login');
    loginDiv.classList.remove('hidden');
}


document.addEventListener('DOMContentLoaded', function() {
    // Asigna la función al evento click del botón
    document.getElementById('btnMostrarLogin').addEventListener('click', mostrarLogin);
});



