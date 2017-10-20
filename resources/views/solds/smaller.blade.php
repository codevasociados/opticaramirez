@extends('../layout')
@section('title')
  Ventas menores - Optica Ramirez
@endsection
@section('content')
<style media="screen">
  .caja:focus {box-shadow: 0 0 5px rgba(0, 148, 255, 1);border:1px solid rgba(0, 148, 255, 1);}
</style>
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
<!-- Modal -->
<div id="detail" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <div class="form-group has-danger">
          <label class="col-md-4 control-label">ID:</label>
        <div class="col-md-8" >
          <input type="text" value="" name="id" id="id" class="form-control" readonly="readonly" >
        </div>
        </div>
        <div class="form-group has-danger">
          <label class="col-md-4 control-label">Fecha de venta:</label>
        <div class="col-md-8" >
          <input type="text" value="" name="fec_sale" id="fec_sale" class="form-control" readonly="readonly" >
        </div>
        </div>
        <div class="form-group has-danger">
          <label class="col-md-4 control-label">Nombre cliente:</label>
        <div class="col-md-8" >
          <input type="text" value="" name="nam_sale" id="nam_sale" class="form-control" readonly="readonly" >
        </div>
        </div>
        <div class="form-group has-danger">
          <label class="col-md-4 control-label">Usuario:</label>
        <div class="col-md-8" >
          <input type="text" value="" name="id_user" id="id_user" class="form-control" readonly="readonly" >
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="material-icons">close</i>Cerrar</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal !-->

  <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
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
          <input type="date" value="{{\Carbon\Carbon::now()->format('Y-m-d')}}" name="fec_sale" class="form-control" required>
        </div>
      </div>
      <div class="form-group has-danger">
        <label class="col-md-4 control-label">Nombre:</label>
      <div class="col-md-8" >
        <input type="text" value="" name="nam_sale" class="form-control" required placeholder="ingrese nombre">
      </div>
    </div>
        <div class="form-group has-danger">
          <div class="col-md-12" >
          <fieldset id="fiel">
            <button type="button" class="btn btn-raised btn-info" onclick="crear(this)" >Agregar producto</button>
          <table class="table table-hovered">
            <th>
              <td>Producto</td>
              <td>Precio</td>
              <td >Cantidad</td>
              <td>Total</td>
              <td></td>
            </th>
          </table>
          <input type="hidden" name="num" id="num" value="0">

          </fieldset>
          <div class="form-group has-danger">
          <label for="total_total">Total de venta: </label>    <input type="text" name="total_total" id="total_total" class="total_t" value="0">
          </div>
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
      var id=sale[i].id;
      var fecsale=sale[i].fec_sale;
      var namsale=sale[i].nam_sale;
      var iduser=sale[i].id_user;

      var b="'"+id+"','"+fecsale+"','"+namsale+"','"+iduser+"'";


      var click="javascript:pasar('"+ sale[i].nam_cli+"','"+ sale[i].lpa_cli+"','"+sale[i].lma_cli +"','"+sale[i].add_cli +"','"+sale[i].pho_cli +"','"+sale[i].id+"','"+sale[i].old_cli +"');";
      sale[i].button='<a class="btn btn-raised btn-warning" onclick="javascript:pasadatos('+b+');" data-toggle="modal" data-target="#detail"  style="margin-top:0px; padding: 8px;"><i class="material-icons">supervisor_account</i> Ver detalles</a>';
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
  function pasadatos(id,fecsale,namsale,iduser){
    $('#id').val(id);
    $('#fec_sale').val(fecsale);
    $('#nam_sale').val(namsale);
    $('#id_user').val(iduser);
  }
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
var num=0;

function crear(obj) {
  num++;
  fi = document.getElementById('fiel'); // 1
  contenedor = document.createElement('div'); // 2
  contenedor.id = 'div'+num; // 3
  contenedor.class = 'form-group';
  fi.appendChild(contenedor); // 4

  ele = document.createElement('input'); // 5
  ele.setAttribute("class", "caja2"+num); // 6
  ele.type = 'text'; // 6
  ele.class = 'form-control'; // 6
  ele.name = 'pro'+num; // 6
  ele.style='width:22%; margin-right:5px; border-radius:5px;}';
  contenedor.appendChild(ele); // 7

  ele = document.createElement('input'); // 5
  ele.type = 'text'; // 6
  ele.id = 'cajamuno'+num;
  ele.name = 'pre'+num; // 6
  ele.setAttribute("onkeyup", "multiplicar();");
  ele.style='width:20%; margin-right:5px; border-radius:5px;';
  contenedor.appendChild(ele); // 7

  ele = document.createElement('input'); // 5
  ele.type = 'text'; // 6
  ele.name = 'fil'+num; // 6
  ele.id = 'cajamdos'+num;
  ele.setAttribute("onkeyup", "multiplicar();");
  ele.style='width:25%; margin-right:5px; border-radius:5px;';
  contenedor.appendChild(ele); // 7

  ele = document.createElement('input'); // 5
  ele.type = 'text'; // 6
  ele.setAttribute("readonly", "readonly");
  ele.setAttribute("onchange", "su();");
  ele.name = 'tot'+num; // 6
  ele.id = 'tot'+num; // 6
  ele.value='';
  ele.style='width:20%; margin-right:5px; border-radius:5px;';
  ele.setAttribute("class", "total_t"); // 6
  contenedor.appendChild(ele); // 7

var add2=0;



$('#num').val(num);

  ele = document.createElement('input'); // 5
  ele.type = 'button'; // 6
  ele.value = '-'; // 8
  ele.setAttribute("class", "btn btn-danger btn-raised"); // 6
  ele.name = 'div'+num; // 8
  ele.onclick = function () {borrar(this.name)} // 9
  contenedor.appendChild(ele); // 7


  $('.total_total').each(function() {
      if (!isNaN($(this).val())) {
          add2 += Number($(this).val());
      }
  });
  $('#total_total').val(add2);

}

function multiplicar(){
  var total = 0;
  var valor1 = document.getElementById("cajamuno"+num).value;
  var valor2 = document.getElementById("cajamdos"+num).value;
  total = (valor1 * valor2);
  var Display = document.getElementById("tot"+num).value;

  $('#tot'+num).val(total);
}

function suma() {
      var add = 0;
      $('.caja'+num).each(function() {
          if (!isNaN($(this).val())) {
              add = add*Number($(this).val());
          }
      });
      $('#tot'+num).val(add);


      $('.caja').each(function() {
          if (!isNaN($(this).val())) {
              add2 += Number($(this).val());
              console.log(add2);
          }
      });
      $('#total_total').val(add);
      add=0;

      $('.total_t').each(function() {
          if (!isNaN($(this).val())) {
              add2 += Number($(this).val());

          }
      });
      $('#total_total').val(add2);
};


function borrar(obj) {
  num--;
  fi = document.getElementById('fiel'); // 1
  fi.removeChild(document.getElementById(obj)); // 10
  $('#num').val(num);

}
-->
</script>
@endsection
