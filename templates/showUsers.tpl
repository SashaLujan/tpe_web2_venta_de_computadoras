{include 'headerAdmin.tpl'}
<div>
    <p><b>Usuarios registrados</b></p>
</div>
<div>
    {foreach from=$usuarios item=usuario}
        {if {$usuario->nombre != "a"}}
            <div>
                <form action="editar_usuario/{$usuario->id_usuario}" method="POST">
                    <input type="hidden" name="id_usuario" value="{$usuario->id_usuario}">
                    <input class="input-usuario" type="text" readonly="readonly" name="name" value="{$usuario->nombre}">
                    <input class="input-usuario" type="text" readonly="readonly" name="username" value="{$usuario->nombre_usuario}">
                    <select class="select_usuario" name="type">
                        <option selected>{$usuario->tipo}</option>
                        {foreach from=$tipos item=tipo} 
                            <option>{$tipo->tipo}</option>
                        {/foreach}
                    </select>
                    <div>
                        <a class="btn btn-dark" href="eliminar_usuario/{$usuario->id_usuario}"><b>Eliminar</b></a>
                        <button type="submit" class="btn btn-dark"><b>Guardar</b></button>
                    </div>
                </form>
            </div>
        {/if}
    {/foreach}
</div>
{include 'templates/footer.tpl'}