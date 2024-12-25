@extends('master.website')

@section('body')

		<!-- Start My Account -->
		<div class="container my-5">
			<div class="row">
				<div class="col-md-12">
					<div class="register-form">
						<h3 class="billing-title text-center">Login</h3>
						<p class="text-center mt-80 mb-40">Welcome back! Sign in to your account </p>
						<form action="{{route('customer.login')}}" method="post">
                            @csrf
							<input type="text" placeholder="Username or Email*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Username or Email*'" required class="common-input mt-20" name="email">
							<input type="password" placeholder="Password*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Password*'" required class="common-input mt-20" name="password">
							<button class="view-btn color-2 mt-20 w-100" type="submit"><span>Login</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- End My Account -->


@endsection
