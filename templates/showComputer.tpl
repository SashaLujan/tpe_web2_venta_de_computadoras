{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'headerAdmin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
    <table class='table table-hover table-striped table-bordered table table-condensed' style='width:900px'>
        {foreach $datosComp item= computadora}
            <tr>
                <td>marca : {strtoupper($datosComp[0]->marca)}</td>
                <td>computadora : {strtoupper($datosComp[0]->nombre)}</td>
                <td>sistema operativo: <b>{strtoupper($datosComp[0]->sistOperativo)}</b> </td>
            </tr>
        {/foreach}
    </table>
    <a class="btn btn-danger" href="listaComp"><b>Volver</b></a>
{include 'templates/footer.tpl'}