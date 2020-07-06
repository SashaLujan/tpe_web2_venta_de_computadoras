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
    <table>
        <h4><a class="btn btn-dark" href="agregarMarca"><b>Alta</b></a></h4>
    </table>
{/if}
<table>
    {foreach from=$listaMarca item=marca} 
        <tr>
            <td>
                <b class="nombre">{$marca->nombre_marca}</b>
            </td>
            {if {$type != "administrador"}} {*SI NO ES UN ADMINISTRADOR*}
                <td>
                    <a class="btn btn-dark" href="marca_comp/{$marca->id_marca}"><b>Ver Computadoras</b></a>
                </td>          
            {/if}
            {if {$type == "administrador"}} {*SI ES UN ADMINISTRADOR*}
                <td>
                    <a class="btn btn-dark" href="editarMarca/{$marca->id_marca}"><b>Modificar</b></a>
                    <a class="btn btn-dark" href="eliminarMarca/{$marca->id_marca}"><b>Baja</b></a>
                </td>
            {/if}
        </tr>
    {/foreach}
</table>
{include 'templates/footer.tpl'}