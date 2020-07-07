{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'headerAdmin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
{*{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
{if {$type == "administrador"}}
    <div>
        {if {$error}}
            <div>
                {$error}
            </div>
        {/if}
    </div>
{/if}
    {foreach from=$listaMarca item=marca} 
    <div class="contenedor">
        <b class="nombre">{$marca->nombre_marca}</b>
        {if {$type != "administrador"}} {*SI NO ES UN ADMINISTRADOR*}
            <a class="btn btn-dark" href="marca_comp/{$marca->id_marca}"><b>Ver Computadoras</b></a>
        {/if}
        {if {$type == "administrador"}} {*SI ES UN ADMINISTRADOR*}
            <a class="btn btn-dark" href="editarMarca/{$marca->id_marca}"><b>Modificar</b></a>
            <a class="btn btn-dark" href="eliminarMarca/{$marca->id_marca}"><b>Baja</b></a>
            <a class="btn btn-dark" href="agregarMarca"><b>Alta</b></a>
        {/if}
    </div>
    {/foreach}
{include 'templates/footer.tpl'}