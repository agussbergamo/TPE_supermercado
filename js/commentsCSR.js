"use strict";

let id_prod = document.querySelector("#producto").dataset.id;
let user_role = document.querySelector("#producto").dataset.role;
const API_URL = "api/products/" + id_prod + "/comments";

let commList = new Vue ({
    el: "#commList",
    data: {
        titulo: "Comentarios de producto",
        comentarios: [],
        rol: user_role,
    }
});

async function getComments(){
    try{
        let response = await fetch(API_URL);
        let comentarios = await response.json(); 
        commList.comentarios = comentarios;
    } catch (e) {
        console.log(e);
    }
}

getComments();

document.querySelector("#submit-comm").addEventListener("click", postComment);

async function postComment() {
    let formData = new FormData(commForm);
    let texto = formData.get("comentario");
    let puntaje = formData.get("puntaje");

    let id_usuario = document.querySelector("#commForm").dataset.id_usuario;

    let commentJSON = {
        id_producto : id_prod,
        id_usuario : id_usuario,
        comentario : texto,
        puntaje : puntaje,
        //VER ESTO
        fecha : "2021-11-19",
        /*
        antes de enviar elcomentario  :    $fecha = date("Y-m-d H:i:s");
        y en el campo de la bbdd "datatime" de formato*/
/*
        var f = new Date();
        let fecha = (f.getFullYear() + "/" + (f.getMonth() +1) + "/" + f.getDate());*/

    };

    try {
        let respuesta = await fetch(API_URL, {
            method: "POST",
            headers: { "Content-type": "application/json" },
            body: JSON.stringify(commentJSON),
        });
        if (respuesta.ok) {
            console.log("Comentario cargado");
            getComments();
        }
    } catch (error) {
        console.log(error);
    }


    document.querySelector("#btn-borrar").addEventListener("click", alerta);

    function alerta(){
        alert("hola");
    }

    //ESTO DEBERIA RESOLVERSE MUY FACIL CON VUE (INCLUIDO EL MÉTODO DELETECOMM)
    let botonesBorrar = document.querySelectorAll(".btn-borrar");
    botonesBorrar.forEach(botonBorrar => {
      botonBorrar.addEventListener("click", () => { 
        deleteComment(botonBorrar.dataset.id);
        alert("tocaste el boton con el id");
      })
    });

    async function deleteComment(id) {
        try {
          let respuesta = await fetch(`api/comments/${id}`, {
            method: "DELETE",
          });
          if (respuesta.ok) {
            console.log("Comentario eliminado");
            getComments();
          }
        } catch (error) {
          console.log(error);
        }
      }
}



