@extends('frontend.master')
@section('content')

	
	<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Your Shopping Cart </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container mt-5">
		
		<!-- Shopping Cart Div -->
		<div class="row mt-5 shoppingcart_div">
			<div class="col-12">
				<a href="{{ route('mainpage') }}" class="btn mainfullbtncolor btn-secondary float-right px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>
		</div>

		<div class="row mt-5 shoppingcart_div">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th colspan="3"> Product </th>
							<th colspan="3"> Qty </th>
							<th> Price </th>
							<th> Total </th>
						</tr>
					</thead>
					<tbody id="shoppingcart_table">
						
						
					</tbody>
				</table>
			</div>
		</div>

		<!-- No Shopping Cart Div -->
		<div class="row mt-5 noneshoppingcart_div text-center">
			
			
			<div class="col-12 mt-5 ">
				
				<div class="row">
					<div class="col-md-6">
						<textarea class="notes"  placeholder="Your Note Here!"></textarea>
					</div>
					<div class="col-md-6">
						@role('Customer')
						<a href="#" class="btn btn-info float-right buy_now">Checkout</a>
						@else
						<a href="{{route('loginpage')}}" class="btn btn-info float-right buy_now">Login To Checkout</a>
						@endrole
					</div>
				</div>

			</div>
			
			<div class="col-12">
				<h5 class="text-center"> There are no items in this cart </h5>
				<a href="{{route('shoppingcartpage')}}" class="btn btn-secondary mainfullbtncolor px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 

				</a>
			</div>

		

		</div>
	
</div>

	@endsection
	

	@section('totalqty')
		<i class="icofont-shopping-cart"></i> 
		<span class="badge badge-pill badge-light badge-notify cartNotistyle cartNoti" id="totalqty">0 </span>
	@endsection

	@section('totalprice')
	<span class="totalprice"> 0 </span>
	@endsection

	@section('script')
		<script src="{{asset('front/js/main.js')}}"></script>
		@endsection

	