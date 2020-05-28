{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'headerAdmin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    <div>
        <p><b>COMPUTADORAS</b></p>
    </div>
{/if}
{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    <div>
        <h4><a class="btn btn-danger" href="agregarComp"><b>Alta</b></a></h4>
    </div>
{/if}
<div>
    {foreach from=$listaComp item=computadora}
        <div>
            <div>
                <div>
                    <b>{$computadora->nombre}</b>
                </div>
            </div>
            <div>
                <h5><b>{$computadora->sistOperativo}</b></h5>
            </div>
            {if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
                <div>
                    <h4><a class="btn btn-danger" href="verComp/{$computadora->id_computadora}"><b>Detalle</b></a></h4>
                </div>
            {/if}
            {if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
                <div>
                    <h4><a class="btn btn-danger" href="verComp/{$computadora->id_computadora}"><b>Ver | Edit | Baja</b></a></h4>
                </div>
            {/if}
        </div>
    {/foreach}  
</div>
 
{include 'footer.tpl'}
