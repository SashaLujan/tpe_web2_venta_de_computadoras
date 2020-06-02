{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'headerAdmin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
    <div class="contenedor">
        <h1>Venta de computadoras Online</h1>
    </div>
{include 'footer.tpl'}