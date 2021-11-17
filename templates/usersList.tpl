{include file="templates/header.tpl"}

<h2> {$title} </h2>

<ul>
{foreach from=$usuarios item=$usuario}
    <li class=fs-4>{$usuario->usuario} | Rol: {$usuario->rol}
            <a class="btn btn-outline-danger" href="deleteUser/{$usuario->id_usuario}">Borrar usuario</a>
        {if $usuario->rol == "admin"}
            <a class="btn btn-outline-danger" href="downgradeUser/{$usuario->id_usuario}">Quitar permiso adm</a>
        {/if}
        {if $usuario->rol == "user"}
            <a class="btn btn-outline-secondary" href="upgradeUser/{$usuario->id_usuario}">Dar permiso adm</a>
        {/if}
    </li>
{/foreach}
</ul>

{include file="templates/footer.tpl"}