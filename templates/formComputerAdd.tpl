{include 'headerAdmin.tpl'}
    <div class="container">
        <h1>Inserte una computadora</h1>
        <form action="agregarComp" method="post" class="my-4">
            <div class="form-group">
                <label>nombre</label>
                <input name="nombre" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>marca</label>
                <input name="marca" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>sistema operativo</label>
                <input name="sistOperativo" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>marca</label>
               <select name="id_marca" type="text" class="form-control" >
                {foreach from=$listaMarca item=marca} 
                    <option value={$marca>id_marca}>{$marca>nombre}</option>
                {/foreach}
            </select>
            </div>
            <button type="submit" class="btn btn-danger">Guardar</button>
        </form>
    </div>

{include 'templates/footer.tpl'}