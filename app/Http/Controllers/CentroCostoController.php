<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CentroCosto;
use App\Models\CuentaContable;

class CentroCostoController extends Controller
{
    //
    public function viewCentroCosto()
    {
        $centros = CentroCosto::all();
        $cuenta_contable = CuentaContable::all();
        return view ('centroCosto', compact('centros', 'cuenta_contable'));
    }

    public function createCentroCosto(Request $request)
    {
        $centro = new CentroCosto();

        $centro -> Cs_Cve_Centro_Costo = $request -> txt_cfclave;
        $centro -> Cs_Descripcion = $request -> txt_cfdescripcion;
        $centro -> Usuario_Alta = $request -> txt_cfuseralta;
        $centro -> Usuario_Editor = $request -> txt_cfuseredit;
        $centro -> Id_Grupo = $request -> select_idcentrocosto;
        $centro -> Id_Cuenta_Contable = $request -> select_idcuentacontable;

        $centro ->save();

        return redirect()->route('viewCentroCosto');

    }

    public function editCentroCosto()
    {
        
    }

    public function bajaCentroCosto()
    {
        
    }

    public function recoverCentroCosto()
    {
        
    }
}
