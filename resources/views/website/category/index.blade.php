@extends('master.website')

@section('body')

         <!-- Start Banner Area -->
         <section class="banner-area organic-breadcrumb m-0 ">
            <div class="container">
                <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                    <div class="col-first">
                        <h1>Shop Category page</h1>
                         <nav class="d-flex align-items-center justify-content-start">
                            <a href="index-2.html">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            <a href="category.html">Fashon Category</a>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center">
                        <a href="#" class="grid-btn active"><i class="fa fa-th" aria-hidden="true"></i></a>
                        <a href="#" class="list-btn"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                        <div class="sorting">
                            <select>
                                <option value="1">Default sorting</option>
                                <option value="1">Default sorting</option>
                                <option value="1">Default sorting</option>
                            </select>
                        </div>
                        <div class="sorting mr-auto">
                            <select>
                                <option value="1">Show 12</option>
                                <option value="1">Show 12</option>
                                <option value="1">Show 12</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Filter Bar -->
                    <!-- Start Best Seller -->
                    <section class="lattest-product-area pb-40 category-list">
                        <div class="row">

                            @foreach($products as $product)

                            <div class="col-md-4">
                                <div class="card">
                                    <img src="{{asset($product->image)}}" class="card-img-top" width="300" height="200" alt="...">
                                    <div class="card-body">
                                        <div class="desc">
                                            <a class="title" href="{{route('website.product-detail',['id'=>$product->id])}}">{{$product->name}}</a>
                                            <div class="price"><span class="lnr lnr-tag"></span>Tk:{{$product->selling_price}}</div>
                                        </div></div>
                                  </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    <!-- End Best Seller -->
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center">
                        <div class="sorting mr-auto">
                            <select>
                                <option value="1">Show 12</option>
                                <option value="1">Show 12</option>
                                <option value="1">Show 12</option>
                            </select>
                        </div>
                        <div class="pagination">
                            <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                            <a href="#">6</a>
                            <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- End Filter Bar -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="sidebar-categories">
                        <div class="head">Browse Categories</div>
                        <ul class="main-categories">
                            @foreach ($categories as $category)
                            <li class="main-nav-list"><a  href="{{ route('website.product-category', ['id' => $category->id]) }}" ><span class="lnr lnr-arrow-right"></span>{{ $category->name }}</span></a>
                                <ul class="collapse" id="fruitsVegetable"  >
                                    @foreach ($category->subCategory as $subcategory)
                                    <li class="main-nav-list child"><a
                                        href="{{ route('website.product-subcategory', ['id' => $subcategory->id]) }}">{{ $subcategory->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach

                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-filter mt-50">
                        <div class="top-filter-head">Product Filters</div>
                        <div class="common-filter">
                            <div class="head">Active Filters</div>
                            <ul>
                                <li class="filter-list"><i class="fa fa-window-close" aria-hidden="true"></i>Gionee (29)</li>
                                <li class="filter-list"><i class="fa fa-window-close" aria-hidden="true"></i>Black with red (09)</li>
                            </ul>
                        </div>
                        <div class="common-filter">
                            <div class="head">Brands</div>
                            <form action="#">
                                <ul>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Apple<span>(29)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
                                </ul>
                            </form>
                        </div>
                        <div class="common-filter">
                            <div class="head">Color</div>
                            <form action="#">
                                <ul>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black Leather<span>(29)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black with red<span>(19)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
                                </ul>
                            </form>
                        </div>
                        <div class="common-filter">
                            <div class="head">Price</div>
                            <div class="price-range-area">
                                <div id="price-range"></div>
                                <div class="value-wrapper d-flex">
                                    <div class="price">Price:</div>
                                    <span>$</span><div id="lower-value"></div> <div class="to">to</div>
                                    <span>$</span><div id="upper-value"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




@endsection
