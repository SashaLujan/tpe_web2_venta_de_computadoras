{include 'header.tpl'}
<div class="titulo_ver_comp">
        <p><b>Datos de marca</b></p>
    </div>
    <div class="datosComp">
            {if $datosComp->id_marca == 1}
                <h3><b>TCL</b></h3>
            {/if}
            {if $datosComp->id_marca == 2}
                <h3><b>HP</b></h3>
            {/if}
            {if $datosComp->id_marca == 3}
                <h3><b>Lenovo</b></h3>
            {/if}
            {if $datosComp->id_marca == 4}
                <h3><b>APPLE</b></h3>
            {/if}
            {if $datosComp->id_marca == 5}
                <h3><b>EXO</b></h3>
            {/if}
            {if $datosComp->id_marca == 6}
                <h3><b>LG</b></h3>
            {/if}
            {if $datosComp->id_marca == 7}
                <h3><b>Intel</b></h3>
            {/if}
{include 'footer.tpl'}