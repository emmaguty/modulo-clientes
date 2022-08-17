<!--
=========================================================
Equipo: Cartelera
=========================================================

* Itzel Alejandra Barbosa Cazares.
* Mariela Hernández Flores.
* Jalil Manuel López Ceniceros.
* Paola Elizabeth Rosales Verdín.

=========================================================
-->
<?php
// Conexión a BD
include("../php/conexion.php");
include("./partials/head.php");

$activo = "cartelera";
include("./partials/navbarvertical.php");

include("./partials/scripts.php");
?>

<!DOCTYPE html>
<html lang="en">

<title>Cartelera | Autocinema</title>

<body class="g-sidenav-show bg-gray-100">
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php
    include("./partials/navbarhorizontal.php");
    ?>

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3 d-flex justify-content-between">
              <div>
                <div class="col-12 d-flex align-items-center">
                  <h6 class="mb-0">Películas agregadas recientemente</h6>
                </div>
                <p class="text-sm">Echa un vistazo a los más recientes lanzamientos</p>
              </div>
              <div>
              <a class="btn btn-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#agregarPeli"><i class="fas fa-plus"></i>&nbsp;&nbsp;Agregar película</a>
                <!-- Modal para agregar película -->
                <div class="modal fade" id="agregarPeli" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar película</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" data-bs-target="#agregarPeli" aria-label="Close"></button>
                        <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
                      </div>
                      <div class="modal-body">
                        <form id="formAgregar" method="POST">
                          <div class="row">
                            <div class="col-12 mb-3">
                              <label for="tituloPelicula" class="form-label">Título de la película</label>
                              <input type="text" class="form-control" id="tituloPelicula" aria-describedby="Titulo Película" name="tituloPelicula" required>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12 mb-3">
                              <label for="imgAñadir" class="form-label">Póster de la Película</label>
                              <input class="form-control" type="file" accept="image/*" id="imgAñadir" data-error="Ingresa un archivo con formato válido." data-success="Válido" name="img" required>
                              <small id="textAyuda" class="text-muted">Imagen a cargar para película. (Formato JPG, PNG, JPEG)</small>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col mb-3">
                              <label for="generoPelicula" class="form-label">Genero de la película</label><br>
                                <small id="textAyuda" class="text-muted">Seleccione genero (s)</small><br>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox1" value="Acción">
                                  <label class="form-check-label" for="inlineCheckbox1">Acción</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox2" value="Aventura">
                                  <label class="form-check-label" for="inlineCheckbox2">Aventura</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox3" value="Ciencia Ficción">
                                  <label class="form-check-label" for="inlineCheckbox3">Ciencia Ficción</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox4" value="Comedia">
                                  <label class="form-check-label" for="inlineCheckbox4">Comedia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox5" value="Documental">
                                  <label class="form-check-label" for="inlineCheckbox5">Documental</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox6" value="Drama">
                                  <label class="form-check-label" for="inlineCheckbox6">Drama</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox7" value="Fantasía">
                                  <label class="form-check-label" for="inlineCheckbox7">Fantasía</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox8" value="Musical">
                                  <label class="form-check-label" for="inlineCheckbox8">Musical</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox9" value="Romance">
                                  <label class="form-check-label" for="inlineCheckbox9">Romance</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox10" value="Supenso">
                                  <label class="form-check-label" for="inlineCheckbox10">Supenso</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input check-peli" name="checks[]" type="checkbox" id="inlineCheckbox11" value="Terror">
                                  <label class="form-check-label" for="inlineCheckbox11">Terror</label>
                                </div>
                                <br><small id="resp" class="text-muted"></small>
                                <input type="hidden" name="generoPelicula" id="generoPelicula">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col mb-3">
                                <label for="horarioPelicula" class="form-label">Horario</label>
                                <input type="time" class="form-control" id="horarioPelicula" aria-describedby="Horario Película" name="horarioPelicula" required>
                              </div>
                              <div class="col mb-3">
                                <label for="idiomaPelicula" class="form-label">Idioma</label>
                                <select name="idiomaPelicula" id="idiomaPelicula" class="form-control" required>
                                  <option selected disabled>Elija idioma</option>
                                  <option value="Español">Español</option>
                                  <option value="Subtitulos">Subtitulos</option>
                                </select>
                              </div>
                              <div class="col mb-3">
                                <label for="duracionPelicula" class="form-label">Duración</label>
                                <input type="number" class="form-control" id="duracionPelicula" aria-describedby="Duracion Película" name="duracionPelicula" required>
                                <small id="textAyuda" class="text-muted">Minutos</small>
                              </div>
                              <div class="col mb-3">
                                <label for="formatoPelicula" class="form-label">Formato</label>
                                <select id="formatoPelicula" class="form-control" name="formatoPelicula" required>
                                  <option selected disabled>Elija formato</option>
                                  <option value="2D">2D</option>
                                  <option value="3D">3D</option>
                                </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12 mb-3">
                                <label for="sinopsisPelicula" class="form-label">Sinópsis</label>
                                <textarea class="form-control" id="sinopsisPelicula" name="descripcion" rows="5" required></textarea>
                              </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-sm mb-0" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" id="btnAgregar" class="btn btn-primary btn-sm mb-0">Agregar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Mostrar películas-->
            <div class="card-body p-3">
              <div class="row">
                <?php
                $sql = "SELECT * FROM cartelera";
                if ($result = mysqli_query($conn, $sql)) {
                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                      <div class="col-xl-3 col-md-2 mb-xl-0 mb-4">
                        <div class="card card-blog card-plain shadow p-2">
                          <div class="position-relative">
                            <a class="d-block shadow-xl border-radius-xl">
                              <img src="../public/img/cartelera/<?php echo $row['imagen']; ?>" alt="<?php echo $row['imagen']; ?>" class="img-fluid shadow border-radius-xl">
                            </a>
                          </div>
                          <div class="card-body px-1 pb-0">
                            <p class="text-muted mb-2 text-sm"><b>Género: </b> <?php echo $row['genero']; ?> </p>
                            <a href="javascript:;">
                              <h5>
                                <?php echo $row['nombre']; ?>
                              </h5>
                            </a>
                            <div class="row">
                              <div class="col mb-3">
                                <!--<p class="text-muted mb-2 text-sm"><b>Horario: </b></p>-->
                              </div>
                              <div class="col mb-3">
                                <!--<p class="text-muted mb-2 text-sm"></p>-->
                              </div>
                            </div>
                            <div class="row">
                              <div class="col mb-3">
                                  <!--<p class="text-muted mb-2 text-sm"></p>-->
                              </div>
                              <div class="col mb-3">
                                <!--<p class="text-muted mb-2 text-sm"></p>-->
                              </div>
                            </div>
                            <p class="mb-2 text-sm"><b>Sinópsis</b></p>
                            <p class="mb-2 text-sm"><?php echo $row['descripcion']; ?></p>
                            <div class="ms-auto text-end">
                              <a class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="eliminar('<?php echo $row['id_cartelera'] ?>')" ><i class="far fa-trash-alt me-2"></i>Eliminar</a>
                              <button value="<?php echo $row['id_cartelera']; ?>" onclick="abrirEditar(<?php echo $row['id_cartelera']; ?>)"; class="btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal" data-bs-target="#editar"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Editar</a>
                            </div>
                          </div>
                        </div>
                      </div>
                <?php
                    }
                  }
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal para editar películas -->
      <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="tituloEditar">Editar </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="formEditar" method="POST">
                <input type="hidden" id="idEditar" name="id">
                <div class="row">
                  <div class="col-12 mb-3">
                    <label for="formFile" class="form-label">Título de la imagen</label>
                    <input class="form-control" class="form-control" id="tituloPeliculaEditar" name="nombre" rows="8" value="" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 mb-3 text-center">
                  <img id="imgPrev_editar" style="width: 300px !important; height: 250px !important;" accept="image/*" id="img_editar_foto" class="card-img-top" alt="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 mb-3">
                    <label for="formFile" class="form-label">Selecciona una imagen</label>
                    <input class="form-control" type="file" accept="image/*" id="img_editar" title="Agrega una imagen" name="img">
                    <small id="textAyuda" class="text-muted">(Formato JPG, PNG, JPEG)</small>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 mb-3">
                    <label for="generoPelicula" class="form-label">Genero de la película</label><br>
                    <small id="textAyuda" class="text-muted">Seleccione genero (s)</small><br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox1" value="Acción">
                      <label class="form-check-label" for="inlineCheckbox1">Acción</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox2" value="Aventura">
                      <label class="form-check-label" for="inlineCheckbox2">Aventura</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox3" value="Ciencia Ficción">
                      <label class="form-check-label" for="inlineCheckbox3">Ciencia Ficción</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox4" value="Comedia">
                      <label class="form-check-label" for="inlineCheckbox4">Comedia</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox5" value="Documental">
                      <label class="form-check-label" for="inlineCheckbox5">Documental</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox6" value="Drama">
                      <label class="form-check-label" for="inlineCheckbox6">Drama</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox7" value="Fantasía">
                      <label class="form-check-label" for="inlineCheckbox7">Fantasía</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox8" value="Musical">
                      <label class="form-check-label" for="inlineCheckbox8">Musical</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox9" value="Romance">
                      <label class="form-check-label" for="inlineCheckbox9">Romance</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox10" value="Supenso">
                      <label class="form-check-label" for="inlineCheckbox10">Supenso</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input check-peli" name="checksEditar[]" type="checkbox" id="inlineCheckbox11" value="Terror">
                      <label class="form-check-label" for="inlineCheckbox11">Terror</label>
                    </div>
                    <br><small id="resp" class="text-muted"></small>
                    <input type="hidden" name="generoPeliculaEditar" id="generoPeliculaEditar">
                  </div>
                </div>
                <div class="row">
                  <div class="col mb-3">
                    <label for="horarioPeliculaEditar" class="form-label">Horario</label>
                    <input type="time" class="form-control" id="horarioPeliculaEditar" aria-describedby="Horario Película" name="horarioPelicula" required>
                  </div>
                  <div class="col mb-3">
                    <label for="idiomaPeliculaEditar" class="form-label">Idioma</label>
                    <select id="idiomaPeliculaEditar" class="form-control" name="idioma" required>
                      <option selected disabled>Elija idioma</option>
                      <option value="espanol">Español</option>
                      <option value="subtitulos">Subtitulos</option>
                    </select>
                  </div>
                  <div class="col mb-3">
                    <label for="duracionPeliculaEditar" class="form-label">Duración</label>
                    <input type="number" class="form-control" id="duracionPeliculaEditar" aria-describedby="Duracion Película" name="duracionPelicula" required>
                    <small id="textAyuda" class="text-muted">Minutos</small>
                  </div>
                  <div class="col mb-3">
                    <label for="formatoPeliculaEditar" class="form-label">Formato</label>
                    <select id="formatoPeliculaEditar" name="formato" class="form-control" required>
                      <option selected disabled>Elija formato</option>
                      <option value="2D">2D</option>
                      <option value="3D">3D</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 mb-3">
                    <label for="descripcionInputEditar" class="form-label">Sinópsis</label>
                    <textarea class="form-control" id="descripcionInputEditar" name="descripcion" rows="8"></textarea>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm mb-0" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" id="btnEditar" class="btn btn-primary btn-sm mb-0">Actualizar</button>
              </div>
              </form>
          </div>
      </div>
    </div>
      <?php
      include("./partials/footer.php");
      ?>
    </div>
  </main>
  <?php
  include("./partials/personalizacion.php");
  ?>

  <div class="fixed-plugin">
    <!-- <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a> -->
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Personalización</h5>
          <p class="text-sm">Vea nuestras opciones de panel de control</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Tema</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <p class="text-sm">Elija entre 2 tipos diferentes de sidenav.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparente</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">Blanco</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">Puede cambiar el tipo de guardado lateral solo en la vista de escritorio.</p>
        <!-- Navbar Fixed -->
       <div class="mt-3">
          <h6 class="mb-0">Ver Navegador</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <!-- Scripts de los módulos -->
  <script src="../js/modulos/cartelera.js"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
  <script src="../js/checkbox.js"></script>
</body>
</html>