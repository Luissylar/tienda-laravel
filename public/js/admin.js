document.addEventListener('DOMContentLoaded', function() {
    var MenuAdminButon =  document.getElementById('MenuAdmin');
    var siderBarAdmin =  document.getElementById('siderBarAdmin');

    

    MenuAdminButon.addEventListener('click', function() {
        siderBarAdmin.classList.add('hidden');
    });
    
});