@extends('layout.main')
@section('title','Daftar Student')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-4">
				<h1 class="mt-3">Daftar Students</h1>
				<a href="/student/create" class="btn btn-primary my-3">Tambah Data Student</a>
				
				@if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif

				<form class="form-inline my-2 my-lg-0" method="get" action="/student/cari">
			      <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    </form>

				<ul class="list-group">
					@foreach($student as $std)
				  <li class="list-group-item d-flex justify-content-between align-items-center">
				    {{$std->nama}}
				    <a href="/student/{{$std->id}}" class="badge badge-info">Detail</a>
				  </li>
				  @endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection