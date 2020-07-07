{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'headerAdmin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
    <div>
        <h3>Datos de la Computadora</h3>
    </div>
    <div class="contenedor">
        {foreach $datosComp item= computadora}
                {*<h5>marca : {strtoupper($computadora->nombre_marca)}</h5>*}
                <h5>computadora : {strtoupper($computadora->nombre_comp)}</h5>
                <h5>sistema operativo: <b>{strtoupper($computadora->sistOperativo)}</b> </h5>
                <h5>foto : {strtoupper($computadora->imagen)}</h5
        {/foreach}
        <a class="btn btn-dark" href="listaComp"><b>Volver</b></a>
    </div>
    <div class="contenedor"> {*muestra un espacio para hacer un comentario*}
        <input type="hidden" name="tipo_usuario" value="{$type}">
        <input type="hidden" name="nombre_usuario" value="{$nameUser}"> 
        <input type="hidden" name="id_computadora" value="{$computadora->id_computadora}">
        {include 'templates/vue/formAddComment.vue'}
    </div>
    <div class="contenedor"> {*muestra los comentarios*}
        <input type="hidden" name="usuario" value="{$type}">
        <input type="hidden" name="computadora" value="{$computadora->id_computadora}">
        {include 'templates/vue/showComments.vue'}
    </div>
{include 'templates/footer.tpl'}

<script src="js/comments.js"></script>