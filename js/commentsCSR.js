"use strict";

let id_prod = document.querySelector("#producto").dataset.id;
let user_role = document.querySelector("#producto").dataset.role;
const API_URL = "api/products/" + id_prod + "/comments";

let commList = new Vue({
  el: "#commList",
  data: {
    titulo: "Comentarios de producto",
    comentarios: [],
    rol: user_role,
  },
  mounted: function(){
    this.getComm();
  },
  methods: {
    filter: async function (event) {
      event.preventDefault();
      let formData = new FormData(form_filtro);
      let puntaje = formData.get("puntaje");
      try {
        let response = await fetch(API_URL + "?puntaje=" + `${puntaje}`);
        let comentarios = await response.json();
        commList.comentarios = comentarios;
      } catch (e) {
        console.log(e);
      }
    },
    orderBy: async function (event) {
      event.preventDefault();
      let formData = new FormData(form_orden);
      let atributo = formData.get("atributo");
      let criterio = formData.get("criterio");
      try {
        let response = await fetch(API_URL + "?sort=" + `${atributo}` + "&order=" + `${criterio}`);
        let comentarios = await response.json();
        commList.comentarios = comentarios;
      } catch (e) {
        console.log(e);
      }
    },
    deleteComm: async function (id_comm) {
      try {;
        let respuesta = await fetch(`api/comments/${id_comm}`, {
          method: "DELETE",
        });
        if (respuesta.ok) {
          console.log("Comentario eliminado");
          getComments();
        }
      } catch (error) {
        console.log(error);
      }
    },
    getComm: async function () {
      try {
        let response = await fetch(API_URL);
        let comentarios = await response.json();
        commList.comentarios = comentarios;
      } catch (e) {
        console.log(e);
      }
    }
  }
});
/*
async function getComments() {
  try {
    let response = await fetch(API_URL);
    let comentarios = await response.json();
    commList.comentarios = comentarios;
  } catch (e) {
    console.log(e);
  }
}

getComments();*/

document.querySelector("#submit-comm").addEventListener("click", postComment);

async function postComment() {
  let formData = new FormData(commForm);
  let texto = formData.get("comentario");
  let puntaje = formData.get("puntaje");

  let id_usuario = document.querySelector("#commForm").dataset.id_usuario;
  let fecha_actual = new Date();

  let commentJSON = {
    id_producto: id_prod,
    id_usuario: id_usuario,
    comentario: texto,
    puntaje: puntaje,
    fecha: (fecha_actual.getFullYear() + "/" + (fecha_actual.getMonth() + 1) + "/" + fecha_actual.getDate()),
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

}



