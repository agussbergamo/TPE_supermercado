"use strict";

document.querySelector("#submit-comm").addEventListener("submit", postComm());


async function cargarNuevoSalsero() {
    let formData = new FormData(form);
    let salseroNombre = formData.get("nombre");
    let salseroApellido = formData.get("apellido");
    let salseroCiudad = formData.get("ciudad");
    let salseroTelefono = formData.get("telefono");
    let salseroEmail = formData.get("email");
    let salseroComentarios = formData.get("comentarios");

    let salseroNuevo = {
        nombre: salseroNombre,
        apellido: salseroApellido,
        ciudad: salseroCiudad,
        telefono: salseroTelefono,
        email: salseroEmail,
        comentarios: salseroComentarios,
    };

    try {
        let respuesta = await fetch(URL, {
            method: "POST",
            headers: { "Content-type": "application/json" },
            body: JSON.stringify(salseroNuevo),
        });
        if (respuesta.ok) {
            console.log("Salsero cargado");
            obtenerSalserosAPI();
        }
    } catch (error) {
        console.log(error);
    }
}


function postComm() {

}


let commList = new Vue({
    el: "#commList",
    data: {
        usuario: [],
        comentarios: [],
        puntaje: [],
        fecha: Date.now(),
    }
});