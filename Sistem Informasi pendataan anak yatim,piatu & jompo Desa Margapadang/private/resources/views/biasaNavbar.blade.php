<nav class="navbar navbar-expand-lg navbar-dark indigo">
	<a class="navbar-brand" href="{{url('biasaHome')}}">
		<img src="{{asset('public/image/pokemon.png')}}" width="30" class="d-inline-block align-top" alt="">
		YatimQue Zheyeng
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="{{url('biasaHome')}}">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{url('biasaData')}}">Data</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{url('biasaUndangan')}}">Undangan</a>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right" data-toggle="modal" data-target="#modalLoginAvatar">
			<li class="nav-item">
				<a class="nav-link" href="#">
					<i style='font-size:18px' class="fa fa-unlock-alt" ></i>
					Login
				</a>
			</li>
		</ul>	
	</div>
</nav
<!--Modal: Login with Avatar Form-->
<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img src="{{asset('public/image/pokemon.png')}}" alt="avatar" class="rounded-circle img-responsive">
      </div>
      <!--Body-->
      <div class="modal-body text-center mb-1">

        <h5 class="mt-1 mb-2">Silahkan Login</h5>
		<form action="{{url('postlogin')}}" method="post">
			@csrf
			<div class="md-form ml-0 mr-0">
			  <input type="text" type="text" name="email"  id="email" class="form-control form-control-sm validate ml-0">
			  <label data-error="wrong" data-success="right" for="form29" class="ml-0">Username</label>
			</div>
			
			<div class="md-form ml-0 mr-0">
			  <input type="password" type="text" name="password" " id="password" class="form-control form-control-sm validate ml-0">
			  <label data-error="wrong" data-success="right" for="form29" class="ml-0">password</label>
			</div>

			<div class="text-center mt-4">
			  <button class="btn btn-dark-green mt-1">Login <i class="fas fa-sign-in ml-1"></i></button>
			</div>
		</form>
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login with Avatar Form-->