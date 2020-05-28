{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'headerAdmin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    <div class="tituloVerComp">
        <p><b>COMPUTADORAS</b></p>
    </div>
{/if}
{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    <div class="centrar btn_alta">
        <h4><a class="btn btn-danger" href="agregarComp"><b>Alta</b></a></h4>
    </div>
{/if}
<div class="contenedor">
    {foreach from=$listaComp item=computadora}
        <div class="detalle">
            <div class="centrar">
                <div class="alto">
                    <b class="nombre">{$computadora->nombre}</b>
                </div>
            </div>
            <div class="centrar sistOperativo">
                <h5><b>{$computadora->sistOperativo}</b></h5>
            </div>
            {if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
                <div class="centrar">
                    <h4><a class="btn btn-danger" href="verComp/{$computadora->id_computadora}"><b>Detalle</b></a></h4>
                </div>
            {/if}
            {if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
                <div class="centrar">
                    <h4><a class="btn btn-danger" href="verComp/{$computadora->id_computadora}"><b>Ver | Edit | Baja</b></a></h4>
                </div>
            {/if}
        </div>
    {/foreach}  
</div>
 
{include 'footer.tpl'}
