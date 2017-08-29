@extends('../layout')

@section('title')
 Ventas - Optica Ramirez
@endsection
@section('css')
  {!! Html::style('css/sold.css')!!}
@endsection
@section('content')
<div class="row container-fluid row1">
<div class="well col-md-5 minsold" style="background-color:#DB6504">
<div class="text">Ventas menores</div>
</div>
<div class="well col-md-5 arraysold" style="background-color:#001F5C">
<div class="text">Registro de ventas</div>
</div>
</div>
<div class="row container-fluid row1">
  <div class="well col-md-5 repsold" style="background-color:#5C004D">
<div class="text">Registro de ventas</div>
  </div>
  <div class="well col-md-5 aresold" style="background-color:#5C1200">
<div class="text">Registro de ventas</div>
  </div>
</div>
<div class="row container-fluid row1">
  <div class="well col-md-10 invsold" style="background-color:#005C54">
<div class="text">Registro de ventas</div>
  </div>
</div>
@endsection
