{include file="templates/header.tpl"}

<h2>Lista de productos de la categoría {$title}</h2>

<ul>
{foreach from=$products item=$product}
    <li class=fs-5> {$product->nom_prod}</li>
{/foreach}
</ul>

<a class="btn btn-outline-primary" href="listCat"> Volver </a>

{include file="templates/footer.tpl"}


