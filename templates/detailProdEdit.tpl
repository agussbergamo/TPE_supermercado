{include file="templates/header.tpl"}

<h2>Detalle de producto</h2>

<form action="submitEdit/{$product->id_prod}" method="post">
    <ul>
        <li> Producto: {$product->nom_prod}</li><input type="text" placeholder="Producto" name="nom_prod" required>
        <li> Categoría: {$product->nom_cat}</li><select name="id_cat" required>
                                                    <option value="1">Almacén</option>
                                                    <option value="2">Lácteos</option>
                                                    <option value="3">Bebidas</option>
                                                    <option value="4">Limpieza</option>
                                                    <option value="5">Congelados</option>
                                                    <option value="6">Perfumería</option>
                                                </select>    
        <li> Marca: {$product->marca}</li><input type="text" placeholder="Marca" name="marca" required>
        <li> Peso: {$product->peso}</li><input type="number" placeholder="Peso" name="peso" required>
        <li> Unidad de medida:{$product->unidad_medida}</li><select name="unidad_medida" required>
                                                                <option value="gr">Gramos</option>
                                                                <option value="ml">Mililitros</option>
                                                            </select>
        <li> Precio: {$product->precio}</li><input type="number" placeholder="Precio" name="precio" required>
    </ul>
    <input type="submit">
</form>

<a href="listProd"> Volver </a>

{include file="templates/footer.tpl"}
