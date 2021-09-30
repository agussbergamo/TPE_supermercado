{include file="templates/header.tpl"}

<h2>{$title}</h2>

<ul>
{foreach from=$category item=$product}
    <li> {$product->nom_prod}</li>
{/foreach}
</ul>

<a href="home"> Volver </a>

{include file="templates/footer.tpl"}


