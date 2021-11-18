{literal}

<h2> {{usuario}} </h2>

<form action="submitComm" method="post">
    
    <input type="text" name="comentario" placeholder="Comentario">
    <input type="number" name="puntaje" placeholder="Puntaje">

Suponemos que usuario y fecha tienen que estar acá para que se mande todo por POST.
O generar el date por php y buscar el usuario por session de alguna manera.
¿Qué se tiene que generar desde js?

    <input type="submit" name="enviar">
</form>



{/literal}