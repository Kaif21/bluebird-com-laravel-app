@extends('master.website')
@section('body')
		<!-- Start My Account -->
		<div class="container my-5">
			<div class="row">
				<div class="col-md-6">
					<div class="login-form">
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
				<div class="col-md-6">
					<div class="register-form">
						<h3 class="billing-title text-center">Register</h3>
						<p class="text-center mt-40 mb-30">Create your very own account </p>
						<form action="{{route('customer.register')}}" method="post">
                            @csrf
							<input type="text" placeholder="Full name*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Full name*'" required class="common-input mt-20" name="name">
							<input type="email" placeholder="Email address*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email address*'" required class="common-input mt-20" name="email">
							<input type="number" placeholder="Phone number*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Phone number*'" required class="common-input mt-20" name="mobile">
							<input type="password" placeholder="Password*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Password*'" required class="common-input mt-20" name="password">
							<button class="view-btn color-2 mt-20 w-100" type="submit"><span>Register</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- End My Account -->


@endsection
