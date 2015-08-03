<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Clausula as Clausula;

class ClausulaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clausulas = Clausula::all();
		return \View::make('list_clausula',compact('clausulas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return \View::make('new_clausula');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$clausula = new Clausula;
		$clausula->formato = $request->formato;
		$clausula->estado = $request->estado;
		$clausula->save();
		return redirect('clausula');
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
		$clausula = Clausula::find($id);
		return \View::make('update_clausula',compact('clausula'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$clausula=Clausula::find($request->id);
		$clausula->formato = $request->formato;
		$clausula->estado = $request->estado;
		$clausula->save();
		return redirect('clausula');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$clausula=Clausula::find($id);
		$clausula->delete();
		return redirect()->back();
	}
	public function search(Request $request)
	{
		$clausulas=Clausula::where('formato','like','%'.$request->formato.'%')->get();
		return \View::make('list_clausula',compact('clausulas'));

	}
}
