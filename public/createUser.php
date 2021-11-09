<?php
require '../app/header.php';
?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Registrar Usuario</h3>
                  
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <h5>Registrar un nuevo usuario</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="date-picker">
                      <form method="post" action="storeUser.php" class="theme-form">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label text-end">Nombre completo</label>
                          <div class="col-xl-5 col-sm-9">
                            <div class="input-group">
                              <input class="datepicker-here form-control digits" name="nombre" id="nombre" type="text" data-language="en">
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label text-end">Cuenta de usuario</label>
                          <div class="col-xl-5 col-sm-9">
                            <div class="input-group">
                              <input class="datepicker-here form-control digits" name="usuario" id="nombre" type="text" data-language="en">
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label text-end">Password</label>
                          <div class="col-xl-5 col-sm-9">
                            <input class="datepicker-here form-control digits" type="password" name="pass1" id="curso" data-language="en">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label text-end">Tipo de usuario</label>
                          <div class="col-xl-5 col-sm-9">
                            <div class="mb-2">
                            <select class="form-control form-control-primary btn-square" name="nivel">
                              <option value="A">Administrador</option>
                              <option value="O">Operario</option>
                              <option value="V">Visualizador</option>
                            </select>
                          </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-9">
                            <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                          </div>
                        </div>
                        
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        



<?php
require '../app/footer.php';
?>