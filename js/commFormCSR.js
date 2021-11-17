"use strict";

let id_producto = document.querySelector("#producto").dataset.id;
const API_URL = "api/products/" + id_producto + "/comments";

let commList = new Vue ({
    el: "#commList",
    data: {
        titulo: "Comentarios de producto",
        comentarios: [],
        fecha: Date.now(),
    }
});