<div class="container-fluid">
    <div class="col">
        <h1 class="text-center mt-3">Login</h1>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-4">
            <form action="<?= base_url() . '/login' ?>" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usuario">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Contrasena</label>
                    <input type="password" class="form-control" name="contrasena">
                </div>
                <?= $mensaje ?>
                <div class="row d-flex justify-content-between">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                    <div class="col">
                        <a href="<?= base_url(). '/registro' ?>" class="btn btn-success">Registrate</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<script>
    let mensaje = <?= $mensaje ?>;

    console.log(mensaje);
</script>