{include 'templates/header.tpl'}
    {if  !empty($computadoraPorMarca)}
            <h1>Esta marca no tiene ninguna computadora registrada</h1> 
            <div class="text-center "><a class="" href="listaMarca"><h3>Volver</h3></a></div>
    {/if}
    {if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
        <div>
            <p>
                marcas:
                    {if {$computadora[0]->id_marca_fk} == 1}
                        <b>TCL</b> 
                    {/if}
                    {if {$computadora[0]->id_marca_fk} == 2}
                        <b>HP</b> 
                    {/if}
                    {if {$computadora[0]->id_marca_fk} == 3}
                        <b>Lenovo</b> 
                    {/if}
                    {if {$computadora[0]->id_marca_fk} == 4}
                        <b>APPLE</b> 
                    {/if}
                    {if {$computadora[0]->id_marca_fk} == 5}
                        <b>EXO</b> 
                    {/if}
                    {if {$computadora[0]->id_marca_fk} == 6}
                        <b>LG</b> 
                    {/if}
                    {if {$computadora[0]->id_marca_fk} == 7}
                        <b>Intel</b> 
                    {/if}
            </p>
        </div>
        {if $isAdmin} 
            <td> <a href="eliminarComp/{$computadora->id_computadora}" class="btn btn-link">Borrar </a></td>
            <td> <a href="editarComp/{$computadora->id_computadora}" class="btn btn-link">Editar </a></td>
        {/if}
    {{/if}}

{include 'templates/footer.tpl'}