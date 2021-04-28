
<div class="header">
		<div class="container">
			<div class="logo">
				<a href="/"><span>Sell</span>padi</a>
				
			</div>
			
			<div class="header-right"  style="display:inline;">
				@auth
				<div>
					<a href="#"><span class="glyphicon glyphicon-user" style="margin-top: 20px; display:inline-block;"></span></a>
					<div class="dropdown" style=" display:inline-block; margin-top: 25px;">
						<button style="background-color: transparent; border:none;" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							
						<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="/profile">Profile</a></li>
						<li><a href="/settings">Settings</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="logout">Logout</a></li>
						</ul>
					</div>
				</div>
					{{-- {{Auth::user()->email}}. --}}
					{{-- <a class="account" style="background-color: transparent; color:black" href="logout">Logout</a> --}}
					{{-- <a class="account" href="{{ url('/') }}">Sell</a> --}}

				@else
				<div class="but">
					<a class="account-a" href="register">Sign Up</a>
					<a class="account" href="/signin">Login</a>
				</div>
					{{-- <a href="{{ route('login') }}">Login</a>

					@if (Route::has('register'))
						<a href="{{ route('register') }}">Register</a>
					@endif --}}
				@endauth				

		</div>
		</div>
	</div>
	@include('layouts.messages')
	<div class="main-banner banner text-center">
	  <div class="container">    
			<h1>Sell or Advertise <span class="segment-heading">anything online </span> with Sellpadi</h1><br>
			<div class="div-1" style="background-color: white; margin: auto; border-radius: 15px;">
				<form action="/search" method="post">
					@csrf

					<input class="inp" name="search" type="search" placeholder="Type your search here" style=" border: none; outline: none; background-color: transparent" >
					<button class="bt" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px;">Search</button>
				</form>
		</div><br>
		<a href="/post">Start Selling</a>
	  </div>
	</div>
	<!---728x90--->
