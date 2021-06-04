@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/carusel/owl.carousel.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/carusel/shop-3.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/shop/shop-third.css') }}" >
@endsection
@section('content')

	<section class="container-fluid container-mobile-menu chop-3-container">
       <div class="row">
       	  <div class="d-flex flex-wrap baner" style="background: url({{ asset('assets/images/baners/baner-1.png') }})">
       	  	 <div class=" d-flex flex-nowrap align-self-end justify-content-between baner-container w-100">
       	  	 	<div class="d-flex align-items-center anim-div ">
	       	  	 	<div class="slide-div-banner h-100 d-flex ">
		       	  	  <div class=" ml-3 mt-3 mr-3 h-100 align-self-stretch avatar-cont bd-highlight">
		       	  	  	  <div class="user-avatar-div" style="background: url({{ asset('assets/images/users-image/1.png') }}); background-size: cover;
		                           background-repeat: no-repeat"></div>
		       	  	  </div>
		       	  	  <div class="bd-highlight white-starts-cont ml-3 pr-2">
		       	  	  	  <div class=" text-white"><h5 class="text-strong">Store/Owner Name</h5></div>
		       	  	  	  <div class="d-flex flex-stars">
		       	  	  	  	  <div class="d-flex ">
		       	  	  	  		<span class="pr-2"><img src="{{ asset('assets/icons/white-star.png') }}"></span>
			   	  				<span class="pr-2"><img src="{{ asset('assets/icons/white-star.png') }}"></span>
			   	  				<span class="pr-2"><img src="{{ asset('assets/icons/white-star.png') }}"></span>
			   	  				<span class="pr-2"><img src="{{ asset('assets/icons/white-trs-star.png') }}"></span>
			   	  				<span class="pr-2"><img src="{{ asset('assets/icons/white-trs-star.png') }}"></span>
		       	  	  	  	  </div>
	                          <div class="pr-2 pl-2 bg-white contact-seller text-strong"><span class="pr-2"><img src="{{ asset('assets/icons/icon-letter.png') }}"></span>Contact <span class="hidden-span">Seller</span></div>
		       	  	  	  </div>
		       	  	  	  <div>
		       	  	  	  	 <p class="text-white pt-2 mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		       	  	  	  </div>
		       	  	  	  <div class="justify-content-between align-self-start bd-highlight description-left">
			       	  	  	 <div class="text-white">
			       	  	  	 	<p class="mb-0"><span>On Artstore:</span><span> since 2020</span></p>
			       	  	  	 	<p class="mb-0"><span>Location: </span><span>Armenia</span></p>
			       	  	  	 	<p class="mb-0"><span>Items Sold: </span><span>56</span></p>
			       	  	  	 </div>
		       	  	      </div>
		       	  	   </div>
		       	  	   <div class="d-flex align-items-center">
	                       <div class="caret caret-left"><div class="caret-left-dark"></div></div>
		       	  	   </div>
		       	  	  </div>
	                   <div class="caret caret-right start-anim"><div class="caret-right-dark"></div></div>
	       	  	  </div>
	       	  	  <div class="flex-column h-100 pr-3 align-items-end justify-content-end banner-right-div">
	       	  	  	   <div class="description-right justify-content-between align-self-end bd-highlight pt-2">
			       	  	  	 <div class="text-white">
			       	  	  	 	<p class="mb-0"><span>On Artstore:</span><span> since 2020</span></p>
			       	  	  	 	<p class="mb-0"><span>Location: </span><span>Armenia</span></p>
			       	  	  	 	<p class="mb-0"><span>Items Sold: </span><span>56</span></p>
			       	  	  	 </div>
		       	  	      </div>
	       	  	  	  <div class="pb-3 d-flex social-icons align-self-end justify-content-end">
	       	  	  	 	<div><a href="" class="text-white"><img src="{{ asset('assets/icons/share.png') }}" class="share"><span id="share">Share<span></a></div>
						<div class="linkdin ml-2 mr-2 "><a href="" class="bg-white"><img src="{{ asset('assets/icons/linkedin.png') }}"></a></div>
						<div class="instagram ml-2 mr-2 "><a href=""><img src="{{ asset('assets/icons/instagram.png') }}"></a></div>
						<div class="facebook ml-2 mr-2 "><a href=""><img src="{{ asset('assets/icons/footer-facebook.png') }}"></a></div>
					 </div>
	       	  	  </div>

       	  	  </div>
       	  	  <div class="w-100 shop-menu d-flex align-self-start justify-content-around">
       	  	  	   <div class="text-capitalize align-self-center pl-4 pr-4">Category</div>
       	  	  	   <div class="text-capitalize align-self-center pl-4 pr-4">Category</div>
       	  	  	   <div class="text-capitalize align-self-center pl-4 pr-4">Category</div>
       	  	  	   <div class="text-capitalize align-self-center pl-4 pr-4">Category</div>
       	  	  	   <div class="text-capitalize align-self-center pl-4 pr-4">Category</div>
       	  	  	   <div class="text-capitalize align-self-center pl-4 pr-4">Category</div>
       	  	  </div>
       	  </div>
       </div>
	</section>

	<section class="container-fluid">
		<div class="row">
			<div class="w-50 pt-4 ml-auto mr-auto shop-search-cont">
				<div class="input-group mb-4 shop-search">
                        <input type="text" class="form-control " id="shop-search-inp">
                        <div class="input-group-append pt-1 pb-1">
                            <span class="input-group-text mr-1" id="">
                            	<img src="{{ asset('assets/icons/vector-search.png') }}">
                            </span>
                        </div>
                 </div>
			</div>
		</div>
	</section>
<!-- -----------------------------section new-arrivals--------------------------------------------------- -->
        @include('shop.carousel-shop-third-arrivals')
        @include('shop.carousel-shop-third-hot')
        @include('shop.carousel-shop-third-bestsellers')
<!-- --------------------------------------sort by-------------------------------------- -->
	<section class="container-fluid soty-by mt-4 container-mobile-menu mb-5">
		<div class="row">
			<div class="w-100 d-flex text-right sort-and-filter">
				<div class="filter mt-2 ml-3 mb-3"><img src="{{ asset('assets/icons/icon-filter.png') }}"></div>
				<div class="w-25 mr-2 mt-2 mb-5 sort">
					<span class="text-strong mr-2">Sort By</span>
					<select class="sort-by-sel">
						<option>All</option>
						<option>New Arrivals</option>
						<option>Bestsellers</option>
						<option>Hot Offers</option>

					</select>
				</div>
			</div>
			<div class="d-flex flex-wrap sort-by-divs justify-content-center">
						<div class="br-1 pr-3 pl-3">
							<div class="transparent-bg-div d-flex" >
			   	  					<!-- <img src="" class="img-fluid ps-abs-image"> -->
			   	  					<div class="pordz" style='background: url({{ asset('assets/images/ts-product1.png') }}); background-size: cover'>
			   	  						<span class="mobile-favorites-heart"><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
			   	  					</div>
			   	  					<div class="width-inherit pl-0 pr-0 hover-icons d-flex align-items-center bd-highlight">
			   	  						<div class="w-100 div-icons d-flex justify-content-center align-self-center bd-highlight">
					   	  						<span class=""><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></span>
					   	  						<span class="ml-3 "><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
					   	  				</div>
			   	  					</div>
			   	  				</div>
		   	  				<div class="description">
		   	  					   <p class="mb-0 mt-1">Handmade Name</p>
		   	  					   <p class="mb-1">Product owner name</p>
		   	  						<div>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
                                        <span class="point">(48)</span>
		   	  						</div>
		   	  					    <div class="d-flex justify-content-between mt-2">
	                                    <div class="price">$120</div>
			   	  						<div class="add-cart mr-2">Add to cart</div>
		   	  				        </div>
		   	  				</div>
						</div>
						<div class="br-1 pr-3 pl-3">
							<div class="transparent-bg-div d-flex" >
			   	  					<div class="pordz" style='background: url({{ asset('assets/images/seller4.png') }}); background-size: cover'>
			   	  						<span class="mobile-favorites-heart"><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
			   	  					</div>
			   	  					<div class="width-inherit pl-0 pr-0 hover-icons d-flex align-items-center bd-highlight">
			   	  						<div class="w-100 div-icons d-flex justify-content-center align-self-center bd-highlight">
					   	  						<span class=""><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></span>
					   	  						<span class="ml-3 "><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
					   	  				</div>
			   	  					</div>
			   	  				</div>
		   	  				<div class="description">
		   	  					   <p class="mb-0 mt-1">Handmade Name</p>
		   	  					   <p class="mb-1">Product owner name</p>
		   	  						<div>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
                                        <span class="point">(48)</span>
		   	  						</div>
		   	  					    <div class="d-flex justify-content-between mt-2">
	                                    <div class="price">$120</div>
			   	  						<div class="add-cart mr-2">Add to cart</div>
		   	  				        </div>
		   	  				</div>
						</div>
						<div class="br-1 pr-3 pl-3">
							<div class="transparent-bg-div d-flex" >
			   	  					<div class="pordz" style='background: url({{ asset('assets/images/seller1.png') }}); background-size: cover'>
			   	  						<span class="mobile-favorites-heart"><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
			   	  					</div>
			   	  					<div class="width-inherit pl-0 pr-0 hover-icons d-flex align-items-center bd-highlight">
			   	  						<div class="w-100 div-icons d-flex justify-content-center align-self-center bd-highlight">
					   	  						<span class=""><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></span>
					   	  						<span class="ml-3 "><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
					   	  				</div>
			   	  					</div>
			   	  				</div>
		   	  				<div class="description">
		   	  					   <p class="mb-0 mt-1">Handmade Name</p>
		   	  					   <p class="mb-1">Product owner name</p>
		   	  						<div>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
                                        <span class="point">(48)</span>
		   	  						</div>
		   	  					    <div class="d-flex justify-content-between mt-2">
	                                    <div class="price">$120</div>
			   	  						<div class="add-cart mr-2">Add to cart</div>
		   	  				        </div>
		   	  				</div>
						</div>
						<div class="br-1 pr-3 pl-3">
							<div class="transparent-bg-div d-flex" >
			   	  					<!-- <img src="" class="img-fluid ps-abs-image"> -->
			   	  					<div class="pordz" style='background: url({{ asset('assets/images/seller2.png') }}); background-size: cover'>
			   	  						<span class="mobile-favorites-heart"><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
			   	  					</div>
			   	  					<div class="width-inherit pl-0 pr-0 hover-icons d-flex align-items-center bd-highlight">
			   	  						<div class="w-100 div-icons d-flex justify-content-center align-self-center bd-highlight">
					   	  						<span class=""><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></span>
					   	  						<span class="ml-3 "><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
					   	  				</div>
			   	  					</div>
			   	  				</div>
		   	  				<div class="description">
		   	  					   <p class="mb-0 mt-1">Handmade Name</p>
		   	  					   <p class="mb-1">Product owner name</p>
		   	  						<div>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
                                        <span class="point">(48)</span>
		   	  						</div>
		   	  					    <div class="d-flex justify-content-between mt-2">
	                                    <div class="price">$120</div>
			   	  						<div class="add-cart mr-2">Add to cart</div>
		   	  				        </div>
		   	  				</div>
						</div>
						<div class="br-1 pr-3 pl-3">
							<div class="transparent-bg-div d-flex" >
			   	  					<!-- <img src="" class="img-fluid ps-abs-image"> -->
			   	  					<div class="pordz" style='background: url({{ asset('assets/images/seller3.png') }}); background-size: cover'>
			   	  						<span class="mobile-favorites-heart"><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
			   	  					</div>
			   	  					<div class="width-inherit pl-0 pr-0 hover-icons d-flex align-items-center bd-highlight">
			   	  						<div class="w-100 div-icons d-flex justify-content-center align-self-center bd-highlight">
					   	  						<span class=""><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></span>
					   	  						<span class="ml-3 "><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
					   	  				</div>
			   	  					</div>
			   	  				</div>
		   	  				<div class="description">
		   	  					   <p class="mb-0 mt-1">Handmade Name</p>
		   	  					   <p class="mb-1">Product owner name</p>
		   	  						<div>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
                                        <span class="point">(48)</span>
		   	  						</div>
		   	  					    <div class="d-flex justify-content-between mt-2">
	                                    <div class="price">$120</div>
			   	  						<div class="add-cart mr-2">Add to cart</div>
		   	  				        </div>
		   	  				</div>
						</div>
						<div class="br-1 pr-3 pl-3">
							<div class="transparent-bg-div d-flex" >
			   	  					<div class="pordz" style='background: url({{ asset('assets/images/seller2.png') }}); background-size: cover'>
			   	  						<span class="mobile-favorites-heart"><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
			   	  					</div>
			   	  					<div class="width-inherit pl-0 pr-0 hover-icons d-flex align-items-center bd-highlight">
			   	  						<div class="w-100 div-icons d-flex justify-content-center align-self-center bd-highlight">
					   	  						<span class=""><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></span>
					   	  						<span class="ml-3 "><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
					   	  				</div>
			   	  					</div>
			   	  				</div>
		   	  				<div class="description">
		   	  					   <p class="mb-0 mt-1">Handmade Name</p>
		   	  					   <p class="mb-1">Product owner name</p>
		   	  						<div>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
                                        <span class="point">(48)</span>
		   	  						</div>
		   	  					    <div class="d-flex justify-content-between mt-2">
	                                    <div class="price">$120</div>
			   	  						<div class="add-cart mr-2">Add to cart</div>
		   	  				        </div>
		   	  				</div>
						</div>
						<div class="br-1 pr-3 pl-3">
							<div class="transparent-bg-div d-flex" >
			   	  					<div class="pordz" style='background: url({{ asset('assets/images/seller2.png') }}); background-size: cover'>
			   	  						<span class="mobile-favorites-heart"><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
			   	  					</div>
			   	  					<div class="width-inherit  pl-0 pr-0 hover-icons d-flex align-items-center bd-highlight">
			   	  						<div class="w-100 div-icons d-flex justify-content-center align-self-center bd-highlight">
					   	  						<span class=""><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></span>
					   	  						<span class="ml-3 "><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
					   	  				</div>
			   	  					</div>
			   	  				</div>
		   	  				<div class="description">
		   	  					   <p class="mb-0 mt-1">Handmade Name</p>
		   	  					   <p class="mb-1">Product owner name</p>
		   	  						<div>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
		   	  							<span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
                                        <span class="point">(48)</span>
		   	  						</div>
		   	  					    <div class="d-flex justify-content-between mt-2">
	                                    <div class="price">$120</div>
			   	  						<div class="add-cart mr-2">Add to cart</div>
		   	  				        </div>
		   	  				</div>
						</div>

					</div>

							    <!-- ---------------------pagination------------ -->
							    <div class="col-md-12 pb-2 pt-5 mb-5 mt-3 pagination-cont">
							    	<nav aria-label="Page navigation example mb-5">
									  <ul class="pagination">
									    <li class="page-item">
									      <a class="page-link" href="#" aria-label="Previous">
									        <span aria-hidden="true">&laquo;</span>
									      </a>
									    </li>
									    <li class="page-item"><a class="page-link" href="">1</a></li>
									    <li class="page-item"><a class="page-link" href="">2</a></li>
									    <li class="page-item"><a class="page-link" href="">3</a></li>
									    <li class="page-item">
									      <a class="page-link" href="#" aria-label="Next">
									        <span aria-hidden="true">&raquo;</span>
									      </a>
									    </li>
									  </ul>
								    </nav>
							    </div>
		</div>

	</section>

		<section class="container-fluid container-mobile-menu">
			<div class="row">
				    <div class="tab-pane pl-2 pr-2 " id="" role="tabpanel" aria-labelledby="contact-tab">
							    <div class="col-md-12 pt-3 pb-2 pbrd-1 text-center text-strong reviews">
							    	<p >Reviews (2)</p>
							    	<div class="d-flex justify-content-between align-items-center">
								    	<label><img src="{{ asset('assets/icons/user-icon.png') }}"></label>
								    	<input type="" name="" class="inp ml-2 mr-2 pl-2 pr-2">
								    	<div><img src="{{ asset('assets/icons/send-icon.png') }}"></div>
							        </div>
							    </div>
							    <div class="col-md-12 d-flex pb-2 pt-3 pbrd-1">
							    	<div><img src="{{ asset('assets/icons/user-icon.png') }}"></div>
							    	<div class="ml-3">
							    		<div class="d-flex user-name">
							    			<div class="text-strong">Name Surname</div>
							    			<div class="ml-4">12/02/2020</div>
							    		</div>
							    		<div class="d-flex reviews-star">
							    			<div><img src="{{ asset('assets/icons/vector-star.png') }}"></div>
							    			<div><img src="{{ asset('assets/icons/vector-star.png') }}"></div>
							    			<div><img src="{{ asset('assets/icons/vector-star.png') }}"></div>
							    			<div><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></div>
							    			<div><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></div>
							    		</div>
							    		<div class="font-size-14 pt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
							    	</div>
							    </div>
							    <div class="col-md-12 d-flex pb-2 pt-3 ">
							    	<div><img src="{{ asset('assets/icons/user-icon.png') }}"></div>
							    	<div class="ml-3">
							    		<div class="d-flex user-name">
							    			<div class="text-strong">Name Surname</div>
							    			<div class="ml-4">12/02/2020</div>
							    		</div>
							    		<div class="d-flex reviews-star">
							    			<div><img src="{{ asset('assets/icons/vector-star.png') }}"></div>
							    			<div><img src="{{ asset('assets/icons/vector-star.png') }}"></div>
							    			<div><img src="{{ asset('assets/icons/vector-star.png') }}"></div>
							    			<div><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></div>
							    			<div><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></div>
							    		</div>
							    		<div class="font-size-14 pt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
							    	</div>
							    </div>

							    <!-- ---------------------pagination------------ -->
							    <div class="col-md-12 pb-2 pt-5 mb-5 pagination-cont">
							    	<nav aria-label="Page navigation example">
									  <ul class="pagination">
									    <li class="page-item">
									      <a class="page-link" href="#" aria-label="Previous">
									        <span aria-hidden="true">&laquo;</span>
									      </a>
									    </li>
									    <li class="page-item"><a class="page-link" href="">1</a></li>
									    <li class="page-item"><a class="page-link" href="">2</a></li>
									    <li class="page-item"><a class="page-link" href="">3</a></li>
									    <li class="page-item">
									      <a class="page-link" href="#" aria-label="Next">
									        <span aria-hidden="true">&raquo;</span>
									      </a>
									    </li>
									  </ul>
								    </nav>
							    </div>

						   </div>
			</div>
	</section>
@endsection
@section('scripts')
    <script src="{{ asset('assets\js\carusel\owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets\js\carusel\main-shop-third.js') }}"></script>
@endsection
