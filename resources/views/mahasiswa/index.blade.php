@extends('layout.main')
@section('title','Daftar Mahasiswa')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<h1 class="mt-3">Daftar Mahasiswa</h1>

				<form class="form-inline my-2 my-lg-0" method="get" action="/mahasiswa/cari">
			      <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
			      <button name="keyword" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    </form>

				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nama</th>
							<th scope="col">Nim</th>
							<th scope="col">Email</th>
							<th scope="col">Jrusan</th>
						</tr>
					</thead>
					<tbody>
						@foreach($mahasiswa as $mhs)
						<tr>
							<th scope="row">{{ $loop->iteration}}</th>
							<td>{{$mhs->nama}}</td>
							<td>{{$mhs->nim}}</td>
							<td>{{$mhs->email}}</td>
							<td>{{$mhs->jurusan}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

	</div>
@endsection