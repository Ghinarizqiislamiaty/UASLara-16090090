@extends('homeTemplate')

@section('main')
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">
				<div class="card">
					<ul class="list-group">
						<li class="list-group-item indigo" style="color:#ffffff;">Data</li>
						<a href="{{url('data')}}" class="list-group-item list-group-item-action">
							<i class='fas fa-users'></i>
							Data Yatim & Piatu
						</a>
						<a href="{{url('datajompo')}}"href="" class="list-group-item list-group-item-action">
							<i class='fas fa-truck-moving'></i>
							Data Jompo
						</a>
					</ul>
				</div>			
			</div>
			<div class="col-sm-10">
				<div class="row">
					<div class="col-sm-4">
						<div class="card">
							<div class="card-header indigo " style="color:#ffffff;">
								Tambah Data Yatim/Piatu
							</div>
							<div class="card-body">
								<form method="post" action="{{route('data.input')}}">
									@csrf
									<div class="form-group">
										<label for="nama">Nama</label>
										<input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama">
									</div>
									<div class="form-group">
										<label for="tanggalLahir">Tanggal Lahir</label>
										<input type="text" class="form-control form-control-sm datepicker" id="tanggalLahir" name="tanggalLahir" placeholder="Tanggal Lahir" readonly>
									</div>
									<div class="form-group">
										<label for="Alamat">Alamat</label>
										<input type="text" class="form-control form-control-sm" id="alamat" name="alamat" placeholder="Alamat">
									</div>
									<div class="form-group">
										<label for="exampleFormControlSelect1">Jenis Kelamin</label>
										<select class="form-control form-control-sm" id="jenis_kelamin" name="jenis_kelamin">
											<option>-- Pilih Jenis Kelamin -- </option>
											<option value="laki-laki">Laki-Laki</option>
											<option value="perempuan">Perempuan</option>
										</select>
									</div>
									<div class="form-group">
										<label for="Status">Status</label>
										<select class="form-control form-control-sm" id="status" name="status">
											<option>-- Status --</option>
											<option value="yatim">Yatim</option>
											<option value="piatu">Piatu</option>
										</select>
									</div>
									<button type="submit" class="btn btn-indigo">Simpan</button>
								</form>
							</div>
						</div>			
					</div>		
					<div class="col-sm-8">
						<div class="card">
							<div class="card-header indigo" style="color:#ffffff;">
								Data Yatim/Piatu
							</div>
							<div class="card-body">
								@if(session('sukses'))
								<div class="alert alert-success" role="alert">
								{{session('sukses')}}
								</div>
								@endif
								<table class="table table-bordered table-hover text-center datayatim">
									<thead>
										<tr>
											<th scope="col">Nama</th>
											<th scope="col">Tanggal Lahir</th>
											<th scope="col">Alamat</th>
											<th scope="col">Jenis Kelamin</th>
											<th scope="col"> Status </th>
											<th scope="col"> Pilihan </th>
										</tr>
									</thead>
									<tbody>
										@foreach($datayatim as $datayatim)
										<tr>
											<th scope="row">{{$datayatim->nama}}</th>
											<td>{{$datayatim->tanggalLahir}}</td>
											<td>{{$datayatim->alamat}}</td>
											<td>{{$datayatim->jenis_kelamin}}</td>
											<td>{{$datayatim->status}}</td>
											<td>
												<a href="{{route('data.ubah', $datayatim)}}" class="btn btn-sm btn-dark-green">Edit</a>
												<a href="{{route('data.hapus', $datayatim)}}" class="btn btn-sm btn-danger">Hapus</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>			
					</div>			
				</div>			
			</div>
		</div>
	</div>
@stop

@section('footer')

@stop