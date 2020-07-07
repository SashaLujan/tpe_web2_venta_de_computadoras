{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'headerAdmin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
{if {$type != "administrador"}} {*SI ES UN ADMINISTRADOR*}
    <div class="contenedor">
        <h4> computadoras disponibles</h4>
        {if {$type == "administrador"}}
            <a class="navbar-brand" href="agregarComp">Alta</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        {/if}
    </div>
 {/if}
    <div class="contenedor-comp">
        {foreach $listaComp item= computadora}
        <div class="centrar">
            <b> {strtoupper($computadora->nombre_comp)} </b>
            <img class="imagen" src="{$computadora->imagen}">
            <b> {strtoupper($computadora->nombre_marca)}</b>
            {*<b>{$computadora->sistOperativo}</b>*}
        </div>
        {if {$type != "administrador"}}
            <div class="centrar">
                <h4><a href="verComp/{$computadora->id_computadora}" class="btn btn-link">Ver</a></h4>
            </div>
        {/if}
            {if {$type == "administrador"}} {*SI ES UN ADMINISTRADOR*}
                <h4><a href="verComp/{$computadora->id_computadora}" class="btn btn-link">Ver</a></h4>
                <h4><a href="eliminarComp/{$computadora->id_computadora}" class="btn btn-link">Borrar </a></h4>
                <h4><a href="editarComp/{$computadora->id_computadora}" class="btn btn-link">Editar </a></h4>
            {/if}
        </div>
        {/foreach}
    </div>
 
{include 'footer.tpl'}
