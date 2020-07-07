{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'headerAdmin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
{if {$type != "administrador"}} {*SI ES UN ADMINISTRADOR*}
    <div class="contenedor">
        <h4> computadoras disponibles</h4>
    </div>
{/if}
    <div class="contenedor">
        {foreach $listaComp item= computadora}
            <div class="contenedor-comp centrar">
                <div class="centrar">
                    <b> {strtoupper($computadora->nombre_comp)} </b>
                    <img class="imagen" src="{$computadora->imagen}">
                    <b> {strtoupper($computadora->nombre_marca)}</b>
                    {*<b>{$computadora->sistOperativo}</b>*}
                </div>
                {if {$type != "administrador"}}
                    <div class="centrar">
                        <h4><a href="verComp/{$computadora->id_computadora}" class="btn btn-dark">Ver</a></h4>
                    </div>
                {/if}
                {if {$type == "administrador"}} {*SI ES UN ADMINISTRADOR*}
                    <div class="centrar">
                        <h4><a class="navbar-brand" href="agregarComp">Alta</a></h4>
                        <h4><a href="eliminarComp/{$computadora->id_computadora}" class="btn btn-dark">Borrar </a></h4>
                        <h4><a href="editarComp/{$computadora->id_computadora}" class="btn btn-dark">Editar </a></h4>
                    </div>
                {/if}
            </div>
        {/foreach}
    </div>
 
{include 'footer.tpl'}
