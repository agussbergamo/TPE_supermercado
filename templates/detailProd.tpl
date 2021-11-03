{include file="templates/header.tpl"}

<h2>Detalle de producto</h2>
<ul>
    <li> Producto: {$product->nom_prod}</li>
    <li> Categoría: {$product->nom_cat}</li>
    <li> Marca: {$product->marca}</li>
    <li> Peso: {$product->peso} {$product->unidad_medida}</li>
    <li> Precio: {$product->precio}</li>
</ul>

<a href="listProd" class="btn btn-outline-primary"> Volver </a>

<div id="app">
    {include file="templates/vue/comments.tpl"}
</div>

<script src="js/commentsCSR.js"></script>
{include file="templates/footer.tpl"}