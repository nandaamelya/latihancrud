<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Siswa;

use Illuminate\Support\Facades\Input;

class SiswaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		//memanggil data di table siswa
		$datasiswa = Siswa::all();
		//menampilkan view siswa/all dengan data diatas
		return view('siswa.all')->withData($datasiswa);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response


	 */
	public function create()
	{
		return view('siswa.add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$save = new Siswa;
		$save->nama = Input::get('nama');
		$save->kelas = Input::get('kelas');
		$save->jurusan = Input::get('jurusan');
		$save->tempat_lahir = Input::get('tempat_lahir');
		$save->tanggal_lahir = date_format(date_create(
			Input::get('tanggal_lahir')),"Y-m-d");
		$save->save();

		return redirect(url('siswa'));
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
		$data = Siswa::find($id);
		return view('siswa/edit')->withData($data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$update = Siswa::find(Input::get('id'));
		$update->nama = Input::get('nama');
		$update->kelas = Input::get('kelas');
		$update->jurusan = Input::get('jurusan');
		$update->tempat_lahir = Input::get('tempat_lahir');
		$update->tanggal_lahir = date_format(date_create(
			Input::get('tanggal_lahir')),"Y-m-d");
		$update->save();

		return redirect(url('siswa'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	 Siswa::find($id)->delete();

	 return redirect(url('siswa'));
	}

}
