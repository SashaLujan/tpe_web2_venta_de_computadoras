<section>
    <div>
        <h4><b>Comentarios</b></h4>
        <h4 v-if="promedio > 0" ><b>Promedio: {{ promedio }}</b></h4>
    </div>
    <div>
        <h3 v-if="!comentarios.length"><b>No hay comentarios sobre la computadora</b></h3>
        <div v-for="comentario in comentarios">
            <div>
                <div>
                    <p class="margen-cero"><b>{{ comentario.usuario }} | {{ comentario.fecha }}</b></p>
                    <p class="margen-cero">{{ comentario.comentario }}</p>
                    <p class="margen-cero margen-botton">Puntuación: {{ comentario.puntaje }}</p>
                </div>
                <div>
                    <button v-if="admin == 1" v-on:click="delComment(comentario.id_comentario)" class="btn btn-dark">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</section>
