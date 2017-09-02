@extends('../layout')
@section('title')
  Modulo de administrador (Solo personal autorizado)- Optica Ramirez
@endsection
@section('css')
<!--aqui los css!-->

@endsection
@section('content')
<div class="container-fluid">
  <div class="well">
    <!--desde aqui!-->
    <section style="background:#efefe9;">
            <div class="container">
                <div class="row">
                    <div class="board">
                        <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                        <div class="board-inner">
                        <ul class="nav nav-tabs" id="myTab" style="background:#C70039  ;">
                        <div class="liner"></div>
                         <li class="active">

                        <a href="#home" data-toggle="tab" title="Clientes">
                          <center>

                          <i class="material-icons md-48" style="font-size: 30px;">people<br style="color=#900C3F;"><h5>Clientes</h5>  </i>
                          </center>
                        </a>
                      </li>

                      <li><a href="#profile" data-toggle="tab" title="Ventas">
                        <center>

                        <i class="material-icons md-48" style="font-size: 30px;">timeline<br style="color=#900C3F;"><h5>Ventas</h5>  </i>

                       </center>
                </a>
                     </li>
                     <li><a href="#messages" data-toggle="tab" title="Arreglos">

                       <center>
                            <i class="material-icons md-48" style="font-size: 30px;">adb<br style="color=#900C3F;"><h5>Arreglos</h5>  </i>
                         </center>  </a>
                         </li>

                         <li><a href="#settings" data-toggle="tab" title="Personal">
                           <center>
                                <i class="material-icons md-48" style="font-size: 30px;">person<br style="color=#900C3F;"><h5>Personal</h5>  </i>
                             </center>
                         </a></li>

                         <li><a href="#doner" data-toggle="tab" title="Gastos">
                           <center>
                                <i class="material-icons md-48" style="font-size: 30px;">storage<br style="color=#900C3F;"><h5>Gastos</h5>  </i>
                             </center>
                            </a>
                         </li>

                         <li><a href="#doner" data-toggle="tab" title="Deudas">
                           <center>
                                <i class="material-icons md-48" style="font-size: 30px;">create<br style="color=#900C3F;"><h5>Deudas</h5>  </i>
                             </center>
                            </a>
                         </li>


                        <li><a href="#doner" data-toggle="tab" title="Eventos">
                          <center>
                             <i class="material-icons md-48" style="font-size: 30px;">event<br style="color=#900C3F;"><h5>Eventos</h5>  </i>
                          </center>
                          </a>
                          </li>




                         </ul></div>

                         <div class="tab-content">
                          <div class="tab-pane fade in active" id="home" >

                              <h3 class="head text-center">Panel adminitrativo clientes <span style="color:#FFC300;">=)</span></h3>
                              <p class="narrow text-center">
                                <!--desde aqui el codigo de la tabla!-->


                                  <!--hasta aqui las tablas!-->
                              </p>

                              <p class="text-center">
                        <a href="" class="btn btn-success btn-outline-rounded green"> volver <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                    </p>
                          </div>
                          <div class="tab-pane fade" id="profile">
                              <h3 class="head text-center">Create a Bootsnipp<sup>™</sup> Profile</h3>
                              <p class="narrow text-center">
                                  Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                              </p>

                              <p class="text-center">
                        <a href="" class="btn btn-success btn-outline-rounded green"> create your profile <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                    </p>

                          </div>
                          <div class="tab-pane fade" id="messages">
                              <h3 class="head text-center">Bootsnipp goodies</h3>
                              <p class="narrow text-center">
                                ds
                              </p>

                              <p class="text-center">
                        <a href="" class="btn btn-success btn-outline-rounded green"> start using bootsnipp <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                    </p>
                          </div>
                          <div class="tab-pane fade" id="settings">
                              <h3 class="head text-center">Drop comments!</h3>
                              <p class="narrow text-center">
                                dfdf
                              </p>

                              <p class="text-center">
                        <a href="" class="btn btn-success btn-outline-rounded green"> start using bootsnipp <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></a>
                    </p>
                          </div>
                          <div class="tab-pane fade" id="doner">
      <div class="text-center">
        <i class="img-intro icon-checkmark-circle"></i>
    </div>
    <h3 class="head text-center">thanks for staying tuned! <span style="color:#f48260;">♥</span> Bootstrap</h3>
    <p class="narrow text-center">
      Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
    </p>
    </div>
    <div class="clearfix"></div>
    </div>

    </div>
    </div>
    </div>
    </section>


<!--hasta aqui!-->
  </div>
</div>
@endsection
@section('scripts')

@endsection
