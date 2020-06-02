{if {$isAdmin}} {*SI ES UN ADMINISTRADOR*}
    {include 'headerAdmin.tpl'}
{/if}
{if {!$isAdmin}} {*SI NO ES UN ADMINISTRADOR*}
    {include 'header.tpl'}
{/if}
 <div class='text-center'>
    <h2>Error</h2>
    <h5>{$mensaje}</h5>
    <img src='imagenes/logo.jpeg'height='60' width='60'>
</div>
<div class="text-center"><a href="{$base_url}#">Volver</a></div>
</div>