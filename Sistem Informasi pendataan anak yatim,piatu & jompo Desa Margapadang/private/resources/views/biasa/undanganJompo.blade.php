@extends('biasaTemplate')

@section('main')
	<br>
	<div class="container-fluid">
		<form name="bulk_action_form" action="" method="post">
		@csrf
		<div class="row">
			<div class="col-sm-2">
				<div class="card">
					<ul class="list-group">
						<li class="list-group-item indigo" style="color:#ffffff;">Cetak Undangan</li>
						<a href="{{url('biasaUndangan')}}" class="list-group-item list-group-item-action">
							<i class='fas fa-users'></i>
							Undangan Yatim & Piatu
						</a>
						<a href="{{url('undanganJompo')}}" class="list-group-item list-group-item-action">
							<i class='fas fa-truck-moving'></i>
							Undangan Jompo
						</a>
					</ul>
				</div>			
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header indigo" style="color:#ffffff;">
						Masukan Tempat dan Waktu Santunan Jompo
					</div>
					<div class="card-body">
						<div class="form-group row">
							<label for="tempat" class="col-sm-3">Tempat</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukan Tempat Santunan" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="tanggal" class="col-sm-3">Tanggal</label>
							<div class="col-sm-9">
								<input type="text" class="form-control datepicker" id="tanggal" name="tanggal" placeholder="Masukan Tanggal Santunan" readonly required>
							</div>
						</div>
						<div class="form-group row">
							<label for="jam" class="col-sm-3">Pukul</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="jam" name="jam" placeholder="Masukan Waktu Santunan" required>
							</div>
						</div>
					</div>
				</div>	
			</div>	
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header indigo" style="color:#ffffff;">
						Pilih Data Yang Akan Cetak Undangan Jompo
					</div>
					<div class="card-body">
						<table id="example" class="table table-bordered table-hover text-center display responsive nowrap databiasa" style="width:100%">
							<thead>
								<tr>
									<th><input type="checkbox" name="select_all" id="select_all" value=""/> Jangan / Pilih Semua</th>   
									<th> Nama </th>
								</tr>
							</thead>
							@foreach($datajompo as $datajompo)
							<tbody>
								<tr>
									<td><input type="checkbox" name="checked_id[]" class="checkbox" value="{{$datajompo->nama}}"/></td>        
									<td>{{$datajompo->nama}}</td>
								</tr> 
							</tbody>
							@endforeach
						</table>
							<!--<input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Cetak Undangan"/>-->
							<button type="submit" class="btn btn-indigo" name="bulk_delete_submit">Cetak Undangan</button>
					</div>
				</div>	
			</div>	
		</div>	
		</form>
	</div>
@stop

@section('footer')

@stop