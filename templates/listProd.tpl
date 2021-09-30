{include file="templates/header.tpl"}

<h1> {$title} </h1>

<ul>
{foreach from=$products item=$product}
    <li>
        <a href="viewProd/{$product->id_prod}">{$product->nom_prod}</a> --> {$product->nom_cat}
    </li>
{/foreach}
</ul>

{include file="templates/footer.tpl"}
