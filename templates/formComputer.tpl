{include 'header.tpl'}

            <div class="contenedor">
                <h1>Inserte una Computadora</h1>
                <form action="guardarComputadora" method="POST" class="my-4">
                    <div>
                        <label>Nombre</label>
                        <input name="nombre" type="text" class="form-control">
                    </div>
                    <div>
                        <label>Marca</label>
                        <input name="marca" type="text" class="form-control">
                    </div>
                    <div>
                        <label>Sistema Operativo</label>
                        <input name="sistOperativo" type="text" class="form-control">
                    </div>
                    <div>
                        <label>Marca</label>
                        <select name="id_marca" type="text" class="form-control" >
                            {foreach from=$listaMarca item=marca} 
                                <option value={$marca->id_marca}</option>
                            {/foreach}
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
            <a class="nav-link" href="listaComputadora"><b>Volver</b></a>;
{include 'footer.tpl'}