<?php include_once '../../vistas/templates/header.php'; ?>

<h1 class="text-center text-primary mb-4">FORMULARIO DE PACIENTES</h1>
<div class="row justify-content-center">
    <form action="../../controladores/pacientes/guardar.php" method="POST" class="border bg-white shadow-sm rounded p-5 col-lg-6">
        <div class="row mb-4">
            <div class="col">
                <label for="Nombre_p" class="form-label text-dark">Nombre del Paciente</label>
                <input type="text" name="Nombre_p" id="Nombre_p" class="form-control border-primary" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <label for="Apellido_p" class="form-label text-dark">Apellido de Paciente</label>
                <input type="text" name="Apellido_p" id="Apellido_p" class="form-control border-primary" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <label for="Telefono_P" class="form-label text-dark">Teléfono</label>
                <input type="number" name="Telefono_P" id="Telefono_P" class="form-control border-primary" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <label for="DPI_P" class="form-label text-dark">DPI</label>
                <input type="number" name="DPI_P" id="DPI_P" class="form-control border-primary" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <button type="submit" class="btn btn-primary w-100">Guardar</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="../../controladores/pacientes/buscar.php" class="btn btn-outline-primary w-100">Buscar</a>
            </div>
        </div>
    </form>
</div>

<?php include_once '../../vistas/templates/footer.php'; ?>
