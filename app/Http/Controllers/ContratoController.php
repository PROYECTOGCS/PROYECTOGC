<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Contrato as Contrato;


class ContratoController extends Controller {

	public function index()
	{
		$contratos = Contrato::all();
		return \View::make('contrato/list',compact('contratos'));
	}
	public function create()
	{
		return \View::make('contrato/new');
	}

	
	public function store(Request $request)
	{
		$contrato = new Contrato;
		$contrato->Codigo_Contrato = $request->Codigo_Contrato;
		$contrato->N_Aprovacion = $request->N_Aprovacion;
		$contrato->Fecha_Auto = $request->Fecha_Auto;
		$contrato->Comprobacion = $request->Comprobacion;
		$contrato->Fecha_Expedicion = $request->Fecha_Expedicion;
		$contrato->Fecha_Inicio = $request->Fecha_Inicio;
		$contrato->Fecha_Final = $request->Fecha_Final;
		$contrato->Descripcion_Contrato = $request->Descripcion_Contrato;
		$contrato->Dias_Trabajados = $request->Dias_Trabajados;
		$contrato->Meses_Trbajados = $request->Meses_Trbajados;
		$contrato->Valor_Mes = $request->Valor_Mes;
		$contrato->Archivo = $request->Archivo;
		$contrato->ID_modo = $request->ID_modo;
		$contrato->ID_Cargo = $request->ID_Cargo;
		$contrato->ID_CDP = $request->ID_CDP;
		$contrato->Estado = $request->Estado;
		$contrato->save();
		return redirect('contrato');
	}

	
	public function show($id)
	{
		//
	}

	
	public function edit($id)
	{
		$contrato = Contrato::find($id);
		return \View::make('contrato/update',compact('contrato'));
	}

	
	public function update(Request $request)
	{
		$contrato = new Contrato;
		$contrato->Codigo_Contrato = $request->Codigo_Contrato;
		$contrato->N_Aprovacion = $request->N_Aprovacion;
		$contrato->Fecha_Auto = $request->Fecha_Auto;
		$contrato->Comprobacion = $request->Comprobacion;
		$contrato->Fecha_Expedicion = $request->Fecha_Expedicion;
		$contrato->Fecha_Inicio = $request->Fecha_Inicio;
		$contrato->Fecha_Final = $request->Fecha_Final;
		$contrato->Descripcion_Contrato = $request->Descripcion_Contrato;
		$contrato->Dias_Trabajados = $request->Dias_Trabajados;
		$contrato->Meses_Trbajados = $request->Meses_Trbajados;
		$contrato->Valor_Mes = $request->Valor_Mes;
		$contrato->Archivo = $request->Archivo;
		$contrato->ID_modo = $request->ID_modo;
		$contrato->ID_Cargo = $request->ID_Cargo;
		$contrato->ID_CDP = $request->ID_CDP;
		$contrato->Estado = $request->Estado;
		$contrato->save();
		return redirect('contrato');
	}

	
	public function destroy($id)
	{
		$contrato=Contrato::find($id);
		$contrato->delete();
		return redirect()->back();
	}
	public function search(Request $request)
	{
		$contratos=Contrato::where('Codigo_Contrato','like','%'.$request->Codigo_Contrato.'%')->get();
		return \View::make('contrato/list',compact('contratos'));

	}

}
