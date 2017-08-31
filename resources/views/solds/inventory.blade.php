@extends('../layout')
@section('title')
  Inventario general - Optica Ramirez
@endsection
@section('css')

@endsection
@section('content')
<div class="container-fluid">
<div class="well col-md-12">
<fieldset>
<legend>
  Lista de articulos generales
</legend>
<form class="form-horizontal" action="" method="post">
<div class="table-responsive">
  <button type="button" name="button" class="btn btn-danger btn-raised"><i class="material-icons">card_giftcard</i> Nuevo Producto</button> <br/><br/>
<table class="table table-hover" id="inventory">
<thead>
  <th data-dynatable-column="ci_cli">Nombre del producto</th>
  <th data-dynatable-column="ci_cli">Descripcion</th>
  <th data-dynatable-column="ci_cli">Saldo</th>
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
@endsection
@section('scripts')
  <script type="text/javascript">
    $(document).on('ready', function(){
      var clients ={!! json_encode($clients->toArray()) !!};
    
      $('#inventory').dynatable({
        dataset: {
          records:clients
        },
        inputs: {
         processingText: 'Loading <img src="{{ url('imagen/cargando.gif')}}" />'
        }
      });
    });
  </script>
@endsection
