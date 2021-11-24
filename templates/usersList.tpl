{include file="templates/header.tpl"}

<div class="text-center">
    <h1 class="display-2"> {$title} </h1>
</div>

<ul class="list-group">
{foreach from=$usuarios item=$usuario}
    <li class="list-group-item d-flex justify-content-between align-items-center">{$usuario->usuario} | Rol: {$usuario->rol}
        <div>
            {if $usuario_registrado != $usuario->id_usuario}
                <a class="btn btn-outline-danger" href="deleteUser/{$usuario->id_usuario}">Borrar usuario</a>
            {/if}    
            {if $usuario->rol == "admin" && $usuario_registrado != $usuario->id_usuario}
                <a class="btn btn-outline-danger" href="downgradeUser/{$usuario->id_usuario}">Quitar permiso adm</a>
            {/if}
            {if $usuario->rol == "user" && $usuario_registrado != $usuario->id_usuario}
                <a class="btn btn-outline-secondary" href="upgradeUser/{$usuario->id_usuario}">Dar permiso adm</a>
            {/if}
        </div>
    </li>
{/foreach}
</ul>

{include file="templates/footer.tpl"}