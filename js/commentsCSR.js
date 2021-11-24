"use strict";

let id_prod = document.querySelector("#producto").dataset.id;
let user_role = document.querySelector("#producto").dataset.role;
let id_user = document.querySelector("#producto").dataset.id_usuario;
const API_URL = "api/products/" + id_prod + "/comments";

let commList = new Vue({
  el: "#commList",
  data: {
    titulo: "Comentarios de producto",
    comentarios: [],
    rol: user_role,
    id_usuario : id_user,
  },
  mounted: function(){
    this.getComm();
  },
  methods: {
    filter: async function () {
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
    orderBy: async function () {
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
      try {
        let respuesta = await fetch(`api/comments/${id_comm}`, {
          method: "DELETE",
        });
        if (respuesta.ok) {
          this.getComm();
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
    },
    postComm: async function (){
      let formData = new FormData(commForm);
      let texto = formData.get("comentario");
      let puntaje = formData.get("puntaje");
      let fecha_actual = new Date();
    
      let commentJSON = {
        id_producto: id_prod,
        id_usuario: id_user,
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
          this.getComm();
        }
      } catch (error) {
        console.log(error);
      }
    }
  }
});






