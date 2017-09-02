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


                                <div class="table-responsive">
                <!-- Añadimos un botón para el diálogo modal -->
                <button type="button"
                        class="btn btn-lg btn-primary"
                        data-toggle="modal"
                        data-target="#myModal"
                        onclick="newCbLanguage()"
                        >NUEVO</button>

              </div>
              <table class="table table-striped">
                  <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>C.I.</th>
                                <th>COUNTRY CODE</th>
                                <th>IS BASE?</th>
                                <th>IS SYSTEM LANGUAGE?</th>
                                <th>ACCIONES</th>
                            </tr>
                            <button id="edit-language" name="edit-language" type="button"
                                                              class="btn btn-primary"
                                                              data-toggle="modal"
                                                              data-target="#myModal"
                                                              onclick="openCbLanguage('edit',
                                                                          )">
                                                          Editar</button>
                                                      <button id="see-language" name="see-language"type="button" class="btn btn-success"
                                                              data-toggle="modal"
                                                              data-target="#myModal"
                                                              onclick="openCbLanguage('see',
                                                                          )">
                                                          Ver</button>
                                                          <button id="delete-language-modal" name="delete-language-modal" type="button"
                                                                      class="btn btn-danger"
                                                                      data-toggle="modal"
                                                                      data-target="#myModalDelete"
                                                                      onclick="deleteCbLanguage">Eliminar</button>

                                                  </td>
                                                  </tr>

                                         </tbody>
                                      </table>
                                  </div>



                    </thead>

<!--parte de modal!-->

              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                           <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <h4 class="modal-title" id="myModalLabel">Formulario de cliente</h4>
                                   </div>
                                   <form role="form" name="formCbLanguage" method="post" action="index.php">
                                       <div class="modal-body">
                                           <div class="input-group">
                                               <label for="idlanguage">Nombres</label>
                                               <input type="text" class="form-control" id="idlanguage" name="idlanguage" placeholder="Nombres" >
                                               <small class="text-muted"></small>
                                           </div>
                                           <div class="input-group">
                                               <label for="namelanguage">Apellido Paterno</label>
                                               <input type="text" class="form-control" id="namelanguage" name="namelanguage" placeholder="Apellido Paterno" aria-describedby="sizing-addon2">
                                           </div>
                                           <div class="input-group">
                                               <label for="isactive">Apellido Materno</label>
                                               <input type="text" class="form-control" id="isactive" name="isactive" placeholder="Apellido Materno" aria-describedby="sizing-addon2">
                                               <small class="text-muted"></small>
                                           </div>
                                           <div class="input-group">
                                               <label for="languageiso">Iso</label>
                                               <input type="text" class="form-control" id="languageiso" name="languageiso" placeholder="Iso" aria-describedby="sizing-addon2">
                                           </div>
                                           <div class="input-group">
                                               <label for="countrycode">Código País</label>
                                               <input type="text" class="form-control" id="countrycode" name="countrycode" placeholder="Código País" aria-describedby="sizing-addon2">
                                           </div>
                                           <div class="input-group">
                                               <label for="isbaselanguage">Idioma base</label>
                                               <input type="text" class="form-control" id="isbaselanguage" name="isbaselanguage" placeholder="Es idioma base" aria-describedby="sizing-addon2">
                                               <small class="text-muted">Usa el valor Y si está activo y N en caso contrario</small>
                                           </div>
                                           <div class="input-group">
                                               <label for="issystemlanguage">Idioma sistema</label>
                                               <input type="text" class="form-control" id="issystemlanguage" name="issystemlanguage" placeholder="Es el idioma del sistema" aria-describedby="sizing-addon2">
                                               <small class="text-muted">Usa el valor Y si está activo y N en caso contrario</small>
                                           </div>
                                       </div>
                                       <div class="modal-footer">
                                           <button id="save-language" name="save-language" type="submit" class="btn btn-primary">Guardar</button>
                                           <button id="update-language" name="update-language" type="submit" class="btn btn-primary">Actualizar</button>
                                           <button id="cancel"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                       </div>

                                   </form>
                               </div><!-- /.modal-content -->
                           </div><!-- /.modal-dialog -->
                       </div><!-- /.modal -->

                       <!--modal de eliminar!-->

                       <div class="modal fade" id="myModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalDeleteLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalDeleteLabel">Eliminación de cliente</h4>
                            </div>
                            <form role="form" name="formDeleteCbLanguage" method="post" action="index.php">
                                <div class="modal-body">
                                        <div class="input-group">
                                            <label for="idlanguage">¿Se va a eliminar el registro del cliente seleccionado?</label>
                                        </div>
                                        <div class="input-group">
                                            <label for="idlanguage"></label>

                                        </div>
                                </div>
                                <div class="modal-footer">
                                        <button id="delete-language-select" name="delete-language-select" type="submit" class="btn btn-primary">Aceptar</button>
                                        <button id="cancel"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->




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
