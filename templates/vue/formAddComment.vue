<section id="app-form-comments">    
    <form v-if="usuario_reg == 1" id="form-comentario" method="POST">
        <textarea name="comentario" placeholder="COMENTARIO" maxlength="200" required value=""></textarea>
        <input type="hidden" name="usuario" :value="nombre_usuario">
        <input type="hidden" name="zona_fecha" value="{date_default_timezone_set("America/Argentina/Buenos_aires")}">
        <input type="hidden" name="fecha" value="{date("d-m-o")} - {date("h:i a")}">
        <select name="puntuacion" required>
            <option value="0">seleccione</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        <input type="hidden" name="computadora" :value="id_computadora">
        <button type="reset" v-on:click="addComment()"><b>Publicar</b></button>
    </form>
</section>