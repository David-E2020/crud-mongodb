<?php
include("../seguridad.php");
if($_SESSION['nivel']=="A" || $_SESSION['nivel']=="O" || $_SESSION['nivel']=="V"){
  require '../app/header.php';
}
?>


        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Lista de estudiantes</h3>
                  
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
            <div class="row">
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                  <li class="btn btn-warning"><a href="create.php">Adicionar</a></li>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>Nombre</th>
                            <th>Curso</th>
                            <th>NOtas</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $estudiantes=$collection->find();
                        foreach($estudiantes as $estudiante){
                        ?>
                          <tr>
                            <td><?=$estudiante->nombre?></td>
                            <td><?=$estudiante->curso?></td>
                            <td><?=$estudiante->nota?></td>
                            <td>
                              <a href="edit.php?id=<?=$estudiante->_id?>" class="btn btn-warning">edit</a>
                              <a href="delete.php?id=<?=$estudiante->_id?>" class="btn btn-danger">elim</a>
                            </td>
                          </tr>
                          <?php
                            }
                          ?>
                        </tbody>
                      </table>
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