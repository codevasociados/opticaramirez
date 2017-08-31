@extends('../layout')

@section('title')
 Ventas - Optica Ramirez
@endsection
@section('css')
  {!! Html::style('css/sold.css')!!}
@endsection
@section('content')
<div class="row container-fluid row1">
<a href="{{route('sold.smaller')}}">
<div class="well col-md-5 minsold" style="background-color:#DB6504">
<div class="text">Ventas menores</div>
</div>
</a>
<a href="{{route('arrangement.index')}}">
<div class="well col-md-5 arraysold" style="background-color:#001F5C">
<div class="text">Arreglos</div>
</div>
</a>
</div>
<div class="row container-fluid row1">
  <a href="{{route('sold.report')}}">
  <div class="well col-md-5 repsold" style="background-color:#5C004D">
<div class="text">Reportes</div>
  </div>
</a>
<a href="{{route('sold.graphic')}}">
  <div class="well col-md-5 aresold" style="background-color:#5C1200">
<div class="text">Graficos estadisticos</div>
  </div>
</a>
</div>
<div class="row container-fluid row1">
<a href="{{route('sold.inventory')}}">
  <div class="well col-md-10 invsold" style="background-color:#005C54">
    <div class="text">Inventario general</div>
  </div>
</a>
</div>
@endsection
