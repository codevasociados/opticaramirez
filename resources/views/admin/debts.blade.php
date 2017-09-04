@extends('../layout')
@section('title')
  Registro de deudas - Optica Ramirez
@endsection
@section('css')

@endsection
@section('content')
<div class="container-fluid">
<div class="well col-md-12">
<fieldset>
<legend>
  Lista de deudas pendientes
</legend>
<form class="form-horizontal" action="" method="post">
<div class="table-responsive">
  <button type="button" name="button" class="btn btn-danger btn-raised" data-toggle="modal" data-target="#miModal"><i class="material-icons">card_giftcard</i> Registrar nueva deuda</button> <br/><br/>
<table class="table table-hover" id="debt">
<thead>
  <th data-dynatable-column="cod_pro">Codigo</th>
  <th data-dynatable-column="nam_pro">Nombre del producto</th>
  <th data-dynatable-column="des_pro">Descripcion</th>
  <th data-dynatable-column="can_pro">Saldo</th>
  <th data-dynatable-column="button">Acciones</th>
</thead>
<tbody>

</tbody>
</table>
</div>
</form>
</fieldset>
</div>
</div>
<!-- Modal !-->

  <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Registro de deuda</h4>
      </div>
      <div class="modal-body">
				{!! Form::open(['route' => 'product.store']) !!}
        <div class="form-group has-danger">
          <label class="col-md-4 control-label">Codigo de producto</label>
        <div class="col-md-8" >
          <input type="text" name="cod_pro" class="form-control" required>
        </div></div>
        <div class="form-group has-danger">
          <label class="col-md-4 control-label">Nombre del producto</label>
        <div class="col-md-8" >
          <input type="text" name="nam_pro" class="form-control" required>
        </div></div>
        <div class="form-group has-danger">
          <label class="col-md-4 control-label">Descripcion del producto</label>
        <div class="col-md-8" >
          <input type="text" name="des_pro" class="form-control" required>
        </div></div>
        <div class="form-group has-danger">
          <label class="col-md-4 control-label">Cantidad del producto</label>
        <div class="col-md-8">
          <input type="number" name="can_pro" class="form-control" required>
				</div></div>
        </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="material-icons">close</i>Cerrar</button>
        <button type="submit" class="btn btn-primary"><i class="material-icons">check</i>Guardar</button>
      </div>
    </div>
		{!! Form::close() !!}
  </div>
</div>

</div>
<!-- Modal !-->
@endsection
@section('scripts')
  <script type="text/javascript">
    $(document).on('ready', function(){
      var debts ={!! json_encode($debts->toArray()) !!};
      $('#debt').dynatable({
        dataset: {
          records:debts
        },
        inputs: {
         processingText: 'Loading <img src="{{ url('imagen/cargando.gif')}}" />'
        }
      });
    });
  </script>
@endsection
