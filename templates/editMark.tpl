{include 'header.admin.tpl'}
    <h1>Modifique los datos</H1>
    <form action="guardarMarca" method="POST">
        <input type="hidden" name="id_marca" value="{$marca->id_marca}">
        <label>Nombre</label>
        <input type="text" name="nombre" value="{$marca->nombre}">
        <label>Marca</label>
        <input type="text" name="marca" value="{$marca->marca}">

        <button type="submit">Guardar datos</button>
    </form>
    <a class="nav-link" href="listaMarca"><b>Volver</b></a>;
{include 'footer.tpl'}