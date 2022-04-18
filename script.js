// JavaScript source code
document.addEventListener('DOMContentLoaded', function () {
    const nombre = document.getElementsById('Nombre');
    const codigo = document.getElementById('Codigo');
    const btn = document.getElementById('Registrar');
   
    btn.onclick = function () {
        if(nombre.value =='' || codigo.value ==''){
            window.alert('Mal perro')
        }
    }

})