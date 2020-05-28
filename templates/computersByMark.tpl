{include 'templates/header.tpl'}
    {if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
        <div>
            <p>computadora 
                {if {$computadoraPorMarca[0]->id_marca} == 1}
                    <b>TCL</b> 
                {/if}
                {if {$computadoraPorMarca[0]->id_marca} == 2}
                    <b>HP</b> 
                {/if}
                {if {$computadoraPorMarca[0]->id_marca} == 3}
                    <b>Lenovo</b> 
                {/if}
                {if {$computadoraPorMarca[0]->id_marca} == 4}
                    <b>APPLE</b> 
                {/if}
                {if {$computadoraPorMarca[0]->id_marca} == 5}
                    <b>EXO</b> 
                {/if}
                {if {$computadoraPorMarca[0]->id_marca} == 6}
                    <b>LG</b> 
                {/if}
                {if {$computadoraPorMarca[0]->id_marca} == 7}
                    <b>Intel</b> 
                {/if}
            </p>
        </div>
    {/if}
    {if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
        <div>
            <h4><a class="btn btn-danger" href="agregarComp"><b>Alta</b></a></h4>
        </div>
    {/if}
    <div class="contenedor">
        {foreach from=$computadoraPorMarca item=computadoraPorMarca}
            <div>
                <div>
                    <div>
                        <b>{$computadoraPorMarca->nombre}</b>
                    </div>
                </div>
                <div>
                    <h5><b>{$computadoraPorMarca->sistOperativo}</b></h5>
                </div>
                <div>
                    {if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
                        <h4><a class="btn btn-danger" href="verCompMarca/{$computadoraPorMarca->id_computadora}/{$computadoraPorMarca->id_marca}"><b>Ver | Edit | Baja</b></a></h4>
                    {/if}
                    {if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
                        <h4><a class="btn btn-danger" href="verCompMarca/{$computadoraPorMarca->id_computadora}/{$computadoraPorMarca->id_marca}"><b>Detalle</b></a></h4>
                    {/if}
                </div>
            </div>
        {/foreach}  
    </div>    



{include 'templates/footer.tpl'}