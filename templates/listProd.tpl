{include file="templates/header.tpl"}

<h1> {$title} </h1>

<ul>
{foreach from=$products item=$product}
    <li>
        <a href="viewProd/{$product->id_prod}">{$product->nom_prod}</a> --> {$product->nom_cat}
        <a href="deleteProd/{$product->id_prod}">Borrar</a>
        <a href="editProd/{$product->id_prod}">Editar</a>
    </li>
{/foreach}
</ul>

<h1>Agregar producto</h1>
<form action="addProd" method="post">
    <input type="text" placeholder="Producto" name="nom_prod" required>
    <input type="text" placeholder="Marca" name="marca" required>
    <input type="number" placeholder="Peso" name="peso" required>
    <select name="unidad_medida" required>
        <option value="gr">Gramos</option>
        <option value="ml">Mililitros</option>
    </select>
    <input type="number" placeholder="Precio" name="precio" required>
    <select name="id_cat" required>
        {foreach from=$categories item=$category}
            <option value="{$category->id_cat}">{$category->nom_cat}</option>
        {/foreach})
    </select>
    <input type="submit">
</form>

{include file="templates/footer.tpl"}
