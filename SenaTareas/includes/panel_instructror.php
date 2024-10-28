<div class="contenedor_instructor">
    <h2>Tecnicos Programacion de Software</h2>
    <?php
    require __DIR__ . '/consultar_aprendiz.php';
    $query = consultarAprendices();
    if ($query) {
        while ($resultado = mysqli_fetch_assoc($query)) {
            $fecha_nac = new DateTime($resultado['edad']);
            $fecha_act = new DateTime();
            $años = $fecha_act->diff($fecha_nac);
            $edad = $años->y;
    ?>    
            <div class="registro">
                <div class="registro_cod"><?php echo ($resultado['cod']); ?></div>
                <div class="registro_nombre"><?php echo ($resultado['nombre']); ?></div>
                <div class="registro_edad"><?php echo ($resultado); ?></div>
                <div class="registro_celular"><?php echo ($resultado['celular']); ?></div>
                <div class="registro_email"><?php echo ($resultado['email']); ?></div>
            </div>
        
    <?php    
    }
    
    } else {
        echo ('No se encontraron registros');
    }

    ?>
</div>    