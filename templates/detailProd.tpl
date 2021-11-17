{include file="templates/header.tpl"}

<div id="producto" data-id="{$product->id_prod}" data-role="{$rol}" data-id_user="{$id_usuario}">
<h2>Detalle de producto</h2>
<ul>
    <li> Producto: {$product->nom_prod}</li>
    <li> Categoría: {$product->nom_cat}</li>
    <li> Marca: {$product->marca}</li>
    <li> Peso: {$product->peso} {$product->unidad_medida}</li>
    <li> Precio: {$product->precio}</li>
</ul>

<a href="listProd" class="btn btn-outline-primary"> Volver </a>

<div id="commList">
    {include file="templates/vue/comments.tpl"}
</div>


{IF ROL }
SE MUESTRA EL form
NO GENERAR UN TPL APARTE PARA EL form

LUEGO, EL POST LE LLEGA A JS, QUE LO CODEA COMO JSON Y DEVUELVE

!!! NO OLVIDAR CAMBIAR TODOS LOS CHECKLOGGEDIN PARA ADAPTARLOS A QUE AHORA $LOGGED ES UN ARREGLO SESSION COMPLETO

<div id="commForm">
    {include file="templates/vue/commForm.tpl"}
</div>

</div>
<script src="js/commentsCSR.js"></script>
<script src="js/commFormCSR.js"></script>

{include file="templates/footer.tpl"}

