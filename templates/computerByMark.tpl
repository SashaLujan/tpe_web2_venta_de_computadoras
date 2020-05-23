{include 'templates/header.tpl'}
    <div class="titulo_ver_comp">
        <p>
            Computadoras de 
            {if {$computadorapormarca[0]->id_marca} == 1}
                <b>TCL</b> 
            {/if}
            {if {$computadorapormarca[0]->id_marca} == 2}
                <b>HP</b> 
            {/if}
            {if {$computadorapormarca[0]->id_marca} == 3}
                <b>Lenovo</b> 
            {/if}
            {if {$computadorapormarca[0]->id_marca} == 4}
                <b>APPLE</b> 
            {/if}
            {if {$computadorapormarca[0]->id_marca} == 5}
                <b>EXO</b> 
            {/if}
            {if {$computadorapormarca[0]->id_marca} == 6}
                <b>LG</b> 
            {/if}
            {if {$computadorapormarca[0]->id_marca} == 7}
                <b>Intel</b> 
            {/if}
        </p>
    </div>
    <div class="contenedor">
        {foreach from=$computadorapormarca item=computadorapormarca}
            <div class="contenedor_comp">
                <div class="centrar">
                    <div class="alto">
                        <b class="nombre">{$computadorapormarca->nombre}</b>
                    </div>
                    <img class="imagen_comp" src="{$computadorapormarca->imagen}">
                </div>
                <div class="centrar_dato">
                    <h5><b>{$computadorapormarca->sistOperativo}</b></h5>
                </div>
                <div class="centrar">
                    <h4><a class="btn btn-danger" href="ver_comp_marca/{$computadorapormarca->id_computadora}/{$computadorapormarca->id_marca}">Detalle</a></h4>
                </div>
            </div>
        {/foreach}  
    </div>    



{include 'footer.tpl'}