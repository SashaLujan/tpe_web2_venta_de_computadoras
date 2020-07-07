"use strict"

//definimos la app Vue, si es admin agrega el boton de eliminar
let app = new Vue({
    el: "#app-comments",
    data: {
        comentarios: [],
        promedio: 0,
        admin: 0,
    },
    methods: {
        delComment: function (id_com) {
            fetch('api/comentario/' + id_com, {
                method: 'DELETE',

            })
                .then(response => {
                    printComments(response);
                })
                .catch(error => console.log(error));
        }
    }
})

//muestra un formulario para agregar comentario 
//y lo muestra si el usuario esta registrado
//entonces ejecuta la funcion addComment
let app_form = new Vue({
    el: "#app-form-comments",
    data: {
        usuario_reg: 0,
        nombre_usuario: "",
        id_computadora: 0
    },
    methods: {
        addComment: function () {
            if (document.querySelector("select[name=puntuacion]").value == 0
                || document.querySelector("textarea[name=comentario]").value == "") {
                alert("Complete los dos campos");
            }
            else {
                let data = {
                    comentario: document.querySelector("textarea[name=comentario]").value,
                    usuario: document.querySelector("input[name=usuario]").value,
                    fecha: document.querySelector("input[name=fecha]").value,
                    puntaje: document.querySelector("select[name=puntuacion]").value,
                    id_computadora: document.querySelector("input[name=computadora]").value
                }
                fetch('api/comentario', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(data)
                })
                    .then(response => {
                        printComments(response);
                    })
                    .catch(error => console.log(error));
            }
        }
    }
})

printComments();
printFormAddComment();

function addComment(e) {
    e.preventDefault();

    let data = {
        comentario: document.querySelector("textarea[name=comentario]").value,
        usuario: document.querySelector("input[name=usuario]").value,
        fecha: document.querySelector("input[name=fecha]").value,
        puntaje: document.querySelector("select[name=puntuacion]").value,
        id_computadora: document.querySelector("input[name=computadora]").value
    }
    fetch('api/comentario', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })
        .then(response => {
            printComments();
        })
        .catch(error => console.log(error));
}

function printComments() {

    let id_computadora = document.querySelector("input[name=computadora]").value;
    let tipo_usuario = document.querySelector("input[name=usuario]").value;
    //alert(tipo_usuario);
    let suma = 0;
    let cont = 0;

    fetch('api/computadoras/' + id_computadora + '/comentarios')
        .then(response => response.json())
        .then(comentarios => {

            // asigno los comentarios de una computadora que me devuelve la API
            app.comentarios = comentarios;
            for (let comentario of comentarios) {
                suma += parseInt(comentario.puntaje, 10);
                cont++;
            }
            app.promedio = parseFloat(suma / cont).toFixed(2);
            if (tipo_usuario == "administrador") {
                app.admin = 1;
            }
        });
}

//funcion que muestra el form para guardar el comentario
function printFormAddComment() {
    let tipo_usuario = document.querySelector("input[name=tipo_usuario]").value;
    let nombre_usuario = document.querySelector("input[name=nombre_usuario]").value;
    let id_computadora = document.querySelector("input[name=id_computadora]").value;
    if (tipo_usuario == "usuario") {
        app_form.usuario_reg = 1;
        app_form.nombre_usuario = nombre_usuario;
        app_form.id_computadora = id_computadora;
    }
}
