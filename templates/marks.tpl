{include 'header.tpl'}
    {if {!$esAdmin}} {*SI NO ES UN ADMINISTRADOR*}
        <div class="titulo_ver_comp">
            <p><b>Marcas</b></p>
        </div>
    {/if}
    {if {$esAdmin}} {*SI ES UN ADMINISTRADOR*}
        <div class="centrar btn_alta">  
            <h4><a class="btn btn-danger" href="agregarMarca"><b>Alta</b></a></h4>
        </div>
    {/if}
    <div class="contenedor">
        {foreach from=$listaMarca item=marca} 
            <div class="contenedor_marca">
                <div class="centrar">
                    <b class="nombre">{$marca->nombre}</b>
                </div>
                <div class="centrar">
                    <a class="btn btn-danger" href="marca/{$marca->id_marca}">Ver Computadoras</a>
                </div>
                {if {!$esAdmin}} {*SI NO ES UN ADMINISTRADOR*}
                    <div class="centrar">
                        <a class="btn btn-danger" href="computadorapormarca/{$marca->id_marca}"><b>Ver Computadoras</b></a>
                    </div>          
                {/if}
                {if {$esAdmin}} {*SI ES UN ADMINISTRADOR*}
                    <div class="centrar">
                        <a class="btn btn-danger" href="editarMarca/{$marca->id_marca}"><b>Modificar</b></a>
                        <a class="btn btn-danger" href="eliminarMarca/{$marca->id_marca}"><b>Baja</b></a>
                    </div>
                {/if}
            </div>
        {/foreach}
    </div>
{include 'footer.tpl'}