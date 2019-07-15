@extends('biasaTemplate')

@section('main')
	<br>
	<div class="container-fluid">
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="row">
			@foreach($undanganjompo as $undanganjompo)
				<div class="col-sm-6">
					<div style="padding:0px 0px 15px 0px;">
						<div class="card border-success mb-3">
							<div class="card-header card-title text-center">
								<img src="{{asset('public/image/nu.png')}}" style="height:40px"/> 
									 Undangan Santunan  
								<img src="{{asset('public/image/nu.png')}}" style="height:40px"/> 
							</div>
							<div class="card-body">
								<h5 class="card-title text-center">Jompo</h5>
								<table>
									<tr>
										<td><h4> Tanggal </h4></td>
										<td> <h4> : </h4></td>
										<td><h4> {{$undanganjompo->tanggal}} </h4></td>
									</tr>
									<tr>
										<td><h4> Pukul </h4></td>
										<td><h4> : </h4></td>
										<td><h4> {{$undanganjompo->jam}} WIB </h4></td>
									</tr>
									<tr>
										<td><h4> Tempat </h4></td>
										<td><h4> : </h4></td>
										<td><h4> {{$undanganjompo->tempat}} </h4></td>
									</tr>
									<tr>
										<td><h4>Yang Diundang </h4></td>
										<td><h4> : </h4></td>
										<td><h4> {{$undanganjompo->peserta}} </h4></td>
									</tr>
								</table>
							</div>
						</div>	
					</div>				
				</div>				
			@endforeach
		</div>
		<br>
	</div>
	<script>
		window.print();
	</script>
@stop

@section('footer')

@stop