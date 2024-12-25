			<!-- Start Header Area -->
			<header class="default-header-color">
                <div class="menutop-wrap">
					<div class="menu-top container">
						<div class="d-flex justify-content-end align-items-center ">
							<ul class="list">
                                @if (Session::get('customer_id'))
                                <div class="top-end">

                                    <ul class="user-login">
                                        <li class="user">
                                            <i class="lni lni-user"></i>
                                            Hello, {{(Session::get('customer_name'))}}
                                        </l>
                                        <li>
                                            <a href="{{route('customer.logout')}}">Logout</a>
                                        </li>
                                        <li>
                                            <a href="">Dashboard</a>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <div class="top-end">
                                    <ul class="user-login">
                                        <li>
                                            <a href="{{route('customer.login-page')}}">Sign In</a>
                                        </li>
                                        <li>
                                            <a href="{{route('customer.register-page')}}">Register</a>
                                        </li>
                                    </ul>
                                </div>
                            @endif

							</ul>
						</div>
				</div>
            </div>
				<nav class="navbar navbar-expand-lg default-header-color py-4">
					<div class="container">
						  <a class="navbar-brand" href="#">
						  	<img src="{{asset('/')}}website/assets/img/logo.png" alt="">
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>
						  <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav text-white">
								<li><a class="text-white" href="{{ route('website.home') }}">Home</a></li>
								<li><div class="dropdown rounded-4">
                                        <a class="text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Category
                                        </a>
                                        <ul class="sub-category dropdown-menu rounded-1">
                                            @foreach ($categories as $category)
                                                <li><a class="dropdown-item" href="{{ route('website.product-category', ['id' => $category->id]) }}">{{ $category->name }}<i
                                                            class="lni lni-chevron-right"></i></a>
                                                    <ul class="inner-sub-category">
                                                        @foreach ($category->subCategory as $subcategory)
                                                            <li class="dropdown-item"><a
                                                                    href="{{ route('website.product-subcategory', ['id' => $subcategory->id]) }}">{{ $subcategory->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endforeach
                                        </ul>
                                      </div></li>
                                <li>
                                    <div class="dropdown rounded-4">
                                        <ul class="shopping-list dropdown-menu rounded-1">
                                            @php($sum = 0)
                                            @foreach (Cart::content() as $cartItem)
                                                <li class="dropdown-item">
                                                    <div class=" card border-0">
                                                        <div class="row">
                                                          <div  class="col-12">
                                                            <img
                                                            src="{{asset($cartItem->options->image)}}"
                                                            alt="">
                                                            <div class="card-body">
                                                                <h4><a href="{{ route('website.cart.index') }}
                                                                    ">{{ $cartItem->name }}</a></h4>
                                                                <p class="quantity">{{ $cartItem->qty }}x - <span
                                                                        class="amount">{{ $cartItem->price * $cartItem->qty }}Tk</span>
                                                                </p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                </li>
                                                @php($sum = $sum + $cartItem->qty * $cartItem->price)
                                            @endforeach
                                        </ul>
                                        <span class="position-relative">
                                            <a class="" href="{{ route('website.cart.index') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-cart-shopping fa-2x text-white"></i>
                                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                    <span>{{ count(Cart::content()) }}</span>
                                                </span>
                                            </a>

                                        </span>
                                    </div>

                                </li>

						    </ul>
						  </div>
					</div>
				</nav>
			</header>
			<!-- End Header Area -->

