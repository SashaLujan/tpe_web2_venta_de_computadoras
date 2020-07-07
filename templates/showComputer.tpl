{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'headerAdmin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
    <div>
        <h3>Datos de la Computadora</h3>
    </div>
    <table class='table table-hover table-striped table-bordered table table-condensed' style='width:900px'>
        {foreach $datosComp item= computadora}
            <tr>
                {*<td>marca : {strtoupper($computadora->nombre_marca)}</td>*}
                <td>computadora : {strtoupper($computadora->nombre_comp)}</td>
                <td>sistema operativo: <b>{strtoupper($computadora->sistOperativo)}</b> </td>
                <td>foto : {strtoupper($computadora->imagen)}</td>
            </tr>
        {/foreach}
    </table>
    <a class="btn btn-dark" href="listaComp"><b>Volver</b></a>
    <div > {*muestra un espacio para hacer un comentario*}
        <input type="hidden" name="tipo_usuario" value="{$type}">
        <input type="hidden" name="nombre_usuario" value="{$nameUser}"> 
        <input type="hidden" name="id_computadora" value="{$computadora->id_computadora}">
        {include 'templates/vue/formAddComment.vue'}
    </div>
    <div> {*muestra los comentarios*}
        <input type="hidden" name="usuario" value="{$type}">
        <input type="hidden" name="computadora" value="{$computadora->id_computadora}">
        {include 'templates/vue/showComments.vue'}
    </div>
{include 'templates/footer.tpl'}