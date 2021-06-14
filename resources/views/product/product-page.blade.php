@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/carusel/owl.carousel.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/carusel/style.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}" >
@endsection
@section('content')
	<section class="container-fluid pt-4 pb-4">
		<div class="row">
			Homepage > Jewelry > HandmadeName
		</div>
	</section>
	<section class="pb-5">
		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-6 col-md-10 col-sm-12 pl-0 pr-5 " id="img-cont">
					<div class=" pb-2">
						<div class="product-image-div">
							<span ><img src="{{ asset('assets/icons/icon-new-arrival1.png') }}"></span>
							<span class="pt-2"><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
							<img src="{{ asset('assets/images/andrijana1.png') }}">
						</div>
					</div>
					<div class="carusel-cont" id="product-carousel-cont">
						@include("carusel.carusel-for-product")
					</div>
				</div>

				<div class="col-lg-6 col-md-12 col-sm-12 text-strong pr-1 product-info">
					<h3 class="text-capitalize small-caps ">handmade name</h3>
					<div class="d-flex seller-name">
						<span class=""><a href="">Seller Name</a></span>
						<div class="ml-5 pl-2 pr-2 pb-0">
							<span class="pr-2"><img src="{{ asset('assets/icons/icon-letter.png') }}"></span>Contact Seller
						</div>
					</div>
					<div class="d-flex star-cont">
						<div class="mr-2"><img src="{{ asset('assets/icons/vector-star-product.png') }}"></div>
						<div class="mr-2"><img src="{{ asset('assets/icons/vector-star-product.png') }}"></div>
						<div class="mr-2"><img src="{{ asset('assets/icons/vector-star-product.png') }}"></div>
						<div class="mr-2"><img src="{{ asset('assets/icons/vector-star-tr-product.png') }}"></div>
						<div class="mr-2"><img src="{{ asset('assets/icons/vector-star-tr-product.png') }}"></div>
                        <div class="pt-1 text-strong">(48)</div>
					</div>
					<p class="font-size-19">12 328 sales</p>
					<p class="font-size-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
				    <p class="grey font-size-19"><s>$200</s> Original Price</p>
				    <p class="font-size-26 text-strong">$120</p>
				    <div class="product-feature pt-2">
				    	<div class="d-flex justify-content-between col-md-5 pl-0 pb-1">
				    		<label class="font-size-22">Size</label>
				    		<select >
				    			<option>Xs</option>
				    			<option>S</option>
				    			<option>M</option>
				    			<option>L</option>
				    			<option>XXL</option>
				    		</select>
				    	</div>
				    	<div class="d-flex justify-content-between col-md-5 pl-0 pb-1">
				    		<label class="font-size-22">Color</label>
				    		<select>
				    			<option>Blue</option>
				    			<option>White</option>
				    			<option>Orange</option>
				    			<option>Red</option>
				    		</select>
				    	</div>
				    	<div class="d-flex justify-content-between col-xl-7 col-lg-10 col-md-7 pl-0 quantity">
				    		<label class="font-size-22">Quantity</label>
				    		<div class="d-flex ">
					    		<input type="" name="">
					    		<div class="ml-3 pl-2 pt-2">Only 3 available</div>
				    	    </div>
				    	</div>
				    	<div class="button-cont pt-4 d-flex justify-content-between">
				    		<button class="font-size-26">Add to Cart</button>
				    		<button class="font-size-26">Buy Now</button>
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	</section>
	<section class="prd-detail">
		<div class="container-fluid pt-4 pb-4">
			<div class="row">
				<div class="col-lg-6 col-md-12 pl-0 pr-5">
					<div class="product-details-cont" id="product-details-cont1">
						<ul class="d-flex justify-content-between nav nav-tabs" id="product-details-ul" role="tablist">
							<li class="nav-item" role="presentation">
							    <a class="nav-link active text-strong" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Product Details</a>
							</li>
							<li class="nav-item" role="presentation">
							    <a class="nav-link text-strong" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Shipping & Payments</a>
							</li>
							<li class="nav-item" role="presentation">
							    <a class="nav-link text-strong" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Reviews</a>
							</li>
						</ul>
						<div class="tab-content" id="product-details-div">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essen
							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<div class="d-flex flex-wrap">
								    <div class="col-xl-6 col-lg-12">
								    	<div>Shipping</div>
								    	<div class="pt-3">
								    		<div>All Other countries</div>
								    		<div>First Items: $20.00</div>
								    		<div>Additional Items: $5.00</div>
								    	</div>
								    	<div class="pt-3">
								    		<div>Australia</div>
								    		<div>First Items: $20.00</div>
								    		<div>Additional Items: $5.00</div>
								    	</div>
								    	<div class="pt-3">
								    		<div>United Kingdom</div>
								    		<div>First Items: $20.00</div>
								    		<div>Additional Items: $5.00</div>
								    	</div>
								    	<div class="pt-3">
								    		<div>Canada</div>
								    		<div>First Items: $20.00</div>
								    		<div>Additional Items: $5.00</div>
								    	</div>
								    </div>
								    <div class="col-xl-6 col-lg-12 text-strong">
								    	<div>Accepted Payment Methods</div>
								    	<div class="d-flex pt-3">
								    		<div><img src="{{ asset('assets/images/cards/visa.png') }}"></div>
								    		<div><img src="{{ asset('assets/images/cards/MasterCard.png') }}"></div>
								    		<div><img src="{{ asset('assets/images/cards/paypal.png') }}"></div>
								    		<div><img src="{{ asset('assets/images/cards/visa.png') }}"></div>
								    		<div><img src="{{ asset('assets/images/cards/MasterCard.png') }}"></div>
								    	</div>
								    </div>
							    </div>
						    </div>
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							    <div class="col-md-12 pt-3 pb-2 pbrd-1">
							    	<p>Reviews (12)</p>
							    	<div class="d-flex justify-content-between align-items-center">
								    	<label><img src="{{ asset('assets/icons/user-icon.png') }}"></label>
								    	<input type="" name="" class="inp mr-2 ml-2">
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
							    <div class="col-md-12 pb-2 pt-5 pagination-cont">
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
					</div>

					<!-- ---------------------------for mobile------------------------------- -->
<div class="product-details-cont" id="product-details-cont2">
 <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header pl-2 pt-3 pr-0 pb-0 " id="headingOne">
        <div class="card-link text-strong " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Product Details
        </div>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essen
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header pl-2 pt-3 pr-0 pb-0" id="headingTwo">
        <div class="card-link text-strong collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Shipping & Payments
        </div>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
           <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<div class="d-flex flex-wrap">
								    <div class="col-md-6">
								    	<div>Shipping</div>
								    	<div class="pt-3">
								    		<div>All Other countries</div>
								    		<div>First Items: $20.00</div>
								    		<div>Additional Items: $5.00</div>
								    	</div>
								    	<div class="pt-3">
								    		<div>Australia</div>
								    		<div>First Items: $20.00</div>
								    		<div>Additional Items: $5.00</div>
								    	</div>
								    	<div class="pt-3">
								    		<div>United Kingdom</div>
								    		<div>First Items: $20.00</div>
								    		<div>Additional Items: $5.00</div>
								    	</div>
								    	<div class="pt-3">
								    		<div>Canada</div>
								    		<div>First Items: $20.00</div>
								    		<div>Additional Items: $5.00</div>
								    	</div>
								    </div>
								    <div class="col-md-6 text-strong">
								    	<div>Accepted Payment Methods</div>
								    	<div class="d-flex pt-3">
								    		<div><img src="{{ asset('assets/images/cards/visa.png') }}"></div>
								    		<div><img src="{{ asset('assets/images/cards/MasterCard.png') }}"></div>
								    		<div><img src="{{ asset('assets/images/cards/paypal.png') }}"></div>
								    		<div><img src="{{ asset('assets/images/cards/visa.png') }}"></div>
								    		<div><img src="{{ asset('assets/images/cards/MasterCard.png') }}"></div>
								    	</div>
								 </div>
						</div>
				</div>
        </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header pl-2 pt-3 pr-0 pb-0" id="headingThree">
        <div class="card-link text-strong collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Reviews
        </div>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							    <div class="col-md-12 pt-3 pb-2 pbrd-1">
							    	<p>Reviews (12)</p>
							    	<div class="d-flex justify-content-between align-items-center">
								    	<label><img src="{{ asset('assets/icons/user-icon.png') }}"></label>
								    	<input type="" name="" class="inp ml-2 mr-2">
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
							    <div class="col-md-12 pb-2 pt-5 pagination-cont">
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
    </div>
  </div>
</div>
					</div>
					<!-- ------------------finished mobile------------------------------------------ -->
				</div>
				<dir class="col-lg-6 col-md-12 more-store-cont" >
					<div class="font-size-22 text-strong more-store text-center">More from this Store</div>
					<div class="d-flex flex-wrap more-store-divs justify-content-center">
						<div>
							<div class="transparent-div">
								<div class="d-flex transparent-div ">
									<div class="d-flex align-items-center justify-content-center">
										<div><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></div>
										<div><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
									</div>
								</div>
							</div>
							<img src="{{ asset('assets/images/andrijana3.png') }}">
						</div>
						<div>
							<div class="transparent-div">
								<div class="d-flex transparent-div">
									<div class="d-flex align-items-center  justify-content-center">
										<div><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></div>
										<div><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
									</div>
								</div>
							</div>
							<img src="{{ asset('assets/images/andrijana2.png') }}">
						</div>
						<div>
							<div class="transparent-div">
								<div class="d-flex transparent-div">
									<div class="d-flex align-items-center justify-content-center">
										<div><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></div>
										<div><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
									</div>
								</div>
							</div>
							<img src="{{ asset('assets/images/andrijana1.png') }}">
						</div>
						<div>
							<div class="transparent-div">
								<div class="d-flex transparent-div">
									<div class="d-flex align-items-center justify-content-center">
										<div><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></div>
										<div><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
									</div>
								</div>
							</div>
							<img src="{{ asset('assets/images/ho3.png') }}">
						</div>
						<div>
							<div class="transparent-div">
								<div class="d-flex transparent-div">
									<div class="d-flex align-items-center justify-content-center">
										<div><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></div>
										<div><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
									</div>
								</div>
							</div>
							<img src="{{ asset('assets/images/andrijana3.png') }}">
						</div>
						<div>
							<div class="transparent-div">
								<div class="d-flex transparent-div">
									<div class="d-flex align-items-center justify-content-center">
										<div><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></div>
										<div><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
									</div>
								</div>
							</div>
							<img src="{{ asset('assets/images/andrijana2.png') }}">
						</div>
						<div>
							<div class="transparent-div">
								<div class="d-flex transparent-div">
									<div class="d-flex align-items-center justify-content-center">
										<div><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></div>
										<div><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
									</div>
								</div>
							</div>
							<img src="{{ asset('assets/images/andrijana1.png') }}">
						</div>
						<div>
							<div class="transparent-div">
								<div class="d-flex transparent-div">
									<div class="d-flex align-items-center justify-content-center">
										<div><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></div>
										<div><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
									</div>
								</div>
							</div>
							<img src="{{ asset('assets/images/ho3.png') }}">
						</div>
						<div>
							<div class="transparent-div">
								<div class="d-flex transparent-div">
									<div class="d-flex align-items-center justify-content-center">
										<div><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></div>
										<div><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
									</div>
								</div>
							</div>
							<img src="{{ asset('assets/images/andrijana3.png') }}">
						</div>
						<div>
							<div class="transparent-div">
								<div class="d-flex transparent-div">
									<div class="d-flex align-items-center justify-content-center">
										<div><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></div>
										<div><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
									</div>
								</div>
							</div>
							<img src="{{ asset('assets/images/andrijana2.png') }}">
						</div>
						<div>
							<div class="transparent-div">
								<div class="d-flex transparent-div ">
									<div class="d-flex align-items-center justify-content-center">
										<div><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></div>
										<div><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
									</div>
								</div>
							</div>
							<img src="{{ asset('assets/images/andrijana1.png') }}">
						</div>
						<div>
							<div class="transparent-div">
								<div class="d-flex transparent-div ">
									<div class="d-flex align-items-center justify-content-center">
										<div><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></div>
										<div><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
									</div>
								</div>
							</div>
							<img src="{{ asset('assets/images/ho3.png') }}">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/carusel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/carusel/main-for-product.js') }}"></script>
@endsection
    <script>
        $('.card-header').click(function(){
            $('.card-header').removeClass('mobile-active')
            $(this).addClass('mobile-active')
        })
    </script>

