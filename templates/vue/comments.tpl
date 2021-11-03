{literal}

<h2> {{titulo}} </h2>

<ul>
    <li v-for="comentario in comentarios"> {{comentario.usuario}} : {{comentario.comentario}} - {{comentario.puntaje}}</li>
</ul>

{/literal}