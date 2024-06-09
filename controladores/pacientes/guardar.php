<?php

require '../../modelos/Cliente.php';


// VALIDAR INFORMACION
$_POST['Nombre_p'] = htmlspecialchars($_POST['Nombre_p']);
$_POST['Apellido_p'] = htmlspecialchars($_POST['Apellido_p']);
$_POST['FechaNacimiento_p'] = htmlspecialchars($_POST['FechaNacimiento_p']);
$_POST['Direccion_p'] = htmlspecialchars($_POST['Direccion_p']);
$_POST['Telefono_p'] = htmlspecialchars($_POST['Telefono_p']);


if ($_POST['cli_nombre'] == '' || $_POST['cli_apellido'] == ''|| $_POST['cli_nombre'] == '' || $_POST['cli_apellido'] == '' || $_POST['cli_telefono'] == '') {
    // ALERTA PARA VALIDAR DATOS
    $resultado = [
        'mensaje' => 'DEBE VALIDAR LOS DATOS',
        'codigo' => 2
    ];
} else {
    try {
        // REALIZAR CONSULTA
        $clientes = new Paciente($_POST);
        $guardar = $clientes->guardar();
        $resultado = [
            'mensaje' => 'CLIENTE INSERTADO CORRECTAMENTE',
            'codigo' => 1
        ];
    } catch (PDOException $pe) {
        $resultado = [
            'mensaje' => 'OCURRIO UN ERROR INSERTANDO A LA BD',
            'detalle' => $pe->getMessage(),
            'codigo' => 0
        ];
    } catch (Exception $e) {
        $resultado = [
            'mensaje' => 'OCURRIO UN ERROR EN LA EJECUCIÓN',
            'detalle' => $e->getMessage(),
            'codigo' => 0
        ];
    }
}


$alertas = ['danger', 'success', 'warning'];


include_once '../../vistas/templates/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-lg-6 alert alert-<?= $alertas[$resultado['codigo']] ?>" role="alert">
        <?= $resultado['mensaje'] ?>
        <?= $resultado['detalle'] ?>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-6">
        <a href="../../vistas/cliente/index.php" class="btn btn-primary w-100">Volver al formulario</a>
    </div>
</div>


<?php include_once '../../vistas/templates/footer.php'; ?>