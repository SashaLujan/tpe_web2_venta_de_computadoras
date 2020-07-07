{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'headerAdmin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
{if {$type != "administrador"}} {*SI ES UN ADMINISTRADOR*}
    <table class='table table-hover table-striped table-bordered table table-condensed' style='width:900px'>
        <tr>
            <th scope='col'><h2> computadoras disponibles</h2></th>
            {if {$type == "administrador"}}
                <th scope='col'><a class="navbar-brand" href="agregarComp">Alta</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </th>
            {/if}
        </tr>
    </table>
 {/if}
    <table class='table table-hover table-striped table-bordered table table-condensed' style='width:900px'>
        <tr>
            <th scope='col'>Computadora</th>
            <th scope='col'>Marca</th>
            <th scope='col'>Sistema Operativo</th>
        </tr>
        {foreach $listaComp item= computadora}
           <tr>
            <td> <b> {strtoupper($computadora->nombre_comp)} </b> </td>
            <td> <b> {strtoupper($computadora->nombre_marca)}</b> </td>
            <td> <b>{$computadora->sistOperativo}</b> </td>
            {if {$type != "administrador"}}
                <td> <a href="verComp/{$computadora->id_computadora}" class="btn btn-link">Ver</a></td>
            {/if}
            {if {$type == "administrador"}} {*SI ES UN ADMINISTRADOR*}
            <td> <a href="verComp/{$computadora->id_computadora}" class="btn btn-link">Ver</a></td>
                <td> <a href="eliminarComp/{$computadora->id_computadora}" class="btn btn-link">Borrar </a></td>
                <td> <a href="editarComp/{$computadora->id_computadora}" class="btn btn-link">Editar </a></td>
            {/if}
         </tr>
        {/foreach}
    </table>

 
{include 'footer.tpl'}
