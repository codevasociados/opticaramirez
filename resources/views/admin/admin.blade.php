@extends('../layout')
@section('title')
  Modulo de administrador (Solo personal autorizado)- Optica Ramirez
@endsection
@section('css')
  {!! Html::style('dynatable/jquery.dynatable.css')!!}
    {!! Html::style('css/menuadmin.css')!!}
@endsection
@section('content')
<style media="screen">

</style>
<section style="background:#efefe9;">
        <div class="container">
            <div class="row">
                <div class="board">
                    <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                    <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#cliente" data-toggle="tab" title="clientes">
                      <span class="round-tabs one">
                        <p>  <i class="glyphicon glyphicon-user"></i> Clientes</p>

                      </span>
                  </a></li>

                  <li><a href="#venta" data-toggle="tab" title="ventas">
                     <span class="round-tabs two">
                        <p> <i class="glyphicon glyphicon-usd"></i>Ventas</p>
                     </span>
           </a>
                 </li>
                 <li><a href="#arreglos" data-toggle="tab" title="Arreglos">
                     <span class="round-tabs three">
                       <p> <i class="glyphicon glyphicon-th-large"></i>Arreglos</p>
                     </span> </a>
                     </li>

                     <li><a href="#personal" data-toggle="tab" title="Personal">
                         <span class="round-tabs four">
                          <p> <i class="glyphicon glyphicon-lock"></i>Personal</p>
                         </span>
                     </a></li>

                     <li><a href="#gastos" data-toggle="tab" title="Gastos">
                         <span class="round-tabs five">
                          <p><i class="glyphicon glyphicon-shopping-cart"></i>Gastos</p>
                         </span> </a>
                     </li>
                     <li><a href="#deudas" data-toggle="tab" title="Deudas">
                         <span class="round-tabs six">
                          <p><i class="glyphicon glyphicon-exclamation-sign"></i>Deudas</p>
                         </span> </a>
                     </li>
                     <li><a href="#eventos" data-toggle="tab" title="eventos">
                         <span class="round-tabs seven">
                          <p><i class="glyphicon glyphicon-calendar"></i>Eventos</p>
                         </span> </a>
                     </li>

                     </ul></div>

                     <div class="tab-content">
                      <div class="tab-pane fade in active" id="cliente">


                          <p class="narrow text-center">
                            <div class="panel">
                              <!--desde aqui el codigo de la tabla!-->
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modcliente">Registro</button>

                              <!-- Modal -->
                          <div id="modcliente" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Registro de clientes</h4>
                                </div>
                                <div class="modal-body">
                                  <form class="form-horizontal" role="form" method="POST" action="{{route('admin.storeclient')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                      <label name="nom_adm" for="nom_clie" class="col-lg-3 control-label">Nombre: </label>
                                      <div class="col-lg-8">
                                        <input type="text" class="form-control" id="nom_clie" name="nam_cli"
                                               placeholder="Nombre">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label name="pat_adm" for="pat_cli" class="col-lg-3 control-label">Paterno: </label>
                                      <div class="col-lg-8">
                                        <input type="text" class="form-control" id="pat_cli"  name="lpa_cli"
                                               placeholder="Paterno">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label name="mat_adm" for="mat_cli" class="col-lg-3 control-label">Materno: </label>
                                      <div class="col-lg-8">
                                        <input type="text" class="form-control" id="mat_cli"  name="lma_cli"
                                               placeholder="Materno">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label name="dir_adm" for="ci_cli" class="col-lg-3 control-label">Edad: </label>
                                      <div class="col-lg-8">
                                        <input type="text" class="form-control" id="ci_cli"  name="old_cli"
                                               placeholder="Edad">
                                      </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-xs-3 control-label">C.I.:</label>
                                        <div class="col-lg-5">
                                          <input type="text" class="form-control" id="tel_cli"  name="ci_cli"
                                                 placeholder="Cedula">
                                        </div>
                                        <div class="col-xs-2 selectContainer">
                                            <select class="form-control" name="size">
                                              <option value="LP">LP</option>
                                              <option value="OR">OR</option>
                                              <option value="PT">PT</option>
                                              <option value="CB">CB</option>
                                              <option value="CH">CH</option>
                                              <option value="TJ">TJ</option>
                                              <option value="BE">BE</option>
                                              <option value="PA">PA</option>
                                              <option value="SC">SC</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <label name="dir_adm" for="ci_cli" class="col-lg-3 control-label">Direccion: </label>
                                      <div class="col-lg-8">
                                        <input type="text" class="form-control" id="ci_clie"  name="add_cli"
                                               placeholder="Direccion">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label name="ci_adm" for="tel_cli" class="col-lg-3 control-label">Telefono: </label>
                                      <div class="col-lg-8">
                                        <input type="text" class="form-control" id="tel_cli"  name="pho_cli"
                                               placeholder="Telefono">
                                      </div>
                                    </div>


                                    <div class="center-block">
                                      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#cliente">Registrar</button>
                                    </div>
                                  </form>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>

                            </div>
                          </div>
                          <!--fin del Modal content-->
                          <!-- Modal -->
                          <div id="eliminaMod" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">ELIMINAR CLIENTE</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Esta seguro de eliminar al cliente?</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger">ELIMINAR</button>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>

                            </div>
                          </div
                          <!--fin del Modal content-->


                              <div class="table-responsive">
                                <table class="table" id="clients">
                                  <thead>
                                    <tr>
                                      <td>ID</td><td data-dynatable-column="nam_cli">NOMBRE</td>
                                      <td data-dynatable-column="lpa_cli">PATERNO</td>
                                      <td data-dynatable-column="lma_cli">MATERNO</td>
                                      <td data-dynatable-column="old_cli">DIRECCION</td>
                                      <td data-dynatable-column="ci_cli">C.I.</td>
                                      <td data-dynatable-column="add_cli">TELEFONO</td>
                                      <td data-dynatable-column="pho_cli">NIVEL</td>
                                      <td data-dynatable-column="boton">ELIMINAR</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>

                                <!--hasta aqui las tablas!-->
                            </div>

                            </p>

                          <p class="text-center">
                </p>
                      </div>
                      <div class="tab-pane fade" id="venta">
                          <p class="narrow text-center">
                            <div class="panel">
                              <!--desde aqui el codigo de la tabla!-->
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modsale">Registro</button>

                              <!-- Modal -->
                          <div id="modsale" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Registro de venta</h4>
                                </div>
                                <div class="modal-body">
                                  <form class="form-horizontal" role="form" method="POST" action="{{route('admin.storesale')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                      <label name="nom_adm" for="nom_clie" class="col-lg-4 control-label">Fecha venta: </label>
                                      <div class="col-lg-8">
                                        <input type="date" name="fec_sale">
                                      </div>
                                    </div>



                                    <div class="center-block">
                                      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#sale">Registrar</button>
                                    </div>
                                  </form>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>

                            </div>
                          </div>
                          <!--fin del Modal content-->
                          <!-- Modal -->
                          <div id="eliminaMod" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">ELIMINAR VENTA</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Esta seguro de eliminar la venta?</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger">ELIMINAR</button>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>

                            </div>
                          </div
                          <!--fin del Modal content-->
                              <div class="table-responsive">
                                <table class="table" id="sales">
                                  <thead>
                                    <tr>
                                      <td>ID</td><td data-dynatable-column="fec_sale">FECHA</td>


                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                                <!--hasta aqui las tablas!-->
                            </div>
                          </p>

                          <p class="text-center">
                </p>

                      </div>
                      <div class="tab-pane fade" id="arreglos">

                          <p class="narrow text-center">
                            <div class="panel">
                              <!--desde aqui el codigo de la tabla!-->
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modarray">Registro</button>

                              <!-- Modal -->
                          <div id="modarray" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Registro de arreglos</h4>
                                </div>
                                <div class="modal-body">
                                  <form class="form-horizontal" role="form" method="POST" action="{{route('admin.storearray')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                      <label name="nom_adm" for="nom_clie" class="col-lg-4 control-label">Fecha recibo: </label>
                                      <div class="col-lg-8">
                                        <input type="date" class="form-control" id="nom_clie" name="dat_rec">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label name="pat_adm" for="pat_cli" class="col-lg-4 control-label">Fecha entrega: </label>
                                      <div class="col-lg-8">
                                        <input type="date" class="form-control" id="pat_cli"  name="dat_ent">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Descripcion: </label>
                                      <div class="col-lg-8">
                                        <input type="text" class="form-control" id="mat_cli"  name="des_array"
                                               placeholder="descripcion">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Num bol: </label>
                                      <div class="col-lg-8">
                                        <input type="number" class="form-control" id="mat_cli"  name="num_bol"
                                               placeholder="num_bol">
                                      </div>
                                    </div>
                                    <div class="center-block">
                                      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#sale">Registrar</button>
                                    </div>
                                  </form>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>

                            </div>
                          </div>
                          <!--fin del Modal content-->
                          <!-- Modal -->
                          <div id="eliminaMod" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">ELIMINAR ARREGLO</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Esta seguro de eliminar el arreglo?</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger">ELIMINAR</button>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>

                            </div>
                          </div
                          <!--fin del Modal content-->
                              <div class="table-responsive">
                                <table class="table" id="array">
                                  <thead>
                                    <tr>
                                      <td>ID</td><td data-dynatable-column="dat_rec">DAT_REC</td>
                                      <td data-dynatable-column="dat_ent">FECHA ENTREGA</td>
                                      <td data-dynatable-column="des_array">DESCRIPCION</td>
                                      <td data-dynatable-column="num_bol">NUM BOL</td>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>

                                <!--hasta aqui las tablas!-->
                            </div>
                          </p>

                          <p class="text-center">
                </p>
                      </div>
                      <div class="tab-pane fade" id="personal">
                          <p class="narrow text-center">
                            <div class="panel">
                              <!--desde aqui el codigo de la tabla!-->
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#moduser">Registro</button>

                              <!-- Modal -->
                          <div id="moduser" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Registro de personal</h4>
                                </div>
                                <div class="modal-body">
                                  <form class="form-horizontal" role="form" method="POST" action="{{route('admin.storeuser')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                      <label name="nom_adm" for="nom_clie" class="col-lg-4 control-label">Nombre: </label>
                                      <div class="col-lg-8">
                                        <input type="text" class="form-control" id="nom_clie" name="nam_user"
                                               placeholder="nombre">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label name="pat_adm" for="pat_cli" class="col-lg-4 control-label">Paterno: </label>
                                      <div class="col-lg-8">
                                        <input type="text" class="form-control" id="pat_cli"  name="lpa_user"
                                               placeholder="paterno">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Materno: </label>
                                      <div class="col-lg-8">
                                        <input type="text" class="form-control" id="mat_cli"  name="lma_user"
                                               placeholder="Materno">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">C.I.: </label>
                                      <div class="col-lg-8">
                                        <input type="text" class="form-control" id="mat_cli"  name="ci_user"
                                               placeholder="Cedula">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Direccion: </label>
                                      <div class="col-lg-8">
                                        <input type="text" class="form-control" id="mat_cli"  name="add_user"
                                               placeholder="direccion">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Telefono: </label>
                                      <div class="col-lg-8">
                                        <input type="text" class="form-control" id="mat_cli"  name="pho_user"
                                               placeholder="telefono">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Alias: </label>
                                      <div class="col-lg-8">
                                        <input type="text" class="form-control" id="mat_cli"  name="nic_user"
                                               placeholder="alias">
                                      </div>
                                    </div>
                                    <div class="center-block">
                                      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#sale">Registrar</button>
                                    </div>
                                  </form>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>

                            </div>
                          </div>
                          <!--fin del Modal content-->
                          <!-- Modal -->
                          <div id="eliminaMod" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">ELIMINAR USUARIO</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Esta seguro de eliminar al usuario?</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger">ELIMINAR</button>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>

                            </div>
                          </div
                          <!--fin del Modal content-->
                              <div class="table-responsive">
                                <table class="table" id="users">
                                  <thead>
                                    <tr>
                                      <td>ID</td><td data-dynatable-column="nam_user">NOMBRE</td>
                                      <td data-dynatable-column="lpa_user">PATERNO</td>
                                      <td data-dynatable-column="lma_user">MATERNO</td>
                                      <td data-dynatable-column="ci_user">C.I.:</td>
                                      <td data-dynatable-column="add_user">DIRECCION:</td>
                                      <td data-dynatable-column="pho_user">TELEFONO:</td>
                                      <td data-dynatable-column="nic_user">NICK:</td>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>

                                <!--hasta aqui las tablas!-->
                            </div>
                          </p>

                          <p class="text-center">
                </p>
                      </div>
                      <div class="tab-pane fade" id="gastos">
                        <div class="text-center">
                          <i class="img-intro icon-checkmark-circle"></i>
                        </div>
                        <p class="narrow text-center">
                          <div class="panel">
                            <!--desde aqui el codigo de la tabla!-->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modexpense">Registro</button>

                                      <!-- Modal -->
                                  <div id="modexpense" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Registro de gasto</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form class="form-horizontal" role="form" method="POST" action="{{route('admin.storeexpense')}}">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                              <label name="nom_adm" for="nom_clie" class="col-lg-4 control-label">Descripcion: </label>
                                              <div class="col-lg-8">
                                                <input type="text" class="form-control" id="nom_clie" name="des_exp"
                                                       placeholder="descripcion">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label name="pat_adm" for="pat_cli" class="col-lg-4 control-label">Monto: </label>
                                              <div class="col-lg-8">
                                                <input type="text" class="form-control" id="pat_cli"  name="mon_exp"
                                                       placeholder="monto">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Fecha: </label>
                                              <div class="col-lg-8">
                                                <input type="date" class="form-control" id="mat_cli"  name="fec_exp">
                                              </div>
                                            </div>




                                            <div class="center-block">
                                              <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#expense">Registrar</button>
                                            </div>
                                          </form>

                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                  <!--fin del Modal content-->
                                  <!-- Modal -->
                                  <div id="eliminaMod" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">ELIMINAR GASTO</h4>
                                        </div>
                                        <div class="modal-body">
                                          <p>Esta seguro de eliminar el gastp?</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-danger">ELIMINAR</button>
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>

                                    </div>
                                  </div
                                  <!--fin del Modal content-->
                                      <div class="table-responsive">
                                        <table class="table" id="expenses">
                                          <thead>
                                            <tr>
                                              <td>ID</td><td data-dynatable-column="des_exp">DESCRIPCION</td>
                                              <td data-dynatable-column="mon_exp">MONTO</td>
                                              <td data-dynatable-column="fec_exp">FECHA</td>


                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                            </tr>
                                          </tbody>
                                        </table>
                                    </div>

                              <!--hasta aqui las tablas!-->
                          </div>
                      </p>
                      </div>

                  <div class="tab-pane fade" id="deudas">
                <div class="text-center">
                  <i class="img-intro icon-checkmark-circle"></i>
                  </div>
                  <p class="narrow text-center">
                    <div class="panel">
                      <!--desde aqui el codigo de la tabla!-->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#moddeb">Registro</button>

                                <!-- Modal -->
                            <div id="moddeb" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Registro de deudas</h4>
                                  </div>
                                  <div class="modal-body">
                                    <form class="form-horizontal" role="form" method="POST" action="{{route('admin.storedebt')}}">
                                      {{csrf_field()}}
                                      <div class="form-group">
                                        <label name="nom_adm" for="nom_clie" class="col-lg-4 control-label">Nombre: </label>
                                        <div class="col-lg-8">
                                          <input type="text" class="form-control" id="nom_clie" name="nom_deb"
                                                 placeholder="descripcion">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label name="pat_adm" for="pat_cli" class="col-lg-4 control-label">Con_deb: </label>
                                        <div class="col-lg-8">
                                          <input type="text" class="form-control" id="pat_cli"  name="con_deb"
                                                 placeholder="monto">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Monto: </label>
                                        <div class="col-lg-8">
                                          <input type="text" class="form-control" id="mat_cli"  name="mon_deb"
                                                 placeholder="fecha">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Fecha: </label>
                                        <div class="col-lg-8">
                                          <input type="date" class="form-control" id="mat_cli"  name="fec_deb">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Fin_deb: </label>
                                        <div class="col-lg-8">
                                          <input type="date" class="form-control" id="mat_cli"  name="fin_deb">
                                        </div>
                                      </div>


                                      <div class="center-block">
                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#expense">Registrar</button>
                                      </div>
                                    </form>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>

                              </div>
                            </div>
                            <!--fin del Modal content-->
                            <!-- Modal -->
                            <div id="eliminaMod" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">ELIMINAR GASTO</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Esta seguro de eliminar el gastp?</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger">ELIMINAR</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>

                              </div>
                            </div
                            <!--fin del Modal content-->
                                <div class="table-responsive">
                                  <table class="table" id="debts">
                                    <thead>
                                      <tr>
                                        <td>ID</td><td data-dynatable-column="nom_deb">NOMBRE</td>
                                        <td data-dynatable-column="con_deb">CON_DEB</td>
                                        <td data-dynatable-column="mon_deb">MONTO</td>
                                        <td data-dynatable-column="fec_deb">FECHA</td>
                                        <td data-dynatable-column="fin_deb">FIN_DEV</td>

                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                      </tr>
                                    </tbody>
                                  </table>
                              </div>

                        <!--hasta aqui las tablas!-->
                    </div>
                  </p>
                  </div>

              <div class="tab-pane fade" id="eventos">
                <div class="text-center">
                  <i class="img-intro icon-checkmark-circle"></i>
              </div>
              <p class="narrow text-center">
                <div class="panel">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modevent">Registro</button>

                            <!-- Modal -->
                        <div id="modevent" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Registro de evento</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal" role="form" method="POST" action="{{route('admin.storeevent')}}">
                                  {{csrf_field()}}
                                  <div class="form-group">
                                    <label name="nom_adm" for="nom_clie" class="col-lg-4 control-label">Titulo: </label>
                                    <div class="col-lg-8">
                                      <input type="text" class="form-control" id="nom_clie" name="title"
                                             placeholder="descripcion">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label name="pat_adm" for="pat_cli" class="col-lg-4 control-label">Tema: </label>
                                    <div class="col-lg-8">
                                      <input type="text" class="form-control" id="pat_cli"  name="body"
                                             placeholder="monto">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">URL: </label>
                                    <div class="col-lg-8">
                                      <input type="text" class="form-control" id="mat_cli"  name="url"
                                             placeholder="fecha">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Class: </label>
                                    <div class="col-lg-8">
                                      <input type="text" class="form-control" id="mat_cli"  name="class"
                                             placeholder="fecha">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Inicio: </label>
                                    <div class="col-lg-8">
                                      <input type="text" class="form-control" id="mat_cli"  name="start"
                                             placeholder="fecha">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Fin: </label>
                                    <div class="col-lg-8">
                                      <input type="text" class="form-control" id="mat_cli"  name="end"
                                             placeholder="fecha">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label name="mat_adm" for="mat_cli" class="col-lg-4 control-label">Color: </label>
                                    <div class="col-lg-8">
                                      <input type="text" class="form-control" id="mat_cli"  name="color"
                                             placeholder="fecha">
                                    </div>
                                  </div>
                                  <div class="center-block">
                                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#expense">Registrar</button>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>
                        <!--fin del Modal content-->
                        <!-- Modal -->
                        <div id="eliminaMod" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">ELIMINAR EVENTO</h4>
                              </div>
                              <div class="modal-body">
                                <p>Esta seguro de eliminar el evento?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger">ELIMINAR</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div
                        <!--fin del Modal content-->
                            <div class="table-responsive">
                              <table class="table" id="events">
                                <thead>
                                  <tr>
                                    <td>ID</td><td data-dynatable-column="title">TITULO</td>
                                    <td data-dynatable-column="body">TEMA</td>
                                    <td data-dynatable-column="url">URL</td>
                                    <td data-dynatable-column="class">CLASS</td>
                                    <td data-dynatable-column="start">INICIO</td>
                                    <td data-dynatable-column="end">FIN</td>
                                    <td data-dynatable-column="color">COLOR</td>

                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                  </tr>
                                </tbody>
                              </table>
                          </div>

                    <!--hasta aqui las tablas!-->
                </div>
              </p>
              </div>


                  <div class="clearfix"></div>
                  </div>

                  </div>
                  </div>
                  </div>
        </section>





@endsection
@section('scripts')
{!! Html::script('dynatable/jquery.dynatable.js')!!}
<script type="text/javascript">
    $(document).on('ready', function(){
      //var clientes
      var clients={!! json_encode($clients->toArray())!!};
      //var ventas
      var sales={!! json_encode($sales->toArray())!!};
      //var array
      var arrays={!! json_encode($arrays->toArray())!!};
      //var user
      var users={!! json_encode($users->toArray())!!};
      //var expense
      var expenses={!! json_encode($expenses->toArray())!!};
      //var debts
      var debts={!! json_encode($debts->toArray())!!};
      //var events
      var events={!! json_encode($events->toArray())!!};

      //for clientes
      for (var i = 0; i < clients.length; i++) {
        var a='{{route("admin.admin")}}';
        clients[i].boton='<a href="#" class="btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#eliminaMod" style="background-color:#ed1414; color: #fff;" href="'+a+'"><i class="glyphicon glyphicon-trash"></i></a>';
      }
      //for sales
      for (var i = 0; i < sales.length; i++) {
        var a='{{route("admin.admin")}}';
        sales[i].boton='<a href="#" class="btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#eliminaMod" style="background-color:#ed1414; color: #fff;" href="'+a+'"><i class="glyphicon glyphicon-trash"></i></a>';
      }
      //for array
      for (var i = 0; i < arrays.length; i++) {
        var a='{{route("admin.admin")}}';
        arrays[i].boton='<a href="#" class="btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#eliminaMod" style="background-color:#ed1414; color: #fff;" href="'+a+'"><i class="glyphicon glyphicon-trash"></i></a>';
      }
      //for user
      for (var i = 0; i < users.length; i++) {
        var a='{{route("admin.admin")}}';
        users[i].boton='<a href="#" class="btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#eliminaMod" style="background-color:#ed1414; color: #fff;" href="'+a+'"><i class="glyphicon glyphicon-trash"></i></a>';
      }
      //for expense
      for (var i = 0; i < expenses.length; i++) {
        var a='{{route("admin.admin")}}';
        expenses[i].boton='<a href="#" class="btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#eliminaMod" style="background-color:#ed1414; color: #fff;" href="'+a+'"><i class="glyphicon glyphicon-trash"></i></a>';
      }
      //for debts
      for (var i = 0; i < debts.length; i++) {
        var a='{{route("admin.admin")}}';
        debts[i].boton='<a href="#" class="btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#eliminaMod" style="background-color:#ed1414; color: #fff;" href="'+a+'"><i class="glyphicon glyphicon-trash"></i></a>';
      }
      //for events
      for (var i = 0; i < events.length; i++) {
        var a='{{route("admin.admin")}}';
        events[i].boton='<a href="#" class="btn btn-primary btn-lg active" role="button" data-toggle="modal" data-target="#eliminaMod" style="background-color:#ed1414; color: #fff;" href="'+a+'"><i class="glyphicon glyphicon-trash"></i></a>';
      }

      //console clientes
      console.log(clients);
      //console sales
      console.log(sales);
      //console array
      console.log(arrays);
      //console user
      console.log(users);
      //console expenses
      console.log(expenses);
      //console debts
      console.log(debts);
      //console events
      console.log(events);


      //dynatable clientes
      $('#clients').dynatable({
        dataset:{records:clients},
      });
      //dynatable sales
      $('#sales').dynatable({
        dataset:{records:sales},
      });
      //dynatable arrays
      $('#array').dynatable({
        dataset:{records:arrays},
      });
      //dynatable user
      $('#users').dynatable({
        dataset:{records:users},
      });
      //dynatable expenses
      $('#expenses').dynatable({
        dataset:{records:expenses},
      });
      //dynatable debts
      $('#debts').dynatable({
        dataset:{records:debts},
      });
      //dynatable events
      $('#events').dynatable({
        dataset:{records:events},
      });
    });
  </script>
<script type="text/javascript">
$(function(){
$('a[title]').tooltip();
});
</script>

@endsection
