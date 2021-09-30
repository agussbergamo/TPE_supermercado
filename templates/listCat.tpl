{include file="templates/header.tpl"}

<h1> {$title} </h1>

<ul>
{foreach from=$categories item=$category}
    <li>
        <a href="viewCat/{$category->nom_cat}">{$category->nom_cat}</a>
    </li>
{/foreach}
</ul>

{include file="templates/footer.tpl"}