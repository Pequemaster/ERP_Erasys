@extends('layout.plantilla')

@section('title', 'ERP Erasys')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Centro de Costo </h1>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">CA039</li>
            </ol>
          </div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!--Tabla-->
    <div class="card">
        <div class="card-header">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregar">Agregar Centro de Costo</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Identificador</th>
              <th>Descripción</th>
              <th>Clave</th>
              <th>Estatus</th>
              <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($centros as $centro)
            <tr>
                <td>{{$centro->Id_Centro_Costo}}</td>
                <td>{{$centro->Cs_Descripcion}}</td>
                <td>{{$centro->Cs_Cve_Centro_Costo}}</td>

                <td>
                    @if ($centro->Id_Estatus == "ACT")
                        
                        <span class="badge bg-green"> {{$centro->Id_Estatus}} </span> &nbsp;
                    @else
                        <span class="badge bg-red"> {{$centro->Id_Estatus}} </span> &nbsp;
                    @endif
                    
                </td>

                @if ($centro->Id_Estatus == "BAJ")
                <td>
                    <form action="{{route('recoverCentroCosto', $centro)}}"method="POST"> @csrf @method('put')
                    <input type="hidden" name="restore_id" id="restore_id" class="form-control" value="{{$centro->Id_Centro_Costo}}" min="1" maxlength="20" required>
                    <button style='font-size:13px;' type='button' class='btn btn-success' data-toggle="modal" data-target="#modalShow{{$centro->Id_Centro_Costo}}"><i class='fa fa-eye'></i></button>&nbsp;
                    <button style='font-size:13px;' type='button' class='btn btn-warning' data-toggle="modal" data-target="#modalEditcentro{{$centro->Id_Centro_Costo}}"><i class='fa fa-edit'></i></button>&nbsp;
                    <button style='font-size:13px;' type='submit' class='btn btn-info'><i class='fa fa-trash-restore'></i></button>
                    </form>
                    
                </td>   
                @else 
                <td>
                    <button style='font-size:13px;' type='button' class='btn btn-success' data-toggle="modal" data-target="#modalShow{{$centro->Id_Centro_Costo}}"><i class='fa fa-eye'></i></button>&nbsp;
                    <button style='font-size:13px;' type='button' class='btn btn-warning' data-toggle="modal" data-target="#modalEditcentro{{$centro->Id_Centro_Costo}}"><i class='fa fa-edit'></i></button>&nbsp;
                    <button style='font-size:13px;' type='button' class='btn btn-danger' data-toggle="modal" data-target="#modalBajacentro{{$centro->Id_Centro_Costo}}"><i class='fa fa-trash'></i></button>
                </td>   
                @endif
              </tr>
                 
            <!-- Modal Show -->
            <div id="modalShow{{$centro->Id_Centro_Costo}}" class="modal fade">
                <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title"> Centro de Costo </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
    
                        <!-- Box General -->
                        <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"> Datos Generales </h3>
                        
                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                            <input type="hidden" id="shw_id" name="shwt_id" class="form-control" readonly required>
                            <!--ID-->
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="clave"> Identificador</label>
                                <p>{{$centro->Id_Centro_Costo}}</p>                          
                                </div>
                                <!-- /.form-group -->
                            </div>

                            <!--Clave-->
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="clave"> Clave </label>
                                <p>{{$centro->Cs_Cve_Centro_Costo}}</p>                          
                                </div>
                                <!-- /.form-group -->
                            </div>
    
                            <!--Descripción -->
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="nom"> Descripción </label>
                                <p>{{$centro->Cs_Descripcion}}</p>
                                </div>
                            </div>
    
                            <!-- Imagen -->
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="imagen"> Imagen </label>
                                <p>{{$centro->Cf_Imagen}}</p>
                                </div>
                            </div>

                            <!-- Estatus-->
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="imagen"> Estatus </label>
                                <p>
                                    @if ($centro->Id_Estatus == "ACT")
                        
                                        <span class="badge bg-green"> {{$centro->Id_Estatus}} </span> &nbsp;
                                    @else
                                        <span class="badge bg-red"> {{$centro->Id_Estatus}} </span> &nbsp;
                                    @endif
                                </p>

                                </div>
                            </div>

                            @if ($centro->Id_Estatus == "BAJ")
                                <!-- Fecha Alta -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Fecha de creación</label>
                                    <p>{{$centro->Fecha_Alta}}</p>
                                    </div>
                                </div>

                                <!-- Usuario Alta -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Usuario Alta </label>
                                    <p>{{$centro->Usuario_Alta}}</p>
                                    </div>
                                </div>

                                <!-- Fecha Editor -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Fecha de actualización </label>
                                    <p>{{$centro->Fecha_Editor}}</p>
                                    </div>
                                </div>

                                <!-- Usuario editor -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Usuario Editor </label>
                                    <p>{{$centro->Usuario_Editor}}</p>
                                    </div>
                                </div>

                                <!-- Fecha Baja-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Fecha de baja</label>
                                    <p>{{$centro->Fecha_Baja}}</p>
                                    </div>
                                </div>

                                <!-- Usuario baja-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Usuario Editor </label>
                                    <p>{{$centro->Usuario_Baja}}</p>
                                    </div>
                                </div>



                            @else
                                
                                <!-- Fecha Alta -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Fecha de creación</label>
                                    <p>{{$centro->Fecha_Alta}}</p>
                                    </div>
                                </div>

                                <!-- Usuario Alta -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Usuario Alta </label>
                                    <p>{{$centro->Usuario_Alta}}</p>
                                    </div>
                                </div>

                                <!-- Fecha Editor -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Fecha de actualización </label>
                                    <p>{{$centro->Fecha_Editor}}</p>
                                    </div>
                                </div>

                                <!-- Usuario editor -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Usuario Editor </label>
                                    <p>{{$centro->Usuario_Editor}}</p>
                                    </div>
                                </div>
                                
                            @endif

                            
                            </div>
                        </div>
                        <!-- /.card-body -->
                        </div>
    
                    </div>
                    <div class="modal-footer justify-content-between">

                    </div>
                </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            <!-- Modal Edición centro-->
            <div id="modalEditcentro{{$centro->Id_Centro_Costo}}" class="modal fade">
                <form action="{{route('editCentroCosto', $centro)}}" method="POST"> @csrf @method('put')
                <input type="hidden" name="edt_id" id="edt_id" class="form-control" value="{{$centro->Id_Centro_Costo}}" min="1" maxlength="20" required>
                <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title"> Actualizar Centro de Costo </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <!-- Box General -->
                        <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"> Datos Generales </h3>
                        
                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">

                            <!--User Alta -->
                            <input type="hidden" name="edt_cfuseralta" id="txt_cfuseralta" class="form-control" value="Luis" min="1" maxlength="20" required>
                            <input type="hidden" name="edt_cfuseredit" id="txt_cfuseredit" class="form-control" value="Luis" min="1" maxlength="20" required>


                            <!--Descripción -->
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="clave"> Descripción </label>
                                <input type="text" name="edt_cfdescripcion" id="txt_cfdescripcion" value="{{$centro->Cs_Descripcion}}"class="form-control" placeholder="Descripcion" min="1" maxlength="20" required>
                                </div>
                                <!-- /.form-group -->
                            </div>

                            <!--Clave Centro de Costo -->
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="nom"> Clave Centro de Costo</label>
                                <input type="text" name="edt_cfclave" id="txt_cfclave" value="{{$centro->Cs_Cve_Centro_Costo}}" class="form-control" placeholder="Clave de Producto" min="1" maxlength="4">
                                </div>
                            </div>

                            <!--Centro de costo -->
                            <div class="col-md-6">
                                <label for="nom"> Grupo de Costo</label>
                            </div>

                            <div class="input-group mb-3">
                                <select name="select_idcentrocosto" id="select_idcentrocosto" class="form-control" placeholder="Clave de Producto">
                                    <option value=""> Yucatán </option>
                                    <option value=""> Tabasco </option>
                                    <option value=""> Puebla </option>
                                    <option value=""> Veravruz </option>
                                </select>   
                                <!--<span class="input-group-append">
                                    <button type="button" class="btn btn-info btn-flat"><i class='fa fa-plus'></i></button>
                                </span> -->                    
                            </div>
                                
                                
                            

                            <!--Cuenta contable-->
                            <div class="col-md-6">
                                <label for="nom"> Cuenta Contable </label>
                            </div>

                            <div class="input-group mb-3">
                                <select name="select_idcuentacontable" id="select_idcuentacontable" class="form-control" placeholder="Clave de Producto" min="1" maxlength="4">
                                    <option value=""> Primaria </option>
                                    <option value=""> Secundaria </option>
                                    <option value=""> Capital </option>
                                    <option value=""> Fondo </option>
                                </select>
                                <!--<span class="input-group-append">
                                <button type="button" class="btn btn-info btn-flat"><i class='fa fa-plus'></i></button>
                                </span>-->
                            </div>


                            </div>
                        </div>
                        <!-- /.card-body -->
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success swalDefaultSuccess"> Actualizar </button>
                    </div>
                </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            </form>
            
            <!-- Modal Baja centro-->
            <div id="modalBajacentro{{$centro->Id_Centro_Costo}}" class="modal fade">
                <form action="{{route('bajaCentroCosto', $centro)}}" method="POST"> @csrf @method('put')
                <input type="hidden" name="del_id" id="del_id" class="form-control" value="{{$centro->Id_Centro_Costo}}" min="1" maxlength="20" required>

                <input type="hidden" name="txt_cfuserbaja" id="txt_cfuserbaja" class="form-control" value="Rogelio" min="1" maxlength="20" required>
                <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title"> Estatus Centro de Costo </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <!-- Box General -->
                        <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"> ¿Realmente desea dar de baja el Centro de Costo? </h3>
                        
                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">         

                            <!--User Alta -->
                            <input type="hidden" name="txt_cfuseralta" id="txt_cfuseralta" class="form-control" value="Luis" min="1" maxlength="20" required>
                            <input type="hidden" name="txt_cfuseredit" id="txt_cfuseredit" class="form-control" value="Luis" min="1" maxlength="20" required>



                            </div>
                        </div>
                        <!-- /.card-body -->
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success swalDefaultSuccess"> Confirmar </button>
                    </div>
                </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            </form>       
            @endforeach

            </tbody>

          </table>
        </div>
        <!-- /.card-body -->
    </div>

    <!-- Modal Registro centro-->
    <form action="{{route('createCentroCosto')}}" method="POST"> @csrf
        <div id="modalAgregar" class="modal fade">
            <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title"> Registrar Centro de Costo </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">

                    <!-- Box General -->
                    <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title"> Datos Generales </h3>
                    
                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">

                        <!--User Alta y Edit -->
                        <input type="hidden" name="txt_cfuseralta" id="txt_cfuseralta" class="form-control" value="Luis" min="1" maxlength="20" required>
                        <input type="hidden" name="txt_cfuseredit" id="txt_cfuseredit" class="form-control" value="Luis" min="1" maxlength="20" required>


                        <!-- Descripción -->
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="clave"> Descripción </label>
                            <input type="text" name="txt_cfdescripcion" id="txt_cfdescripcion" class="form-control" placeholder="Descripcion" min="1" maxlength="20" required>
                            </div>
                            
                        </div>

                        <!--Clave Centro de Costo -->
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="nom"> Clave Centro de Costo </label>
                            <input type="text" name="txt_cfclave" id="txt_cfclave" class="form-control" placeholder="Clave de Producto" min="1" maxlength="4">
                            </div>
                        </div>

                        <!--Centro de costo -->
                        <div class="col-md-6">
                            <label for="nom"> Grupo de Costo </label>
                        </div>

                        <div class="input-group mb-3">
                            <select name="select_idcentrocosto" id="select_idcentrocosto" class="form-control" placeholder="Clave de Producto">
                                <option value="">  </option>
                                <option value="">  </option>
                                <option value="">  </option>
                                <option value="">  </option>
                            </select>   
                            <span class="input-group-append">
                                <button type="button" class="btn btn-info btn-flat"><i class='fa fa-plus'></i></button>
                            </span>                     
                        </div>
                            
                        <!--Cuenta contable-->
                        <div class="col-md-6">
                            <label for="nom"> Cuenta Contable </label>
                        </div>

                        <div class="input-group mb-3">
                            <select name="select_idcuentacontable" id="select_idcuentacontable" class="form-control" placeholder="Clave de Producto" min="1" maxlength="4">
                                @foreach ($cuenta_contable as $cuenta)
                                <option value=""> </option>
                                <option value="{{$cuenta->Id_Cuenta_Contable}}"> {{$cuenta->Cc_Cuenta_Contable}} - {{$cuenta->Cc_Descripcion}} </option>
                                @endforeach  
                            </select>
                            <span class="input-group-append">
                              <button type="button" class="btn btn-info btn-flat"><i class='fa fa-plus'></i></button>
                            </span>
                        </div>

                        </div>
                    </div>
                    <!-- /.card-body -->
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success swalDefaultSuccess"> Guardar </button>
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </form> 
    

@endsection