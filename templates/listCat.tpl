{include file="templates/header.tpl"}

<h2>{$title}</h2>

<ul>
{foreach from=$categories item=$category}
    <li>
        <a class=fs-4 href="viewCat/{$category->nom_cat}">{$category->nom_cat}</a>
            <a class="btn btn-outline-danger" href="deleteCat/{$category->id_cat}">Borrar</a>
            <a class="btn btn-outline-secondary" href="editCat/{$category->id_cat}">Editar</a>
    </li>
{/foreach}
</ul>

<h3>Agregar categoría</h3>
<form action="addCat" method="post">
    <input type="text" placeholder="Categoría" name="nom_cat" required class="form-control form-control-lg">
    <p> ¿Requiere refrigeración? </p>
    <select name="refrig" required class="form-control form-control-lg">
        <option value="1">Si</option>
        <option value="0">No</option>
    </select>
    <input type="submit" class="btn btn-primary">
</form>

{include file="templates/footer.tpl"}
