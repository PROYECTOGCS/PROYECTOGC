<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Supervisor as Supervisor;

class SupervisorController extends Controller {

	public function index()
	{
		$supervisores = Supervisor::all();
		return \View::make('list_supervisor',compact('supervisores'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('new_supervisor');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
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

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$supervisor = Supervisor::find($id);
		return \View::make('update_supervisor',compact('supervisor'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
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

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$supervisor=Supervisor::find($id);
		$supervisor->delete();
		return redirect()->back();
	}
	public function search(Request $request)
	{
		$supervisores=Supervisor::where('cedula','like','%'.$request->cedula.'%')->get();
		return \View::make('list_supervisor',compact('supervisores'));

	}

}
