@extends('app')

@section('content')

<span style="float:right;">
	<a class="btn btn-primary"
	href="{{ url('siswa/add') }}">Add New</a>
	</span>

	<table class="table">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Jurusan</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Action</th>
			</tr>
		</thead>

	<tbody>
		@foreach($data as $key)
		<tr>
			<td>{{$key->nama}}</td>
			<td>{{$key->kelas}}</td>
			<td>{{$key->jurusan}}</td>
			<td>{{$key->tempat_lahir}}</td>
			<td>{{$key->tanggal_lahir}}</td>
		<td>
		<a href="{{url('siswa/edit/'.$key->id)}}">Edit</a>
		<a onclick="return confirm('Hapus?')"
		href="{{url('siswa/delete/'.$key->id)}}">Delete</a>
		</td>
		</tr>
		@endforeach
	</tbody>
	</table>
	@endsection