{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'headerAdmin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
<div>
    <p><b>Computadoras</b></p>
</div>
<div>
    <div>
        {if {$isAdmin}} {* SI ES ADMINISTRADOR*}
            <h4><a class="btn btn-danger centrar" href="editarComp/{$datosComp->id_computadora}"><b>Editar</b></a></h4>
            <h4><a class="btn btn-danger centrar" href="eliminarComp/{$datosComp->id_computadora}"><b>Baja</b></a></h4>
        {/if}
        <h4><a class="btn btn-danger" href="listaComp"><b>Volver</b></a>;
    </div>
    <div>
        <p>{$datosComp->nombre}</p>
        <h1>{$datosComp->sistOperativo}</h1>
        {if $datosComp->id_marca == 1}
            <h3><b>TCL</b></h3>
        {/if}
        {if $datosComp->id_marca == 2}
            <h3><b>HP</b></h3>
        {/if}
        {if $datosComp->id_marca == 3}
            <h3><b>Lenovo</b></h3>
        {/if}
        {if $datosComp->id_marca == 4}
            <h3><b>APPLE</b></h3>
        {/if}
        {if $datosComp->id_marca == 5}
            <h3><b>EXO</b></h3>
        {/if}
        {if $datosComp->id_marca == 6}
            <h3><b>LG</b></h3>
        {/if}
        {if $datosComp->id_marca == 7}
            <h3><b>Intel</b></h3>
        {/if}
    </div>
</div>
        
 
{include 'templates/footer.tpl'}