<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Cdp as Cdp;
//use App\Models\Area as Area;

class CdpController extends Controller {

	public function index()
	{
		$cdps = Cdp::all();
		return \View::make('cdp/list_cdp',compact('cdps'));
	}

	public function create()
	{
		//$area = ['area' => Area::lists('nombre','id')];
		return \View::make('cdp/new_cdp'/*,$area*/);
	}
	public function store(Request $request)
	{
		$cdp = new Cdp;
		$cdp->id_cdp = $request->id_cdp;
		$cdp->id_area = $request->id_area;
		$cdp->fechaExp = $request->fechaExp;
		$cdp->fechai = $request->fechai;
		$cdp->fechaf = $request->fechaf;
		$cdp->descripcion = $request->descripcion;
		$cdp->comprobante = $request->comprobante;
		$cdp->presupuesto = $request->presupuesto;
		$cdp->estado = $request->estado;
		$cdp->save();
		return redirect('cdp');
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		$cdp = Cdp::find($id);
		return \View::make('cdp/update_cdp',compact('cdp'));
	}
	public function update(Request $request)
	{
		$cdp=Cdp::find($request->id);
		$cdp->id_cdp = $request->id_cdp;
		$cdp->id_area = $request->id_area;
		$cdp->fechaExp = $request->fechaExp;
		$cdp->fechai = $request->fechai;
		$cdp->fechaf = $request->fechaf;
		$cdp->descripcion = $request->descripcion;
		$cdp->comprobante = $request->comprobante;
		$cdp->presupuesto = $request->presupuesto;
		$cdp->estado = $request->estado;
		$cdp->save();
		return redirect('cdp');
	}
	public function destroy($id)
	{
		$cdp=Cdp::find($id);
		$cdp->delete();
		return redirect()->back();
	}
	public function search(Request $request)
	{
		$cdps=Cdp::where('id_cdp','like','%'.$request->id_cdp.'%')->get();
		return \View::make('cdp/list_cdp',compact('cdps'));
	}

}
