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

			<div class="col-sm-4">
				<div class="card">
					<div class="card-header indigo" style="color:#ffffff;">
						Tambah Data Yatim/Piatu
					</div>
					<div class="card-body">
						<form method="post" action="{{route('data.update',$datayatim)}}">
							@csrf
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control form-control-sm" id="nama" name="nama" value="{{$datayatim->nama}}">
							</div>
							<div class="form-group">
								<label for="tanggalLahir">Tanggal Lahir</label>
								<input type="text" class="form-control form-control-sm datepicker" id="tanggalLahir" name="tanggalLahir" value="{{$datayatim->tanggalLahir}}">
							</div>
							<div class="form-group">
								<label for="Alamat">Alamat</label>
								<input type="text" class="form-control form-control-sm" id="alamat" name="alamat" value="{{$datayatim->alamat}}">
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
		</div>
	</div>
@stop

@section('footer')

@stop