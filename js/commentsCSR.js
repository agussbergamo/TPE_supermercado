"use strict";

const API_URL = "api/comments/6";

let app = new Vue ({
    el: "#app",
    data: {
        titulo: "Comentarios de producto",
        comentarios: [],
    }
});


async function getComments(){
    try{
        let response = await fetch(API_URL);
        let comentarios = await response.json(); 
        app.comentarios = comentarios;
    } catch (e) {
        console.log(e);
    }
}

getComments();
