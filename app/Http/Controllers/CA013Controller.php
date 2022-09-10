<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clasificador;
use App\Models\CentroCosto;
use App\Models\CuentaContable;
use RealRashid\SweetAlert\Facades\Alert;
use phpDocumentor\Reflection\File;

class CA013Controller extends Controller
{
    //Métodos read o view

    public function clasificadorCategoria()
    {
        $clasif = Clasificador::where('Cf_Tipo', 'CA')->get();
        $centros = CentroCosto::all();
        $cuenta_contable = CuentaContable::all();
        return view ('categoria', compact('clasif', 'centros', 'cuenta_contable'));
    }

    public function clasificadorLinea()
    {
        $clasif = Clasificador::where('Cf_Tipo', 'LI')->get();
        $centros = CentroCosto::all();
        return view ('linea',compact('clasif', 'centros'));
    }

    public function clasificadorMarca()
    {
        $clasif = Clasificador::where('Cf_Tipo', 'MA')->get();
        $centros = CentroCosto::all();
        return view ('marca',compact('clasif', 'centros'));
    }

    public function clasificadorFamilia()
    {
        $clasif = Clasificador::where('Cf_Tipo', 'FM')->get();
        $centros = CentroCosto::all();
        return view ('familia',compact('clasif', 'centros'));
    }

    //Métodos create

    public function createCategoria(Request $request)
    {   
        $request -> validate(
            [
                'txt_cfdescripcion' => 'unique:App\Models\Clasificador,Cf_Descripcion',
            ]
        );
        
        $clasif = new Clasificador();

        if($request -> hasFile('sel_imagen'))
        {
            $imagen = $request -> file('sel_imagen');
            $destino = 'images/';
            $filename = date('YmdHis'). "." . $imagen->getClientOriginalName();
            $sucess = $request -> file('sel_imagen') -> move($destino, $filename);
            $clasif -> Cf_Imagen_Ruta = $filename;
        }       

        $clasif -> Cf_Tipo = $request -> txt_cftipo;
        $clasif -> Cf_Descripcion = $request -> txt_cfdescripcion;
        $clasif -> Cf_Cve_Clasificador = $request -> txt_cfclave;
        $clasif -> Usuario_Alta = $request -> txt_cfuseralta;
        $clasif -> Usuario_Editor = $request -> txt_cfuseredit;
        $clasif -> Id_Centro_Costo = $request -> select_idcentrocosto;
        $clasif -> Id_Cuenta_Contable = $request -> select_idcuentacontable;
        
        Alert::success('Registro Exitoso','Ha completado el proceso');

        $clasif ->save();

        return redirect()->route('categoria');
    }

    public function createLinea(Request $request)
    {
        $clasif = new Clasificador();

        $clasif -> Cf_Tipo = $request -> txt_cftipo;
        $clasif -> Cf_Descripcion = $request -> txt_cfdescripcion;
        $clasif -> Cf_Cve_Clasificador = $request -> txt_cfclave;
        $clasif -> Usuario_Alta = $request -> txt_cfuseralta;
        $clasif -> Usuario_Editor = $request -> txt_cfuseredit;
        $clasif -> Id_Centro_Costo = $request -> select_idcentrocosto;
        $clasif -> Id_Cuenta_Contable = $request -> select_idcuentacontable;

        $clasif ->save();

        return redirect()->route('linea');
    }

    public function createMarca(Request $request)
    {
        $clasif = new Clasificador();

        $clasif -> Cf_Tipo = $request -> txt_cftipo;
        $clasif -> Cf_Descripcion = $request -> txt_cfdescripcion;
        $clasif -> Cf_Cve_Clasificador = $request -> txt_cfclave;
        $clasif -> Usuario_Alta = $request -> txt_cfuseralta;
        $clasif -> Usuario_Editor = $request -> txt_cfuseredit;
        $clasif -> Id_Centro_Costo = $request -> select_idcentrocosto;
        $clasif -> Id_Cuenta_Contable = $request -> select_idcuentacontable;

        $clasif ->save();

        return redirect()->route('marca');
    }

    public function createFamilia(Request $request)
    {
        $clasif = new Clasificador();

        $clasif -> Cf_Tipo = $request -> txt_cftipo;
        $clasif -> Cf_Descripcion = $request -> txt_cfdescripcion;
        $clasif -> Cf_Cve_Clasificador = $request -> txt_cfclave;
        $clasif -> Usuario_Alta = $request -> txt_cfuseralta;
        $clasif -> Usuario_Editor = $request -> txt_cfuseredit;
        $clasif -> Id_Centro_Costo = $request -> select_idcentrocosto;
        $clasif -> Id_Cuenta_Contable = $request -> select_idcuentacontable;

        $clasif ->save();

        return redirect()->route('familia');
    }


    //Métodos update
    public function editCategoria(Request $request)
    {
        $clasif = Clasificador::find($request -> edt_id);

        $clasif -> Cf_Descripcion = $request -> edt_cfdescripcion;
        $clasif -> Cf_Cve_Clasificador = $request -> edt_cfclave;
        $clasif -> Usuario_Alta = $request -> edt_cfuseralta;
        $clasif -> Usuario_Editor = $request -> edt_cfuseredit;
        $clasif -> Id_Centro_Costo = $request -> select_idcentrocosto;
        $clasif -> Id_Cuenta_Contable = $request -> select_idcuentacontable;

        if($request -> hasFile('edt_imagen'))
        {
            $imagen = $request -> file('edt_imagen');
            $destino = 'images/';
            $filename = date('YmdHis'). "." . $imagen->getClientOriginalName();
            $sucess = $request -> file('edt_imagen') -> move($destino, $filename);
            $clasif -> Cf_Imagen_Ruta = $filename;   
        }  

        Alert::info('Registro Actualizado', 'Los cambios han sido guardados');

        $clasif ->save();

        return redirect()->route('categoria');
    }

    public function editLinea(Request $request)
    {
        $clasif = Clasificador::find($request -> edt_id);

        $clasif -> Cf_Descripcion = $request -> edt_cfdescripcion;
        $clasif -> Cf_Cve_Clasificador = $request -> edt_cfclave;
        $clasif -> Usuario_Alta = $request -> edt_cfuseralta;
        $clasif -> Usuario_Editor = $request -> edt_cfuseredit;
        $clasif -> Id_Centro_Costo = $request -> select_idcentrocosto;
        $clasif -> Id_Cuenta_Contable = $request -> select_idcuentacontable;

        $clasif ->save();

        return redirect()->route('linea');
    }

    public function editMarca(Request $request)
    {
        $clasif = Clasificador::find($request -> edt_id);

        $clasif -> Cf_Descripcion = $request -> edt_cfdescripcion;
        $clasif -> Cf_Cve_Clasificador = $request -> edt_cfclave;
        $clasif -> Usuario_Alta = $request -> edt_cfuseralta;
        $clasif -> Usuario_Editor = $request -> edt_cfuseredit;
        $clasif -> Id_Centro_Costo = $request -> select_idcentrocosto;
        $clasif -> Id_Cuenta_Contable = $request -> select_idcuentacontable;

        $clasif ->save();

        return redirect()->route('marca');
    }

    public function editFamilia(Request $request)
    {
        $clasif = Clasificador::find($request -> edt_id);

        $clasif -> Cf_Descripcion = $request -> edt_cfdescripcion;
        $clasif -> Cf_Cve_Clasificador = $request -> edt_cfclave;
        $clasif -> Usuario_Alta = $request -> edt_cfuseralta;
        $clasif -> Usuario_Editor = $request -> edt_cfuseredit;
        $clasif -> Id_Centro_Costo = $request -> select_idcentrocosto;
        $clasif -> Id_Cuenta_Contable = $request -> select_idcuentacontable;

        $clasif ->save();

        return redirect()->route('familia');
    }

    //Métodos baja
    public function bajaCategoria(Request $request, Clasificador $categoria)
    {
        $categoria = Clasificador::find($request -> del_id);

        $act_estatus = "BAJ";

        $fecha_baja = date('Y-m-d H:i:s');
        
        $categoria -> Usuario_Baja = $request -> txt_cfuserbaja;
        $categoria -> Id_Estatus = $act_estatus;
        $categoria -> Fecha_Baja = $fecha_baja;
        $categoria -> save();

        return redirect()->route('categoria');
    }

    public function bajaLinea(Request $request, Clasificador $categoria)
    {
        $linea = Clasificador::find($request -> del_id);

        $act_estatus = "BAJ";

        $fecha_baja = date('Y-m-d H:i:s');
        
        $linea -> Usuario_Baja = $request -> txt_cfuserbaja;
        $linea -> Id_Estatus = $act_estatus;
        $linea -> Fecha_Baja = $fecha_baja;
        $linea -> save();

        return redirect()->route('linea');
    }

    public function bajaMarca(Request $request, Clasificador $categoria)
    {
        $marca = Clasificador::find($request -> del_id);

        $act_estatus = "BAJ";

        $fecha_baja = date('Y-m-d H:i:s');
        
        $marca -> Usuario_Baja = $request -> txt_cfuserbaja;
        $marca -> Id_Estatus = $act_estatus;
        $marca -> Fecha_Baja = $fecha_baja;
        $marca -> save();

        return redirect()->route('marca');
    }

    public function bajaFamilia(Request $request, Clasificador $categoria)
    {
        $familia = Clasificador::find($request -> del_id);

        $act_estatus = "BAJ";

        $fecha_baja = date('Y-m-d H:i:s');
        
        $familia -> Usuario_Baja = $request -> txt_cfuserbaja;
        $familia -> Id_Estatus = $act_estatus;
        $familia -> Fecha_Baja = $fecha_baja;
        $familia -> save();

        return redirect()->route('familia');
    }
 
    //Métodos recover
    public function recoverCategoria(Request $request, Clasificador $categoria)
    {
        $categoria = Clasificador::find($request -> restore_id);

        $act_estatus = "ACT";

        $fecha_baja = null;

        $categoria -> Usuario_Baja = null;
        $categoria -> Id_Estatus = $act_estatus;
        $categoria -> Fecha_Baja = $fecha_baja;
        $categoria -> save();

        return redirect()->route('categoria');
    }

    public function recoverLinea(Request $request, Clasificador $linea)
    {
        $linea = Clasificador::find($request -> restore_id);

        $act_estatus = "ACT";

        $fecha_baja = null;

        $linea -> Usuario_Baja = null;
        $linea -> Id_Estatus = $act_estatus;
        $linea -> Fecha_Baja = $fecha_baja;
        $linea -> save();

        return redirect()->route('linea');
    }

    public function recoverMarca(Request $request, Clasificador $marca)
    {
        $marca = Clasificador::find($request -> restore_id);

        $act_estatus = "ACT";

        $fecha_baja = null;

        $marca -> Usuario_Baja = null;
        $marca -> Id_Estatus = $act_estatus;
        $marca -> Fecha_Baja = $fecha_baja;
        $marca -> save();

        return redirect()->route('linea');
    }

    public function recoverFamilia(Request $request, Clasificador $familia)
    {
        $familia = Clasificador::find($request -> restore_id);

        $act_estatus = "ACT";

        $fecha_baja = null;

        $familia -> Usuario_Baja = null;
        $familia -> Id_Estatus = $act_estatus;
        $familia -> Fecha_Baja = $fecha_baja;
        $familia -> save();

        return redirect()->route('linea');
    }

}
