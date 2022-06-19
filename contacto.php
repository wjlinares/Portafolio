<!DOCTYPE html>
<!-- ============= IMPORTACIÓN DE LA CABECERA  ============= -->
<?php require_once('includes/cabecera.php'); ?>
<body class="desplazamiento-inferior">
    <section class="container-fluid mt-5">
        <div class="row">
             <!-- versión desktop -->
            <div class="col-xl-4 h2 text-muted ml-5 d-none d-sm-none d-md-none d-xl-block">
                <p>FORMULARIO DE CONTACTO</p>
            </div>
            <!-- versión móvil -->
            <div class="text-center col-xl-12 h2 text-muted ml-0 d-block d-sm-block d-md-block d-xl-none">
                <p>FORMULARIO DE CONTACTO</p>
            </div>
            <div class="col-xl-7 d-none d-sm-none d-md-none d-lg-none d-xl-block">
                <hr>
            </div>
        </div>
    </section>

    <main class="container mt-5 bordered rounded mensaje">
        <h3 class="lead ">Contacto por mensaje de correo electrónico.</h3>
        <hr>
        <div class="row">
            <div class="col-xl-8">
                <form id="formCorreo" role="form" class="mt-5">
                      <div class="form-group row">
                        <div class="col-xl-2 text-right">
                            <label for="empresa" class="control-label text-info mt-2 d-none d-sm-none d-md-none d-lg-none d-xl-block">EMPRESA:</label>
                        </div>
                        <!-- versión móvil -->
                        <div class="col-xl-2 text-left d-block d-sm-block d-md-block d-lg-block d-xl-none">
                            <label for="empresa" class="control-label text-info mt-2">EMPRESA:</label>
                        </div>

                        <div class="col-xl-10">
                            <input type="text" id="empresa" name="empresa" placeholder="nombre de la empresa" class="form-control" required>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="col-xl-2 text-right">
                            <label for="mensaje" class="control-label text-info mt-2 d-none d-sm-none d-md-none d-lg-none d-xl-block">MENSAJE:</label>
                        </div>
                        <!-- versión móvil -->
                        <div class="col-xl-2 text-left d-block d-sm-block d-md-block d-lg-block d-xl-none">
                            <label for="mensaje" class="control-label text-info mt-2">MENSAJE:</label>
                        </div>

                        <div class="col-xl-10">
                            <textarea cols=10 rows=5 id="mensaje" name="mensaje" placeholder="escriba aquí su mensaje" class="form-control" required></textarea>
                            <div class="text-right mt-2">
                                <button type="submit" class="btn btn-info" id="botonEnviar">ENVIAR</button>
                                <div class="d-flex justify-content-end">
                                    <img src="img/check.png" alt="Enviado" id="imgEnviado" class="d-none">
                                </div>
                                <div class="text-right d-none" id="divEnviando">
                                    <div class="mt-2 spinner-personalizado" ></div>
                                    <span class="ml-2 text-info texto-enviando">Enviando...</span>
                                </div>
                            </div>
                        </div>
                      </div>
                  </form>
            </div>
            <div class="col-xl-4 d-none d-sm-none d-md-none d-lg-none d-xl-block">
                <img src="img/contacto.png" alt="Imagen de contacto" class="img-fluid pl-5 pt-4 imagen-carta">
            </div>
        </div>
        
    </main>

    <!-- Script que procesa la petición AJAX para poder enviar el correo con PHP -->
    <script src="js/main.js"></script>
    <?php require_once('includes/pie.php'); ?>

</body>
</html>
