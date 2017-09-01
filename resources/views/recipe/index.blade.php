@extends('../layout')
@section('title')
 Formulario de recetas - Optica Ramirez
@endsection
@section('css')
{!! Html::style('css/tabla.css')!!}
{!! Html::style('css/boton.css')!!}
{!! Html::style('css/galeria.css')!!}
{!! Html::style('css/lupa.css')!!}
<!--INICIO DECONTENIDO DE IZQUIERDA-->
<style type="text/css">
  #activar1 ~ .desplegable1
  {
    display: none;overflow: hidden;
  }
  #activar1:checked ~ .desplegable1
  {
    display: block;
  }

  #activar2 ~ .desplegable2
  {
    display: none;overflow: hidden;
  }
  #activar2:checked ~ .desplegable2
  {
    display: block;
  }

  #activar3 ~ .desplegable3
  {
    display: none;overflow: hidden;
  }
  #activar3:checked ~ .desplegable3
  {
    display: block;
  }
  .input-lejos{
    width: 8vw;
    border-radius: 5px;
  }
  .input-lejos2{
    width: 27vw;
    border-radius: 3px;
  }
  .input-lejos:hover{
    border: 2px solid #ff5700;
  }
  .input-lejos2:hover{
    border: 2px solid #ff5722;
  }
  .input-lejos:focus{
    border: 2px solid #ff5700;
  }
  .input-lejos2:focus{
    border: 2px solid #ff5722;
  }
  .grupo{
    margin-top: 10px;
    padding-bottom: 0px;
  }

</style>
@endsection
@section('content')
  <div class="container-fluid">
    <div class="well">
    <div class="row">
      <div class="col-lg-6">
         <input type="radio" name="activar" id="activar1" value="imagen 1" checked>
         <input type="radio" name="activar" id="activar2" value="imagen 2">
         <input type="radio" name="activar" id="activar3" value="imagen 3">
          <div class="desplegable1">
            <div id="window" class="magnify" data-magnified-zone=".mg_zone">
              <div class="magnify_glass">
                <div class="mg_ring"></div>
                <div class="pm_btn plus"><h2 style="margin-top:2px;">+</h2></div>
                <div class="pm_btn minus"><h2 style="margin-top:-2px;">-</h2></div>
                <div class="mg_zone"></div>
              </div>
              <div class = "element_to_magnify">
                <img src="{{url('imagen/ejemplo.jpg')}}"/>
              </div>
            </div>
          </div>
          <div class="desplegable2">
                <div id="window2" class="magnify2" data-magnified-zone=".mg_zone">
                  <div class="magnify_glass">
                    <div class="mg_ring"></div>
                    <div class="pm_btn plus"><h2 style="margin-top:2px;">+</h2></div>
                    <div class="pm_btn minus"><h2 style="margin-top:-2px;">-</h2></div>
                    <div class="mg_zone"></div>
                  </div>
                  <div class = "element_to_magnify">

                    <img src="{{url('imagen/ejemplo2.jpg')}}"/>
                  </div>
                </div>
          </div>
          <div class="desplegable3">
                <div id="window3" class="magnify3" data-magnified-zone=".mg_zone">
                  <div class="magnify_glass">
                    <div class="mg_ring"></div>
                    <div class="pm_btn plus"><h2 style="margin-top:2px;">+</h2></div>
                    <div class="pm_btn minus"><h2 style="margin-top:-2px;">-</h2></div>
                    <div class="mg_zone"></div>
                  </div>
                  <div class = "element_to_magnify">

                    <img src="{{url('imagen/ejemplo3.jpg')}}"/>
                  </div>
                </div>
          </div>
          <!--FIN DECONTENIDO DE IZQUIERDA-->
      </div>
      <div class="col-lg-6" style="overflow:visible;">
      <div class="panel panel-warning">
        <div class="panel-heading">
          <h3>DATOS DEL PACIENTE</h3>
        </div>
        <div class="panel-body">
          <form class="form-horizontal" role="form">
                    <h4><label for="" class="label label-danger">Datos personales</label></h4>
                    <p><b>Nombre del paciente: </b></p>
                    <p><b>Edad del paciente: </b></p>
                    <p><b>Telefono: </b></p>
                    <p><b>Fecha: </b></p>
                <h4><label for="" class="label label-warning">PARA VISION DE LEJOS</label></h4>
                <table class="table table-bordered">
                  <tr>
                    <th width="10%"></th>
                    <th width="10%">ESF</th>
                    <th width="10%">CIL.</th>
                    <th width="10%">EJE.</th>
                    <th width="10%">A.V.</th>
                  </tr>
                  <tr>
                  <th class="success">OD</th>
                  <td width="10%"><input type="text" class="input-lejos" placeholder=""></td>
                  <td width="10%"><input type="text" class="input-lejos" placeholder=""></td>
                  <td width="10%"><input type="text" class="input-lejos" placeholder=""></td>
                  <td width="10%"><input type="text" class="input-lejos" placeholder=""></td>
                  </tr>
                  <tr>
                  <th class="danger">OI</th>
                  <td><input type="text" class="input-lejos" placeholder=""></td>
                  <td><input type="text" class="input-lejos" placeholder=""></td>
                  <td><input type="text" class="input-lejos" placeholder=""></td>
                  <td><input type="text" class="input-lejos" placeholder=""></td>
                  </tr>
                </table>
                <div class="col-xs-1">
                  <label for="ejemplo_email_3" class="col-lg-2" style="color:#333">DIP :</label>
                  </div>
                  <div class="col-xs-5">
                  <input type="text" class="input-lejos" placeholder="">
                  </div>
                  <div class="col-xs-1">
                   <label for="ejemplo_email_3" class="" style="color:#333">ADDA:</label>
                  </div>
                  <div class="col-xs-5">
                 <input type="text" class="input-lejos" placeholder="">
                  </div>
<br><br><br>
                  <h4><label for="" class="label label-success">PARA VISION DE CERCA</label></h4>
                <table class="table table-bordered">
                  <tr>
                  <th width="10%"></th>
                  <th width="10%">ESF</th>
                  <th width="10%">CIL.</th>
                  <th width="10%">EJE.</th>
                  <th width="10%">A.V.</th>
                  </tr>
                  <tr>
                  <th class="success">OD</th>
                  <td><input type="text" class="input-lejos" placeholder=""></td>
                  <td><input type="text" class="input-lejos" placeholder=""></td>
                  <td><input type="text" class="input-lejos" placeholder=""></td>
                  <td><input type="text" class="input-lejos" placeholder=""></td>
                  </tr>
                  <tr>
                  <th class="danger">OI</th>
                  <td><input type="text" class="input-lejos" placeholder=""></td>
                  <td><input type="text" class="input-lejos" placeholder=""></td>
                  <td><input type="text" class="input-lejos" placeholder=""></td>
                  <td><input type="text" class="input-lejos" placeholder=""></td>
                  </tr>
               </table>
               <!--inicio de los labels e inputs-->
               <div class="form-group grupo">
                 <div class="col-lg-4">
                   <label for="ejemplo_email_5" class="" style="color:#333">TIPO DE LENTE:</label>
                 </div>
                      <div class="col-lg-8">
                        <input type="text" class="input-lejos2" placeholder="">
                      </div>
                </div>
               <div class="form-group grupo">
                 <div class="col-lg-4">
                   <label for="ejemplo_email_5" class="" style="color:#333">USO:</label>
                 </div>
                      <div class="col-lg-7">
                        <input type="text" class="input-lejos2" placeholder="">
                      </div>
                </div>
                <div class="form-group grupo">
                  <div class="col-lg-4">

                    <label for="ejemplo_email_5" class="" style="color:#333">CONTROL:</label>
                  </div>
                      <div class="col-lg-8">
                        <input type="text" class="input-lejos2" placeholder="">
                      </div>
                </div>
                 <div class="form-group grupo">
                   <div class="col-lg-4">

                     <label for="ejemplo_email_5" class="" style="color:#333">OBSERVACIONES:</label>
                   </div>
                      <div class="col-lg-8">
                        <input type="text" class="input-lejos2" placeholder="">
                      </div>
                </div>
                 <div class="form-group grupo">
                   <div class="col-lg-4">

                     <label for="ejemplo_email_5" class="" style="color:#333">ESPECIALISTA:</label>
                   </div>
                      <div class="col-lg-8">
                        <input type="text" class="input-lejos2" placeholder="">
                      </div>
                </div>
                <br><br>
                <!--fin de los labels e inputs-->
                  <div class="col-lg-12 container-fluid" style="padding-left: 10vw">
                   <button type="button" class="btn btn-danger btn-raised active"><i class="material-icons">delete</i> LIMPIAR</button>
                    <a href="javascript:void(0)" class="btn btn-raised btn-primary"><i class="material-icons">done</i> GUARDAR</a>
                    <button type="button" class="btn btn-info btn-raised active"><i class="material-icons">print</i> IMPRIMIR</button>
                 </div>
               </form>
        </div>
      </div>
  </div>
</div>
</div>
</div>
@endsection
@section('scripts')
  <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  {!! Html::script('js/jquery.jfMagnify.min.js') !!}
  <script type="text/javascript">
    $(document).ready(function() {
      var scaleNum = 2;
      $(".magnify").jfMagnify();
      $('.plus').click(function(){
        scaleNum += .5;
        if (scaleNum >=3) {
          scaleNum = 3;
        };
        $(".magnify").data("jfMagnify").scaleMe(scaleNum);
      });
      $('.minus').click(function(){
        scaleNum -= .5;
        if (scaleNum <=1) {
          scaleNum = 1;
        };
        $(".magnify").data("jfMagnify").scaleMe(scaleNum);
      });
      $('.magnify_glass').animate({
        'top':'60%',
        'left':'60%'
        },{
        duration: 3000,
        progress: function(){
          $(".magnify").data("jfMagnify").update();
        },
        easing: "easeOutElastic"
      });

       var scaleNum2 = 2;
      $(".magnify2").jfMagnify();
      $('.plus').click(function(){
        scaleNum2 += .5;
        if (scaleNum2 >=3) {
          scaleNum2 = 3;
        };
        $(".magnify2").data("jfMagnify").scaleMe(scaleNum2);
      });
      $('.minus').click(function(){
        scaleNum2 -= .5;
        if (scaleNum2 <=1) {
          scaleNum2 = 1;
        };
        $(".magnify2").data("jfMagnify").scaleMe(scaleNum2);
      });
      $('.magnify_glass').animate({
        'top':'60%',
        'left':'60%'
        },{
        duration: 3000,
        progress: function(){
          $(".magnify2").data("jfMagnify").update();
        },
        easing: "easeOutElastic"
      });
      var scaleNum3 = 2;
     $(".magnify3").jfMagnify();
     $('.plus').click(function(){
       scaleNum3 += .5;
       if (scaleNum3 >=3) {
         scaleNum3 = 3;
       };
       $(".magnify3").data("jfMagnify").scaleMe(scaleNum3);
     });
     $('.minus').click(function(){
       scaleNum3 -= .5;
       if (scaleNum3 <=1) {
         scaleNum3 = 1;
       };
       $(".magnify3").data("jfMagnify").scaleMe(scaleNum3);
     });
     $('.magnify_glass').animate({
       'top':'60%',
       'left':'60%'
       },{
       duration: 3000,
       progress: function(){
         $(".magnify3").data("jfMagnify").update();
       },
       easing: "easeOutElastic"
     });
    });
  </script>
@endsection
