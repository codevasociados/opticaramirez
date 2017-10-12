@extends('../../layout')
@section('title')
  Arreglos - Optica Ramirez
@endsection
@section('css')

@endsection
@section('content')
<div class="container-fluid">
  <div class="well col-lg-11" style="margin-left:4%;">
    <fieldset>
      <legend>Arreglos - Optica Ramirez</legend>
    </fieldset>
    <button type="button" class="btn btn-raised btn-danger" name="button"><i class="material-icons">check_circle</i> Registrar nuevo</button>
    <br><br><br>
  <table class="table table-striped table-hover" id="array">
    <thead>
      <tr>
        <th data-dynatable-column="dat_rec">Fecha de recepcion</th>
        <th data-dynatable-column="dat_ent">Fecha de entrega</th>
        <th data-dynatable-column="des_array">Descripcion</th>
        <th data-dynatable-column="aaa">Cliente</th>
        <th data-dynatable-column="button">Accion</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
</div>
</div>
@endsection
@section('scripts')
  <script type="text/javascript">
    $(document).on('ready', function(){
      var arrays ={!! json_encode($arrays->toArray()) !!};
      console.log(arrays);
      for(var i=0; i<arrays.length; i++)
      {
        arrays[i].button='<a class="btn btn-raised btn-warning" href="#" style="margin-top:0px; padding: 8px;"><i class="material-icons">supervisor_account</i> Ver</a><a class="btn btn-raised btn-primary" target="_blank" href="/ticket_print/'+arrays[i].id+'" style="margin-top:0px; padding: 8px;"><i class="material-icons">print</i> Imprimir boleta</a>';
        JSON.stringify(arrays);
        console.log(arrays);
      }
      console.log(arrays);
      $('#array').dynatable({
        dataset: {
          records: arrays
        },
        inputs: {
         processingText: 'Loading <img src="{{ url('imagen/cargando.gif')}}" />'
        }
      });
    });
  </script>
@endsection
