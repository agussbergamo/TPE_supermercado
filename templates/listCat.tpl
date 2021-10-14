{include file="templates/header.tpl"}

<h1> {$title} </h1>

<ul>
{foreach from=$categories item=$category}
    <li>
        <a href="viewCat/{$category->nom_cat}">{$category->nom_cat}</a>
            <a href="deleteCat/{$category->id_cat}">Borrar</a>
            <a href="editCat/{$category->id_cat}">Editar</a>
    </li>
{/foreach}
</ul>

<h1>Agregar categoría</h1>
<form action="addCat" method="post">
    <input type="text" placeholder="Categoría" name="nom_cat" required>
    <p> ¿Requiere refrigeración? </p>
    <select name="refrig" required>
        <option value="1">Si</option>
        <option value="0">No</option>
    </select>
    <input type="submit">
</form>

{include file="templates/footer.tpl"}
