<?php 
include_once '../../vistas/templates/header.php'; ?>

<h1 class="text-center text-primary mb-4">FORMULARIO DE PACIENTES</h1>
<div class="row justify-content-center">
    <form action="../../controladores/pacientes/buscar.php" method="GET" class="border bg-white shadow-sm rounded p-5 col-lg-6">
        <div class="row mb-4">
            <div class="col">
                <label for="Nombre_p" class="form-label text-dark">Nombre</label>
                <input type="text" name="Nombre_p" id="Nombre_p" class="form-control border-primary">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <label for="Apellido_P" class="form-label text-dark">Apellido</label>
                <input type="text" name="Apellido_P" id="Apellido_P" class="form-control border-primary">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-dark w-100 text-white">Buscar</button>
            </div>
        </div>
    </form>
</div>

<?php include_once '../../vistas/templates/footer.php'; ?>
