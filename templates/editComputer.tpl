{include 'header.admin.tpl'}
    <h1>Modifique los datos de la computadora</H1>
    <form action="guardarComputadora" method="POST">
        <input type="hidden" name="computadora" value="{$computadora->id_computadora}">
        <label>Nombre</label>
        <input type="text" name="nombre" value="{$computadora->nombre}">
        <label>Sistema Operativo</label>
        <input type="text" name="sistOperativo" value="{$computadora->sistOperativo}">
        <label>Marca</label>
        <input type="text" name="marca" value="{$computadora->marca}">
        
        <button type="submit">Modificar datos</button>
    </form>
    <a class="nav-link" href="listaComputadora"><b>Volver</b></a>;
{include 'footer.tpl'}