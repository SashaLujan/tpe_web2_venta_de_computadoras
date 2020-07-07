{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'headerAdmin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
    <div>
        <h4>Datos de la Computadora</h4>
    </div>
    <div class="contenedor">
        <div class="contenedor-datos">
            {foreach $datosComp item= computadora}
                    {*<h5>marca : {strtoupper($computadora->nombre_marca)}</h5>*}
                    <h5>computadora : {strtoupper($computadora->nombre_comp)}</h5>
                    <img class="imagen_comp"src="{$computadora->imagen}">
                    <h5>sistema operativo: <b>{strtoupper($computadora->sistOperativo)}</b> </h5>
            {/foreach}
            <a class="btn btn-dark" href="listaComp"><b>Volver</b></a>
        </div>
    </div>
    <div class="contenedor"> {*muestra un espacio para hacer un comentario*}
        <div class="contenedor-comment">
            <input type="hidden" name="tipo_usuario" value="{$type}">
            <input type="hidden" name="nombre_usuario" value="{$nameUser}"> 
            <input type="hidden" name="id_computadora" value="{$computadora->id_computadora}">
            {include 'templates/vue/formAddComment.vue'}
        </div>
    </div>
    <div class="contenedor"> {*muestra los comentarios*}
        <div class="contenedor-comment">
            <input type="hidden" name="usuario" value="{$type}">
            <input type="hidden" name="computadora" value="{$computadora->id_computadora}">
            {include 'templates/vue/showComments.vue'}
        </div>
    </div>
<script src="js/comments.js"></script>
{include 'templates/footer.tpl'}