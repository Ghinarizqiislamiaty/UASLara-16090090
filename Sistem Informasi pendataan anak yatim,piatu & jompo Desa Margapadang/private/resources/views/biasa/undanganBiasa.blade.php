@extends('biasaTemplate')

@section('main')
	<br>
	<div class="container-fluid">
		<form name="bulk_action_form" action="prosescetak.php" method="post" onSubmit="return delete_confirm();">
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header bg-info" style="color:#ffffff;">
						Data Cetak Undangan
					</div>
					<div class="card-body">

					</div>
				</div>	
			</div>	
			<div class="col-sm-8">
				<div class="card">
					<div class="card-header bg-info" style="color:#ffffff;">
						Data Cetak Undangan
					</div>
					<div class="card-body">

					</div>
				</div>	
			</div>	
		</div>	
		</form>
	</div>
@stop

@section('footer')

@stop