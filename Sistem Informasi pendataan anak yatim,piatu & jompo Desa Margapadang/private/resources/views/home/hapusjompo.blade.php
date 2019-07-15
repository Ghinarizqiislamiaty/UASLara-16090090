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
				<div class="card text-center">
					<div class="card-header indigo" style="color:#ffffff;">
						Hapus Data Jompo
					</div>
					<div class="card-body">
						<form action="{{route('jompo.destroy',$datajompo)}}" method="post" >
							@csrf
							<div class="card col-sm-5 ">
								<div class="card-body">
									<h5 class="card-title">Hapus Data Jompo.?</h5>
									<table class="table table-hover">
										<thead>
											<tr>
												<th  class="">Nama </th>
												<th> : </th>
												<td class=""> {{$datajompo->nama}}</td>
											</tr>
											</tr>
												<th  class=" ">Tanggal Lahir </th>
												<th> : </th>
												<td class=" "> {{$datajompo->tanggalLahir}}</td>
											</tr>
											<tr>
												<th  class=" ">Alamat </th>
												<th>  : </th>
												<td class=" "> {{$datajompo->alamat}}</td>
											</tr>
											<tr>
												<th  class=" ">Jenis Kelamin </th>
												<th> : </th>
												<td class=" "> {{$datajompo->jenis_kelamin}}</td>
											</tr>
											<tr>
												<th  class=" "> Status </th>
												<th> : </th>
												<td class=" ">{{$datajompo->status}} </td>
											</tr>
										</thead>
									</table>
									<hr>							
									<a href="{{url('data')}}" class="btn btn-outline-warning">Batal</a>
									<button type="submit" class="btn btn-outline-danger">Hapus</button>
								</div>
							</div>			
						</form>
					</div>
				</div>			
			</div>
		</div>
	</div>
@stop

@section('footer')

@stop