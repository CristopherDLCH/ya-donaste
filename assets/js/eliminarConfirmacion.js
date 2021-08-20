function confirmacion(e){
    if (confirm("¿Está seguro que desea eliminar esta solicitud?")) {
        return true;
    } else {
        e.preventDefault();
    }
}

let linkDelete = document.querySelectorAll(".contacto-red");

for (let i = 0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener('click', confirmacion);
}