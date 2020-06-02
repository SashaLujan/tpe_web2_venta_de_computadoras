
    {if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
        {include 'headerAdmin.tpl'}
    {/if}
    {if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
        {include 'header.tpl'}
    {/if}
    {if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
        <div>
            <p>
                {if {$datosComp[0]->id_marca_fk} == 1}
                    <b>TCL</b> 
                {/if}
                {if {$datosComp[0]->id_marca_fk} == 2}
                    <b>HP</b> 
                {/if}
                {if {$datosComp[0]->id_marca_fk} == 3}
                    <b>Lenovo</b> 
                {/if}
                {if {$datosComp[0]->id_marca_fk} == 4}
                    <b>APPLE</b> 
                {/if}
                {if {$datosComp[0]->id_marca_fk} == 5}
                    <b>EXO</b> 
                {/if}
                {if {$datosComp[0]->id_marca_fk} == 6}
                    <b>LG</b> 
                {/if}
                {if {$datosComp[0]->id_marca_fk} == 7}
                    <b>Intel</b> 
                {/if}
            </p>
        </div>
        {if $isAdmin} {*SI ES UN ADMINISTRADOR*}
            <td> <a href="eliminarComp/{$computadora->id_computadora}" class="btn btn-link">Borrar </a></td>
            <td> <a href="editarComp/{$computadora->id_computadora}" class="btn btn-link">Editar </a></td>
        {/if}
        <a class="btn btn-danger" href="listaMarca"><b>Volver</b></a>;
    {{/if}}

{include 'templates/footer.tpl'}