@extends('../layout')
@section('title')
  Ventas menores - Optica Ramirez
@endsection
@section('content')
<div class="container-fluid">
  <div class="well">
    <fieldset>
    <legend>Ventas menores - Registro</legend>
    <button type="button" class="btn btn-danger btn-raised" data-toggle="modal" data-target="#miModal" name="button"><i class="material-icons"></i> Registrar venta</button><br><br>
    <table class="table table-striped table-hover" id="sales">
      <thead>
        <tr>
          <th data-dynatable-column="fec_sale">Fecha de venta</th>
          <th data-dynatable-column="nam_cli">Cliente</th>
          <th data-dynatable-column="nam_user">Usuario</th>
          <th data-dynatable-column="button">Acciones</th>
        </tr>
      </thead>
    </table>
  </fieldset>
  </div>
</div>
<!-- Modal !-->

  <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Registrar venta</h4>
      </div>
      <div class="modal-body">
				{!! Form::open(['route' => 'sales.store']) !!}
        <div class="form-group has-danger">
          <label class="col-md-4 control-label">Fecha:</label>
        <div class="col-md-8" >
          <input type="text" name="fec_sale" class="form-control" required>
        </div></div>
        <div class="form-group has-danger">
          <div class="col-md-12" >
          <fieldset id="fiel">
            <button type="button" class="btn btn-raised btn-info" onclick="crear(this)" >Agregar producto</button>
          <table class="table table-hovered">
            <th>
              <td>Producto</td>
              <td>Precio</td>
              <td>Cantidad</td>
              <td>Total</td>
              <td></td>
            </th>
          </table>

          </fieldset>
          </div>
        </div>
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
    var sale ={!! json_encode($sale->toArray()) !!};
    console.log(sale);
    for(var i=0; i<sale.length; i++)
    {
      var click="javascript:pasar('"+ sale[i].nam_cli+"','"+ sale[i].lpa_cli+"','"+sale[i].lma_cli +"','"+sale[i].add_cli +"','"+sale[i].pho_cli +"','"+sale[i].id+"','"+sale[i].old_cli +"');";
      sale[i].button='<a class="btn btn-raised btn-warning" onclick="'+click+'"  href="#" style="margin-top:0px; padding: 8px;"><i class="material-icons">supervisor_account</i> Ver detalles</a>';
      JSON.stringify(sale);
      console.log(sale);
    }
    console.log(sale);
    $('#sales').dynatable({
      dataset: {
        records: sale
      },
      inputs: {
       processingText: 'Loading <img src="{{ url('imagen/cargando.gif')}}" />'
      }
    });
  });
  function pasar(nam,lpa,lma,add,pho,id,old)
  {
    document.getElementById("nam").innerHTML = nam+' '+lpa+' '+lma;
    document.getElementById("old").innerHTML = old;
    document.getElementById("add").innerHTML = add;
    document.getElementById("pho").innerHTML = pho;
    $('#cli').val(id);
    $('#cli2').val(id);
  }
  </script>
  <script type="text/javascript">
<!--
num=0;
function crear(obj) {
  num++;
  fi = document.getElementById('fiel'); // 1
  contenedor = document.createElement('div'); // 2
  contenedor.id = 'div'+num; // 3
  contenedor.class = 'form-group';
  fi.appendChild(contenedor); // 4

  ele = document.createElement('input'); // 5
  ele.setAttribute("class", "form-control"); // 6
  ele.type = 'text'; // 6
  ele.name = 'pro'+num; // 6
  contenedor.appendChild(ele); // 7

  ele = document.createElement('input'); // 5
  ele.setAttribute("class", "form-control"); // 6
  ele.type = 'text'; // 6
  ele.name = 'pre'+num; // 6
  contenedor.appendChild(ele); // 7

  ele = document.createElement('input'); // 5
  ele.type = 'text'; // 6
  ele.name = 'fil'+num; // 6
  ele.setAttribute("class", "form-control"); // 6
  contenedor.appendChild(ele); // 7

  ele = document.createElement('input'); // 5
  ele.type = 'button'; // 6
  ele.value = '-'; // 8
  ele.setAttribute("class", "btn btn-danger btn-raised"); // 6
  ele.name = 'div'+num; // 8
  ele.onclick = function () {borrar(this.name)} // 9
  contenedor.appendChild(ele); // 7
}
function borrar(obj) {
  fi = document.getElementById('fiel'); // 1
  fi.removeChild(document.getElementById(obj)); // 10
}
-->
</script>
@endsection
