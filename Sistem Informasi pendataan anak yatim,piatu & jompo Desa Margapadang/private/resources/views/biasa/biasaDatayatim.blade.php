@extends('biasaTemplate')

@section('main')
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">
				<div class="card">
					<ul class="list-group">
						<li class="list-group-item indigo" style="color:#ffffff;">Data</li>
						<a href="{{url('biasaData')}}" class="list-group-item list-group-item-action">
							<i class='fas fa-users'></i>
							Data Yatim & Piatu
						</a>
						<a href="{{url('biasaDatajompo')}}"href="" class="list-group-item list-group-item-action">
							<i class='fas fa-truck-moving'></i>
							Data Jompo
						</a>
					</ul>
				</div>			
			</div>
			<div class="col-sm-10">
				<div class="card">
					<div class="card-header indigo" style="color:#ffffff;">
						Data Yatim/Piatu
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover text-center databiasa">
							<thead>
								<tr>
									<th scope="col">Nama</th>
									<th scope="col">Tanggal Lahir</th>
									<th scope="col">Alamat</th>
									<th scope="col">Jenis Kelamin</th>
									<th scope="col"> Status </th>
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
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>				
			</div>
		</div>
	</div>
@stop

@section('footer')

@stop