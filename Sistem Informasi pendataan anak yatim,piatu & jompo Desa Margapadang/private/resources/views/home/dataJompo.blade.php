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
							<div class="card-header indigo" style="color:#ffffff;">
								Tambah Data Jompo
							</div>
							<div class="card-body">
								<form method="POST" action="{{route('jompo.masuk')}}">
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
										<select class="form-control form-control-sm" id="jenisKelamin" name="jenis_kelamin">
											<option value="">Pilih Jenis Kelamin</option>
											<option value="laki-laki">Laki-Laki</option>
											<option value="perempuan">Perempuan</option>
										</select>
									</div>
									<div class="form-group">
										<label for="Status">Status</label>
										<select class="form-control form-control-sm" id="status" name="status">
											<option value="">Pilih status</option>
											<option value="Jompo">Jompo</option>
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
								Data Jompo
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
										@foreach($datajompo as $datajompo)
										<tr>
											<th scope="row">{{$datajompo->nama}}</th>
											<td>{{$datajompo->tanggalLahir}}</td>
											<td>{{$datajompo->alamat}}</td>
											<td>{{$datajompo->jenis_kelamin}}</td>
											<td>{{$datajompo->status}}</td>
											<td>
												<a href="{{route('jompo.edit',$datajompo)}}" class="btn btn-sm btn-dark-green">Edit</a>
												<a href="{{route('jompo.hapus', $datajompo)}}" class="btn btn-sm btn-danger">Hapus</a>
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