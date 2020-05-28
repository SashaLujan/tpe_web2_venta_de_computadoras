{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'headerAdmin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
<div class="tituloVerComp">
    <p> Datos 
        {if {$datosComp->id_marca} == 1}
            <b>TCL</b> 
        {/if}
        {if {$datosComp->id_marca} == 2}
            <b>HP</b> 
        {/if}
        {if {$datosComp->id_marca} == 3}
            <b>Lenovo</b> 
        {/if}
        {if {$datosComp->id_marca} == 4}
            <b>APPLE</b> 
        {/if}
        {if {$datosComp->id_marca} == 5}
            <b>EXO</b> 
        {/if}
        {if {$datosComp->id_marca} == 6}
            <b>LG</b> 
        {/if}
        {if {$datosComp->id_marca} == 7}
            <b>Intel</b> 
        {/if}
    </p>
</div>
<div class="detalle">
    <div>
        <img class="imagen"src="{$datosComp->imagen}">
        {if {$isAdmin}} {* SI ES ADMINISTRADOR*}
            <h4><a class="btn btn-danger centrar btn_alta" href="editarComp/{$datosComp->id_computadora}"><b>Editar</b></a></h4>
            <h4><a class="btn btn-danger centrar btn_alta" href="eliminarComp/{$datosComp->id_computadora}"><b>Baja</b></a></h4>
        {/if}
        <h4><a class="btn btn-danger centrar btn_alta" href="marca_comp/{$datosComp->id_marca}"><b>Volver</b></a>;
    </div>
</div>
        
 
{include 'templates/footer.tpl'}