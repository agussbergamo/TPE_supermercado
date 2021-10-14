{include file="templates/header.tpl"}


<h1></h1>

<h1>Editar categoría</h1>
<form action="submitEditCat/{$category->id_cat}" method="post">
    <input type="text" placeholder="Categoría" name="nom_cat" value="{$category->nom_cat}" required>
    <p> ¿Requiere refrigeración? </p>
    <select name="refrig" required>
        <option value="1" {if "1" == $category->refrig} selected {/if}>Si</option>
        <option value="0" {if "0" == $category->refrig} selected {/if}>No</option>
    </select>
    <input type="submit">
</form>

{include file="templates/footer.tpl"}


