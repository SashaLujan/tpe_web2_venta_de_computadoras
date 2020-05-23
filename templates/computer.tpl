{include 'header.tpl'}
        {if {!$esAdmin}} {*SI NO ES UN ADMINISTRADOR*}
            <div class="titulo">
                <p>COMPUTADORAS</p>
            </div>
        {/if}
        {if {$esAdmin}} {*SI ES UN ADMINISTRADOR*}
            <div class="centrar btn_alta">
                <h4><a class="btn btn-danger" href="agregarComputadora"><b>Alta</b></a></h4>
            </div>
        {/if}
        <div class="contenedor">
            {foreach from=$listaComputadora item=computadora}
                <div class="contenedor_comp">
                    <div class="centrar">
                        <div class="alto">
                            <b class="nombre">{$computadora->nombre}</b>
                        </div>
                        <img class="imagen_comp" src={$computadora->imagen}">
                    </div>
                    <div class="centrar_dato">
                        <h5><b>{$computadora->sistOperativo}</b></h5>
                    </div>
                    <div class="centrar">
                        <h4><a class="btn btn-danger" href="ver_comp/{$computadora->id_computadora}">Detalle</a></h4>
                    </div>
                    {if {!$esAdmin}} {*SI NO ES UN ADMINISTRADOR*}
                        <div class="centrar">
                            <h4><a class="btn btn-danger" href="ver_comp/{$computadora->id_computadora}"><b>Ver Computadora</b></a></h4>
                        </div>
                    {/if}
                    {if {$esAdmin}} {*SI ES UN ADMINISTRADOR*}
                        <div class="centrar">
                            <h4><a class="btn btn-danger" href="ver_comp/{$computadora->id_computadora}"><b>Modificar</b></a></h4>
                            <h4><a class="btn btn-danger" href="ver_comp/{$computadora->id_computadora}"><b>Baja</b></a></h4>
                        </div>
                    {/if}

                </div>
            {/foreach}  
        </div>
 
{include 'footer.tpl'}