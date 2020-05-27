{include 'header.tpl'}
 <h2> Computadoras disponibles </h2>
        <table>
            <tr>
                <th scope='col'><a class="navbar-brand" href="admin">Alta de un Producto</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </th>
            </tr>
        </table>
       <table class='table table-hover table-striped table-bordered table table-condensed' style='width:900px'>
       <tr style='color:black'><th scope='col'>Computadora</th><th scope='col'>Marca</th><th scope='col'>Sistema Operativo</th></tr>
        {foreach $listaComputadora item= computadora}
           <tr>
             <td> <b> {$computadora->nombre} </b> </td>
            <td> <b> {$computadora->marca}</b> </td>
                <td> <b>{$computadora->sistOperativo}</b> </td>
                <td> <a href="vercomputadora/{$computadora->id_computadora}" class="btn btn-link">Ver</a></td>
                {if $esadmin==1} 
                    <td> <a href="borrar_computadora/{$computadora->id_computadora}" class="btn btn-link">Borrar </a></td>
                    <td> <a href="editar_computadora/{$computadora->id_computadora}" class="btn btn-link">Editar </a></td>
                {/if}
                </tr>
        {/foreach}