    {if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
        {include 'headerAdmin.tpl'}
    {/if}
    {if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
        {include 'header.tpl'}
    {/if}
        <div class="contenedor">
            <p>
                {if {$computadora->id_marca} == 1}
                    <b>TCL</b> 
                {/if}
                {if {$computadora->id_marca} == 2}
                    <b>HP</b> 
                {/if}
                {if {$computadora->id_marca} == 3}
                    <b>Lenovo</b> 
                {/if}
                {if {$computadora->id_marca} == 4}
                    <b>APPLE</b> 
                {/if}
                {if {$computadora->id_marca} == 5}
                    <b>EXO</b> 
                {/if}
                {if {$computadora->id_marca} == 6}
                    <b>LG</b> 
                {/if}
                {if {$computadora->id_marca} == 7}
                    <b>Intel</b> 
                {/if}
            </p>
        </div>
        {if {$type == "administrador"}} {*SI ES UN ADMINISTRADOR*}
            <td> <a href="eliminarComp/{$computadora->id_computadora}" class="btn btn-link">Borrar </a></td>
            <td> <a href="editarComp/{$computadora->id_computadora}" class="btn btn-link">Editar </a></td>
        {/if}
        <a class="btn btn-danger" href="listaMarca"><b>Volver</b></a>;
        <div>
            <p>{$computadora->nombre}</p>
            {if {$computadora->id_marca} == 1}
                    <b>TCL</b> 
                {/if}
                {if {$computadora->id_marca} == 2}
                    <b>HP</b> 
                {/if}
                {if {$computadora->id_marca} == 3}
                    <b>Lenovo</b> 
                {/if}
                {if {$computadora->id_marca} == 4}
                    <b>APPLE</b> 
                {/if}
                {if {$computadora->id_marca} == 5}
                    <b>EXO</b> 
                {/if}
                {if {$computadora->id_marca} == 6}
                    <b>LG</b> 
                {/if}
                {if {$computadora->id_marca} == 7}
                    <b>Intel</b> 
                {/if}
            <br><h4><b>sistema operativo</b></h4>
            <h3>{$computadora->sistOperativo}</h3>
            <h3>{$computadora->imagen}</h3>

            <input type="hidden" name="usuario" value="{$type}">
            <input type="hidden" name="computadora" value="{$computadora->id_computadora}">
            {include 'templates/vue/showComments.vue'}
        </div>

{include 'templates/footer.tpl'}