<div class="contenedor_aprendiz">
    <h2>fundamentos de php</h2>
    <?php
    require __DIR__ . '/consultar_preguntas.php';

    if (!isset($_SESSION['preguntas'])) {
        $_SESSION['preguntas'] = consultarPreguntas();
    }

    if (!empty($_SESSION['preguntas'])) {

        $indiceAleatorio = array_rand($_SESSION['preguntas']);


        echo '<h3>' . $_SESSION['preguntas'][$indiceAleatorio]['id'] . " " . $_SESSION['preguntas'][$indiceAleatorio]['pregunta'] . '</h3>';


        unset($_SESSION['preguntas'][$indiceAleatorio]);


        $_SESSION['preguntas'] = array_values($_SESSION['preguntas']);
    } else {
        echo 'No hay más preguntas. Reiniciando...';

        // Reiniciar el arreglo de preguntas cuando se han mostrado todas
        $_SESSION['preguntas'] = consultarPreguntas();
    }

    ?>


    <div class="campoTrabajo">
        <div class="ejecucion">
            <form id="phpForm" method="post">
                <textarea placeholder="escribe el codigo aqui" id="codphp" name="codphp" rows="20" cols="75">
                </textarea>
                <br>
                <button type="button" class="btn btnEjecutar" onclick="leerCodigo()">Ejecutar</button>
            </form>
        </div>
        <div class="resultado">

            <p>Resultado:</p>
            <div id="resultado"></div>
        </div>
    </div>

</div>
