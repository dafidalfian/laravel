@extends('layout.main')
@section('title','Edit Data Sdutent')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-6">
				<h1 class="mt-3">Edit Data Student</h1>

				<form action="/student/{{$student->id}}" method="post">
					@method('patch')
					@csrf
				  <div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ $student->nama}}">
				  </div>
				  <div class="form-group">
				    <label for="nim">Nim</label>
				    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan Nim" value="{{$student->nim}}">
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="{{$student->email}}">
				  </div>
				  <div class="form-group">
					    <label for="pilihjurusan">Pilih Jurusan</label>
					    <select class="form-control" id="pilihjurusan" name="jurusan">
					      <option value="Pilih Jurusan"></option>
					      <option>Teknik Informatika</option>
					      <option>Teknik Industri</option>
					      <option>Managemen industri</option>
					      <option>Teknik Pertanian</option>
					    </select>
					  </div>
				  <button type="submit" name="" class="btn btn-primary">Edit Data !!</button>
				</form>
			</div>
		</div>
	</div>
@endsection