{include 'header.tpl'}>
    <table class='table table-hover table-striped table-bordered table table-condensed' style='width:900px'>
        {foreach $datosComp item= computadora}
            <tr>
                <td>marca : {strtoupper($datosComp[0]->id_marca_fk)}</td>
                <td>computadora : {strtoupper($datosComp[0]->nombre)}</td>
                <td>marca: <b>{strtoupper($datosComp[0]->marca)}</b> </td>
                <td>sistema operativo: <b>{strtoupper($datosComp[0]->sistOperativo)}</b> </td>
            </tr>
        {/foreach}
    </table>
 
{include 'templates/footer.tpl'}