<nav class="navbar navbar-expand-lg navbar-dark indigo">
	<a class="navbar-brand" href="#">
		<img src="{{asset('public/image/pokemon.png')}}" width="30" class="d-inline-block align-top" alt="">
		YatimQue Zheyeng
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="{{url('home')}}">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{url('data')}}">Data</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{url('undangan')}}">Undangan</a>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="nav-item">
				<a class="nav-link"  href="{{url('biasaHome')}}">
					<i style='font-size:18px' class="fa fa-unlock-alt"></i>
					Logout
				</a>
			</li>
		</ul>	
	</div>
</nav>