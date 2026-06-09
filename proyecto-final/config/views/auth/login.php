<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="row justify-content-center">

    <div class="col-md-5">

        <div class="card shadow-sm">

            <div class="card-header bg-primary text-white">
                Iniciar sesión
            </div>

            <div class="card-body">

                <form action="index.php?route=auth/login" method="POST">
                    <!-- AGREGAR CAMPO OCULTO DEL TOKEN PERO AHORA EN EL FORMULARIO -->
                    <input type="hidden" name="csrf" value="<?= $_SESSION['csrf'] ?>">

                    <div class="mb-3">
                        <label class="form-label">Usuario</label>

                        <input type="text"
                               name="username"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>

                        <input type="password"
                               name="password"
                               class="form-control"
                               required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Ingresar
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>
<?php require_once __DIR__ . '/../layouts/footer.php'; ?>