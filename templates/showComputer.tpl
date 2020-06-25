{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'headerAdmin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
    <table class='table table-hover table-striped table-bordered table table-condensed' style='width:900px'>
        {foreach $datosComp item= computadora}
            <tr>
                {*<td>marca : {strtoupper($computadora->nombre_marca)}</td>*}
                <td>computadora : {strtoupper($computadora->nombre_comp)}</td>
                <td>sistema operativo: <b>{strtoupper($computadora->sistOperativo)}</b> </td>
                <td>foto : {strtoupper($computadora->imagen)}</td>
            </tr>
        {/foreach}

        <div >
            {if {$type == "usuario"}}
                <form action="guardar_comentario" method="POST">
                    <textarea name="comentarios"></textarea>
                    <input type="hidden" name="usuario" value="{$nameUser}">
                    <input type="hidden" name="zona_fecha" value="{date_default_timezone_set}">
                    <input type="hidden" name="fecha" value="{date("d-m-o")} - {date("h:i a")}">
                    <select name="puntuacion">
                        <option disabled selected>Puntuacion</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <button type="submit"><b>Publicar</b></button>
                </form>
            {/if}
        </div>
    </table>
    <a class="btn btn-danger" href="listaComp"><b>Volver</b></a>
{include 'templates/footer.tpl'}