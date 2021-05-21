
document.getElementById('buscador').addEventListener("keyup", () => {
    $.post("/alejandro-roman-final/public/buscarUsuario", {
        "data": document.getElementById('buscador').value,
    }, function (usuarios) {

        var nombresUsuario = usuarios.replace('[', '').replace(']', '').replaceAll('\"', '').split(',');
        var options = '';
        nombresUsuario.forEach(usuario => {
            options += `<option value='${usuario}'></option>`;
        });
        document.getElementById("usuarios").innerHTML = options;

    });
})

document.getElementById('buscar').addEventListener('click', () => {
    event.preventDefault();         //paro el envio de formulario

    var username = document.getElementById('buscador').value;
    document.getElementById('formuBuscar').action = "/alejandro-roman-final/public/users/" + username;
    document.getElementById('formuBuscar').submit();
})
