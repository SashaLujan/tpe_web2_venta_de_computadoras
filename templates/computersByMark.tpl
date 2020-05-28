{include 'templates/header.tpl'}
    {if  (!empty($listaComp))}
            <h1>Esta marca no tiene ninguna computadora registrada</h1> 
            <div class="text-center "><a class="" href="listaMarca"><h3>Volver</h3></a></div>
    {/if}
    {if (empty($listaComp))}
            <h2>Marca: {strtoupper($listaComp[0]->marca)}</h2> 
            <table class='table table-hover table-striped table-bordered table table-condensed' style='width:900px'>
                <tr>
                    <th scope='col'>nombre</th>
                    <th scope='col'>Marca</th>
                </tr
                {foreach $listaComp item= computadora}
                    <tr>
                        <td><b>{strtoupper($computadora->nombre)}</b></td>
                        <td><b>{strtoupper($computadora->marca)}</b> </td>
                        <td> <a href="verComp/{$computadora->id_computadora}" class="btn btn-link"></a>
                        {if $isAdmin==1} 
                            <td> <a href="eliminarComp/{$computadora->id_computadora}" class="btn btn-link">Borrar </a></td>
                            <td> <a href="editarComp/{$computadora->id_computadora}" class="btn btn-link">Editar </a></td>
                        {/if}
                    </tr>
                {/foreach}
            </table>
    {{/if}}

{include 'templates/footer.tpl'}