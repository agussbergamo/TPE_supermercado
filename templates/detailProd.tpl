{include file="templates/header.tpl"}

<div class="card bg-primary p-2 text-black bg-opacity-50" style="width: 18rem;" id="producto" data-id="{$product->id_prod}" data-role="{$rol}">
  <img class="card-img-top" src="{$product->imagen}">
  <div class="card-body">
    <h5 class="card-title">Detalle de producto</h5>
    <ul>
        <li> Producto: {$product->nom_prod}</li>
        <li> Categoría: {$product->nom_cat}</li>
        <li> Marca: {$product->marca}</li>
        <li> Peso: {$product->peso} {$product->unidad_medida}</li>
        <li> Precio: {$product->precio}</li>
    </ul>
  </div>
</div>

<a href="listProd" class="btn btn-outline-primary"> Volver </a>

<div id="commList">
    {include file="templates/vue/comments.tpl"}
</div>

{if $rol == "user" || $rol == "admin"}
<h2>Agregar comentario de producto</h2>
  <form id="commForm" data-id_usuario="{$id_usuario}">
    <h5>Bienvenido</h5>
    <p name="usuario">{$usuario}</p>
    <div class="mb-3">
      <label class="form-label">Comentario</label>
      <input type="text" name="comentario" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Puntaje</label>
      <input type="text" name="puntaje" class="form-control">
    </div>
    <input id="submit-comm" type="submit" class="btn btn-primary">
  </form>
{/if}

</div>
<script src="js/commentsCSR.js"></script>

{include file="templates/footer.tpl"}

