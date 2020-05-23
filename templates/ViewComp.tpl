{include 'header.tpl'}
<div class="titulo_ver_comp">
        <p><b>Datos de computadora</b></p>
    </div>
    <div class="contenedorDato">
        <div>
            <img class="imagenDato"src="{$datosComp->imagen}">
            {if {$esAdmin}} {* SOLO SI ES ADMINISTRADOR*}
                <h4><a class="btn btn-danger centrar btn_alta" href="editarComputadora/{$datosComp->id_computadora}"><b>Modificar</b></a></h4>
                <h4><a class="btn btn-danger centrar btn_alta" href="eliminarComputadora/{$datosComp->id_computadora}"><b>Baja</b></a></h4>
                <h4><a class="btn btn-danger centrar btn_alta" href="listacomputadora"><b>Volver</b></a>;
            {/if}
        </div>
        <div class="datosComp">
            <p id="nombre">{$datosComp->nombre}</p>
            <h1>{$datosComp->sistOperativo}</h1>
            {if $datosComp->id_computadora == 1}
                <h3><b>TCL</b></h3>
            {/if}
            {if $datosComp->id_computadora == 2}
                <h3><b>HP</b></h3>
            {/if}
            {if $datosComp->id_computadora == 3}
                <h3><b>Lenovo</b></h3>
            {/if}
            {if $datosComp->id_computadora == 4}
                <h3><b>APPLE</b></h3>
            {/if}
            {if $datosComp->id_computadora == 5}
                <h3><b>EXO</b></h3>
            {/if}
            {if $datosComp->id_computadora == 6}
                <h3><b>LG</b></h3>
            {/if}
            {if $datosComp->id_computadora == 7}
                <h3><b>Intel</b></h3>
            {/if}

 
{include 'footer.tpl'}