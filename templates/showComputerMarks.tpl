{include 'header.tpl'}

    {if  empty($listComputersByMark)}
        <h2>Esta marca no tiene computadoras</h2>  
    {else} 
          <h2>Marca: {strtoupper($listComputersByMark[0]->marca)}</h2> 
            <table class='table table-hover table-striped table-bordered table table-condensed' style='width:900px'>
                <tr style='color:blue'><th scope='col'>Computadora</th><th scope='col'>Marca</th><th scope='col'>Sistema Operativo</th></tr>
            {foreach $listComputersByMark item= computadora}
                <tr>
                    <td><b>{$computadora->nombre}</b></td>
                    <td><b>{$computadora->marca}</b> </td>
                    <td><b>{$computadora->sistOperativo}</b> </td>
                    <td> <a href='vercomputadora/{$computadora->id_computadora} class='btn btn-link>Ver</a>
                    <td> <a href='borrar_computadora/{$computadora->id_computadora} class='btn btn-link>Borrar </a>
                    <td> <a href='editar_computadora/{$computadora->id_computadora} class='btn btn-link>Editar </a>
                </tr>
            {/foreach}
            </table>
    {/if}