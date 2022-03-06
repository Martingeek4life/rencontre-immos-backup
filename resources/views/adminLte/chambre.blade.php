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

  .td-btn {
    
  }
  
  .btn.btn-primary {
    
  }
  .btn.btn-primary.left {
    margin-right: 5px;
    color: #fff;
    background-color: #00acc1;
    border-color: #00acc1;
    display: inline-block;
  }

  .btn.btn-primary.right {
    color: #fff;
    background-color: #ff5252;
    border-color: #ff5252;
    display: inline-block;
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

  form > .row.form-group select {
    border: none;
    border-bottom: 1px solid #ced4da;
    padding-left: 0;
    padding-right: 0;
    font-size: 20px;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
  }
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Chambres</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Chambres</li>
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
            Ajouter une chambre
        </button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Occupants</th>
              <th>Prix de la chambre</th>
              <th>Nombres de lits</th>
              <th>Catégories</th>
              <th>Options</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>200</td>
              <td>Internet
                Explorer 4.0
              </td>
              <td>Win 95+</td>
              <td> example@example.com</td>
              <td> 4</td>
              <td class="td-btn"> 
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
              <td>202</td>
              <td>Internet
                Explorer 5.0
              </td>
              <td>Win 95+</td>
              <td> example@example.com</td>
              <td> 4</td>
              <td class="td-btn"> 
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
              <td>300</td>
              <td>Internet
                Explorer 5.5
              </td>
              <td>Win 95+</td>
              <td> example@example.com</td>
              <td> 4</td>
              <td class="td-btn"> 
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
              <td>305</td>
              <td>Internet
                Explorer 6
              </td>
              <td>Win 98+</td>
              <td> example@example.com</td>
              <td> 4</td>
              <td class="td-btn"> 
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
              <td>100</td>
              <td>Internet Explorer 7</td>
              <td>Win XP SP2+</td>
              <td> example@example.com</td>
              <td> 4</td>
              <td class="td-btn"> 
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
              <td>102</td>
              <td>AOL browser (AOL desktop)</td>
              <td>Win XP</td>
              <td> example@example.com</td>
              <td> 4</td>
              <td class="td-btn"> 
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
              <td>109</td>
              <td>Firefox 1.0</td>
              <td>Win 98+ / OSX.2+</td>
              <td> example@example.com</td>
              <td> 4</td>
              <td class="td-btn"> 
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
              <td>400</td>
              <td>Firefox 1.5</td>
              <td>Win 98+ / OSX.2+</td>
              <td> example@example.com</td>
              <td> 4</td>
              <td class="td-btn"> 
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
              <th>Emails</th>
              <th>Chambres</th>
              <th>Durées séjours</th>
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
        <h4 class="modal-title">Ajouter une chambre</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
              <div class="row form-group">
                <div class="col-sm-6">
                  <input type="text" name="numero_chambre" class="form-control" placeholder="Numéro chambre">
                </div>
                <div class="col-sm-6">
                  <input type="text" name="nombre_lits" class="form-control" placeholder="Nombre de lits">
                </div>
              </div>
              <div class="row form-group">
                  <div class="col">
                    <input type="number" name="prix" class="form-control" placeholder="Prix de la chambre">
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col">
                    <input type="text" name="categorie" class="form-control" placeholder="Catégorie de la chambre">
                  </div>
              </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-primary reset"> <i class="nav-icon fas fa-trash"></i> Effacer</button>
              <button type="button" class="btn btn-primary save"> <i class="nav-icon fas fa-save"></i> Enregistrer</button>
            </div>
          </form>
      </div>
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
