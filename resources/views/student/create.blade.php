@extends('layout.main')
@section('title','Tambah Data Student')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-15">
				<h1 class="mt-3">Tambah Data Student</h1>

				<form method="post" action="/student">
					@csrf
				  <div class="form-group">
				    <label for="nama">Nama</label>
				    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama" value="{{old('nama')}}">
				    @error('nama')
				    	<div class="invalid-feedback">
				          {{$message}}
				        </div>
				     @enderror
				  </div>
				  <div class="form-group">
				    <label for="nim">nim</label>
				    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="Masukkan Nim" value="{{old('nim')}}">
				    @error('nim')
				    	<div class="invalid-feedback">
				    		{{ $message}}
        				</div>
        			@enderror
				  </div>
				  <div class="form-group">
				    <label for="email">email</label>
				    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="{{old('email')}}">
				  </div>
				  <div class="form-group">
					    <label for="pilihjurusan">Pilih Jurusan</label>
					    <select class="form-control" id="pilihjurusan" name="jurusan">
					      <option value="Pilih Jurusan"><?php echo 'Tidak bleh kosong';?></option>
					      <option>Teknik Informatika</option>
					      <option>Teknik Industri</option>
					      <option>Managemen industri</option>
					      <option>Teknik Pertanian</option>
					    </select>
					  </div>
				  <button type="submit" class="btn btn-primary">Tambah Data Student !</button>
				</form>
			</div>
		</div>
	</div>
@endsection