{include 'header.tpl'}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    <div>
        <p><b>MARCAS</b></p>
    </div>
{/if}
{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    <div>
        <h4><a class="btn btn-danger" href="agregarMarca"><b>Alta</b></a></h4>
    </div>
{/if}
<div>
    {foreach from=$listaMarca item=marca} 
        <div>
            <div>
                <b class="nombre">{$marca->nombre}</b>
            </div>
            {if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
                <div>
                    <a class="btn btn-danger" href="marca_comp/{$marca->id_marca}"><b>Ver Computadora</b></a>
                </div>          
            {/if}
            {if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
                <div>
                    <a class="btn btn-danger" href="editarMarca/{$marca->id_marca}"><b>Modificar</b></a>
                    <a class="btn btn-danger" href="eliminarMarca/{$marca->id_marca}"><b>Baja</b></a>
                </div>          
            {/if}

        </div>    
    {/foreach}   
</div>
{include 'templates/footer.tpl'}