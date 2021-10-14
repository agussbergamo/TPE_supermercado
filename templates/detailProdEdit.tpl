{include file="templates/header.tpl"}

<h2>Modificar producto</h2>

<form action="submitEditProd/{$product->id_prod}" method="post">
    <ul>
        <li> Producto: {$product->nom_prod}</li><input type="text" placeholder="Producto" name="nom_prod" value="{$product->nom_prod}" required class="form-control form-control-lg">
        <li> Categoría: {$product->nom_cat}</li><select name="id_cat" required class="form-control form-control-lg">
                                                    {foreach from=$categories item=$category}
                                                        <option value="{$category->id_cat}" {if $product->id_cat == $category->id_cat} selected {/if}>{$category->nom_cat}</option>
                                                    {/foreach})
                                                </select>                                            
        <li> Marca: {$product->marca}</li><input type="text" placeholder="Marca" name="marca" value="{$product->marca}" required class="form-control form-control-lg">
        <li> Peso: {$product->peso}</li><input type="number" placeholder="Peso" name="peso" value="{$product->peso}" required class="form-control form-control-lg">
        <li> Unidad de medida:{$product->unidad_medida}</li><select name="unidad_medida" required class="form-control form-control-lg">
                                                                <option value="gr" {if "gr" == $product->unidad_medida} selected {/if}>Gramos</option>
                                                                <option value="ml" {if "ml" == $product->unidad_medida} selected {/if}>Mililitros</option>
                                                            </select>
        <li> Precio: {$product->precio}</li><input type="number" placeholder="Precio" name="precio" value="{$product->precio}" required class="form-control form-control-lg">
    </ul>
    <input type="submit" class="btn btn-primary">
</form>

<a href="listProd" class="btn btn-outline-primary"> Volver </a>

{include file="templates/footer.tpl"}