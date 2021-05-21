


$(document).ready(function () {
    cargarUsuarios();
});

function cargarUsuarios() {
    $.get("/alejandro-roman-final/public/obtenerUsuarios", {}, function (r) {
        console.dir(Array.from(JSON.parse(r)));
        usuarios = Array.from(JSON.parse(r));
        tbody = "";
        usuarios.forEach(usuario => {
            if (usuario.roles[0] == null) {
                usuario.roles[0] = "ROLE_USER";
            }
            row = `<tr><td>${usuario.username
                }</td><td>${usuario.roles[0]
                }</td><td><button class="btn btn-outline-danger" onclick="borrarUsuario(${usuario.id
                })">Delete</button></td></tr>`;
            tbody += row;
        })
        document.getElementById("bodyTabla").innerHTML = tbody;
        $('#tabla').DataTable();
    })
}

function borrarUsuario(idUser) {
    $.post("/alejandro-roman-final/public/borrarUsuario", {
        "data": idUser
    }, function (r) {
        if (r === "Usuario Borrado") {
            cargarUsuarios();
            alertify.success("User Deleted");
        }
    })
}
