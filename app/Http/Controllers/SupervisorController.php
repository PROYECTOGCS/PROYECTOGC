<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Supervisor as Supervisor;

class SupervisorController extends Controller {

	public function index()
	{
		$supervisores = Supervisor::all();
		return \View::make('supervisor/list_supervisor',compact('supervisores'));
	}
	public function create()
	{
		return \View::make('supervisor/new_supervisor');
	}

	
	public function store(Request $request)
	{
		$supervisor = new Supervisor;
		$supervisor->cedula = $request->cedula;
		$supervisor->nombre = $request->nombre;
		$supervisor->cargo = $request->cargo;
		$supervisor->estado = $request->estado;
		$supervisor->save();
		return redirect('supervisor');
	}

	
	public function show($id)
	{
		//
	}

	
	public function edit($id)
	{
		$supervisor = Supervisor::find($id);
		return \View::make('supervisor/update_supervisor',compact('supervisor'));
	}

	
	public function update(Request $request)
	{
		$supervisor=Supervisor::find($request->id);
		$supervisor->cedula = $request->cedula;
		$supervisor->nombre = $request->nombre;
		$supervisor->cargo = $request->cargo;
		$supervisor->estado = $request->estado;
		$supervisor->save();
		return redirect('supervisor');
	}

	
	public function destroy($id)
	{
		$supervisor=Supervisor::find($id);
		$supervisor->delete();
		return redirect()->back();
	}
	public function search(Request $request)
	{
		$supervisores=Supervisor::where('cedula','like','%'.$request->cedula.'%')->get();
		return \View::make('supervisor/list_supervisor',compact('supervisores'));

	}

}
