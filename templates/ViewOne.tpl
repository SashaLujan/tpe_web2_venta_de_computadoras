{include 'header.tpl'}

    <h1> Marca :{strtoupper($identif[0]->marca)}</h1>
    <h2>Computadora: {strtoupper($identif[0]->nombre)}</h2>
    <table class='table table-hover table-striped table-bordered table table-condensed' style='width:900px'>
    {foreach $identif item = computadora}
        <tr>
            <td>Marca: <b>{$computadora->marca}</b> </td>
            <td>Sistema operativo: <b>{$computadora->sistOperativo}</b> </td>
        </tr>
    {/foreach}
    </table>