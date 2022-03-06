<style>
  input.form-control.form-control-sm,
  .dataTables_length select {
    border: none;
    border-bottom: 1px solid #ced4da;
  }

  form > .row.form-group input {
    border: none;
    border-bottom: 1px solid #ced4da;
    padding-left: 0;
    padding-right: 0;
    font-size: 20px;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
  }
  
  .btn.btn-primary {
    width: 40%;
  }
  .btn.btn-primary.left {
    margin-right: 5px;
    color: #fff;
    background-color: #00acc1;
    border-color: #00acc1;
  }

  .btn.btn-primary.right {
    margin-left: 10px;
    color: #fff;
    background-color: #ff5252;
    border-color: #ff5252;
  }

  .modal-footer .btn.btn-primary.reset {
    margin-left: 10px;
    color: #fff;
    background-color: #ff5252;
    border-color: #ff5252;
  }

  .modal-footer .btn.btn-primary.save {
    margin-right: 5px;
    color: #fff;
    background-color: #00acc1;
    border-color: #00acc1;
  }
</style>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Personnels</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Personnels</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header" style="box-shadow: 0 2px 10px -1px rgba(69,90,100,.3);">
          <button type="button" style="color: #fff; background-color: #9ccc65;border-color: #9ccc65;" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
              <i class="nav-icon fas fa-plus"></i>
              Ajouter un personnel
          </button>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>#</th>
                <th>Noms et prénoms</th>
                <th>Téléphones</th>
                <th>Postes</th>
                <th>Options</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 4.0
                </td>
                <td>Win 95+</td>
                <td> 4</td>
                <td> 
                  <button type="button" class="btn btn-primary left">
                      <i class="nav-icon fas fa-edit"></i>
                      Modifier
                  </button>
                  <button type="button" class="btn btn-primary right">
                      <i class="nav-icon fas fa-trash"></i>
                      Supprimer
                  </button>
                </td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 5.0
                </td>
                <td>Win 95+</td>
                <td>5</td>
                <td> 
                  <button type="button" class="btn btn-primary left">
                      <i class="nav-icon fas fa-edit"></i>
                      Modifier
                  </button>
                  <button type="button" class="btn btn-primary right">
                      <i class="nav-icon fas fa-trash"></i>
                      Supprimer
                  </button>
                </td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 5.5
                </td>
                <td>Win 95+</td>
                <td>5.5</td>
                <td> 
                  <button type="button" class="btn btn-primary left">
                      <i class="nav-icon fas fa-edit"></i>
                      Modifier
                  </button>
                  <button type="button" class="btn btn-primary right">
                      <i class="nav-icon fas fa-trash"></i>
                      Supprimer
                  </button>
                </td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 6
                </td>
                <td>Win 98+</td>
                <td>6</td>
                <td> 
                  <button type="button" class="btn btn-primary left">
                      <i class="nav-icon fas fa-edit"></i>
                      Modifier
                  </button>
                  <button type="button" class="btn btn-primary right">
                      <i class="nav-icon fas fa-trash"></i>
                      Supprimer
                  </button>
                </td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet Explorer 7</td>
                <td>Win XP SP2+</td>
                <td>7</td>
                <td> 
                  <button type="button" class="btn btn-primary left">
                      <i class="nav-icon fas fa-edit"></i>
                      Modifier
                  </button>
                  <button type="button" class="btn btn-primary right">
                      <i class="nav-icon fas fa-trash"></i>
                      Supprimer
                  </button>
                </td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>AOL browser (AOL desktop)</td>
                <td>Win XP</td>
                <td>6</td>
                <td> 
                  <button type="button" class="btn btn-primary left">
                      <i class="nav-icon fas fa-edit"></i>
                      Modifier
                  </button>
                  <button type="button" class="btn btn-primary right">
                      <i class="nav-icon fas fa-trash"></i>
                      Supprimer
                  </button>
                </td>
              </tr>
              <tr>
                <td>Gecko</td>
                <td>Firefox 1.0</td>
                <td>Win 98+ / OSX.2+</td>
                <td>1.7</td>
                <td> 
                  <button type="button" class="btn btn-primary left">
                      <i class="nav-icon fas fa-edit"></i>
                      Modifier
                  </button>
                  <button type="button" class="btn btn-primary right">
                      <i class="nav-icon fas fa-trash"></i>
                      Supprimer
                  </button>
                </td>
              </tr>
              <tr>
                <td>Gecko</td>
                <td>Firefox 1.5</td>
                <td>Win 98+ / OSX.2+</td>
                <td>1.8</td>
                <td> 
                  <button type="button" class="btn btn-primary left">
                      <i class="nav-icon fas fa-edit"></i>
                      Modifier
                  </button>
                  <button type="button" class="btn btn-primary right">
                      <i class="nav-icon fas fa-trash"></i>
                      Supprimer
                  </button>
                </td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <th>#</th>
                <th>Noms et prénoms</th>
                <th>Téléphones</th>
                <th>Postes</th>
                <th>Options</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->


<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Ajouter un personnel</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="row form-group">
                  <div class="col-sm-6">
                    <input type="text" name="nom" class="form-control" placeholder="Nom">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                  </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-6">
                      <input type="number" name="telephone" class="form-control" placeholder="Téléphone">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="poste" class="form-control" placeholder="Poste">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col">
                      <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-primary reset"> <i class="nav-icon fas fa-trash"></i> Effacer</button>
          <button type="button" class="btn btn-primary save"> <i class="nav-icon fas fa-save"></i> Enregistrer</button>
        </div>
            </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
