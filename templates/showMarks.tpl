{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'headerAdmin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    <div class="tituloVerComp">
        <p><b>MARCAS</b></p>
    </div>
{/if}
{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    <div class="btn_alta">
        <h4><a class="btn btn-danger" href="agregarMarca"><b>Alta</b></a></h4>
    </div>
{/if}
<div class="conteiner contenedor_marca">
    {foreach from=$listaMarca item=marca} 
        <div class="contenedor">
            <div class="centrar">
                <b class="nombre">{$marca->nombre} marca</b>
            </div>
            {if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
                <div class="centrar">
                    <a class="btn btn-danger" href="marca_comp/{$marca->id_marca}"><b>Ver Computadora/b></a>
                </div>          
            {/if}
            {if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
                <div class="centrar">
                    <a class="btn btn-danger" href="editarMarca/{$marca->id_marca}"><b>Modificar</b></a>
                    <a class="btn btn-danger" href="eliminarMarca/{$marca->id_marca}"><b>Baja</b></a>
                </div>          
            {/if}

        </div>    
    {/foreach}   
</div>
{include 'templates/footer.tpl'}