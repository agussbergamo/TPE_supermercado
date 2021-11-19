{literal}

<h2> {{titulo}} </h2>


<ul>
    <li v-for="comentario in comentarios"> Usuario: {{comentario.usuario}} - Comentario: {{comentario.comentario}} - Puntaje : {{comentario.puntaje}}
    <a v-if="rol == 'admin'" data-id="comentario.id" class="btn btn-outline-danger btn-borrar">Borrar</a></li>
</ul>

{/literal}