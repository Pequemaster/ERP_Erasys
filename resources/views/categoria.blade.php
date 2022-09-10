@extends('layout.plantilla')

@section('title', 'ERP Erasys')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Categorías</h1>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">CA013</li>
            </ol>
          </div>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!--Tabla-->
    <div class="card">
        <div class="card-header">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCat">Agregar Categoría</button>
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
            @foreach ($clasif as $categoria)
            <tr>
                <td>{{$categoria->Id_Clasificador}}</td>
                <td>{{$categoria->Cf_Descripcion}}</td>
                <td>{{$categoria->Cf_Cve_Clasificador}}</td>

                <td>
                    @if ($categoria->Id_Estatus == "ACT")
                        
                        <span class="badge bg-green"> {{$categoria->Id_Estatus}} </span> &nbsp;
                    @else
                        <span class="badge bg-red"> {{$categoria->Id_Estatus}} </span> &nbsp;
                    @endif
                    
                </td>

                @if ($categoria->Id_Estatus == "BAJ")
                <td>
                    <form action="{{route('recoverCategoria', $categoria)}}"method="POST"> @csrf @method('put')
                    <input type="hidden" name="restore_id" id="restore_id" class="form-control" value="{{$categoria->Id_Clasificador}}" min="1" maxlength="20" required>
                    <button style='font-size:13px;' type='button' class='btn btn-warning' data-toggle="modal" data-target="#modalEditCategoria{{$categoria->Id_Clasificador}}"><i class='fa fa-edit'></i></button>&nbsp;
                    <button style='font-size:13px;' type='submit' class='btn btn-info'><i class='fa fa-trash-restore'></i></button>&nbsp;
                    <button style='font-size:13px;' type='button' class='btn btn-success' data-toggle="modal" data-target="#modalShow{{$categoria->Id_Clasificador}}"><i class='fa fa-eye'></i></button>&nbsp;
                    </form>
                    
                </td>   
                @else 
                <td>
                    <button style='font-size:13px;' type='button' class='btn btn-warning' data-toggle="modal" data-target="#modalEditCategoria{{$categoria->Id_Clasificador}}"><i class='fa fa-edit'></i></button>&nbsp;
                    <button style='font-size:13px;' type='button' class='btn btn-danger' data-toggle="modal" data-target="#modalBajaCategoria{{$categoria->Id_Clasificador}}"><i class='fa fa-trash'></i></button>&nbsp;
                    <button style='font-size:13px;' type='button' class='btn btn-success' data-toggle="modal" data-target="#modalShow{{$categoria->Id_Clasificador}}"><i class='fa fa-eye'></i></button>
                </td>   
                @endif
            </tr>
                 
            <!-- Modal Show -->
            <div id="modalShow{{$categoria->Id_Clasificador}}" class="modal fade">
                <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title"> Categoría </h4>
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
                                <p>{{$categoria->Id_Clasificador}}</p>                          
                                </div>
                                <!-- /.form-group -->
                            </div>

                            <!--Tipo-->
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="clave"> Tipo Clasificador</label>
                                <p>{{$categoria->Cf_Tipo}}</p>                          
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!--Clave-->
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="clave"> Clave </label>
                                <p>{{$categoria->Cf_Cve_Clasificador}}</p>                          
                                </div>
                                <!-- /.form-group -->
                            </div>
    
                            <!--Descripción -->
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="nom"> Descripción </label>
                                <p>{{$categoria->Cf_Descripcion}}</p>
                                </div>
                            </div>
    
                            <!-- Imagen 
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="imagen"> Imagen </label>
                                <p>
                                    //<img src="" alt="" class="img-fluid" width="50px">
                                </p>
                                </div>
                            </div>-->

                            <!-- Estatus-->
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="imagen"> Estatus </label>
                                <p>
                                    @if ($categoria->Id_Estatus == "ACT")
                        
                                        <span class="badge bg-green"> {{$categoria->Id_Estatus}} </span> &nbsp;
                                    @else
                                        <span class="badge bg-red"> {{$categoria->Id_Estatus}} </span> &nbsp;
                                    @endif
                                </p>

                                </div>
                            </div>

                            @if ($categoria->Id_Estatus == "BAJ")
                                <!-- Fecha Alta -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Fecha de creación</label>
                                    <p>{{$categoria->Fecha_Alta}}</p>
                                    </div>
                                </div>

                                <!-- Usuario Alta -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Usuario Alta </label>
                                    <p>{{$categoria->Usuario_Alta}}</p>
                                    </div>
                                </div>

                                <!-- Fecha Editor -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Fecha de actualización </label>
                                    <p>{{$categoria->Fecha_Editor}}</p>
                                    </div>
                                </div>

                                <!-- Usuario editor -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Usuario Editor </label>
                                    <p>{{$categoria->Usuario_Editor}}</p>
                                    </div>
                                </div>

                                <!-- Fecha Baja-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Fecha de baja</label>
                                    <p>{{$categoria->Fecha_Baja}}</p>
                                    </div>
                                </div>

                                <!-- Usuario baja-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Usuario Editor </label>
                                    <p>{{$categoria->Usuario_Baja}}</p>
                                    </div>
                                </div>



                            @else
                                
                                <!-- Fecha Alta -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Fecha de creación</label>
                                    <p>{{$categoria->Fecha_Alta}}</p>
                                    </div>
                                </div>

                                <!-- Usuario Alta -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Usuario Alta </label>
                                    <p>{{$categoria->Usuario_Alta}}</p>
                                    </div>
                                </div>

                                <!-- Fecha Editor -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Fecha de actualización </label>
                                    <p>{{$categoria->Fecha_Editor}}</p>
                                    </div>
                                </div>

                                <!-- Usuario editor -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="imagen"> Usuario Editor </label>
                                    <p>{{$categoria->Usuario_Editor}}</p>
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

            <!-- Modal Edición Categoría-->
            <div id="modalEditCategoria{{$categoria->Id_Clasificador}}" class="modal fade" enctype="multipart/form-data">
                <form action="{{route('editCategoria', $categoria)}}" method="POST"> @csrf @method('put')
                <input type="hidden" name="edt_id" id="edt_id" class="form-control" value="{{$categoria->Id_Clasificador}}" min="1" maxlength="20" required>
                <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title"> Actualizar Categoría </h4>
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
                                <input type="text" name="edt_cfdescripcion" id="txt_cfdescripcion" value="{{$categoria->Cf_Descripcion}}"class="form-control" placeholder="Descripcion" min="1" maxlength="20" required>
                                </div>
                                <!-- /.form-group -->
                            </div>

                            <!--Clave Clasificador -->
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="nom"> Clave Clasificador </label>
                                <input type="text" name="edt_cfclave" id="txt_cfclave" value="{{$categoria->Cf_Cve_Clasificador}}" class="form-control" placeholder="Clave de Producto" min="1" maxlength="4">
                                </div>
                            </div>

                            <!--Centro de costo -->
                            <div class="col-md-6">
                                <label for="nom"> Centro de Costo </label>
                            </div>
                            
                            <div class="input-group mb-3">
                                <select name="select_idcentrocosto" id="select_idcentrocosto" class="form-control" placeholder="Clave de Producto">
                                    <option value="{{$categoria->Id_Centro_Costo}}"> {{$categoria->Id_Centro_Costo}} </option>
                                    @foreach ($centros as $centro)                                    
                                    <option value="{{$centro->Id_Centro_Costo}}"> {{$centro->Cs_Descripcion}} </option>
                                    @endforeach  
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
                                    <option value=""> {{$categoria->Id_Cuenta_Contable}}  </option>
                                    @foreach ($cuenta_contable as $cuenta)
                                    <option value="{{$cuenta->Id_Cuenta_Contable}}"> {{$cuenta->Cc_Cuenta_Contable}} - {{$cuenta->Cc_Descripcion}} </option>
                                    @endforeach  
                                </select>
                                <!--<span class="input-group-append">
                                <button type="button" class="btn btn-info btn-flat"><i class='fa fa-plus'></i></button>
                                </span>-->
                            </div>

                        <!-- Imagen -->
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="edt_imagen"> Imagen </label>
                            <input type="file" name="edt_imagen" id="edt_imagen">
                            </div>
                        </div>

                        <div class="col-md-6 form-group">     
                            <img id="imagen2" name="imagen2" class="max-height: 20px" width="60%">
                        </div>

                        <div class="col-md-6 form-group">     
                            <img src="images/{{$categoria->Cf_Imagen_Ruta}}" height="100" width="100">
                        </div>


                        </div>
                        <!-- /.card-body -->
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success"> Actualizar </button>
                    </div>
                </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            </form>
            
            <!-- Modal Baja Categoría-->
            <div id="modalBajaCategoria{{$categoria->Id_Clasificador}}" class="modal fade">
                <form action="{{route('bajaCategoria', $categoria)}}" method="POST"> @csrf @method('put')
                <input type="hidden" name="del_id" id="del_id" class="form-control" value="{{$categoria->Id_Clasificador}}" min="1" maxlength="20" required>

                <input type="hidden" name="txt_cfuserbaja" id="txt_cfuserbaja" class="form-control" value="Rogelio" min="1" maxlength="20" required>
                <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title"> Estatus Categoría </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <!-- Box General -->
                        <div class="card card-default">
                        <div class="card-header">
                            <h2 class="card-title"> ¿Realmente desea dar de baja la Categoría? </h2>

                            <!--User Alta -->
                            <input type="hidden" name="txt_cfuseralta" id="txt_cfuseralta" class="form-control" value="Luis" min="1" maxlength="20" required>
                            <input type="hidden" name="txt_cfuseredit" id="txt_cfuseredit" class="form-control" value="Luis" min="1" maxlength="20" required>
                        </div>

                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success"> Confirmar </button>
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

    <!-- Modal Registro Categoría-->
    <form action="{{route('createCategoria')}}" method="POST" enctype="multipart/form-data"> @csrf
        <div id="modalAgregarCat" class="modal fade">
            <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title"> Registrar Categoría </h4>
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
                        
                        <!-- Tipo (Predeterminado) -->
                        <input type="hidden" name="txt_cftipo" id="txt_cftipo" class="form-control" value="CA" min="1" maxlength="20" required>

                        <!--User Alta y Edit -->
                        <input type="hidden" name="txt_cfuseralta" id="txt_cfuseralta" class="form-control" value="Luis" min="1" maxlength="20" required>
                        <input type="hidden" name="txt_cfuseredit" id="txt_cfuseredit" class="form-control" value="Luis" min="1" maxlength="20" required>


                        <!-- Descripción -->
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="clave"> Descripción </label>
                            <input type="text" name="txt_cfdescripcion" class="form-control" placeholder="Descripcion" min="1" maxlength="20" required>
                            
                            @error('txt_cfdescripcion')
                                @php
                                    Alert::warning('Registro Duplicado','El registro ya existe en la base de datos');
                                @endphp
                            @enderror
                        </div>

                        </div>

                        <!--Clave Clasificador -->
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="nom"> Clave Clasificador </label>
                            <input type="text" name="txt_cfclave" id="txt_cfclave" class="form-control" placeholder="Clave de Producto" min="1" maxlength="4">
                            </div>
                        </div>

                        <!--Centro de costo -->
                        <div class="col-md-6">
                            <label for="nom"> Centro de Costo </label>
                        </div>

                        <div class="input-group mb-3">
                            <select name="select_idcentrocosto" id="select_idcentrocosto" class="form-control" placeholder="Clave de Producto">
                                @foreach ($centros as $centro)
                                <option value=""> </option>
                                <option value="{{$centro->Id_Centro_Costo}}"> {{$centro->Cs_Descripcion}} </option>
                                @endforeach   
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

                        <!-- Imagen -->
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="sel_imagen"> Imagen </label>
                            <input type="file" name="sel_imagen" id="sel_imagen" class="hidden">
                            </div>
                        </div>

                        <div>
                            <img id="imagen" class="max-height: 20px" width="60%">
                        </div>

                        </div>
                    </div>
                    <!-- /.card-body -->
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success"> Guardar </button>
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </form>     

@endsection